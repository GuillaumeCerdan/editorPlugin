<?php

namespace FedexDelivery\Model\Base;

use \Exception;
use \PDO;
use FedexDelivery\Model\FedexShipVersion as ChildFedexShipVersion;
use FedexDelivery\Model\FedexShipVersionQuery as ChildFedexShipVersionQuery;
use FedexDelivery\Model\Map\FedexShipVersionTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'fedex_ship_version' table.
 *
 *
 *
 * @method     ChildFedexShipVersionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildFedexShipVersionQuery orderByClientId($order = Criteria::ASC) Order by the client_id column
 * @method     ChildFedexShipVersionQuery orderByClientDateOrder($order = Criteria::ASC) Order by the client_date_order column
 * @method     ChildFedexShipVersionQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method     ChildFedexShipVersionQuery orderByFedexOrderId($order = Criteria::ASC) Order by the fedex_order_id column
 * @method     ChildFedexShipVersionQuery orderByVersion($order = Criteria::ASC) Order by the version column
 * @method     ChildFedexShipVersionQuery orderByVersionCreatedAt($order = Criteria::ASC) Order by the version_created_at column
 * @method     ChildFedexShipVersionQuery orderByVersionCreatedBy($order = Criteria::ASC) Order by the version_created_by column
 *
 * @method     ChildFedexShipVersionQuery groupById() Group by the id column
 * @method     ChildFedexShipVersionQuery groupByClientId() Group by the client_id column
 * @method     ChildFedexShipVersionQuery groupByClientDateOrder() Group by the client_date_order column
 * @method     ChildFedexShipVersionQuery groupByOrderId() Group by the order_id column
 * @method     ChildFedexShipVersionQuery groupByFedexOrderId() Group by the fedex_order_id column
 * @method     ChildFedexShipVersionQuery groupByVersion() Group by the version column
 * @method     ChildFedexShipVersionQuery groupByVersionCreatedAt() Group by the version_created_at column
 * @method     ChildFedexShipVersionQuery groupByVersionCreatedBy() Group by the version_created_by column
 *
 * @method     ChildFedexShipVersionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildFedexShipVersionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildFedexShipVersionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildFedexShipVersionQuery leftJoinFedexShip($relationAlias = null) Adds a LEFT JOIN clause to the query using the FedexShip relation
 * @method     ChildFedexShipVersionQuery rightJoinFedexShip($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FedexShip relation
 * @method     ChildFedexShipVersionQuery innerJoinFedexShip($relationAlias = null) Adds a INNER JOIN clause to the query using the FedexShip relation
 *
 * @method     ChildFedexShipVersion findOne(ConnectionInterface $con = null) Return the first ChildFedexShipVersion matching the query
 * @method     ChildFedexShipVersion findOneOrCreate(ConnectionInterface $con = null) Return the first ChildFedexShipVersion matching the query, or a new ChildFedexShipVersion object populated from the query conditions when no match is found
 *
 * @method     ChildFedexShipVersion findOneById(int $id) Return the first ChildFedexShipVersion filtered by the id column
 * @method     ChildFedexShipVersion findOneByClientId(int $client_id) Return the first ChildFedexShipVersion filtered by the client_id column
 * @method     ChildFedexShipVersion findOneByClientDateOrder(string $client_date_order) Return the first ChildFedexShipVersion filtered by the client_date_order column
 * @method     ChildFedexShipVersion findOneByOrderId(string $order_id) Return the first ChildFedexShipVersion filtered by the order_id column
 * @method     ChildFedexShipVersion findOneByFedexOrderId(string $fedex_order_id) Return the first ChildFedexShipVersion filtered by the fedex_order_id column
 * @method     ChildFedexShipVersion findOneByVersion(int $version) Return the first ChildFedexShipVersion filtered by the version column
 * @method     ChildFedexShipVersion findOneByVersionCreatedAt(string $version_created_at) Return the first ChildFedexShipVersion filtered by the version_created_at column
 * @method     ChildFedexShipVersion findOneByVersionCreatedBy(string $version_created_by) Return the first ChildFedexShipVersion filtered by the version_created_by column
 *
 * @method     array findById(int $id) Return ChildFedexShipVersion objects filtered by the id column
 * @method     array findByClientId(int $client_id) Return ChildFedexShipVersion objects filtered by the client_id column
 * @method     array findByClientDateOrder(string $client_date_order) Return ChildFedexShipVersion objects filtered by the client_date_order column
 * @method     array findByOrderId(string $order_id) Return ChildFedexShipVersion objects filtered by the order_id column
 * @method     array findByFedexOrderId(string $fedex_order_id) Return ChildFedexShipVersion objects filtered by the fedex_order_id column
 * @method     array findByVersion(int $version) Return ChildFedexShipVersion objects filtered by the version column
 * @method     array findByVersionCreatedAt(string $version_created_at) Return ChildFedexShipVersion objects filtered by the version_created_at column
 * @method     array findByVersionCreatedBy(string $version_created_by) Return ChildFedexShipVersion objects filtered by the version_created_by column
 *
 */
abstract class FedexShipVersionQuery extends ModelCriteria
{

    /**
     * Initializes internal state of \FedexDelivery\Model\Base\FedexShipVersionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'thelia', $modelName = '\\FedexDelivery\\Model\\FedexShipVersion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildFedexShipVersionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildFedexShipVersionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof \FedexDelivery\Model\FedexShipVersionQuery) {
            return $criteria;
        }
        $query = new \FedexDelivery\Model\FedexShipVersionQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$id, $version] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildFedexShipVersion|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FedexShipVersionTableMap::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(FedexShipVersionTableMap::DATABASE_NAME);
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
     * @return   ChildFedexShipVersion A model object, or null if the key is not found
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT ID, CLIENT_ID, CLIENT_DATE_ORDER, ORDER_ID, FEDEX_ORDER_ID, VERSION, VERSION_CREATED_AT, VERSION_CREATED_BY FROM fedex_ship_version WHERE ID = :p0 AND VERSION = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            $obj = new ChildFedexShipVersion();
            $obj->hydrate($row);
            FedexShipVersionTableMap::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return ChildFedexShipVersion|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(FedexShipVersionTableMap::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(FedexShipVersionTableMap::VERSION, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(FedexShipVersionTableMap::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(FedexShipVersionTableMap::VERSION, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @see       filterByFedexShip()
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FedexShipVersionTableMap::ID, $id, $comparison);
    }

    /**
     * Filter the query on the client_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClientId(1234); // WHERE client_id = 1234
     * $query->filterByClientId(array(12, 34)); // WHERE client_id IN (12, 34)
     * $query->filterByClientId(array('min' => 12)); // WHERE client_id > 12
     * </code>
     *
     * @param     mixed $clientId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByClientId($clientId = null, $comparison = null)
    {
        if (is_array($clientId)) {
            $useMinMax = false;
            if (isset($clientId['min'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::CLIENT_ID, $clientId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clientId['max'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::CLIENT_ID, $clientId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FedexShipVersionTableMap::CLIENT_ID, $clientId, $comparison);
    }

    /**
     * Filter the query on the client_date_order column
     *
     * Example usage:
     * <code>
     * $query->filterByClientDateOrder('2011-03-14'); // WHERE client_date_order = '2011-03-14'
     * $query->filterByClientDateOrder('now'); // WHERE client_date_order = '2011-03-14'
     * $query->filterByClientDateOrder(array('max' => 'yesterday')); // WHERE client_date_order > '2011-03-13'
     * </code>
     *
     * @param     mixed $clientDateOrder The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByClientDateOrder($clientDateOrder = null, $comparison = null)
    {
        if (is_array($clientDateOrder)) {
            $useMinMax = false;
            if (isset($clientDateOrder['min'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::CLIENT_DATE_ORDER, $clientDateOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clientDateOrder['max'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::CLIENT_DATE_ORDER, $clientDateOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FedexShipVersionTableMap::CLIENT_DATE_ORDER, $clientDateOrder, $comparison);
    }

    /**
     * Filter the query on the order_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderId('fooValue');   // WHERE order_id = 'fooValue'
     * $query->filterByOrderId('%fooValue%'); // WHERE order_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $orderId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByOrderId($orderId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orderId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $orderId)) {
                $orderId = str_replace('*', '%', $orderId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FedexShipVersionTableMap::ORDER_ID, $orderId, $comparison);
    }

    /**
     * Filter the query on the fedex_order_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFedexOrderId('fooValue');   // WHERE fedex_order_id = 'fooValue'
     * $query->filterByFedexOrderId('%fooValue%'); // WHERE fedex_order_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fedexOrderId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByFedexOrderId($fedexOrderId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fedexOrderId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fedexOrderId)) {
                $fedexOrderId = str_replace('*', '%', $fedexOrderId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FedexShipVersionTableMap::FEDEX_ORDER_ID, $fedexOrderId, $comparison);
    }

    /**
     * Filter the query on the version column
     *
     * Example usage:
     * <code>
     * $query->filterByVersion(1234); // WHERE version = 1234
     * $query->filterByVersion(array(12, 34)); // WHERE version IN (12, 34)
     * $query->filterByVersion(array('min' => 12)); // WHERE version > 12
     * </code>
     *
     * @param     mixed $version The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByVersion($version = null, $comparison = null)
    {
        if (is_array($version)) {
            $useMinMax = false;
            if (isset($version['min'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::VERSION, $version['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($version['max'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::VERSION, $version['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FedexShipVersionTableMap::VERSION, $version, $comparison);
    }

    /**
     * Filter the query on the version_created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByVersionCreatedAt('2011-03-14'); // WHERE version_created_at = '2011-03-14'
     * $query->filterByVersionCreatedAt('now'); // WHERE version_created_at = '2011-03-14'
     * $query->filterByVersionCreatedAt(array('max' => 'yesterday')); // WHERE version_created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $versionCreatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByVersionCreatedAt($versionCreatedAt = null, $comparison = null)
    {
        if (is_array($versionCreatedAt)) {
            $useMinMax = false;
            if (isset($versionCreatedAt['min'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::VERSION_CREATED_AT, $versionCreatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versionCreatedAt['max'])) {
                $this->addUsingAlias(FedexShipVersionTableMap::VERSION_CREATED_AT, $versionCreatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FedexShipVersionTableMap::VERSION_CREATED_AT, $versionCreatedAt, $comparison);
    }

    /**
     * Filter the query on the version_created_by column
     *
     * Example usage:
     * <code>
     * $query->filterByVersionCreatedBy('fooValue');   // WHERE version_created_by = 'fooValue'
     * $query->filterByVersionCreatedBy('%fooValue%'); // WHERE version_created_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $versionCreatedBy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByVersionCreatedBy($versionCreatedBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($versionCreatedBy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $versionCreatedBy)) {
                $versionCreatedBy = str_replace('*', '%', $versionCreatedBy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FedexShipVersionTableMap::VERSION_CREATED_BY, $versionCreatedBy, $comparison);
    }

    /**
     * Filter the query by a related \FedexDelivery\Model\FedexShip object
     *
     * @param \FedexDelivery\Model\FedexShip|ObjectCollection $fedexShip The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function filterByFedexShip($fedexShip, $comparison = null)
    {
        if ($fedexShip instanceof \FedexDelivery\Model\FedexShip) {
            return $this
                ->addUsingAlias(FedexShipVersionTableMap::ID, $fedexShip->getId(), $comparison);
        } elseif ($fedexShip instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FedexShipVersionTableMap::ID, $fedexShip->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByFedexShip() only accepts arguments of type \FedexDelivery\Model\FedexShip or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FedexShip relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function joinFedexShip($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FedexShip');

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
            $this->addJoinObject($join, 'FedexShip');
        }

        return $this;
    }

    /**
     * Use the FedexShip relation FedexShip object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \FedexDelivery\Model\FedexShipQuery A secondary query class using the current class as primary query
     */
    public function useFedexShipQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFedexShip($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FedexShip', '\FedexDelivery\Model\FedexShipQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildFedexShipVersion $fedexShipVersion Object to remove from the list of results
     *
     * @return ChildFedexShipVersionQuery The current query, for fluid interface
     */
    public function prune($fedexShipVersion = null)
    {
        if ($fedexShipVersion) {
            $this->addCond('pruneCond0', $this->getAliasedColName(FedexShipVersionTableMap::ID), $fedexShipVersion->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(FedexShipVersionTableMap::VERSION), $fedexShipVersion->getVersion(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the fedex_ship_version table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(FedexShipVersionTableMap::DATABASE_NAME);
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
            FedexShipVersionTableMap::clearInstancePool();
            FedexShipVersionTableMap::clearRelatedInstancePool();

            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $affectedRows;
    }

    /**
     * Performs a DELETE on the database, given a ChildFedexShipVersion or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ChildFedexShipVersion object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(FedexShipVersionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(FedexShipVersionTableMap::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();


        FedexShipVersionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            FedexShipVersionTableMap::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

} // FedexShipVersionQuery
