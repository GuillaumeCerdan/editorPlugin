<?php

namespace AttributeType\Model\Base;

use \Exception;
use \PDO;
use AttributeType\Model\AttributeAttributeType as ChildAttributeAttributeType;
use AttributeType\Model\AttributeAttributeTypeQuery as ChildAttributeAttributeTypeQuery;
use AttributeType\Model\Map\AttributeAttributeTypeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Thelia\Model\Attribute;

/**
 * Base class that represents a query for the 'attribute_attribute_type' table.
 *
 *
 *
 * @method     ChildAttributeAttributeTypeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildAttributeAttributeTypeQuery orderByAttributeId($order = Criteria::ASC) Order by the attribute_id column
 * @method     ChildAttributeAttributeTypeQuery orderByAttributeTypeId($order = Criteria::ASC) Order by the attribute_type_id column
 *
 * @method     ChildAttributeAttributeTypeQuery groupById() Group by the id column
 * @method     ChildAttributeAttributeTypeQuery groupByAttributeId() Group by the attribute_id column
 * @method     ChildAttributeAttributeTypeQuery groupByAttributeTypeId() Group by the attribute_type_id column
 *
 * @method     ChildAttributeAttributeTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildAttributeAttributeTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildAttributeAttributeTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildAttributeAttributeTypeQuery leftJoinAttribute($relationAlias = null) Adds a LEFT JOIN clause to the query using the Attribute relation
 * @method     ChildAttributeAttributeTypeQuery rightJoinAttribute($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Attribute relation
 * @method     ChildAttributeAttributeTypeQuery innerJoinAttribute($relationAlias = null) Adds a INNER JOIN clause to the query using the Attribute relation
 *
 * @method     ChildAttributeAttributeTypeQuery leftJoinAttributeType($relationAlias = null) Adds a LEFT JOIN clause to the query using the AttributeType relation
 * @method     ChildAttributeAttributeTypeQuery rightJoinAttributeType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AttributeType relation
 * @method     ChildAttributeAttributeTypeQuery innerJoinAttributeType($relationAlias = null) Adds a INNER JOIN clause to the query using the AttributeType relation
 *
 * @method     ChildAttributeAttributeTypeQuery leftJoinAttributeTypeAvMeta($relationAlias = null) Adds a LEFT JOIN clause to the query using the AttributeTypeAvMeta relation
 * @method     ChildAttributeAttributeTypeQuery rightJoinAttributeTypeAvMeta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AttributeTypeAvMeta relation
 * @method     ChildAttributeAttributeTypeQuery innerJoinAttributeTypeAvMeta($relationAlias = null) Adds a INNER JOIN clause to the query using the AttributeTypeAvMeta relation
 *
 * @method     ChildAttributeAttributeType findOne(ConnectionInterface $con = null) Return the first ChildAttributeAttributeType matching the query
 * @method     ChildAttributeAttributeType findOneOrCreate(ConnectionInterface $con = null) Return the first ChildAttributeAttributeType matching the query, or a new ChildAttributeAttributeType object populated from the query conditions when no match is found
 *
 * @method     ChildAttributeAttributeType findOneById(int $id) Return the first ChildAttributeAttributeType filtered by the id column
 * @method     ChildAttributeAttributeType findOneByAttributeId(int $attribute_id) Return the first ChildAttributeAttributeType filtered by the attribute_id column
 * @method     ChildAttributeAttributeType findOneByAttributeTypeId(int $attribute_type_id) Return the first ChildAttributeAttributeType filtered by the attribute_type_id column
 *
 * @method     array findById(int $id) Return ChildAttributeAttributeType objects filtered by the id column
 * @method     array findByAttributeId(int $attribute_id) Return ChildAttributeAttributeType objects filtered by the attribute_id column
 * @method     array findByAttributeTypeId(int $attribute_type_id) Return ChildAttributeAttributeType objects filtered by the attribute_type_id column
 *
 */
abstract class AttributeAttributeTypeQuery extends ModelCriteria
{

    /**
     * Initializes internal state of \AttributeType\Model\Base\AttributeAttributeTypeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'thelia', $modelName = '\\AttributeType\\Model\\AttributeAttributeType', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildAttributeAttributeTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildAttributeAttributeTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof \AttributeType\Model\AttributeAttributeTypeQuery) {
            return $criteria;
        }
        $query = new \AttributeType\Model\AttributeAttributeTypeQuery();
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
     * @return ChildAttributeAttributeType|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AttributeAttributeTypeTableMap::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(AttributeAttributeTypeTableMap::DATABASE_NAME);
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
     * @return   ChildAttributeAttributeType A model object, or null if the key is not found
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT ID, ATTRIBUTE_ID, ATTRIBUTE_TYPE_ID FROM attribute_attribute_type WHERE ID = :p0';
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
            $obj = new ChildAttributeAttributeType();
            $obj->hydrate($row);
            AttributeAttributeTypeTableMap::addInstanceToPool($obj, (string) $key);
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
     * @return ChildAttributeAttributeType|array|mixed the result, formatted by the current formatter
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
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AttributeAttributeTypeTableMap::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AttributeAttributeTypeTableMap::ID, $keys, Criteria::IN);
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
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AttributeAttributeTypeTableMap::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AttributeAttributeTypeTableMap::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeAttributeTypeTableMap::ID, $id, $comparison);
    }

    /**
     * Filter the query on the attribute_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributeId(1234); // WHERE attribute_id = 1234
     * $query->filterByAttributeId(array(12, 34)); // WHERE attribute_id IN (12, 34)
     * $query->filterByAttributeId(array('min' => 12)); // WHERE attribute_id > 12
     * </code>
     *
     * @see       filterByAttribute()
     *
     * @param     mixed $attributeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByAttributeId($attributeId = null, $comparison = null)
    {
        if (is_array($attributeId)) {
            $useMinMax = false;
            if (isset($attributeId['min'])) {
                $this->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_ID, $attributeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attributeId['max'])) {
                $this->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_ID, $attributeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_ID, $attributeId, $comparison);
    }

    /**
     * Filter the query on the attribute_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributeTypeId(1234); // WHERE attribute_type_id = 1234
     * $query->filterByAttributeTypeId(array(12, 34)); // WHERE attribute_type_id IN (12, 34)
     * $query->filterByAttributeTypeId(array('min' => 12)); // WHERE attribute_type_id > 12
     * </code>
     *
     * @see       filterByAttributeType()
     *
     * @param     mixed $attributeTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByAttributeTypeId($attributeTypeId = null, $comparison = null)
    {
        if (is_array($attributeTypeId)) {
            $useMinMax = false;
            if (isset($attributeTypeId['min'])) {
                $this->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_TYPE_ID, $attributeTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attributeTypeId['max'])) {
                $this->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_TYPE_ID, $attributeTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_TYPE_ID, $attributeTypeId, $comparison);
    }

    /**
     * Filter the query by a related \Thelia\Model\Attribute object
     *
     * @param \Thelia\Model\Attribute|ObjectCollection $attribute The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByAttribute($attribute, $comparison = null)
    {
        if ($attribute instanceof \Thelia\Model\Attribute) {
            return $this
                ->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_ID, $attribute->getId(), $comparison);
        } elseif ($attribute instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_ID, $attribute->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByAttribute() only accepts arguments of type \Thelia\Model\Attribute or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Attribute relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function joinAttribute($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Attribute');

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
            $this->addJoinObject($join, 'Attribute');
        }

        return $this;
    }

    /**
     * Use the Attribute relation Attribute object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \Thelia\Model\AttributeQuery A secondary query class using the current class as primary query
     */
    public function useAttributeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAttribute($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Attribute', '\Thelia\Model\AttributeQuery');
    }

    /**
     * Filter the query by a related \AttributeType\Model\AttributeType object
     *
     * @param \AttributeType\Model\AttributeType|ObjectCollection $attributeType The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByAttributeType($attributeType, $comparison = null)
    {
        if ($attributeType instanceof \AttributeType\Model\AttributeType) {
            return $this
                ->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_TYPE_ID, $attributeType->getId(), $comparison);
        } elseif ($attributeType instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AttributeAttributeTypeTableMap::ATTRIBUTE_TYPE_ID, $attributeType->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByAttributeType() only accepts arguments of type \AttributeType\Model\AttributeType or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AttributeType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function joinAttributeType($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AttributeType');

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
            $this->addJoinObject($join, 'AttributeType');
        }

        return $this;
    }

    /**
     * Use the AttributeType relation AttributeType object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \AttributeType\Model\AttributeTypeQuery A secondary query class using the current class as primary query
     */
    public function useAttributeTypeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAttributeType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AttributeType', '\AttributeType\Model\AttributeTypeQuery');
    }

    /**
     * Filter the query by a related \AttributeType\Model\AttributeTypeAvMeta object
     *
     * @param \AttributeType\Model\AttributeTypeAvMeta|ObjectCollection $attributeTypeAvMeta  the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function filterByAttributeTypeAvMeta($attributeTypeAvMeta, $comparison = null)
    {
        if ($attributeTypeAvMeta instanceof \AttributeType\Model\AttributeTypeAvMeta) {
            return $this
                ->addUsingAlias(AttributeAttributeTypeTableMap::ID, $attributeTypeAvMeta->getAttributeAttributeTypeId(), $comparison);
        } elseif ($attributeTypeAvMeta instanceof ObjectCollection) {
            return $this
                ->useAttributeTypeAvMetaQuery()
                ->filterByPrimaryKeys($attributeTypeAvMeta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAttributeTypeAvMeta() only accepts arguments of type \AttributeType\Model\AttributeTypeAvMeta or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AttributeTypeAvMeta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function joinAttributeTypeAvMeta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AttributeTypeAvMeta');

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
            $this->addJoinObject($join, 'AttributeTypeAvMeta');
        }

        return $this;
    }

    /**
     * Use the AttributeTypeAvMeta relation AttributeTypeAvMeta object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \AttributeType\Model\AttributeTypeAvMetaQuery A secondary query class using the current class as primary query
     */
    public function useAttributeTypeAvMetaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAttributeTypeAvMeta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AttributeTypeAvMeta', '\AttributeType\Model\AttributeTypeAvMetaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildAttributeAttributeType $attributeAttributeType Object to remove from the list of results
     *
     * @return ChildAttributeAttributeTypeQuery The current query, for fluid interface
     */
    public function prune($attributeAttributeType = null)
    {
        if ($attributeAttributeType) {
            $this->addUsingAlias(AttributeAttributeTypeTableMap::ID, $attributeAttributeType->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the attribute_attribute_type table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(AttributeAttributeTypeTableMap::DATABASE_NAME);
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
            AttributeAttributeTypeTableMap::clearInstancePool();
            AttributeAttributeTypeTableMap::clearRelatedInstancePool();

            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $affectedRows;
    }

    /**
     * Performs a DELETE on the database, given a ChildAttributeAttributeType or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ChildAttributeAttributeType object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(AttributeAttributeTypeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(AttributeAttributeTypeTableMap::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();


        AttributeAttributeTypeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            AttributeAttributeTypeTableMap::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

} // AttributeAttributeTypeQuery
