<?php

namespace Thelia\Model\Map;

use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;
use Thelia\Model\OrderAddress;
use Thelia\Model\OrderAddressQuery;


/**
 * This class defines the structure of the 'order_address' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class OrderAddressTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;
    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Thelia.Model.Map.OrderAddressTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'thelia';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'order_address';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Thelia\\Model\\OrderAddress';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Thelia.Model.OrderAddress';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 16;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 16;

    /**
     * the column name for the ID field
     */
    const ID = 'order_address.ID';

    /**
     * the column name for the CUSTOMER_TITLE_ID field
     */
    const CUSTOMER_TITLE_ID = 'order_address.CUSTOMER_TITLE_ID';

    /**
     * the column name for the COMPANY field
     */
    const COMPANY = 'order_address.COMPANY';

    /**
     * the column name for the FIRSTNAME field
     */
    const FIRSTNAME = 'order_address.FIRSTNAME';

    /**
     * the column name for the LASTNAME field
     */
    const LASTNAME = 'order_address.LASTNAME';

    /**
     * the column name for the ADDRESS1 field
     */
    const ADDRESS1 = 'order_address.ADDRESS1';

    /**
     * the column name for the ADDRESS2 field
     */
    const ADDRESS2 = 'order_address.ADDRESS2';

    /**
     * the column name for the ADDRESS3 field
     */
    const ADDRESS3 = 'order_address.ADDRESS3';

    /**
     * the column name for the ZIPCODE field
     */
    const ZIPCODE = 'order_address.ZIPCODE';

    /**
     * the column name for the CITY field
     */
    const CITY = 'order_address.CITY';

    /**
     * the column name for the PHONE field
     */
    const PHONE = 'order_address.PHONE';

    /**
     * the column name for the CELLPHONE field
     */
    const CELLPHONE = 'order_address.CELLPHONE';

    /**
     * the column name for the COUNTRY_ID field
     */
    const COUNTRY_ID = 'order_address.COUNTRY_ID';

    /**
     * the column name for the STATE_ID field
     */
    const STATE_ID = 'order_address.STATE_ID';

    /**
     * the column name for the CREATED_AT field
     */
    const CREATED_AT = 'order_address.CREATED_AT';

    /**
     * the column name for the UPDATED_AT field
     */
    const UPDATED_AT = 'order_address.UPDATED_AT';

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
        self::TYPE_PHPNAME       => array('Id', 'CustomerTitleId', 'Company', 'Firstname', 'Lastname', 'Address1', 'Address2', 'Address3', 'Zipcode', 'City', 'Phone', 'Cellphone', 'CountryId', 'StateId', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_STUDLYPHPNAME => array('id', 'customerTitleId', 'company', 'firstname', 'lastname', 'address1', 'address2', 'address3', 'zipcode', 'city', 'phone', 'cellphone', 'countryId', 'stateId', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(OrderAddressTableMap::ID, OrderAddressTableMap::CUSTOMER_TITLE_ID, OrderAddressTableMap::COMPANY, OrderAddressTableMap::FIRSTNAME, OrderAddressTableMap::LASTNAME, OrderAddressTableMap::ADDRESS1, OrderAddressTableMap::ADDRESS2, OrderAddressTableMap::ADDRESS3, OrderAddressTableMap::ZIPCODE, OrderAddressTableMap::CITY, OrderAddressTableMap::PHONE, OrderAddressTableMap::CELLPHONE, OrderAddressTableMap::COUNTRY_ID, OrderAddressTableMap::STATE_ID, OrderAddressTableMap::CREATED_AT, OrderAddressTableMap::UPDATED_AT, ),
        self::TYPE_RAW_COLNAME   => array('ID', 'CUSTOMER_TITLE_ID', 'COMPANY', 'FIRSTNAME', 'LASTNAME', 'ADDRESS1', 'ADDRESS2', 'ADDRESS3', 'ZIPCODE', 'CITY', 'PHONE', 'CELLPHONE', 'COUNTRY_ID', 'STATE_ID', 'CREATED_AT', 'UPDATED_AT', ),
        self::TYPE_FIELDNAME     => array('id', 'customer_title_id', 'company', 'firstname', 'lastname', 'address1', 'address2', 'address3', 'zipcode', 'city', 'phone', 'cellphone', 'country_id', 'state_id', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'CustomerTitleId' => 1, 'Company' => 2, 'Firstname' => 3, 'Lastname' => 4, 'Address1' => 5, 'Address2' => 6, 'Address3' => 7, 'Zipcode' => 8, 'City' => 9, 'Phone' => 10, 'Cellphone' => 11, 'CountryId' => 12, 'StateId' => 13, 'CreatedAt' => 14, 'UpdatedAt' => 15, ),
        self::TYPE_STUDLYPHPNAME => array('id' => 0, 'customerTitleId' => 1, 'company' => 2, 'firstname' => 3, 'lastname' => 4, 'address1' => 5, 'address2' => 6, 'address3' => 7, 'zipcode' => 8, 'city' => 9, 'phone' => 10, 'cellphone' => 11, 'countryId' => 12, 'stateId' => 13, 'createdAt' => 14, 'updatedAt' => 15, ),
        self::TYPE_COLNAME       => array(OrderAddressTableMap::ID => 0, OrderAddressTableMap::CUSTOMER_TITLE_ID => 1, OrderAddressTableMap::COMPANY => 2, OrderAddressTableMap::FIRSTNAME => 3, OrderAddressTableMap::LASTNAME => 4, OrderAddressTableMap::ADDRESS1 => 5, OrderAddressTableMap::ADDRESS2 => 6, OrderAddressTableMap::ADDRESS3 => 7, OrderAddressTableMap::ZIPCODE => 8, OrderAddressTableMap::CITY => 9, OrderAddressTableMap::PHONE => 10, OrderAddressTableMap::CELLPHONE => 11, OrderAddressTableMap::COUNTRY_ID => 12, OrderAddressTableMap::STATE_ID => 13, OrderAddressTableMap::CREATED_AT => 14, OrderAddressTableMap::UPDATED_AT => 15, ),
        self::TYPE_RAW_COLNAME   => array('ID' => 0, 'CUSTOMER_TITLE_ID' => 1, 'COMPANY' => 2, 'FIRSTNAME' => 3, 'LASTNAME' => 4, 'ADDRESS1' => 5, 'ADDRESS2' => 6, 'ADDRESS3' => 7, 'ZIPCODE' => 8, 'CITY' => 9, 'PHONE' => 10, 'CELLPHONE' => 11, 'COUNTRY_ID' => 12, 'STATE_ID' => 13, 'CREATED_AT' => 14, 'UPDATED_AT' => 15, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'customer_title_id' => 1, 'company' => 2, 'firstname' => 3, 'lastname' => 4, 'address1' => 5, 'address2' => 6, 'address3' => 7, 'zipcode' => 8, 'city' => 9, 'phone' => 10, 'cellphone' => 11, 'country_id' => 12, 'state_id' => 13, 'created_at' => 14, 'updated_at' => 15, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $this->setName('order_address');
        $this->setPhpName('OrderAddress');
        $this->setClassName('\\Thelia\\Model\\OrderAddress');
        $this->setPackage('Thelia.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('CUSTOMER_TITLE_ID', 'CustomerTitleId', 'INTEGER', 'customer_title', 'ID', false, null, null);
        $this->addColumn('COMPANY', 'Company', 'VARCHAR', false, 255, null);
        $this->addColumn('FIRSTNAME', 'Firstname', 'VARCHAR', true, 255, null);
        $this->addColumn('LASTNAME', 'Lastname', 'VARCHAR', true, 255, null);
        $this->addColumn('ADDRESS1', 'Address1', 'VARCHAR', true, 255, null);
        $this->addColumn('ADDRESS2', 'Address2', 'VARCHAR', false, 255, null);
        $this->addColumn('ADDRESS3', 'Address3', 'VARCHAR', false, 255, null);
        $this->addColumn('ZIPCODE', 'Zipcode', 'VARCHAR', true, 10, null);
        $this->addColumn('CITY', 'City', 'VARCHAR', true, 255, null);
        $this->addColumn('PHONE', 'Phone', 'VARCHAR', false, 20, null);
        $this->addColumn('CELLPHONE', 'Cellphone', 'VARCHAR', false, 20, null);
        $this->addForeignKey('COUNTRY_ID', 'CountryId', 'INTEGER', 'country', 'ID', true, null, null);
        $this->addForeignKey('STATE_ID', 'StateId', 'INTEGER', 'state', 'ID', false, null, null);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CustomerTitle', '\\Thelia\\Model\\CustomerTitle', RelationMap::MANY_TO_ONE, array('customer_title_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('Country', '\\Thelia\\Model\\Country', RelationMap::MANY_TO_ONE, array('country_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('State', '\\Thelia\\Model\\State', RelationMap::MANY_TO_ONE, array('state_id' => 'id', ), 'RESTRICT', 'RESTRICT');
        $this->addRelation('OrderRelatedByInvoiceOrderAddressId', '\\Thelia\\Model\\Order', RelationMap::ONE_TO_MANY, array('id' => 'invoice_order_address_id', ), 'RESTRICT', 'RESTRICT', 'OrdersRelatedByInvoiceOrderAddressId');
        $this->addRelation('OrderRelatedByDeliveryOrderAddressId', '\\Thelia\\Model\\Order', RelationMap::ONE_TO_MANY, array('id' => 'delivery_order_address_id', ), 'RESTRICT', 'RESTRICT', 'OrdersRelatedByDeliveryOrderAddressId');
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
            'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
        );
    } // getBehaviors()

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
        return $withPrefix ? OrderAddressTableMap::CLASS_DEFAULT : OrderAddressTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_STUDLYPHPNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     * @return array (OrderAddress object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = OrderAddressTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = OrderAddressTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + OrderAddressTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OrderAddressTableMap::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            OrderAddressTableMap::addInstanceToPool($obj, $key);
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
            $key = OrderAddressTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = OrderAddressTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OrderAddressTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(OrderAddressTableMap::ID);
            $criteria->addSelectColumn(OrderAddressTableMap::CUSTOMER_TITLE_ID);
            $criteria->addSelectColumn(OrderAddressTableMap::COMPANY);
            $criteria->addSelectColumn(OrderAddressTableMap::FIRSTNAME);
            $criteria->addSelectColumn(OrderAddressTableMap::LASTNAME);
            $criteria->addSelectColumn(OrderAddressTableMap::ADDRESS1);
            $criteria->addSelectColumn(OrderAddressTableMap::ADDRESS2);
            $criteria->addSelectColumn(OrderAddressTableMap::ADDRESS3);
            $criteria->addSelectColumn(OrderAddressTableMap::ZIPCODE);
            $criteria->addSelectColumn(OrderAddressTableMap::CITY);
            $criteria->addSelectColumn(OrderAddressTableMap::PHONE);
            $criteria->addSelectColumn(OrderAddressTableMap::CELLPHONE);
            $criteria->addSelectColumn(OrderAddressTableMap::COUNTRY_ID);
            $criteria->addSelectColumn(OrderAddressTableMap::STATE_ID);
            $criteria->addSelectColumn(OrderAddressTableMap::CREATED_AT);
            $criteria->addSelectColumn(OrderAddressTableMap::UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.CUSTOMER_TITLE_ID');
            $criteria->addSelectColumn($alias . '.COMPANY');
            $criteria->addSelectColumn($alias . '.FIRSTNAME');
            $criteria->addSelectColumn($alias . '.LASTNAME');
            $criteria->addSelectColumn($alias . '.ADDRESS1');
            $criteria->addSelectColumn($alias . '.ADDRESS2');
            $criteria->addSelectColumn($alias . '.ADDRESS3');
            $criteria->addSelectColumn($alias . '.ZIPCODE');
            $criteria->addSelectColumn($alias . '.CITY');
            $criteria->addSelectColumn($alias . '.PHONE');
            $criteria->addSelectColumn($alias . '.CELLPHONE');
            $criteria->addSelectColumn($alias . '.COUNTRY_ID');
            $criteria->addSelectColumn($alias . '.STATE_ID');
            $criteria->addSelectColumn($alias . '.CREATED_AT');
            $criteria->addSelectColumn($alias . '.UPDATED_AT');
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
        return Propel::getServiceContainer()->getDatabaseMap(OrderAddressTableMap::DATABASE_NAME)->getTable(OrderAddressTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getServiceContainer()->getDatabaseMap(OrderAddressTableMap::DATABASE_NAME);
      if (!$dbMap->hasTable(OrderAddressTableMap::TABLE_NAME)) {
        $dbMap->addTableObject(new OrderAddressTableMap());
      }
    }

    /**
     * Performs a DELETE on the database, given a OrderAddress or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or OrderAddress object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(OrderAddressTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Thelia\Model\OrderAddress) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OrderAddressTableMap::DATABASE_NAME);
            $criteria->add(OrderAddressTableMap::ID, (array) $values, Criteria::IN);
        }

        $query = OrderAddressQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) { OrderAddressTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) { OrderAddressTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the order_address table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return OrderAddressQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a OrderAddress or Criteria object.
     *
     * @param mixed               $criteria Criteria or OrderAddress object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(OrderAddressTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from OrderAddress object
        }

        if ($criteria->containsKey(OrderAddressTableMap::ID) && $criteria->keyContainsValue(OrderAddressTableMap::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OrderAddressTableMap::ID.')');
        }


        // Set the correct dbName
        $query = OrderAddressQuery::create()->mergeWith($criteria);

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

} // OrderAddressTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
OrderAddressTableMap::buildTableMap();
