<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Event;

use AttributeType\Model\AttributeTypeAvMeta;
use Propel\Runtime\Connection\ConnectionInterface;
use Thelia\Core\Event\ActionEvent;

/**
 * Class AttributeTypeAvMetaEvent
 * @package AttributeType\Event
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeAvMetaEvent extends ActionEvent
{
    /** @var ConnectionInterface|null */
    protected $connectionInterface = null;

    /** @var AttributeTypeAvMeta */
    protected $attributeAvMeta = null;

    /**
     * @param AttributeTypeAvMeta $attributeAvMeta
     */
    public function __construct(AttributeTypeAvMeta $attributeAvMeta)
    {
        $this->attributeAvMeta = $attributeAvMeta;
    }

    /**
     * @return AttributeTypeAvMeta
     */
    public function getAttributeTypeAvMeta()
    {
        return $this->attributeAvMeta;
    }

    /**
     * @param $attributeAvMeta
     * @return $this
     */
    public function setAttributeTypeAvMeta(AttributeTypeAvMeta $attributeAvMeta)
    {
        $this->attributeAvMeta = $attributeAvMeta;

        return $this;
    }

    /**
     * @return null|ConnectionInterface
     */
    public function getConnectionInterface()
    {
        return $this->connectionInterface;
    }

    /**
     * @param ConnectionInterface $connectionInterface
     * @return $this
     */
    public function setConnectionInterface(ConnectionInterface $connectionInterface)
    {
        $this->connectionInterface = $connectionInterface;

        return $this;
    }
}
