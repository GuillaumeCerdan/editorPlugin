<?php

namespace AttributeType\Model\Base;

use \Exception;
use \PDO;
use AttributeType\Model\AttributeType as ChildAttributeType;
use AttributeType\Model\AttributeTypeI18nQuery as ChildAttributeTypeI18nQuery;
use AttributeType\Model\AttributeTypeQuery as ChildAttributeTypeQuery;
use AttributeType\Model\Map\AttributeTypeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'attribute_type' table.
 *
 *
 *
 * @method     ChildAttributeTypeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildAttributeTypeQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     ChildAttributeTypeQuery orderByHasAttributeAvValue($order = Criteria::ASC) Order by the has_attribute_av_value column
 * @method     ChildAttributeTypeQuery orderByIsMultilingualAttributeAvValue($order = Criteria::ASC) Order by the is_multilingual_attribute_av_value column
 * @method     ChildAttributeTypeQuery orderByPattern($order = Criteria::ASC) Order by the pattern column
 * @method     ChildAttributeTypeQuery orderByCssClass($order = Criteria::ASC) Order by the css_class column
 * @method     ChildAttributeTypeQuery orderByInputType($order = Criteria::ASC) Order by the input_type column
 * @method     ChildAttributeTypeQuery orderByMax($order = Criteria::ASC) Order by the max column
 * @method     ChildAttributeTypeQuery orderByMin($order = Criteria::ASC) Order by the min column
 * @method     ChildAttributeTypeQuery orderByStep($order = Criteria::ASC) Order by the step column
 * @method     ChildAttributeTypeQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildAttributeTypeQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildAttributeTypeQuery groupById() Group by the id column
 * @method     ChildAttributeTypeQuery groupBySlug() Group by the slug column
 * @method     ChildAttributeTypeQuery groupByHasAttributeAvValue() Group by the has_attribute_av_value column
 * @method     ChildAttributeTypeQuery groupByIsMultilingualAttributeAvValue() Group by the is_multilingual_attribute_av_value column
 * @method     ChildAttributeTypeQuery groupByPattern() Group by the pattern column
 * @method     ChildAttributeTypeQuery groupByCssClass() Group by the css_class column
 * @method     ChildAttributeTypeQuery groupByInputType() Group by the input_type column
 * @method     ChildAttributeTypeQuery groupByMax() Group by the max column
 * @method     ChildAttributeTypeQuery groupByMin() Group by the min column
 * @method     ChildAttributeTypeQuery groupByStep() Group by the step column
 * @method     ChildAttributeTypeQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildAttributeTypeQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildAttributeTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildAttributeTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildAttributeTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildAttributeTypeQuery leftJoinAttributeAttributeType($relationAlias = null) Adds a LEFT JOIN clause to the query using the AttributeAttributeType relation
 * @method     ChildAttributeTypeQuery rightJoinAttributeAttributeType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AttributeAttributeType relation
 * @method     ChildAttributeTypeQuery innerJoinAttributeAttributeType($relationAlias = null) Adds a INNER JOIN clause to the query using the AttributeAttributeType relation
 *
 * @method     ChildAttributeTypeQuery leftJoinAttributeTypeI18n($relationAlias = null) Adds a LEFT JOIN clause to the query using the AttributeTypeI18n relation
 * @method     ChildAttributeTypeQuery rightJoinAttributeTypeI18n($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AttributeTypeI18n relation
 * @method     ChildAttributeTypeQuery innerJoinAttributeTypeI18n($relationAlias = null) Adds a INNER JOIN clause to the query using the AttributeTypeI18n relation
 *
 * @method     ChildAttributeType findOne(ConnectionInterface $con = null) Return the first ChildAttributeType matching the query
 * @method     ChildAttributeType findOneOrCreate(ConnectionInterface $con = null) Return the first ChildAttributeType matching the query, or a new ChildAttributeType object populated from the query conditions when no match is found
 *
 * @method     ChildAttributeType findOneById(int $id) Return the first ChildAttributeType filtered by the id column
 * @method     ChildAttributeType findOneBySlug(string $slug) Return the first ChildAttributeType filtered by the slug column
 * @method     ChildAttributeType findOneByHasAttributeAvValue(int $has_attribute_av_value) Return the first ChildAttributeType filtered by the has_attribute_av_value column
 * @method     ChildAttributeType findOneByIsMultilingualAttributeAvValue(int $is_multilingual_attribute_av_value) Return the first ChildAttributeType filtered by the is_multilingual_attribute_av_value column
 * @method     ChildAttributeType findOneByPattern(string $pattern) Return the first ChildAttributeType filtered by the pattern column
 * @method     ChildAttributeType findOneByCssClass(string $css_class) Return the first ChildAttributeType filtered by the css_class column
 * @method     ChildAttributeType findOneByInputType(string $input_type) Return the first ChildAttributeType filtered by the input_type column
 * @method     ChildAttributeType findOneByMax(double $max) Return the first ChildAttributeType filtered by the max column
 * @method     ChildAttributeType findOneByMin(double $min) Return the first ChildAttributeType filtered by the min column
 * @method     ChildAttributeType findOneByStep(double $step) Return the first ChildAttributeType filtered by the step column
 * @method     ChildAttributeType findOneByCreatedAt(string $created_at) Return the first ChildAttributeType filtered by the created_at column
 * @method     ChildAttributeType findOneByUpdatedAt(string $updated_at) Return the first ChildAttributeType filtered by the updated_at column
 *
 * @method     array findById(int $id) Return ChildAttributeType objects filtered by the id column
 * @method     array findBySlug(string $slug) Return ChildAttributeType objects filtered by the slug column
 * @method     array findByHasAttributeAvValue(int $has_attribute_av_value) Return ChildAttributeType objects filtered by the has_attribute_av_value column
 * @method     array findByIsMultilingualAttributeAvValue(int $is_multilingual_attribute_av_value) Return ChildAttributeType objects filtered by the is_multilingual_attribute_av_value column
 * @method     array findByPattern(string $pattern) Return ChildAttributeType objects filtered by the pattern column
 * @method     array findByCssClass(string $css_class) Return ChildAttributeType objects filtered by the css_class column
 * @method     array findByInputType(string $input_type) Return ChildAttributeType objects filtered by the input_type column
 * @method     array findByMax(double $max) Return ChildAttributeType objects filtered by the max column
 * @method     array findByMin(double $min) Return ChildAttributeType objects filtered by the min column
 * @method     array findByStep(double $step) Return ChildAttributeType objects filtered by the step column
 * @method     array findByCreatedAt(string $created_at) Return ChildAttributeType objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return ChildAttributeType objects filtered by the updated_at column
 *
 */
abstract class AttributeTypeQuery extends ModelCriteria
{

    /**
     * Initializes internal state of \AttributeType\Model\Base\AttributeTypeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'thelia', $modelName = '\\AttributeType\\Model\\AttributeType', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildAttributeTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildAttributeTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof \AttributeType\Model\AttributeTypeQuery) {
            return $criteria;
        }
        $query = new \AttributeType\Model\AttributeTypeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildAttributeType|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AttributeTypeTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(AttributeTypeTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return   ChildAttributeType A model object, or null if the key is not found
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT ID, SLUG, HAS_ATTRIBUTE_AV_VALUE, IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE, PATTERN, CSS_CLASS, INPUT_TYPE, MAX, MIN, STEP, CREATED_AT, UPDATED_AT FROM attribute_type WHERE ID = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            $obj = new ChildAttributeType();
            $obj->hydrate($row);
            AttributeTypeTableMap::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildAttributeType|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AttributeTypeTableMap::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AttributeTypeTableMap::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AttributeTypeTableMap::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AttributeTypeTableMap::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::ID, $id, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query on the has_attribute_av_value column
     *
     * Example usage:
     * <code>
     * $query->filterByHasAttributeAvValue(1234); // WHERE has_attribute_av_value = 1234
     * $query->filterByHasAttributeAvValue(array(12, 34)); // WHERE has_attribute_av_value IN (12, 34)
     * $query->filterByHasAttributeAvValue(array('min' => 12)); // WHERE has_attribute_av_value > 12
     * </code>
     *
     * @param     mixed $hasAttributeAvValue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByHasAttributeAvValue($hasAttributeAvValue = null, $comparison = null)
    {
        if (is_array($hasAttributeAvValue)) {
            $useMinMax = false;
            if (isset($hasAttributeAvValue['min'])) {
                $this->addUsingAlias(AttributeTypeTableMap::HAS_ATTRIBUTE_AV_VALUE, $hasAttributeAvValue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hasAttributeAvValue['max'])) {
                $this->addUsingAlias(AttributeTypeTableMap::HAS_ATTRIBUTE_AV_VALUE, $hasAttributeAvValue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::HAS_ATTRIBUTE_AV_VALUE, $hasAttributeAvValue, $comparison);
    }

    /**
     * Filter the query on the is_multilingual_attribute_av_value column
     *
     * Example usage:
     * <code>
     * $query->filterByIsMultilingualAttributeAvValue(1234); // WHERE is_multilingual_attribute_av_value = 1234
     * $query->filterByIsMultilingualAttributeAvValue(array(12, 34)); // WHERE is_multilingual_attribute_av_value IN (12, 34)
     * $query->filterByIsMultilingualAttributeAvValue(array('min' => 12)); // WHERE is_multilingual_attribute_av_value > 12
     * </code>
     *
     * @param     mixed $isMultilingualAttributeAvValue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByIsMultilingualAttributeAvValue($isMultilingualAttributeAvValue = null, $comparison = null)
    {
        if (is_array($isMultilingualAttributeAvValue)) {
            $useMinMax = false;
            if (isset($isMultilingualAttributeAvValue['min'])) {
                $this->addUsingAlias(AttributeTypeTableMap::IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE, $isMultilingualAttributeAvValue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isMultilingualAttributeAvValue['max'])) {
                $this->addUsingAlias(AttributeTypeTableMap::IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE, $isMultilingualAttributeAvValue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE, $isMultilingualAttributeAvValue, $comparison);
    }

    /**
     * Filter the query on the pattern column
     *
     * Example usage:
     * <code>
     * $query->filterByPattern('fooValue');   // WHERE pattern = 'fooValue'
     * $query->filterByPattern('%fooValue%'); // WHERE pattern LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pattern The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByPattern($pattern = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pattern)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pattern)) {
                $pattern = str_replace('*', '%', $pattern);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::PATTERN, $pattern, $comparison);
    }

    /**
     * Filter the query on the css_class column
     *
     * Example usage:
     * <code>
     * $query->filterByCssClass('fooValue');   // WHERE css_class = 'fooValue'
     * $query->filterByCssClass('%fooValue%'); // WHERE css_class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cssClass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByCssClass($cssClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cssClass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cssClass)) {
                $cssClass = str_replace('*', '%', $cssClass);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::CSS_CLASS, $cssClass, $comparison);
    }

    /**
     * Filter the query on the input_type column
     *
     * Example usage:
     * <code>
     * $query->filterByInputType('fooValue');   // WHERE input_type = 'fooValue'
     * $query->filterByInputType('%fooValue%'); // WHERE input_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inputType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByInputType($inputType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inputType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inputType)) {
                $inputType = str_replace('*', '%', $inputType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::INPUT_TYPE, $inputType, $comparison);
    }

    /**
     * Filter the query on the max column
     *
     * Example usage:
     * <code>
     * $query->filterByMax(1234); // WHERE max = 1234
     * $query->filterByMax(array(12, 34)); // WHERE max IN (12, 34)
     * $query->filterByMax(array('min' => 12)); // WHERE max > 12
     * </code>
     *
     * @param     mixed $max The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByMax($max = null, $comparison = null)
    {
        if (is_array($max)) {
            $useMinMax = false;
            if (isset($max['min'])) {
                $this->addUsingAlias(AttributeTypeTableMap::MAX, $max['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($max['max'])) {
                $this->addUsingAlias(AttributeTypeTableMap::MAX, $max['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::MAX, $max, $comparison);
    }

    /**
     * Filter the query on the min column
     *
     * Example usage:
     * <code>
     * $query->filterByMin(1234); // WHERE min = 1234
     * $query->filterByMin(array(12, 34)); // WHERE min IN (12, 34)
     * $query->filterByMin(array('min' => 12)); // WHERE min > 12
     * </code>
     *
     * @param     mixed $min The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByMin($min = null, $comparison = null)
    {
        if (is_array($min)) {
            $useMinMax = false;
            if (isset($min['min'])) {
                $this->addUsingAlias(AttributeTypeTableMap::MIN, $min['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($min['max'])) {
                $this->addUsingAlias(AttributeTypeTableMap::MIN, $min['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::MIN, $min, $comparison);
    }

    /**
     * Filter the query on the step column
     *
     * Example usage:
     * <code>
     * $query->filterByStep(1234); // WHERE step = 1234
     * $query->filterByStep(array(12, 34)); // WHERE step IN (12, 34)
     * $query->filterByStep(array('min' => 12)); // WHERE step > 12
     * </code>
     *
     * @param     mixed $step The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByStep($step = null, $comparison = null)
    {
        if (is_array($step)) {
            $useMinMax = false;
            if (isset($step['min'])) {
                $this->addUsingAlias(AttributeTypeTableMap::STEP, $step['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($step['max'])) {
                $this->addUsingAlias(AttributeTypeTableMap::STEP, $step['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::STEP, $step, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(AttributeTypeTableMap::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(AttributeTypeTableMap::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(AttributeTypeTableMap::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(AttributeTypeTableMap::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeTableMap::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \AttributeType\Model\AttributeAttributeType object
     *
     * @param \AttributeType\Model\AttributeAttributeType|ObjectCollection $attributeAttributeType  the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByAttributeAttributeType($attributeAttributeType, $comparison = null)
    {
        if ($attributeAttributeType instanceof \AttributeType\Model\AttributeAttributeType) {
            return $this
                ->addUsingAlias(AttributeTypeTableMap::ID, $attributeAttributeType->getAttributeTypeId(), $comparison);
        } elseif ($attributeAttributeType instanceof ObjectCollection) {
            return $this
                ->useAttributeAttributeTypeQuery()
                ->filterByPrimaryKeys($attributeAttributeType->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAttributeAttributeType() only accepts arguments of type \AttributeType\Model\AttributeAttributeType or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AttributeAttributeType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function joinAttributeAttributeType($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AttributeAttributeType');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'AttributeAttributeType');
        }

        return $this;
    }

    /**
     * Use the AttributeAttributeType relation AttributeAttributeType object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \AttributeType\Model\AttributeAttributeTypeQuery A secondary query class using the current class as primary query
     */
    public function useAttributeAttributeTypeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAttributeAttributeType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AttributeAttributeType', '\AttributeType\Model\AttributeAttributeTypeQuery');
    }

    /**
     * Filter the query by a related \AttributeType\Model\AttributeTypeI18n object
     *
     * @param \AttributeType\Model\AttributeTypeI18n|ObjectCollection $attributeTypeI18n  the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByAttributeTypeI18n($attributeTypeI18n, $comparison = null)
    {
        if ($attributeTypeI18n instanceof \AttributeType\Model\AttributeTypeI18n) {
            return $this
                ->addUsingAlias(AttributeTypeTableMap::ID, $attributeTypeI18n->getId(), $comparison);
        } elseif ($attributeTypeI18n instanceof ObjectCollection) {
            return $this
                ->useAttributeTypeI18nQuery()
                ->filterByPrimaryKeys($attributeTypeI18n->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAttributeTypeI18n() only accepts arguments of type \AttributeType\Model\AttributeTypeI18n or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AttributeTypeI18n relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function joinAttributeTypeI18n($relationAlias = null, $joinType = 'LEFT JOIN')
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AttributeTypeI18n');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'AttributeTypeI18n');
        }

        return $this;
    }

    /**
     * Use the AttributeTypeI18n relation AttributeTypeI18n object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \AttributeType\Model\AttributeTypeI18nQuery A secondary query class using the current class as primary query
     */
    public function useAttributeTypeI18nQuery($relationAlias = null, $joinType = 'LEFT JOIN')
    {
        return $this
            ->joinAttributeTypeI18n($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AttributeTypeI18n', '\AttributeType\Model\AttributeTypeI18nQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildAttributeType $attributeType Object to remove from the list of results
     *
     * @return ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function prune($attributeType = null)
    {
        if ($attributeType) {
            $this->addUsingAlias(AttributeTypeTableMap::ID, $attributeType->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the attribute_type table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(AttributeTypeTableMap::DATABASE_NAME);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AttributeTypeTableMap::clearInstancePool();
            AttributeTypeTableMap::clearRelatedInstancePool();

            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $affectedRows;
    }

    /**
     * Performs a DELETE on the database, given a ChildAttributeType or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ChildAttributeType object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public function delete(ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(AttributeTypeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(AttributeTypeTableMap::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();


        AttributeTypeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            AttributeTypeTableMap::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    // i18n behavior

    /**
     * Adds a JOIN clause to the query using the i18n relation
     *
     * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
     *
     * @return    ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function joinI18n($locale = 'en_US', $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $relationName = $relationAlias ? $relationAlias : 'AttributeTypeI18n';

        return $this
            ->joinAttributeTypeI18n($relationAlias, $joinType)
            ->addJoinCondition($relationName, $relationName . '.Locale = ?', $locale);
    }

    /**
     * Adds a JOIN clause to the query and hydrates the related I18n object.
     * Shortcut for $c->joinI18n($locale)->with()
     *
     * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
     *
     * @return    ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function joinWithI18n($locale = 'en_US', $joinType = Criteria::LEFT_JOIN)
    {
        $this
            ->joinI18n($locale, null, $joinType)
            ->with('AttributeTypeI18n');
        $this->with['AttributeTypeI18n']->setIsWithOneToMany(false);

        return $this;
    }

    /**
     * Use the I18n relation query object
     *
     * @see       useQuery()
     *
     * @param     string $locale Locale to use for the join condition, e.g. 'fr_FR'
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'. Defaults to left join.
     *
     * @return    ChildAttributeTypeI18nQuery A secondary query class using the current class as primary query
     */
    public function useI18nQuery($locale = 'en_US', $relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinI18n($locale, $relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AttributeTypeI18n', '\AttributeType\Model\AttributeTypeI18nQuery');
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(AttributeTypeTableMap::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(AttributeTypeTableMap::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(AttributeTypeTableMap::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(AttributeTypeTableMap::UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(AttributeTypeTableMap::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     ChildAttributeTypeQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(AttributeTypeTableMap::CREATED_AT);
    }

} // AttributeTypeQuery
