<?php

namespace FedexDelivery\Model\Map;

use FedexDelivery\Model\FedexShip;
use FedexDelivery\Model\FedexShipQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'fedex_ship' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class FedexShipTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;
    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'FedexDelivery.Model.Map.FedexShipTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'thelia';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'fedex_ship';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\FedexDelivery\\Model\\FedexShip';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'FedexDelivery.Model.FedexShip';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the ID field
     */
    const ID = 'fedex_ship.ID';

    /**
     * the column name for the CLIENT_ID field
     */
    const CLIENT_ID = 'fedex_ship.CLIENT_ID';

    /**
     * the column name for the CLIENT_DATE_ORDER field
     */
    const CLIENT_DATE_ORDER = 'fedex_ship.CLIENT_DATE_ORDER';

    /**
     * the column name for the ORDER_ID field
     */
    const ORDER_ID = 'fedex_ship.ORDER_ID';

    /**
     * the column name for the FEDEX_ORDER_ID field
     */
    const FEDEX_ORDER_ID = 'fedex_ship.FEDEX_ORDER_ID';

    /**
     * the column name for the VERSION field
     */
    const VERSION = 'fedex_ship.VERSION';

    /**
     * the column name for the VERSION_CREATED_AT field
     */
    const VERSION_CREATED_AT = 'fedex_ship.VERSION_CREATED_AT';

    /**
     * the column name for the VERSION_CREATED_BY field
     */
    const VERSION_CREATED_BY = 'fedex_ship.VERSION_CREATED_BY';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'ClientId', 'ClientDateOrder', 'OrderId', 'FedexOrderId', 'Version', 'VersionCreatedAt', 'VersionCreatedBy', ),
        self::TYPE_STUDLYPHPNAME => array('id', 'clientId', 'clientDateOrder', 'orderId', 'fedexOrderId', 'version', 'versionCreatedAt', 'versionCreatedBy', ),
        self::TYPE_COLNAME       => array(FedexShipTableMap::ID, FedexShipTableMap::CLIENT_ID, FedexShipTableMap::CLIENT_DATE_ORDER, FedexShipTableMap::ORDER_ID, FedexShipTableMap::FEDEX_ORDER_ID, FedexShipTableMap::VERSION, FedexShipTableMap::VERSION_CREATED_AT, FedexShipTableMap::VERSION_CREATED_BY, ),
        self::TYPE_RAW_COLNAME   => array('ID', 'CLIENT_ID', 'CLIENT_DATE_ORDER', 'ORDER_ID', 'FEDEX_ORDER_ID', 'VERSION', 'VERSION_CREATED_AT', 'VERSION_CREATED_BY', ),
        self::TYPE_FIELDNAME     => array('id', 'client_id', 'client_date_order', 'order_id', 'fedex_order_id', 'version', 'version_created_at', 'version_created_by', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'ClientId' => 1, 'ClientDateOrder' => 2, 'OrderId' => 3, 'FedexOrderId' => 4, 'Version' => 5, 'VersionCreatedAt' => 6, 'VersionCreatedBy' => 7, ),
        self::TYPE_STUDLYPHPNAME => array('id' => 0, 'clientId' => 1, 'clientDateOrder' => 2, 'orderId' => 3, 'fedexOrderId' => 4, 'version' => 5, 'versionCreatedAt' => 6, 'versionCreatedBy' => 7, ),
        self::TYPE_COLNAME       => array(FedexShipTableMap::ID => 0, FedexShipTableMap::CLIENT_ID => 1, FedexShipTableMap::CLIENT_DATE_ORDER => 2, FedexShipTableMap::ORDER_ID => 3, FedexShipTableMap::FEDEX_ORDER_ID => 4, FedexShipTableMap::VERSION => 5, FedexShipTableMap::VERSION_CREATED_AT => 6, FedexShipTableMap::VERSION_CREATED_BY => 7, ),
        self::TYPE_RAW_COLNAME   => array('ID' => 0, 'CLIENT_ID' => 1, 'CLIENT_DATE_ORDER' => 2, 'ORDER_ID' => 3, 'FEDEX_ORDER_ID' => 4, 'VERSION' => 5, 'VERSION_CREATED_AT' => 6, 'VERSION_CREATED_BY' => 7, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'client_id' => 1, 'client_date_order' => 2, 'order_id' => 3, 'fedex_order_id' => 4, 'version' => 5, 'version_created_at' => 6, 'version_created_by' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('fedex_ship');
        $this->setPhpName('FedexShip');
        $this->setClassName('\\FedexDelivery\\Model\\FedexShip');
        $this->setPackage('FedexDelivery.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('CLIENT_ID', 'ClientId', 'INTEGER', false, null, null);
        $this->addColumn('CLIENT_DATE_ORDER', 'ClientDateOrder', 'DATE', false, null, null);
        $this->addColumn('ORDER_ID', 'OrderId', 'LONGVARCHAR', false, null, null);
        $this->addColumn('FEDEX_ORDER_ID', 'FedexOrderId', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VERSION', 'Version', 'INTEGER', false, null, 0);
        $this->addColumn('VERSION_CREATED_AT', 'VersionCreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('VERSION_CREATED_BY', 'VersionCreatedBy', 'VARCHAR', false, 100, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FedexShipVersion', '\\FedexDelivery\\Model\\FedexShipVersion', RelationMap::ONE_TO_MANY, array('id' => 'id', ), 'CASCADE', null, 'FedexShipVersions');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'versionable' => array('version_column' => 'version', 'version_table' => '', 'log_created_at' => 'true', 'log_created_by' => 'true', 'log_comment' => 'false', 'version_created_at_column' => 'version_created_at', 'version_created_by_column' => 'version_created_by', 'version_comment_column' => 'version_comment', ),
        );
    } // getBehaviors()
    /**
     * Method to invalidate the instance pool of all tables related to fedex_ship     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ".$this->getClassNameFromBuilder($joinedTableTableMapBuilder)." instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
                FedexShipVersionTableMap::clearInstancePool();
            }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {

            return (int) $row[
                            $indexType == TableMap::TYPE_NUM
                            ? 0 + $offset
                            : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
                        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? FedexShipTableMap::CLASS_DEFAULT : FedexShipTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
     *                            One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     * @return array (FedexShip object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = FedexShipTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = FedexShipTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + FedexShipTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FedexShipTableMap::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            FedexShipTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = FedexShipTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = FedexShipTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FedexShipTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(FedexShipTableMap::ID);
            $criteria->addSelectColumn(FedexShipTableMap::CLIENT_ID);
            $criteria->addSelectColumn(FedexShipTableMap::CLIENT_DATE_ORDER);
            $criteria->addSelectColumn(FedexShipTableMap::ORDER_ID);
            $criteria->addSelectColumn(FedexShipTableMap::FEDEX_ORDER_ID);
            $criteria->addSelectColumn(FedexShipTableMap::VERSION);
            $criteria->addSelectColumn(FedexShipTableMap::VERSION_CREATED_AT);
            $criteria->addSelectColumn(FedexShipTableMap::VERSION_CREATED_BY);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.CLIENT_ID');
            $criteria->addSelectColumn($alias . '.CLIENT_DATE_ORDER');
            $criteria->addSelectColumn($alias . '.ORDER_ID');
            $criteria->addSelectColumn($alias . '.FEDEX_ORDER_ID');
            $criteria->addSelectColumn($alias . '.VERSION');
            $criteria->addSelectColumn($alias . '.VERSION_CREATED_AT');
            $criteria->addSelectColumn($alias . '.VERSION_CREATED_BY');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(FedexShipTableMap::DATABASE_NAME)->getTable(FedexShipTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getServiceContainer()->getDatabaseMap(FedexShipTableMap::DATABASE_NAME);
      if (!$dbMap->hasTable(FedexShipTableMap::TABLE_NAME)) {
        $dbMap->addTableObject(new FedexShipTableMap());
      }
    }

    /**
     * Performs a DELETE on the database, given a FedexShip or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or FedexShip object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(FedexShipTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \FedexDelivery\Model\FedexShip) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FedexShipTableMap::DATABASE_NAME);
            $criteria->add(FedexShipTableMap::ID, (array) $values, Criteria::IN);
        }

        $query = FedexShipQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) { FedexShipTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) { FedexShipTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the fedex_ship table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return FedexShipQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a FedexShip or Criteria object.
     *
     * @param mixed               $criteria Criteria or FedexShip object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(FedexShipTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from FedexShip object
        }

        if ($criteria->containsKey(FedexShipTableMap::ID) && $criteria->keyContainsValue(FedexShipTableMap::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FedexShipTableMap::ID.')');
        }


        // Set the correct dbName
        $query = FedexShipQuery::create()->mergeWith($criteria);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = $query->doInsert($con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

} // FedexShipTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
FedexShipTableMap::buildTableMap();
