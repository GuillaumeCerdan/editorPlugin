<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Loop;

use AttributeType\Model\AttributeType;
use AttributeType\Model\AttributeTypeQuery;
use AttributeType\Model\Map\AttributeAttributeTypeTableMap;
use AttributeType\Model\Map\AttributeTypeTableMap;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\Join;
use Thelia\Core\Template\Element\BaseI18nLoop;
use Thelia\Core\Template\Element\LoopResult;
use Thelia\Core\Template\Element\LoopResultRow;
use Thelia\Core\Template\Element\PropelSearchLoopInterface;
use Thelia\Core\Template\Loop\Argument\Argument;
use Thelia\Core\Template\Loop\Argument\ArgumentCollection;

/**
 * Class AttributeTypeLoop
 * @package AttributeType\Loop
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 *
 * @method int[] getId()
 * @method int[] getExcludeId()
 * @method string getSlug()
 * @method int[] getAttributeId()
 * @method string[] getOrder()
 */
class AttributeTypeLoop extends BaseI18nLoop implements PropelSearchLoopInterface
{
    /**
     * Definition of loop arguments
     *
     * example :
     *
     * public function getArgDefinitions()
     * {
     *  return new ArgumentCollection(
     *
     *       Argument::createIntListTypeArgument('id'),
     *           new Argument(
     *           'ref',
     *           new TypeCollection(
     *               new Type\AlphaNumStringListType()
     *           )
     *       ),
     *       Argument::createIntListTypeArgument('category'),
     *       Argument::createBooleanTypeArgument('new'),
     *       ...
     *   );
     * }
     *
     * @return \Thelia\Core\Template\Loop\Argument\ArgumentCollection
     */
    protected function getArgDefinitions()
    {
        return new ArgumentCollection(
            Argument::createIntListTypeArgument("id"),
            Argument::createIntListTypeArgument("exclude_id"),
            Argument::createAnyTypeArgument('slug'),
            Argument::createIntListTypeArgument("attribute_id"),
            Argument::createEnumListTypeArgument(
                "order",
                [
                    "id",
                    "id-reverse",
                    "attribute_type",
                    "attribute_type-reverse",
                ],
                "id"
            )
        );
    }
    /**
     * this method returns a Propel ModelCriteria
     *
     * @return \Propel\Runtime\ActiveQuery\ModelCriteria
     */
    public function buildModelCriteria()
    {
        $query = new AttributeTypeQuery();

        /* manage translations */
        $this->configureI18nProcessing($query, array('TITLE', 'DESCRIPTION'));

        if (null !== $id = $this->getId()) {
            $query->filterById($id);
        }

        if (null !== $id = $this->getExcludeId()) {
            $query->filterById($id, Criteria::NOT_IN);
        }

        if (null !== $slug = $this->getSlug()) {
            $query->filterBySlug($slug);
        }

        if (null !== $attributeId = $this->getAttributeId()) {
            $join = new Join();

            $join->addExplicitCondition(
                AttributeTypeTableMap::TABLE_NAME,
                'ID',
                null,
                AttributeAttributeTypeTableMap::TABLE_NAME,
                'ATTRIBUTE_TYPE_ID',
                null
            );

            $join->setJoinType(Criteria::JOIN);

            $query
                ->addJoinObject($join, 'attribute_type_join')
                ->addJoinCondition(
                    'attribute_type_join',
                    '`attribute_attribute_type`.`attribute_id` IN (?)',
                    implode(',', $attributeId),
                    null,
                    \PDO::PARAM_INT
                );

            $query->addJoinObject($join);
        }

        foreach ($this->getOrder() as $order) {
            switch ($order) {
                case "id":
                    $query->orderById();
                    break;
                case "id-reverse":
                    $query->orderById(Criteria::DESC);
                    break;
                case "slug":
                    $query->orderBySlug();
                    break;
                case "slug-reverse":
                    $query->orderBySlug(Criteria::DESC);
                    break;
            }
        }
        return $query;
    }

    /**
     * @param LoopResult $loopResult
     *
     * @return LoopResult
     */
    public function parseResults(LoopResult $loopResult)
    {
        /** @var AttributeType $entry */
        foreach ($loopResult->getResultDataCollection() as $entry) {
            $row = new LoopResultRow($entry);
            $row
                ->set("ID", $entry->getId())
                ->set("SLUG", $entry->getSlug())
                ->set("TITLE", $entry->getVirtualColumn('i18n_TITLE'))
                ->set("DESCRIPTION", $entry->getVirtualColumn('i18n_DESCRIPTION'))
                ->set("CSS_CLASS", $entry->getCssClass())
                ->set("PATTERN", $entry->getPattern())
                ->set("INPUT_TYPE", $entry->getInputType())
                ->set("MIN", $entry->getMin())
                ->set("MAX", $entry->getMax())
                ->set("STEP", $entry->getStep())
                ->set("IS_MULTILINGUAL_ATTRIBUTE_AV_VALUE", $entry->getIsMultilingualAttributeAvValue())
                ->set("HAS_ATTRIBUTE_AV_VALUE", $entry->getHasAttributeAvValue())
            ;

            $this->addOutputFields($row, $entry);

            $loopResult->addRow($row);
        }

        return $loopResult;
    }
}
