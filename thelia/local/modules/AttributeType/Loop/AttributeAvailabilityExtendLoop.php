<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Loop;

use AttributeType\Model\AttributeTypeAvMeta;
use AttributeType\Model\AttributeTypeAvMetaQuery;
use AttributeType\Model\Map\AttributeAttributeTypeTableMap;
use AttributeType\Model\Map\AttributeTypeAvMetaTableMap;
use AttributeType\Model\Map\AttributeTypeTableMap;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\Join;
use Thelia\Core\Template\Element\LoopResult;
use Thelia\Core\Template\Element\LoopResultRow;
use Thelia\Core\Template\Loop\Argument\Argument;
use Thelia\Core\Template\Element\PropelSearchLoopInterface;
use Thelia\Core\Template\Loop\AttributeAvailability;
use Thelia\Model\AttributeAv;
use Thelia\Model\Map\AttributeAvTableMap;

/**
 * Class AttributeAvailabilityExtendLoop
 * @package AttributeType\Loop
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 *
 * @method string getAttributeTypeId()
 * @method int[] getAttributeTypeSlug()
 */
class AttributeAvailabilityExtendLoop extends AttributeAvailability implements PropelSearchLoopInterface
{
    /**
     * @return \Thelia\Core\Template\Loop\Argument\ArgumentCollection
     */
    protected function getArgDefinitions()
    {
        return parent::getArgDefinitions()->addArguments(array(
            Argument::createIntListTypeArgument("attribute_type_id"),
            Argument::createAnyTypeArgument("attribute_type_slug")
        ));
    }

    /**
     * this method returns a Propel ModelCriteria
     *
     * @return \Propel\Runtime\ActiveQuery\ModelCriteria
     */
    public function buildModelCriteria()
    {
        $query = parent::buildModelCriteria();

        if (null !== $attributeTypeSlug = $this->getAttributeTypeSlug()) {
            $attributeTypeSlug = array_map(function($value) {
                return "'" . addslashes($value) . "'";
            }, explode(',', $attributeTypeSlug));

            $join = new Join();

            $join->addExplicitCondition(
                AttributeAvTableMap::TABLE_NAME,
                'ATTRIBUTE_ID',
                null,
                AttributeAttributeTypeTableMap::TABLE_NAME,
                'ATTRIBUTE_ID',
                null
            );

            $join2 = new Join();

            $join2->addExplicitCondition(
                AttributeAttributeTypeTableMap::TABLE_NAME,
                'ATTRIBUTE_TYPE_ID',
                null,
                AttributeTypeTableMap::TABLE_NAME,
                'ID',
                null
            );

            $join->setJoinType(Criteria::JOIN);
            $join2->setJoinType(Criteria::JOIN);

            $query
                ->addJoinObject($join, 'attribute_attribute_type_join')
                ->addJoinObject($join2, 'attribute_type_join')
                ->addJoinCondition(
                    'attribute_type_join',
                    '`attribute_type`.`slug` IN ('.implode(',', $attributeTypeSlug).')'
                );
        }

        if (null !== $attributeTypeId = $this->getAttributeTypeId()) {
            $join = new Join();

            $join->addExplicitCondition(
                AttributeAvTableMap::TABLE_NAME,
                'ATTRIBUTE_ID',
                null,
                AttributeAttributeTypeTableMap::TABLE_NAME,
                'ATTRIBUTE_ID',
                null
            );

            $join->setJoinType(Criteria::JOIN);

            $query
                ->addJoinObject($join, 'attribute_type_join')
                ->addJoinCondition(
                    'attribute_type_join',
                    '`attribute_attribute_type`.`attribute_type_id` IN (?)',
                    implode(',', $attributeTypeId),
                    null,
                    \PDO::PARAM_INT
                );
        }

        return $query;
    }

    /**
     * @param LoopResult $loopResult
     * @return array|mixed|\Propel\Runtime\Collection\ObjectCollection
     */
    protected function getAttributesMeta(LoopResult $loopResult)
    {
        $attributeAvIds = array();

        /** @var AttributeAV $attributeAv */
        foreach ($loopResult->getResultDataCollection() as $attributeAv) {
            $attributeAvIds[] = $attributeAv->getId();
        }

        $joinAttributeAttributeType = new Join();

        $joinAttributeAttributeType->addExplicitCondition(
            AttributeTypeAvMetaTableMap::TABLE_NAME,
            'ATTRIBUTE_ATTRIBUTE_TYPE_ID',
            null,
            AttributeAttributeTypeTableMap::TABLE_NAME,
            'ID',
            null
        );

        $joinAttributeAttributeType->setJoinType(Criteria::INNER_JOIN);

        $joinAttributeType = new Join();

        $joinAttributeType->addExplicitCondition(
            AttributeAttributeTypeTableMap::TABLE_NAME,
            'ATTRIBUTE_TYPE_ID',
            null,
            AttributeTypeTableMap::TABLE_NAME,
            'ID',
            null
        );

        $joinAttributeType->setJoinType(Criteria::INNER_JOIN);

        $query = AttributeTypeAvMetaQuery::create()
            ->filterByLocale($this->locale)
            ->filterByAttributeAvId($attributeAvIds, Criteria::IN)
            ->addJoinObject($joinAttributeAttributeType)
            ->addJoinObject($joinAttributeType);

        $query->withColumn('`attribute_type`.`SLUG`', 'SLUG');

        return $query->find();
    }

    /**
     * @param string $slug
     * @return string
     */
    protected function formatSlug($slug)
    {
        return strtoupper(str_replace('-', '_', $slug));
    }

    /**
     * @param LoopResult $loopResult
     * @return LoopResult
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function parseResults(LoopResult $loopResult)
    {
        $attributesMeta = $this->getAttributesMeta($loopResult);

        $slugs = array();

        /** @var AttributeTypeAvMeta $attributeMeta */
        foreach ($attributesMeta as $attributeMeta) {
            $slugs[$attributeMeta->getVirtualColumn('SLUG')] = true;
        }

        /** @var AttributeAv $attributeAv */
        foreach ($loopResult->getResultDataCollection() as $attributeAv) {
            $loopResultRow = new LoopResultRow($attributeAv);
            $loopResultRow
                ->set("ID", $attributeAv->getId())
                ->set("ATTRIBUTE_ID", $attributeAv->getAttributeId())
                ->set("IS_TRANSLATED", $attributeAv->getVirtualColumn('IS_TRANSLATED'))
                ->set("LOCALE", $this->locale)
                ->set("TITLE", $attributeAv->getVirtualColumn('i18n_TITLE'))
                ->set("CHAPO", $attributeAv->getVirtualColumn('i18n_CHAPO'))
                ->set("DESCRIPTION", $attributeAv->getVirtualColumn('i18n_DESCRIPTION'))
                ->set("POSTSCRIPTUM", $attributeAv->getVirtualColumn('i18n_POSTSCRIPTUM'))
                ->set("POSITION", $attributeAv->getPosition())
            ;

            // init slug variable
            foreach ($slugs as $slug => $bool) {
                $loopResultRow->set(
                    $this->formatSlug(
                        $slug
                    ),
                    null
                );
            }

            /** @var AttributeTypeAvMeta $attributeMeta */
            foreach ($attributesMeta as $attributeMeta) {
                if ($attributeMeta->getAttributeAvId() === $attributeAv->getId()) {
                    $loopResultRow->set(
                        $this->formatSlug(
                            $attributeMeta->getVirtualColumn('SLUG')
                        ),
                        $attributeMeta->getValue()
                    );
                }
            }

            $this->addOutputFields($loopResultRow, $attributeAv);

            $loopResult->addRow($loopResultRow);
        }

        return $loopResult;
    }
}
