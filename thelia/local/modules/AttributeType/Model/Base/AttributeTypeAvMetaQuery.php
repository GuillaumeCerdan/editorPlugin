<?php

namespace AttributeType\Model\Base;

use \Exception;
use \PDO;
use AttributeType\Model\AttributeTypeAvMeta as ChildAttributeTypeAvMeta;
use AttributeType\Model\AttributeTypeAvMetaQuery as ChildAttributeTypeAvMetaQuery;
use AttributeType\Model\Map\AttributeTypeAvMetaTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Thelia\Model\AttributeAv;

/**
 * Base class that represents a query for the 'attribute_type_av_meta' table.
 *
 *
 *
 * @method     ChildAttributeTypeAvMetaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildAttributeTypeAvMetaQuery orderByAttributeAvId($order = Criteria::ASC) Order by the attribute_av_id column
 * @method     ChildAttributeTypeAvMetaQuery orderByAttributeAttributeTypeId($order = Criteria::ASC) Order by the attribute_attribute_type_id column
 * @method     ChildAttributeTypeAvMetaQuery orderByLocale($order = Criteria::ASC) Order by the locale column
 * @method     ChildAttributeTypeAvMetaQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     ChildAttributeTypeAvMetaQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildAttributeTypeAvMetaQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildAttributeTypeAvMetaQuery groupById() Group by the id column
 * @method     ChildAttributeTypeAvMetaQuery groupByAttributeAvId() Group by the attribute_av_id column
 * @method     ChildAttributeTypeAvMetaQuery groupByAttributeAttributeTypeId() Group by the attribute_attribute_type_id column
 * @method     ChildAttributeTypeAvMetaQuery groupByLocale() Group by the locale column
 * @method     ChildAttributeTypeAvMetaQuery groupByValue() Group by the value column
 * @method     ChildAttributeTypeAvMetaQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildAttributeTypeAvMetaQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildAttributeTypeAvMetaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildAttributeTypeAvMetaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildAttributeTypeAvMetaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildAttributeTypeAvMetaQuery leftJoinAttributeAv($relationAlias = null) Adds a LEFT JOIN clause to the query using the AttributeAv relation
 * @method     ChildAttributeTypeAvMetaQuery rightJoinAttributeAv($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AttributeAv relation
 * @method     ChildAttributeTypeAvMetaQuery innerJoinAttributeAv($relationAlias = null) Adds a INNER JOIN clause to the query using the AttributeAv relation
 *
 * @method     ChildAttributeTypeAvMetaQuery leftJoinAttributeAttributeType($relationAlias = null) Adds a LEFT JOIN clause to the query using the AttributeAttributeType relation
 * @method     ChildAttributeTypeAvMetaQuery rightJoinAttributeAttributeType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AttributeAttributeType relation
 * @method     ChildAttributeTypeAvMetaQuery innerJoinAttributeAttributeType($relationAlias = null) Adds a INNER JOIN clause to the query using the AttributeAttributeType relation
 *
 * @method     ChildAttributeTypeAvMeta findOne(ConnectionInterface $con = null) Return the first ChildAttributeTypeAvMeta matching the query
 * @method     ChildAttributeTypeAvMeta findOneOrCreate(ConnectionInterface $con = null) Return the first ChildAttributeTypeAvMeta matching the query, or a new ChildAttributeTypeAvMeta object populated from the query conditions when no match is found
 *
 * @method     ChildAttributeTypeAvMeta findOneById(int $id) Return the first ChildAttributeTypeAvMeta filtered by the id column
 * @method     ChildAttributeTypeAvMeta findOneByAttributeAvId(int $attribute_av_id) Return the first ChildAttributeTypeAvMeta filtered by the attribute_av_id column
 * @method     ChildAttributeTypeAvMeta findOneByAttributeAttributeTypeId(int $attribute_attribute_type_id) Return the first ChildAttributeTypeAvMeta filtered by the attribute_attribute_type_id column
 * @method     ChildAttributeTypeAvMeta findOneByLocale(string $locale) Return the first ChildAttributeTypeAvMeta filtered by the locale column
 * @method     ChildAttributeTypeAvMeta findOneByValue(string $value) Return the first ChildAttributeTypeAvMeta filtered by the value column
 * @method     ChildAttributeTypeAvMeta findOneByCreatedAt(string $created_at) Return the first ChildAttributeTypeAvMeta filtered by the created_at column
 * @method     ChildAttributeTypeAvMeta findOneByUpdatedAt(string $updated_at) Return the first ChildAttributeTypeAvMeta filtered by the updated_at column
 *
 * @method     array findById(int $id) Return ChildAttributeTypeAvMeta objects filtered by the id column
 * @method     array findByAttributeAvId(int $attribute_av_id) Return ChildAttributeTypeAvMeta objects filtered by the attribute_av_id column
 * @method     array findByAttributeAttributeTypeId(int $attribute_attribute_type_id) Return ChildAttributeTypeAvMeta objects filtered by the attribute_attribute_type_id column
 * @method     array findByLocale(string $locale) Return ChildAttributeTypeAvMeta objects filtered by the locale column
 * @method     array findByValue(string $value) Return ChildAttributeTypeAvMeta objects filtered by the value column
 * @method     array findByCreatedAt(string $created_at) Return ChildAttributeTypeAvMeta objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return ChildAttributeTypeAvMeta objects filtered by the updated_at column
 *
 */
abstract class AttributeTypeAvMetaQuery extends ModelCriteria
{

    /**
     * Initializes internal state of \AttributeType\Model\Base\AttributeTypeAvMetaQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'thelia', $modelName = '\\AttributeType\\Model\\AttributeTypeAvMeta', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildAttributeTypeAvMetaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildAttributeTypeAvMetaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof \AttributeType\Model\AttributeTypeAvMetaQuery) {
            return $criteria;
        }
        $query = new \AttributeType\Model\AttributeTypeAvMetaQuery();
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
     * @return ChildAttributeTypeAvMeta|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AttributeTypeAvMetaTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(AttributeTypeAvMetaTableMap::DATABASE_NAME);
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
     * @return   ChildAttributeTypeAvMeta A model object, or null if the key is not found
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT ID, ATTRIBUTE_AV_ID, ATTRIBUTE_ATTRIBUTE_TYPE_ID, LOCALE, VALUE, CREATED_AT, UPDATED_AT FROM attribute_type_av_meta WHERE ID = :p0';
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
            $obj = new ChildAttributeTypeAvMeta();
            $obj->hydrate($row);
            AttributeTypeAvMetaTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildAttributeTypeAvMeta|array|mixed the result, formatted by the current formatter
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
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::ID, $keys, Criteria::IN);
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
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::ID, $id, $comparison);
    }

    /**
     * Filter the query on the attribute_av_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributeAvId(1234); // WHERE attribute_av_id = 1234
     * $query->filterByAttributeAvId(array(12, 34)); // WHERE attribute_av_id IN (12, 34)
     * $query->filterByAttributeAvId(array('min' => 12)); // WHERE attribute_av_id > 12
     * </code>
     *
     * @see       filterByAttributeAv()
     *
     * @param     mixed $attributeAvId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByAttributeAvId($attributeAvId = null, $comparison = null)
    {
        if (is_array($attributeAvId)) {
            $useMinMax = false;
            if (isset($attributeAvId['min'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_AV_ID, $attributeAvId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attributeAvId['max'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_AV_ID, $attributeAvId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_AV_ID, $attributeAvId, $comparison);
    }

    /**
     * Filter the query on the attribute_attribute_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributeAttributeTypeId(1234); // WHERE attribute_attribute_type_id = 1234
     * $query->filterByAttributeAttributeTypeId(array(12, 34)); // WHERE attribute_attribute_type_id IN (12, 34)
     * $query->filterByAttributeAttributeTypeId(array('min' => 12)); // WHERE attribute_attribute_type_id > 12
     * </code>
     *
     * @see       filterByAttributeAttributeType()
     *
     * @param     mixed $attributeAttributeTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByAttributeAttributeTypeId($attributeAttributeTypeId = null, $comparison = null)
    {
        if (is_array($attributeAttributeTypeId)) {
            $useMinMax = false;
            if (isset($attributeAttributeTypeId['min'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_ATTRIBUTE_TYPE_ID, $attributeAttributeTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attributeAttributeTypeId['max'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_ATTRIBUTE_TYPE_ID, $attributeAttributeTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_ATTRIBUTE_TYPE_ID, $attributeAttributeTypeId, $comparison);
    }

    /**
     * Filter the query on the locale column
     *
     * Example usage:
     * <code>
     * $query->filterByLocale('fooValue');   // WHERE locale = 'fooValue'
     * $query->filterByLocale('%fooValue%'); // WHERE locale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByLocale($locale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locale)) {
                $locale = str_replace('*', '%', $locale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::LOCALE, $locale, $comparison);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
     * $query->filterByValue('%fooValue%'); // WHERE value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $value The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByValue($value = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($value)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $value)) {
                $value = str_replace('*', '%', $value);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::VALUE, $value, $comparison);
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
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::CREATED_AT, $createdAt, $comparison);
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
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(AttributeTypeAvMetaTableMap::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related \Thelia\Model\AttributeAv object
     *
     * @param \Thelia\Model\AttributeAv|ObjectCollection $attributeAv The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByAttributeAv($attributeAv, $comparison = null)
    {
        if ($attributeAv instanceof \Thelia\Model\AttributeAv) {
            return $this
                ->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_AV_ID, $attributeAv->getId(), $comparison);
        } elseif ($attributeAv instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_AV_ID, $attributeAv->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByAttributeAv() only accepts arguments of type \Thelia\Model\AttributeAv or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AttributeAv relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function joinAttributeAv($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AttributeAv');

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
            $this->addJoinObject($join, 'AttributeAv');
        }

        return $this;
    }

    /**
     * Use the AttributeAv relation AttributeAv object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \Thelia\Model\AttributeAvQuery A secondary query class using the current class as primary query
     */
    public function useAttributeAvQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAttributeAv($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AttributeAv', '\Thelia\Model\AttributeAvQuery');
    }

    /**
     * Filter the query by a related \AttributeType\Model\AttributeAttributeType object
     *
     * @param \AttributeType\Model\AttributeAttributeType|ObjectCollection $attributeAttributeType The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function filterByAttributeAttributeType($attributeAttributeType, $comparison = null)
    {
        if ($attributeAttributeType instanceof \AttributeType\Model\AttributeAttributeType) {
            return $this
                ->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_ATTRIBUTE_TYPE_ID, $attributeAttributeType->getId(), $comparison);
        } elseif ($attributeAttributeType instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AttributeTypeAvMetaTableMap::ATTRIBUTE_ATTRIBUTE_TYPE_ID, $attributeAttributeType->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildAttributeTypeAvMeta $attributeTypeAvMeta Object to remove from the list of results
     *
     * @return ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function prune($attributeTypeAvMeta = null)
    {
        if ($attributeTypeAvMeta) {
            $this->addUsingAlias(AttributeTypeAvMetaTableMap::ID, $attributeTypeAvMeta->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the attribute_type_av_meta table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(AttributeTypeAvMetaTableMap::DATABASE_NAME);
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
            AttributeTypeAvMetaTableMap::clearInstancePool();
            AttributeTypeAvMetaTableMap::clearRelatedInstancePool();

            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $affectedRows;
    }

    /**
     * Performs a DELETE on the database, given a ChildAttributeTypeAvMeta or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ChildAttributeTypeAvMeta object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(AttributeTypeAvMetaTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(AttributeTypeAvMetaTableMap::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();


        AttributeTypeAvMetaTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            AttributeTypeAvMetaTableMap::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(AttributeTypeAvMetaTableMap::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(AttributeTypeAvMetaTableMap::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(AttributeTypeAvMetaTableMap::UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(AttributeTypeAvMetaTableMap::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     ChildAttributeTypeAvMetaQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(AttributeTypeAvMetaTableMap::CREATED_AT);
    }

} // AttributeTypeAvMetaQuery
