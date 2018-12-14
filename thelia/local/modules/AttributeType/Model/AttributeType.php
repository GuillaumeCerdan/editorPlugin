<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Model;

use AttributeType\Model\Base\AttributeType as BaseAttributeType;
use AttributeType\Model\Map\AttributeAttributeTypeTableMap;
use AttributeType\Model\Map\AttributeTypeAvMetaTableMap;
use AttributeType\Model\Map\AttributeTypeTableMap;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\Join;
use Thelia\Model\AttributeAvQuery;
use Thelia\Model\Map\AttributeAvTableMap;

/**
 * Class AttributeType
 * @package AttributeType\Model
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeType extends BaseAttributeType
{
    /**
     * Returns a value based on the slug, attribute_av_id and locale
     *
     * <code>
     * $value  = AttributeType::getValue('color', 2);
     * </code>
     *
     * @param string $slug
     * @param int $attributeAvId
     * @param string $locale
     * @return string
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public static function getValue($slug, $attributeAvId, $locale = 'en_US')
    {
        return self::getValues([$slug], [$attributeAvId], $locale)[$slug][$attributeAvId];
    }

    /**
     * Returns a set of values
     * If the value does not exist, it is replaced by null
     *
     * <code>
     * $values = AttributeType::getValue(['color','texture'], [4,7]);
     * </code>
     *
     * <sample>
     *  array(
     *  'color' => [4 => '#00000', 7 => '#FFF000'],
     *  'texture' => [4 => null, 7 => 'lines.jpg']
     * )
     * </sample>
     *
     * @param string[] $slugs
     * @param int[] $attributeAvIds
     * @param string $locale
     * @return string
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public static function getValues(array $slugs, array $attributeAvIds, $locale = 'en_US')
    {
        $return = array();

        foreach ($slugs as $slug) {
            $return[$slug] = array();
            foreach ($attributeAvIds as $attributeAvId) {
                $return[$slug][$attributeAvId] = null;
            }
        }

        $query = AttributeTypeAvMetaQuery::create()
            ->filterByLocale($locale)
            ->filterByAttributeAvId($attributeAvIds, Criteria::IN);

        self::addJoinAttributeAttributeType($query);
        self::addJoinAttributeType($query);
        self::addJoinAttributeAv($query);

        $query
            ->addJoinCondition('attribute_type', "`attribute_type`.`SLUG` IN (" . self::formatStringsForIn($slugs) . ")")
            ->addJoinCondition('attribute_av', "`attribute_av`.`ID` = `attribute_type_av_meta`.`ATTRIBUTE_AV_ID`")
            ->withColumn('`attribute_type`.`SLUG`', 'SLUG')
            ->withColumn('`attribute_av`.`ID`', 'ATTRIBUTE_AV_ID');

        $results = $query->find();

        foreach ($results as $result) {
            $return[$result->getVirtualColumn('SLUG')][$result->getVirtualColumn('ATTRIBUTE_AV_ID')]
                = $result->getValue();
        }

        return $return;
    }

    /**
     * Returns a set of first values
     * If the value does not exist, it is replaced by null
     *
     * <code>
     * $values = AttributeType::getFirstValues(['color','texture','other'], [4,7]);
     * </code>
     *
     * <sample>
     *  array(
     *  'color' => '#00000',
     *  'texture' => 'lines.jpg',
     *  'other' => null
     * )
     * </sample>
     *
     * @param string[] $slugs
     * @param int[] $attributeAvIds
     * @param string $locale
     * @return array
     */
    public static function getFirstValues(array $slugs, array $attributeAvIds, $locale = 'en_US')
    {
        $results = self::getValues($slugs, $attributeAvIds, $locale);

        $return = array();

        foreach ($slugs as $slug) {
            if (!isset($return[$slug])) {
                $return[$slug] = null;
            }

            foreach ($results[$slug] as $value) {
                if ($return[$slug] === null) {
                    $return[$slug] = $value;
                    continue;
                }
                break;
            }
        }

        return $return;
    }

    /**
     * Find AttributeAv by slugs, attributeIds, values, locales
     *
     * <code>
     * $attributeAv = AttributeType::getAttributeAv('color', '1', '#00000');
     * </code>
     *
     * @param null|string|array $slugs
     * @param null|string|array $attributeIds
     * @param null|string|array $values meta values
     * @param null|string|array $locale
     *
     * @return \Thelia\Model\AttributeAv
     */
    public static function getAttributeAv($slugs = null, $attributeIds = null, $values = null, $locale = 'en_US')
    {
        return self::queryAttributeAvs($slugs, $attributeIds, $values, $locale)->findOne();
    }

    /**
     * Find AttributeAvs by slug, attributeId, value, locale
     *
     * <code>
     * $attributeAvs = AttributeType::getAttributeAvs('color', '1', '#00000');
     * </code>
     *
     * @param null|string|array $slugs
     * @param null|string|array $attributeIds
     * @param null|string|array $values meta values
     * @param null|string|array $locale
     *
     * @return \Thelia\Model\AttributeAv
     */
    public static function getAttributeAvs($slugs = null, $attributeIds = null, $values = null, $locale = 'en_US')
    {
        return self::queryAttributeAvs($slugs, $attributeIds, $values, $locale)->find();
    }

    /**
     * @param null|string|array $slugs
     * @param null|string|array $attributeIds
     * @param null|string|array $values meta values
     * @param null|string|array $locales
     *
     * @return AttributeAvQuery
     */
    protected static function queryAttributeAvs($slugs = null, $attributeIds = null, $values = null, $locales = null)
    {
        if (!is_array($slugs) && $slugs !== null) {
            $slugs = array($slugs);
        }

        if (!is_array($attributeIds) && $attributeIds !== null) {
            $attributeIds = array($attributeIds);
        }

        if (!is_array($values) && $values !== null) {
            $values = array($values);
        }

        if (!is_array($locales) && $locales !== null) {
            $locales = array($locales);
        }

        $query = AttributeAvQuery::create();

        if ($attributeIds !== null) {
            $query->filterByAttributeId($attributeIds, Criteria::IN);
        }

        self::addJoinAttributeTypeAvMeta($query);
        self::addJoinAttributeAttributeType($query);
        self::addJoinAttributeType($query);

        if ($locales !== null) {
            $query->addJoinCondition(
                'attribute_type_av_meta',
                "`attribute_type_av_meta`.`LOCALE` IN (" . self::formatStringsForIn($locales) . ")"
            );
        }

        if ($values !== null) {
            $query->addJoinCondition(
                'attribute_type_av_meta',
                "`attribute_type_av_meta`.`VALUE` IN (" . self::formatStringsForIn($values) . ")"
            );
        }

        if ($slugs !== null) {
            $query->addJoinCondition(
                'attribute_type',
                "`attribute_type`.`SLUG` IN (" . self::formatStringsForIn($slugs) . ")"
            );
        }

        return $query;
    }

    /**
     * @param array $strings
     * @return string
     */
    protected static function formatStringsForIn(array $strings)
    {
        return implode(
            ',',
            array_map(
                function($v) {
                    return "'" . $v . "'";
                },
                $strings
            )
        );
    }

    /**
     * @param Criteria $query
     */
    protected static function addJoinAttributeTypeAvMeta(Criteria & $query)
    {
        $join = new Join();

        $join->addExplicitCondition(
            AttributeAvTableMap::TABLE_NAME,
            'ID',
            null,
            AttributeTypeAvMetaTableMap::TABLE_NAME,
            'ATTRIBUTE_AV_ID',
            null
        );

        $join->setJoinType(Criteria::INNER_JOIN);

        $query->addJoinObject($join, 'attribute_type_av_meta');
    }

    /**
     * @param Criteria $query
     */
    protected static function addJoinAttributeAttributeType(Criteria & $query)
    {
        $join = new Join();

        $join->addExplicitCondition(
            AttributeTypeAvMetaTableMap::TABLE_NAME,
            'ATTRIBUTE_ATTRIBUTE_TYPE_ID',
            null,
            AttributeAttributeTypeTableMap::TABLE_NAME,
            'ID',
            null
        );

        $join->setJoinType(Criteria::INNER_JOIN);

        $query->addJoinObject($join, 'attribute_attribute_type');
    }

    /**
     * @param Criteria $query
     */
    protected static function addJoinAttributeType(Criteria & $query)
    {
        $join = new Join();

        $join->addExplicitCondition(
            AttributeAttributeTypeTableMap::TABLE_NAME,
            'ATTRIBUTE_TYPE_ID',
            null,
            AttributeTypeTableMap::TABLE_NAME,
            'ID',
            null
        );

        $join->setJoinType(Criteria::INNER_JOIN);

        $query->addJoinObject($join, 'attribute_type');
    }

    /**
     * @param Criteria $query
     * @return $this
     */
    protected static function addJoinAttributeAv(Criteria & $query)
    {
        $join = new Join();

        $join->addExplicitCondition(
            AttributeAttributeTypeTableMap::TABLE_NAME,
            'ATTRIBUTE_ID',
            null,
            AttributeAvTableMap::TABLE_NAME,
            'ATTRIBUTE_ID',
            null
        );

        $join->setJoinType(Criteria::INNER_JOIN);

        $query->addJoinObject($join, 'attribute_av');
    }
}
