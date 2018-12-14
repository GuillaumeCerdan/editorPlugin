<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Loop;

use AttributeType\Model\AttributeAttributeType;
use AttributeType\Model\AttributeAttributeTypeQuery;
use AttributeType\Model\AttributeType;
use AttributeType\Model\Map\AttributeAttributeTypeTableMap;
use AttributeType\Model\Map\AttributeTypeTableMap;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\Join;
use Thelia\Core\Template\Element\LoopResult;
use Thelia\Core\Template\Element\LoopResultRow;
use Thelia\Core\Template\Element\PropelSearchLoopInterface;
use Thelia\Core\Template\Loop\Argument\Argument;
use Thelia\Core\Template\Loop\Attribute;
use Thelia\Model\AttributeAv as AttributeModel;
use Thelia\Model\Map\AttributeTableMap;

/**
 * Class AttributeExtendLoop
 * @package AttributeType\Loop
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 *
 * @method string getAttributeTypeId()
 * @method int[] getAttributeTypeSlug()
 */
class AttributeExtendLoop extends Attribute implements PropelSearchLoopInterface
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
                AttributeTableMap::TABLE_NAME,
                'ID',
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
                AttributeTableMap::TABLE_NAME,
                'ID',
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
    protected function getAttributesType(LoopResult $loopResult)
    {
        $attributeIds = array();

        /** @var AttributeModel $attribute */
        foreach ($loopResult->getResultDataCollection() as $attribute) {
            $attributeIds[] = $attribute->getId();
        }

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

        $query = AttributeAttributeTypeQuery::create()
            ->filterByAttributeId($attributeIds, Criteria::IN)
            ->addJoinObject($join);

        return $query
            ->withColumn('`attribute_type`.`SLUG`', 'SLUG')
            ->find();
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
        $attributeTypes = $this->getAttributesType($loopResult);

        $slugs = array();

        /** @var AttributeType $attributeType */
        foreach ($attributeTypes as $attributeType) {
            $slugs[$attributeType->getVirtualColumn('SLUG')] = true;
        }

        /** @var AttributeModel $attribute */
        foreach ($loopResult->getResultDataCollection() as $attribute) {
            $loopResultRow = new LoopResultRow($attribute);
            $loopResultRow->set("ID", $attribute->getId())
                ->set("IS_TRANSLATED", $attribute->getVirtualColumn('IS_TRANSLATED'))
                ->set("LOCALE", $this->locale)
                ->set("TITLE", $attribute->getVirtualColumn('i18n_TITLE'))
                ->set("CHAPO", $attribute->getVirtualColumn('i18n_CHAPO'))
                ->set("DESCRIPTION", $attribute->getVirtualColumn('i18n_DESCRIPTION'))
                ->set("POSTSCRIPTUM", $attribute->getVirtualColumn('i18n_POSTSCRIPTUM'))
                ->set("POSITION", $this->useAttributePosistion ? $attribute->getPosition() : $attribute->getVirtualColumn('position'))
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

            /** @var AttributeAttributeType $attributeType */
            foreach ($attributeTypes as $attributeType) {
                if ($attributeType->getAttributeId() === $attribute->getId()) {
                    $loopResultRow->set(
                        $this->formatSlug(
                            $attributeType->getVirtualColumn('SLUG')
                        ),
                        true
                    );
                }
            }

            $this->addOutputFields($loopResultRow, $attribute);

            $loopResult->addRow($loopResultRow);
        }

        return $loopResult;
    }
}
