<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Tests;

use AttributeType\Action\AttributeTypeAction;
use AttributeType\Event\AttributeTypeAvMetaEvent;
use AttributeType\Event\AttributeTypeEvent;
use AttributeType\Model\AttributeAttributeTypeQuery;
use AttributeType\Model\AttributeTypeAvMeta;
use AttributeType\Model\AttributeTypeAvMetaQuery;
use Thelia\Model\Attribute;
use Thelia\Model\AttributeAv;
use Thelia\Model\AttributeQuery;
use Thelia\Model\ModuleQuery;
use Thelia\Model\Module;
use Thelia\Tests\TestCaseWithURLToolSetup;
use AttributeType\Model\AttributeType;
use AttributeType\Model\AttributeTypeQuery;

/**
 * Class AttributeTypeActionTest
 * @package AttributeType\Tests
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeActionTest extends TestCaseWithURLToolSetup
{
    /** @var string */
    protected $slugTest = 'test-php-unit';

    /** @var AttributeTypeAction */
    protected $action = null;

    /** @var AttributeType */
    protected $attributeType = null;

    /** @var Attribute */
    protected $attribute = null;

    /** @var bool */
    protected $isActive = false;

    public function __construct()
    {
        parent::__construct();

        /** @var Module $module */
        if (null !== $module = ModuleQuery::create()->findOneByCode('AttributeType')) {
            if ($module->getActivate()) {
                $this->isActive = true;
            }
        }

        $this->action = new AttributeTypeAction($this->getContainer());

        $this->attributeType = (new AttributeType())
            ->setSlug($this->slugTest)
            ->setInputType('text');

        $this->attribute = AttributeQuery::create()->findOne();
    }

    public function testActions()
    {
        if (!$this->action) {
            return;
        }

        // if last test is wrong
        AttributeTypeQuery::create()->filterBySlug($this->slugTest)->delete();

        $this->createAction();
        $this->updateAction();
        $this->associateAction();
        $this->createMetaAction();
        $this->updateMetaAction();
        $this->dissociateAction();
        $this->deleteAction();
    }

    protected function createAction()
    {
        $event = new AttributeTypeEvent($this->attributeType);

        $this->action->create($event);

        $attributeType = $event->getAttributeType();

        $this->assertNotEquals(null, $attributeType->getId());
    }

    protected function updateAction()
    {
        $this->attributeType->setInputType('number');

        $this->action->update(
            new AttributeTypeEvent($this->attributeType)
        );

        $attributeTypeGetSuccessTest = AttributeTypeQuery::create()
            ->findOneById($this->attributeType->getId());

        // test if input type is number after update
        $this->assertEquals('number', $attributeTypeGetSuccessTest->getInputType());
    }

    protected function associateAction()
    {
        $this->action->associate(
            (new AttributeTypeEvent($this->attributeType))->setAttribute($this->attribute)
        );

        $attributeAttributeType = AttributeAttributeTypeQuery::create()
            ->filterByAttributeId($this->attribute->getId())
            ->filterByAttributeTypeId($this->attributeType->getId())
            ->findOne();

        $this->assertNotEquals(null, $attributeAttributeType);
    }

    protected function createMetaAction()
    {
        /** @var AttributeAv $attributeAv */
        $attributeAv = $this->attribute->getAttributeAvs()->getFirst();

        $attributeAttributeType = AttributeAttributeTypeQuery::create()
            ->filterByAttributeId($this->attribute->getId())
            ->filterByAttributeTypeId($this->attributeType->getId())
            ->findOne();

        $attributeTypeAvMeta = (new AttributeTypeAvMeta())
            ->setAttributeAttributeTypeId($attributeAttributeType->getId())
            ->setAttributeAvId($attributeAv->getId())
            ->setValue("");

        $this->action->metaCreate(
            new AttributeTypeAvMetaEvent($attributeTypeAvMeta)
        );

        $this->assertNotEquals(null, $attributeTypeAvMeta->getId());
    }

    protected function updateMetaAction()
    {
        /** @var AttributeAv $attributeAv */
        $attributeAv = $this->attribute->getAttributeAvs()->getFirst();

        $attributeAttributeType = AttributeAttributeTypeQuery::create()
            ->filterByAttributeId($this->attribute->getId())
            ->filterByAttributeTypeId($this->attributeType->getId())
            ->findOne();

        $attributeTypeAvMeta = AttributeTypeAvMetaQuery::create()
            ->filterByAttributeAttributeTypeId($attributeAttributeType->getId())
            ->filterByAttributeAvId($attributeAv->getId())
            ->findOne();

        $attributeTypeAvMeta->setValue('test');

        $this->action->metaUpdate(
            new AttributeTypeAvMetaEvent($attributeTypeAvMeta)
        );

        $attributeTypeAvMetaTest = AttributeTypeAvMetaQuery::create()
            ->filterByAttributeAttributeTypeId($attributeAttributeType->getId())
            ->filterByAttributeAvId($attributeAv->getId())
            ->findOne();

        $this->assertEquals('test', $attributeTypeAvMetaTest->getValue());
    }

    protected function dissociateAction()
    {
        $this->action->dissociate(
            (new AttributeTypeEvent($this->attributeType))->setAttribute($this->attribute)
        );

        $attributeAttributeType = AttributeAttributeTypeQuery::create()
            ->filterByAttributeId($this->attribute->getId())
            ->filterByAttributeTypeId($this->attributeType->getId())
            ->findOne();

        $this->assertEquals(null, $attributeAttributeType);
    }

    protected function deleteAction()
    {
        $this->action->delete(
            new AttributeTypeEvent($this->attributeType)
        );

        $attributeTypeGetSuccessTest = AttributeTypeQuery::create()
            ->findOneById($this->attributeType->getId());

        // test if input type is number after update
        $this->assertEquals(null, $attributeTypeGetSuccessTest);
    }
}
