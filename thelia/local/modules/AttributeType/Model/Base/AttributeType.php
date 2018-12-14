<?php

namespace AttributeType\Model\Base;

use \DateTime;
use \Exception;
use \PDO;
use AttributeType\Model\AttributeAttributeType as ChildAttributeAttributeType;
use AttributeType\Model\AttributeAttributeTypeQuery as ChildAttributeAttributeTypeQuery;
use AttributeType\Model\AttributeType as ChildAttributeType;
use AttributeType\Model\AttributeTypeI18n as ChildAttributeTypeI18n;
use AttributeType\Model\AttributeTypeI18nQuery as ChildAttributeTypeI18nQuery;
use AttributeType\Model\AttributeTypeQuery as ChildAttributeTypeQuery;
use AttributeType\Model\Map\AttributeTypeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;
use Symfony\Component\Validator\ConstraintValidatorFactory;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\DefaultTranslator;
use Symfony\Component\Validator\Validator;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Mapping\ClassMetadataFactory;
use Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader;

abstract class AttributeType implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\AttributeType\\Model\\Map\\AttributeTypeTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the slug field.
     * @var        string
     */
    protected $slug;

    /**
     * The value for the has_attribute_av_value field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $has_attribute_av_value;

    /**
     * The value for the is_multilingual_attribute_av_value field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_multilingual_attribute_av_value;

    /**
     * The value for the pattern field.
     * @var        string
     */
    protected $pattern;

    /**
     * The value for the css_class field.
     * @var        string
     */
    protected $css_class;

    /**
     * The value for the input_type field.
     * @var        string
     */
    protected $input_type;

    /**
     * The value for the max field.
     * @var        double
     */
    protected $max;

    /**
     * The value for the min field.
     * @var        double
     */
    protected $min;

    /**
     * The value for the step field.
     * @var        double
     */
    protected $step;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * @var        ObjectCollection|ChildAttributeAttributeType[] Collection to store aggregation of ChildAttributeAttributeType objects.
     */
    protected $collAttributeAttributeTypes;
    protected $collAttributeAttributeTypesPartial;

    /**
     * @var        ObjectCollection|ChildAttributeTypeI18n[] Collection to store aggregation of ChildAttributeTypeI18n objects.
     */
    protected $collAttributeTypeI18ns;
    protected $collAttributeTypeI18nsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    // i18n behavior

    /**
     * Current locale
     * @var        string
     */
    protected $currentLocale = 'en_US';

    /**
     * Current translation objects
     * @var        array[ChildAttributeTypeI18n]
     */
    protected $currentTranslations;

    // validate behavior

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * ConstraintViolationList object
     *
     * @see     http://api.symfony.com/2.0/Symfony/Component/Validator/ConstraintViolationList.html
     * @var     ConstraintViolationList
     */
    protected $validationFailures;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection
     */
    protected $attributeAttributeTypesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection
     */
    protected $attributeTypeI18nsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->has_attribute_av_value = 0;
        $this->is_multilingual_attribute_av_value = 0;
    }

    /**
     * Initializes internal state of AttributeType\Model\Base\AttributeType object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (Boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (Boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>AttributeType</code> instance.  If
     * <code>obj</code> is an instance of <code>AttributeType</code>, delegates to
     * <code>equals(AttributeType)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        $thisclazz = get_class($this);
        if (!is_object($obj) || !($obj instanceof $thisclazz)) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey()
            || null === $obj->getPrimaryKey())  {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        if (null !== $this->getPrimaryKey()) {
            return crc32(serialize($this->getPrimaryKey()));
        }

        return crc32(serialize(clone $this));
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return AttributeType The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     *
     * @return AttributeType The current object, for fluid interface
     */
    public function importFrom($parser, $data)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), TableMap::TYPE_PHPNAME);

        return $this;
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        return array_keys(get_object_vars($this));
    }

    /**
     * Get the [id] column value.
     *
     * @return   int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [slug] column value.
     *
     * @return   string
     */
    public function getSlug()
    {

        return $this->slug;
    }

    /**
     * Get the [has_attribute_av_value] column value.
     *
     * @return   int
     */
    public function getHasAttributeAvValue()
    {

        return $this->has_attribute_av_value;
    }

    /**
     * Get the [is_multilingual_attribute_av_value] column value.
     *
     * @return   int
     */
    public function getIsMultilingualAttributeAvValue()
    {

        return $this->is_multilingual_attribute_av_value;
    }

    /**
     * Get the [pattern] column value.
     *
     * @return   string
     */
    public function getPattern()
    {

        return $this->pattern;
    }

    /**
     * Get the [css_class] column value.
     *
     * @return   string
     */
    public function getCssClass()
    {

        return $this->css_class;
    }

    /**
     * Get the [input_type] column value.
     *
     * @return   string
     */
    public function getInputType()
    {

        return $this->input_type;
    }

    /**
     * Get the [max] column value.
     *
     * @return   double
     */
    public function getMax()
    {

        return $this->max;
    }

    /**
     * Get the [min] column value.
     *
     * @return   double
     */
    public function getMin()
    {

        return $this->min;
    }

    /**
     * Get the [step] column value.
     *
     * @return   double
     */
    public function getStep()
    {

        return $this->step;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw \DateTime object will be returned.
     *
     * @return mixed Formatted date/time value as string or \DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = NULL)
    {
        if ($format === null) {
            return $this->created_at;
        } else {
            return $this->created_at instanceof \DateTime ? $this->created_at->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw \DateTime object will be returned.
     *
     * @return mixed Formatted date/time value as string or \DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = NULL)
    {
        if ($format === null) {
            return $this->updated_at;
        } else {
            return $this->updated_at instanceof \DateTime ? $this->updated_at->format($format) : null;
        }
    }

    /**
     * Set the value of [id] column.
     *
     * @param      int $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[AttributeTypeTableMap::ID] = true;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [slug] column.
     *
     * @param      string $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setSlug($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->slug !== $v) {
            $this->slug = $v;
            $this->modifiedColumns[AttributeTypeTableMap::SLUG] = true;
        }


        return $this;
    } // setSlug()

    /**
     * Set the value of [has_attribute_av_value] column.
     *
     * @param      int $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setHasAttributeAvValue($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->has_attribute_av_value !== $v) {
            $this->has_attribute_av_value = $v;
            $this->modifiedColumns[AttributeTypeTableMap::HAS_ATTRIBUTE_AV_VALUE] = true;
        }


        return $this;
    } // setHasAttributeAvValue()

    /**
     * Set the value of [is_multilingual_attribute_av_value] column.
     *
     * @param      int $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setIsMultilingualAttributeAvValue($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->is_multilingual_attribute_av_value !== $v) {
            $this->is_multilingual_attribute_av_value = $v;
            $this->modifiedColumns[AttributeTypeTableMap::IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE] = true;
        }


        return $this;
    } // setIsMultilingualAttributeAvValue()

    /**
     * Set the value of [pattern] column.
     *
     * @param      string $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setPattern($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pattern !== $v) {
            $this->pattern = $v;
            $this->modifiedColumns[AttributeTypeTableMap::PATTERN] = true;
        }


        return $this;
    } // setPattern()

    /**
     * Set the value of [css_class] column.
     *
     * @param      string $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setCssClass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->css_class !== $v) {
            $this->css_class = $v;
            $this->modifiedColumns[AttributeTypeTableMap::CSS_CLASS] = true;
        }


        return $this;
    } // setCssClass()

    /**
     * Set the value of [input_type] column.
     *
     * @param      string $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setInputType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->input_type !== $v) {
            $this->input_type = $v;
            $this->modifiedColumns[AttributeTypeTableMap::INPUT_TYPE] = true;
        }


        return $this;
    } // setInputType()

    /**
     * Set the value of [max] column.
     *
     * @param      double $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setMax($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->max !== $v) {
            $this->max = $v;
            $this->modifiedColumns[AttributeTypeTableMap::MAX] = true;
        }


        return $this;
    } // setMax()

    /**
     * Set the value of [min] column.
     *
     * @param      double $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setMin($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->min !== $v) {
            $this->min = $v;
            $this->modifiedColumns[AttributeTypeTableMap::MIN] = true;
        }


        return $this;
    } // setMin()

    /**
     * Set the value of [step] column.
     *
     * @param      double $v new value
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setStep($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->step !== $v) {
            $this->step = $v;
            $this->modifiedColumns[AttributeTypeTableMap::STEP] = true;
        }


        return $this;
    } // setStep()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param      mixed $v string, integer (timestamp), or \DateTime value.
     *               Empty strings are treated as NULL.
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, '\DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($dt !== $this->created_at) {
                $this->created_at = $dt;
                $this->modifiedColumns[AttributeTypeTableMap::CREATED_AT] = true;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param      mixed $v string, integer (timestamp), or \DateTime value.
     *               Empty strings are treated as NULL.
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, '\DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($dt !== $this->updated_at) {
                $this->updated_at = $dt;
                $this->modifiedColumns[AttributeTypeTableMap::UPDATED_AT] = true;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->has_attribute_av_value !== 0) {
                return false;
            }

            if ($this->is_multilingual_attribute_av_value !== 0) {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {


            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : AttributeTypeTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : AttributeTypeTableMap::translateFieldName('Slug', TableMap::TYPE_PHPNAME, $indexType)];
            $this->slug = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : AttributeTypeTableMap::translateFieldName('HasAttributeAvValue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->has_attribute_av_value = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : AttributeTypeTableMap::translateFieldName('IsMultilingualAttributeAvValue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_multilingual_attribute_av_value = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : AttributeTypeTableMap::translateFieldName('Pattern', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pattern = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : AttributeTypeTableMap::translateFieldName('CssClass', TableMap::TYPE_PHPNAME, $indexType)];
            $this->css_class = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : AttributeTypeTableMap::translateFieldName('InputType', TableMap::TYPE_PHPNAME, $indexType)];
            $this->input_type = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : AttributeTypeTableMap::translateFieldName('Max', TableMap::TYPE_PHPNAME, $indexType)];
            $this->max = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : AttributeTypeTableMap::translateFieldName('Min', TableMap::TYPE_PHPNAME, $indexType)];
            $this->min = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : AttributeTypeTableMap::translateFieldName('Step', TableMap::TYPE_PHPNAME, $indexType)];
            $this->step = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : AttributeTypeTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, '\DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : AttributeTypeTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, '\DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 12; // 12 = AttributeTypeTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating \AttributeType\Model\AttributeType object", 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(AttributeTypeTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildAttributeTypeQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collAttributeAttributeTypes = null;

            $this->collAttributeTypeI18ns = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see AttributeType::setDeleted()
     * @see AttributeType::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(AttributeTypeTableMap::DATABASE_NAME);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ChildAttributeTypeQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(AttributeTypeTableMap::DATABASE_NAME);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(AttributeTypeTableMap::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(AttributeTypeTableMap::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(AttributeTypeTableMap::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                AttributeTypeTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->attributeAttributeTypesScheduledForDeletion !== null) {
                if (!$this->attributeAttributeTypesScheduledForDeletion->isEmpty()) {
                    \AttributeType\Model\AttributeAttributeTypeQuery::create()
                        ->filterByPrimaryKeys($this->attributeAttributeTypesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->attributeAttributeTypesScheduledForDeletion = null;
                }
            }

                if ($this->collAttributeAttributeTypes !== null) {
            foreach ($this->collAttributeAttributeTypes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->attributeTypeI18nsScheduledForDeletion !== null) {
                if (!$this->attributeTypeI18nsScheduledForDeletion->isEmpty()) {
                    \AttributeType\Model\AttributeTypeI18nQuery::create()
                        ->filterByPrimaryKeys($this->attributeTypeI18nsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->attributeTypeI18nsScheduledForDeletion = null;
                }
            }

                if ($this->collAttributeTypeI18ns !== null) {
            foreach ($this->collAttributeTypeI18ns as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[AttributeTypeTableMap::ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AttributeTypeTableMap::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AttributeTypeTableMap::ID)) {
            $modifiedColumns[':p' . $index++]  = 'ID';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::SLUG)) {
            $modifiedColumns[':p' . $index++]  = 'SLUG';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::HAS_ATTRIBUTE_AV_VALUE)) {
            $modifiedColumns[':p' . $index++]  = 'HAS_ATTRIBUTE_AV_VALUE';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE)) {
            $modifiedColumns[':p' . $index++]  = 'IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::PATTERN)) {
            $modifiedColumns[':p' . $index++]  = 'PATTERN';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::CSS_CLASS)) {
            $modifiedColumns[':p' . $index++]  = 'CSS_CLASS';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::INPUT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'INPUT_TYPE';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::MAX)) {
            $modifiedColumns[':p' . $index++]  = 'MAX';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::MIN)) {
            $modifiedColumns[':p' . $index++]  = 'MIN';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::STEP)) {
            $modifiedColumns[':p' . $index++]  = 'STEP';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'CREATED_AT';
        }
        if ($this->isColumnModified(AttributeTypeTableMap::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'UPDATED_AT';
        }

        $sql = sprintf(
            'INSERT INTO attribute_type (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ID':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'SLUG':
                        $stmt->bindValue($identifier, $this->slug, PDO::PARAM_STR);
                        break;
                    case 'HAS_ATTRIBUTE_AV_VALUE':
                        $stmt->bindValue($identifier, $this->has_attribute_av_value, PDO::PARAM_INT);
                        break;
                    case 'IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE':
                        $stmt->bindValue($identifier, $this->is_multilingual_attribute_av_value, PDO::PARAM_INT);
                        break;
                    case 'PATTERN':
                        $stmt->bindValue($identifier, $this->pattern, PDO::PARAM_STR);
                        break;
                    case 'CSS_CLASS':
                        $stmt->bindValue($identifier, $this->css_class, PDO::PARAM_STR);
                        break;
                    case 'INPUT_TYPE':
                        $stmt->bindValue($identifier, $this->input_type, PDO::PARAM_STR);
                        break;
                    case 'MAX':
                        $stmt->bindValue($identifier, $this->max, PDO::PARAM_STR);
                        break;
                    case 'MIN':
                        $stmt->bindValue($identifier, $this->min, PDO::PARAM_STR);
                        break;
                    case 'STEP':
                        $stmt->bindValue($identifier, $this->step, PDO::PARAM_STR);
                        break;
                    case 'CREATED_AT':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s") : null, PDO::PARAM_STR);
                        break;
                    case 'UPDATED_AT':
                        $stmt->bindValue($identifier, $this->updated_at ? $this->updated_at->format("Y-m-d H:i:s") : null, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = AttributeTypeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getSlug();
                break;
            case 2:
                return $this->getHasAttributeAvValue();
                break;
            case 3:
                return $this->getIsMultilingualAttributeAvValue();
                break;
            case 4:
                return $this->getPattern();
                break;
            case 5:
                return $this->getCssClass();
                break;
            case 6:
                return $this->getInputType();
                break;
            case 7:
                return $this->getMax();
                break;
            case 8:
                return $this->getMin();
                break;
            case 9:
                return $this->getStep();
                break;
            case 10:
                return $this->getCreatedAt();
                break;
            case 11:
                return $this->getUpdatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['AttributeType'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['AttributeType'][$this->getPrimaryKey()] = true;
        $keys = AttributeTypeTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getSlug(),
            $keys[2] => $this->getHasAttributeAvValue(),
            $keys[3] => $this->getIsMultilingualAttributeAvValue(),
            $keys[4] => $this->getPattern(),
            $keys[5] => $this->getCssClass(),
            $keys[6] => $this->getInputType(),
            $keys[7] => $this->getMax(),
            $keys[8] => $this->getMin(),
            $keys[9] => $this->getStep(),
            $keys[10] => $this->getCreatedAt(),
            $keys[11] => $this->getUpdatedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collAttributeAttributeTypes) {
                $result['AttributeAttributeTypes'] = $this->collAttributeAttributeTypes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collAttributeTypeI18ns) {
                $result['AttributeTypeI18ns'] = $this->collAttributeTypeI18ns->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name
     * @param      mixed  $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return void
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = AttributeTypeTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setSlug($value);
                break;
            case 2:
                $this->setHasAttributeAvValue($value);
                break;
            case 3:
                $this->setIsMultilingualAttributeAvValue($value);
                break;
            case 4:
                $this->setPattern($value);
                break;
            case 5:
                $this->setCssClass($value);
                break;
            case 6:
                $this->setInputType($value);
                break;
            case 7:
                $this->setMax($value);
                break;
            case 8:
                $this->setMin($value);
                break;
            case 9:
                $this->setStep($value);
                break;
            case 10:
                $this->setCreatedAt($value);
                break;
            case 11:
                $this->setUpdatedAt($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = AttributeTypeTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSlug($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setHasAttributeAvValue($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIsMultilingualAttributeAvValue($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPattern($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCssClass($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setInputType($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMax($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMin($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setStep($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCreatedAt($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setUpdatedAt($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AttributeTypeTableMap::DATABASE_NAME);

        if ($this->isColumnModified(AttributeTypeTableMap::ID)) $criteria->add(AttributeTypeTableMap::ID, $this->id);
        if ($this->isColumnModified(AttributeTypeTableMap::SLUG)) $criteria->add(AttributeTypeTableMap::SLUG, $this->slug);
        if ($this->isColumnModified(AttributeTypeTableMap::HAS_ATTRIBUTE_AV_VALUE)) $criteria->add(AttributeTypeTableMap::HAS_ATTRIBUTE_AV_VALUE, $this->has_attribute_av_value);
        if ($this->isColumnModified(AttributeTypeTableMap::IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE)) $criteria->add(AttributeTypeTableMap::IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE, $this->is_multilingual_attribute_av_value);
        if ($this->isColumnModified(AttributeTypeTableMap::PATTERN)) $criteria->add(AttributeTypeTableMap::PATTERN, $this->pattern);
        if ($this->isColumnModified(AttributeTypeTableMap::CSS_CLASS)) $criteria->add(AttributeTypeTableMap::CSS_CLASS, $this->css_class);
        if ($this->isColumnModified(AttributeTypeTableMap::INPUT_TYPE)) $criteria->add(AttributeTypeTableMap::INPUT_TYPE, $this->input_type);
        if ($this->isColumnModified(AttributeTypeTableMap::MAX)) $criteria->add(AttributeTypeTableMap::MAX, $this->max);
        if ($this->isColumnModified(AttributeTypeTableMap::MIN)) $criteria->add(AttributeTypeTableMap::MIN, $this->min);
        if ($this->isColumnModified(AttributeTypeTableMap::STEP)) $criteria->add(AttributeTypeTableMap::STEP, $this->step);
        if ($this->isColumnModified(AttributeTypeTableMap::CREATED_AT)) $criteria->add(AttributeTypeTableMap::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(AttributeTypeTableMap::UPDATED_AT)) $criteria->add(AttributeTypeTableMap::UPDATED_AT, $this->updated_at);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(AttributeTypeTableMap::DATABASE_NAME);
        $criteria->add(AttributeTypeTableMap::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \AttributeType\Model\AttributeType (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSlug($this->getSlug());
        $copyObj->setHasAttributeAvValue($this->getHasAttributeAvValue());
        $copyObj->setIsMultilingualAttributeAvValue($this->getIsMultilingualAttributeAvValue());
        $copyObj->setPattern($this->getPattern());
        $copyObj->setCssClass($this->getCssClass());
        $copyObj->setInputType($this->getInputType());
        $copyObj->setMax($this->getMax());
        $copyObj->setMin($this->getMin());
        $copyObj->setStep($this->getStep());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getAttributeAttributeTypes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAttributeAttributeType($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getAttributeTypeI18ns() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAttributeTypeI18n($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return                 \AttributeType\Model\AttributeType Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('AttributeAttributeType' == $relationName) {
            return $this->initAttributeAttributeTypes();
        }
        if ('AttributeTypeI18n' == $relationName) {
            return $this->initAttributeTypeI18ns();
        }
    }

    /**
     * Clears out the collAttributeAttributeTypes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addAttributeAttributeTypes()
     */
    public function clearAttributeAttributeTypes()
    {
        $this->collAttributeAttributeTypes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collAttributeAttributeTypes collection loaded partially.
     */
    public function resetPartialAttributeAttributeTypes($v = true)
    {
        $this->collAttributeAttributeTypesPartial = $v;
    }

    /**
     * Initializes the collAttributeAttributeTypes collection.
     *
     * By default this just sets the collAttributeAttributeTypes collection to an empty array (like clearcollAttributeAttributeTypes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAttributeAttributeTypes($overrideExisting = true)
    {
        if (null !== $this->collAttributeAttributeTypes && !$overrideExisting) {
            return;
        }
        $this->collAttributeAttributeTypes = new ObjectCollection();
        $this->collAttributeAttributeTypes->setModel('\AttributeType\Model\AttributeAttributeType');
    }

    /**
     * Gets an array of ChildAttributeAttributeType objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildAttributeType is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return Collection|ChildAttributeAttributeType[] List of ChildAttributeAttributeType objects
     * @throws PropelException
     */
    public function getAttributeAttributeTypes($criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collAttributeAttributeTypesPartial && !$this->isNew();
        if (null === $this->collAttributeAttributeTypes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAttributeAttributeTypes) {
                // return empty collection
                $this->initAttributeAttributeTypes();
            } else {
                $collAttributeAttributeTypes = ChildAttributeAttributeTypeQuery::create(null, $criteria)
                    ->filterByAttributeType($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collAttributeAttributeTypesPartial && count($collAttributeAttributeTypes)) {
                        $this->initAttributeAttributeTypes(false);

                        foreach ($collAttributeAttributeTypes as $obj) {
                            if (false == $this->collAttributeAttributeTypes->contains($obj)) {
                                $this->collAttributeAttributeTypes->append($obj);
                            }
                        }

                        $this->collAttributeAttributeTypesPartial = true;
                    }

                    reset($collAttributeAttributeTypes);

                    return $collAttributeAttributeTypes;
                }

                if ($partial && $this->collAttributeAttributeTypes) {
                    foreach ($this->collAttributeAttributeTypes as $obj) {
                        if ($obj->isNew()) {
                            $collAttributeAttributeTypes[] = $obj;
                        }
                    }
                }

                $this->collAttributeAttributeTypes = $collAttributeAttributeTypes;
                $this->collAttributeAttributeTypesPartial = false;
            }
        }

        return $this->collAttributeAttributeTypes;
    }

    /**
     * Sets a collection of AttributeAttributeType objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $attributeAttributeTypes A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return   ChildAttributeType The current object (for fluent API support)
     */
    public function setAttributeAttributeTypes(Collection $attributeAttributeTypes, ConnectionInterface $con = null)
    {
        $attributeAttributeTypesToDelete = $this->getAttributeAttributeTypes(new Criteria(), $con)->diff($attributeAttributeTypes);


        $this->attributeAttributeTypesScheduledForDeletion = $attributeAttributeTypesToDelete;

        foreach ($attributeAttributeTypesToDelete as $attributeAttributeTypeRemoved) {
            $attributeAttributeTypeRemoved->setAttributeType(null);
        }

        $this->collAttributeAttributeTypes = null;
        foreach ($attributeAttributeTypes as $attributeAttributeType) {
            $this->addAttributeAttributeType($attributeAttributeType);
        }

        $this->collAttributeAttributeTypes = $attributeAttributeTypes;
        $this->collAttributeAttributeTypesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related AttributeAttributeType objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related AttributeAttributeType objects.
     * @throws PropelException
     */
    public function countAttributeAttributeTypes(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collAttributeAttributeTypesPartial && !$this->isNew();
        if (null === $this->collAttributeAttributeTypes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAttributeAttributeTypes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAttributeAttributeTypes());
            }

            $query = ChildAttributeAttributeTypeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAttributeType($this)
                ->count($con);
        }

        return count($this->collAttributeAttributeTypes);
    }

    /**
     * Method called to associate a ChildAttributeAttributeType object to this object
     * through the ChildAttributeAttributeType foreign key attribute.
     *
     * @param    ChildAttributeAttributeType $l ChildAttributeAttributeType
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function addAttributeAttributeType(ChildAttributeAttributeType $l)
    {
        if ($this->collAttributeAttributeTypes === null) {
            $this->initAttributeAttributeTypes();
            $this->collAttributeAttributeTypesPartial = true;
        }

        if (!in_array($l, $this->collAttributeAttributeTypes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAttributeAttributeType($l);
        }

        return $this;
    }

    /**
     * @param AttributeAttributeType $attributeAttributeType The attributeAttributeType object to add.
     */
    protected function doAddAttributeAttributeType($attributeAttributeType)
    {
        $this->collAttributeAttributeTypes[]= $attributeAttributeType;
        $attributeAttributeType->setAttributeType($this);
    }

    /**
     * @param  AttributeAttributeType $attributeAttributeType The attributeAttributeType object to remove.
     * @return ChildAttributeType The current object (for fluent API support)
     */
    public function removeAttributeAttributeType($attributeAttributeType)
    {
        if ($this->getAttributeAttributeTypes()->contains($attributeAttributeType)) {
            $this->collAttributeAttributeTypes->remove($this->collAttributeAttributeTypes->search($attributeAttributeType));
            if (null === $this->attributeAttributeTypesScheduledForDeletion) {
                $this->attributeAttributeTypesScheduledForDeletion = clone $this->collAttributeAttributeTypes;
                $this->attributeAttributeTypesScheduledForDeletion->clear();
            }
            $this->attributeAttributeTypesScheduledForDeletion[]= clone $attributeAttributeType;
            $attributeAttributeType->setAttributeType(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this AttributeType is new, it will return
     * an empty collection; or if this AttributeType has previously
     * been saved, it will retrieve related AttributeAttributeTypes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in AttributeType.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return Collection|ChildAttributeAttributeType[] List of ChildAttributeAttributeType objects
     */
    public function getAttributeAttributeTypesJoinAttribute($criteria = null, $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildAttributeAttributeTypeQuery::create(null, $criteria);
        $query->joinWith('Attribute', $joinBehavior);

        return $this->getAttributeAttributeTypes($query, $con);
    }

    /**
     * Clears out the collAttributeTypeI18ns collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addAttributeTypeI18ns()
     */
    public function clearAttributeTypeI18ns()
    {
        $this->collAttributeTypeI18ns = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collAttributeTypeI18ns collection loaded partially.
     */
    public function resetPartialAttributeTypeI18ns($v = true)
    {
        $this->collAttributeTypeI18nsPartial = $v;
    }

    /**
     * Initializes the collAttributeTypeI18ns collection.
     *
     * By default this just sets the collAttributeTypeI18ns collection to an empty array (like clearcollAttributeTypeI18ns());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAttributeTypeI18ns($overrideExisting = true)
    {
        if (null !== $this->collAttributeTypeI18ns && !$overrideExisting) {
            return;
        }
        $this->collAttributeTypeI18ns = new ObjectCollection();
        $this->collAttributeTypeI18ns->setModel('\AttributeType\Model\AttributeTypeI18n');
    }

    /**
     * Gets an array of ChildAttributeTypeI18n objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildAttributeType is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return Collection|ChildAttributeTypeI18n[] List of ChildAttributeTypeI18n objects
     * @throws PropelException
     */
    public function getAttributeTypeI18ns($criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collAttributeTypeI18nsPartial && !$this->isNew();
        if (null === $this->collAttributeTypeI18ns || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAttributeTypeI18ns) {
                // return empty collection
                $this->initAttributeTypeI18ns();
            } else {
                $collAttributeTypeI18ns = ChildAttributeTypeI18nQuery::create(null, $criteria)
                    ->filterByAttributeType($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collAttributeTypeI18nsPartial && count($collAttributeTypeI18ns)) {
                        $this->initAttributeTypeI18ns(false);

                        foreach ($collAttributeTypeI18ns as $obj) {
                            if (false == $this->collAttributeTypeI18ns->contains($obj)) {
                                $this->collAttributeTypeI18ns->append($obj);
                            }
                        }

                        $this->collAttributeTypeI18nsPartial = true;
                    }

                    reset($collAttributeTypeI18ns);

                    return $collAttributeTypeI18ns;
                }

                if ($partial && $this->collAttributeTypeI18ns) {
                    foreach ($this->collAttributeTypeI18ns as $obj) {
                        if ($obj->isNew()) {
                            $collAttributeTypeI18ns[] = $obj;
                        }
                    }
                }

                $this->collAttributeTypeI18ns = $collAttributeTypeI18ns;
                $this->collAttributeTypeI18nsPartial = false;
            }
        }

        return $this->collAttributeTypeI18ns;
    }

    /**
     * Sets a collection of AttributeTypeI18n objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $attributeTypeI18ns A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return   ChildAttributeType The current object (for fluent API support)
     */
    public function setAttributeTypeI18ns(Collection $attributeTypeI18ns, ConnectionInterface $con = null)
    {
        $attributeTypeI18nsToDelete = $this->getAttributeTypeI18ns(new Criteria(), $con)->diff($attributeTypeI18ns);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->attributeTypeI18nsScheduledForDeletion = clone $attributeTypeI18nsToDelete;

        foreach ($attributeTypeI18nsToDelete as $attributeTypeI18nRemoved) {
            $attributeTypeI18nRemoved->setAttributeType(null);
        }

        $this->collAttributeTypeI18ns = null;
        foreach ($attributeTypeI18ns as $attributeTypeI18n) {
            $this->addAttributeTypeI18n($attributeTypeI18n);
        }

        $this->collAttributeTypeI18ns = $attributeTypeI18ns;
        $this->collAttributeTypeI18nsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related AttributeTypeI18n objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related AttributeTypeI18n objects.
     * @throws PropelException
     */
    public function countAttributeTypeI18ns(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collAttributeTypeI18nsPartial && !$this->isNew();
        if (null === $this->collAttributeTypeI18ns || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAttributeTypeI18ns) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAttributeTypeI18ns());
            }

            $query = ChildAttributeTypeI18nQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAttributeType($this)
                ->count($con);
        }

        return count($this->collAttributeTypeI18ns);
    }

    /**
     * Method called to associate a ChildAttributeTypeI18n object to this object
     * through the ChildAttributeTypeI18n foreign key attribute.
     *
     * @param    ChildAttributeTypeI18n $l ChildAttributeTypeI18n
     * @return   \AttributeType\Model\AttributeType The current object (for fluent API support)
     */
    public function addAttributeTypeI18n(ChildAttributeTypeI18n $l)
    {
        if ($l && $locale = $l->getLocale()) {
            $this->setLocale($locale);
            $this->currentTranslations[$locale] = $l;
        }
        if ($this->collAttributeTypeI18ns === null) {
            $this->initAttributeTypeI18ns();
            $this->collAttributeTypeI18nsPartial = true;
        }

        if (!in_array($l, $this->collAttributeTypeI18ns->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAttributeTypeI18n($l);
        }

        return $this;
    }

    /**
     * @param AttributeTypeI18n $attributeTypeI18n The attributeTypeI18n object to add.
     */
    protected function doAddAttributeTypeI18n($attributeTypeI18n)
    {
        $this->collAttributeTypeI18ns[]= $attributeTypeI18n;
        $attributeTypeI18n->setAttributeType($this);
    }

    /**
     * @param  AttributeTypeI18n $attributeTypeI18n The attributeTypeI18n object to remove.
     * @return ChildAttributeType The current object (for fluent API support)
     */
    public function removeAttributeTypeI18n($attributeTypeI18n)
    {
        if ($this->getAttributeTypeI18ns()->contains($attributeTypeI18n)) {
            $this->collAttributeTypeI18ns->remove($this->collAttributeTypeI18ns->search($attributeTypeI18n));
            if (null === $this->attributeTypeI18nsScheduledForDeletion) {
                $this->attributeTypeI18nsScheduledForDeletion = clone $this->collAttributeTypeI18ns;
                $this->attributeTypeI18nsScheduledForDeletion->clear();
            }
            $this->attributeTypeI18nsScheduledForDeletion[]= clone $attributeTypeI18n;
            $attributeTypeI18n->setAttributeType(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->slug = null;
        $this->has_attribute_av_value = null;
        $this->is_multilingual_attribute_av_value = null;
        $this->pattern = null;
        $this->css_class = null;
        $this->input_type = null;
        $this->max = null;
        $this->min = null;
        $this->step = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collAttributeAttributeTypes) {
                foreach ($this->collAttributeAttributeTypes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collAttributeTypeI18ns) {
                foreach ($this->collAttributeTypeI18ns as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        // i18n behavior
        $this->currentLocale = 'en_US';
        $this->currentTranslations = null;

        $this->collAttributeAttributeTypes = null;
        $this->collAttributeTypeI18ns = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AttributeTypeTableMap::DEFAULT_STRING_FORMAT);
    }

    // i18n behavior

    /**
     * Sets the locale for translations
     *
     * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
     *
     * @return    ChildAttributeType The current object (for fluent API support)
     */
    public function setLocale($locale = 'en_US')
    {
        $this->currentLocale = $locale;

        return $this;
    }

    /**
     * Gets the locale for translations
     *
     * @return    string $locale Locale to use for the translation, e.g. 'fr_FR'
     */
    public function getLocale()
    {
        return $this->currentLocale;
    }

    /**
     * Returns the current translation for a given locale
     *
     * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ChildAttributeTypeI18n */
    public function getTranslation($locale = 'en_US', ConnectionInterface $con = null)
    {
        if (!isset($this->currentTranslations[$locale])) {
            if (null !== $this->collAttributeTypeI18ns) {
                foreach ($this->collAttributeTypeI18ns as $translation) {
                    if ($translation->getLocale() == $locale) {
                        $this->currentTranslations[$locale] = $translation;

                        return $translation;
                    }
                }
            }
            if ($this->isNew()) {
                $translation = new ChildAttributeTypeI18n();
                $translation->setLocale($locale);
            } else {
                $translation = ChildAttributeTypeI18nQuery::create()
                    ->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
                    ->findOneOrCreate($con);
                $this->currentTranslations[$locale] = $translation;
            }
            $this->addAttributeTypeI18n($translation);
        }

        return $this->currentTranslations[$locale];
    }

    /**
     * Remove the translation for a given locale
     *
     * @param     string $locale Locale to use for the translation, e.g. 'fr_FR'
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return    ChildAttributeType The current object (for fluent API support)
     */
    public function removeTranslation($locale = 'en_US', ConnectionInterface $con = null)
    {
        if (!$this->isNew()) {
            ChildAttributeTypeI18nQuery::create()
                ->filterByPrimaryKey(array($this->getPrimaryKey(), $locale))
                ->delete($con);
        }
        if (isset($this->currentTranslations[$locale])) {
            unset($this->currentTranslations[$locale]);
        }
        foreach ($this->collAttributeTypeI18ns as $key => $translation) {
            if ($translation->getLocale() == $locale) {
                unset($this->collAttributeTypeI18ns[$key]);
                break;
            }
        }

        return $this;
    }

    /**
     * Returns the current translation
     *
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ChildAttributeTypeI18n */
    public function getCurrentTranslation(ConnectionInterface $con = null)
    {
        return $this->getTranslation($this->getLocale(), $con);
    }


        /**
         * Get the [title] column value.
         *
         * @return   string
         */
        public function getTitle()
        {
        return $this->getCurrentTranslation()->getTitle();
    }


        /**
         * Set the value of [title] column.
         *
         * @param      string $v new value
         * @return   \AttributeType\Model\AttributeTypeI18n The current object (for fluent API support)
         */
        public function setTitle($v)
        {    $this->getCurrentTranslation()->setTitle($v);

        return $this;
    }


        /**
         * Get the [description] column value.
         *
         * @return   string
         */
        public function getDescription()
        {
        return $this->getCurrentTranslation()->getDescription();
    }


        /**
         * Set the value of [description] column.
         *
         * @param      string $v new value
         * @return   \AttributeType\Model\AttributeTypeI18n The current object (for fluent API support)
         */
        public function setDescription($v)
        {    $this->getCurrentTranslation()->setDescription($v);

        return $this;
    }

    // validate behavior

    /**
     * Configure validators constraints. The Validator object uses this method
     * to perform object validation.
     *
     * @param ClassMetadata $metadata
     */
    static public function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('slug', new Regex(array ('pattern' => '/[a-z][a-z_0-9]{3,50}/',)));
    }

    /**
     * Validates the object and all objects related to this table.
     *
     * @see        getValidationFailures()
     * @param      object $validator A Validator class instance
     * @return     boolean Whether all objects pass validation.
     */
    public function validate(Validator $validator = null)
    {
        if (null === $validator) {
            $validator = new Validator(new ClassMetadataFactory(new StaticMethodLoader()), new ConstraintValidatorFactory(), new DefaultTranslator());
        }

        $failureMap = new ConstraintViolationList();

        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;


            $retval = $validator->validate($this);
            if (count($retval) > 0) {
                $failureMap->addAll($retval);
            }

            if (null !== $this->collAttributeAttributeTypes) {
                foreach ($this->collAttributeAttributeTypes as $referrerFK) {
                    if (method_exists($referrerFK, 'validate')) {
                        if (!$referrerFK->validate($validator)) {
                            $failureMap->addAll($referrerFK->getValidationFailures());
                        }
                    }
                }
            }
            if (null !== $this->collAttributeTypeI18ns) {
                foreach ($this->collAttributeTypeI18ns as $referrerFK) {
                    if (method_exists($referrerFK, 'validate')) {
                        if (!$referrerFK->validate($validator)) {
                            $failureMap->addAll($referrerFK->getValidationFailures());
                        }
                    }
                }
            }

            $this->alreadyInValidation = false;
        }

        $this->validationFailures = $failureMap;

        return (Boolean) (!(count($this->validationFailures) > 0));

    }

    /**
     * Gets any ConstraintViolation objects that resulted from last call to validate().
     *
     *
     * @return     object ConstraintViolationList
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     ChildAttributeType The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[AttributeTypeTableMap::UPDATED_AT] = true;

        return $this;
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {

    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {

    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
