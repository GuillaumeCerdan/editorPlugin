<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Controller;

use AttributeType\Model\AttributeTypeQuery;
use Thelia\Core\HttpFoundation\Response;
use AttributeType\Event\AttributeTypeEvents;
use AttributeType\Event\AttributeTypeEvent;
use Thelia\Core\Security\AccessManager;
use Thelia\Core\Security\Resource\AdminResources;
use Thelia\Model\AttributeQuery;
use Thelia\Core\Translation\Translator;
use AttributeType\AttributeType as AttributeTypeCore;

/**
 * Class AttributeTypeAttributeController
 * @package AttributeType\Controller
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeAttributeController extends AttributeTypeController
{
    /**
     * @param int $attribute_type_id
     * @param int $attribute_id
     * @return Response
     */
    public function associateAction($attribute_type_id, $attribute_id)
    {
        if (null !== $response = $this->checkAuth(array(AdminResources::ATTRIBUTE), null, AccessManager::UPDATE)) {
            return $response;
        }

        $form = $this->createForm('attribute_type.associate');

        try {
            $this->validateForm($form, 'POST');

            $this->dispatch(
                AttributeTypeEvents::ATTRIBUTE_TYPE_ASSOCIATE,
                $this->getEventAssociation($attribute_type_id, $attribute_id)
            );

            return $this->generateSuccessRedirect($form);
        } catch (\Exception $e) {
            $this->setupFormErrorContext(
                $this->getTranslator()->trans("%obj modification", array('%obj' => $this->objectName)),
                $e->getMessage(),
                $form
            );

            return $this->viewAttribute($attribute_id);
        }
    }

    /**
     * @param int $attribute_type_id
     * @param int $attribute_id
     * @return Response
     */
    public function dissociateAction($attribute_type_id, $attribute_id)
    {
        if (null !== $response = $this->checkAuth(array(AdminResources::ATTRIBUTE), null, AccessManager::UPDATE)) {
            return $response;
        }

        $form = $this->createForm('attribute_type.dissociate');

        try {
            $this->validateForm($form, 'POST');

            $this->dispatch(
                AttributeTypeEvents::ATTRIBUTE_TYPE_DISSOCIATE,
                $this->getEventAssociation($attribute_type_id, $attribute_id)
            );

            return $this->generateSuccessRedirect($form);
        } catch (\Exception $e) {
            $this->setupFormErrorContext(
                $this->getTranslator()->trans("%obj modification", array('%obj' => $this->objectName)),
                $e->getMessage(),
                $form
            );

            return $this->viewAttribute($attribute_id);
        }
    }

    /**
     * @param int $attribute_type_id
     * @param int $attribute_id
     * @return AttributeTypeEvent
     * @throws \Exception
     */
    protected function getEventAssociation($attribute_type_id, $attribute_id)
    {
        if (null === $attribute = AttributeQuery::create()->findPk($attribute_id)) {
            throw new \Exception(Translator::getInstance()->trans(
                "Attribute not found",
                array(),
                AttributeTypeCore::MODULE_DOMAIN
            ));
        }

        if (null === $attributeType = AttributeTypeQuery::create()->findPk($attribute_type_id)) {
            throw new \Exception(Translator::getInstance()->trans(
                "Attribute type not found",
                array(),
                AttributeTypeCore::MODULE_DOMAIN
            ));
        }

        $event = new AttributeTypeEvent($attributeType);
        $event->setAttribute($attribute);

        return $event;
    }
}
