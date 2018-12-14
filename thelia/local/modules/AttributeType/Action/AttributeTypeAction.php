<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Action;

use AttributeType\Event\AttributeTypeAvMetaEvent;
use AttributeType\Model\AttributeAttributeType;
use AttributeType\Model\AttributeAttributeTypeQuery;
use AttributeType\Event\AttributeTypeEvent;
use AttributeType\Event\AttributeTypeEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class AttributeTypeAction
 * @package AttributeType\Action
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeAction implements EventSubscriberInterface
{
    /**
     * @param AttributeTypeEvent $event
     * @throws \Exception
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function create(AttributeTypeEvent $event)
    {
        $event->getAttributeType()->save($event->getConnectionInterface());
    }

    /**
     * @param AttributeTypeEvent $event
     * @throws \Exception
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function update(AttributeTypeEvent $event)
    {
        $event->getAttributeType()->save($event->getConnectionInterface());
    }

    /**
     * @param AttributeTypeEvent $event
     * @throws \Exception
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function delete(AttributeTypeEvent $event)
    {
        $event->getAttributeType()->delete($event->getConnectionInterface());
    }

    /**
     * @param AttributeTypeEvent $event
     * @throws \Exception
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function associate(AttributeTypeEvent $event)
    {
        (new AttributeAttributeType())
            ->setAttributeId($event->getAttribute()->getId())
            ->setAttributeTypeId($event->getAttributeType()->getId())
            ->save($event->getConnectionInterface());
    }

    /**
     * @param AttributeTypeEvent $event
     * @throws \Exception
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function dissociate(AttributeTypeEvent $event)
    {
        AttributeAttributeTypeQuery::create()
            ->filterByAttribute($event->getAttribute())
            ->filterByAttributeType($event->getAttributeType())
            ->delete($event->getConnectionInterface());
    }

    /**
     * @param AttributeTypeAvMetaEvent $event
     * @throws \Exception
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function metaCreate(AttributeTypeAvMetaEvent $event)
    {
        $event->getAttributeTypeAvMeta()->save($event->getConnectionInterface());
    }

    /**
     * @param AttributeTypeAvMetaEvent $event
     * @throws \Exception
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function metaUpdate(AttributeTypeAvMetaEvent $event)
    {
        $event->getAttributeTypeAvMeta()->save($event->getConnectionInterface());
    }

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2'))
     *
     * @return array The event names to listen to
     *
     * @api
     */
    public static function getSubscribedEvents()
    {
        return array(
            AttributeTypeEvents::ATTRIBUTE_TYPE_CREATE => array(
                'create', 128
            ),
            AttributeTypeEvents::ATTRIBUTE_TYPE_UPDATE => array(
                'update', 128
            ),
            AttributeTypeEvents::ATTRIBUTE_TYPE_DELETE => array(
                'delete', 128
            ),
            AttributeTypeEvents::ATTRIBUTE_TYPE_ASSOCIATE => array(
                'associate', 128
            ),
            AttributeTypeEvents::ATTRIBUTE_TYPE_DISSOCIATE => array(
                'dissociate', 128
            ),
            AttributeTypeEvents::ATTRIBUTE_TYPE_AV_META_CREATE => array(
                'metaCreate', 128
            ),
            AttributeTypeEvents::ATTRIBUTE_TYPE_AV_META_UPDATE => array(
                'metaUpdate', 128
            )
        );
    }
}
