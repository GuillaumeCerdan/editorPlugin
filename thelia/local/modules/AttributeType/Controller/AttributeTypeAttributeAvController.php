<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Controller;

use AttributeType\Event\AttributeTypeEvents;
use AttributeType\Event\AttributeTypeAvMetaEvent;
use AttributeType\Model\AttributeAttributeType;
use AttributeType\Model\AttributeAttributeTypeQuery;
use AttributeType\Model\AttributeTypeAvMeta;
use AttributeType\Model\AttributeTypeAvMetaQuery;
use Thelia\Core\Security\AccessManager;
use Thelia\Core\Security\Resource\AdminResources;
use Thelia\Model\Lang;
use Thelia\Model\LangQuery;

/**
 * Class AttributeTypeAttributeAvController
 * @package AttributeType\Controller
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeAttributeAvController extends AttributeTypeController
{
    /** @var Lang[] */
    protected $langs = array();

    /** @var AttributeAttributeType[] */
    protected $attributeAttributeTypes = array();

    /**
     * @param int $attribute_id
     * @return null|\Symfony\Component\HttpFoundation\Response|\Thelia\Core\HttpFoundation\Response
     */
    public function updateMetaAction($attribute_id)
    {
        if (null !== $response = $this->checkAuth(array(AdminResources::ATTRIBUTE), null, AccessManager::UPDATE)) {
            return $response;
        }

        $form = $this->createForm("attribute_type_av_meta.update");

        try {
            $formUpdate = $this->validateForm($form);

            $attributeAvs = $formUpdate->get('attribute_av')->getData();

            foreach ($attributeAvs as $attributeAvId => $attributeAv) {
                foreach ($attributeAv['lang'] as $langId => $lang) {
                    foreach ($lang['attribute_type'] as $attributeTypeId => $value) {
                        $this->dispatchEvent(
                            $this->getAttributeAttributeType($attributeTypeId, $attribute_id),
                            $attributeAvId,
                            $langId,
                            $value
                        );
                    }
                }
            }

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
     * @param AttributeAttributeType $attributeAttributeType
     * @param int $attributeAvId
     * @param int $langId
     * @param string $value
     * @throws \Exception
     */
    protected function dispatchEvent(AttributeAttributeType $attributeAttributeType, $attributeAvId, $langId, $value)
    {
        $eventName = AttributeTypeEvents::ATTRIBUTE_TYPE_AV_META_UPDATE;

        $attributeAvMeta = AttributeTypeAvMetaQuery::create()
            ->filterByAttributeAvId($attributeAvId)
            ->filterByAttributeAttributeTypeId($attributeAttributeType->getId())
            ->filterByLocale($this->getLocale($langId))
            ->findOne();

        // create if not exist
        if ($attributeAvMeta === null) {
            $eventName = AttributeTypeEvents::ATTRIBUTE_TYPE_AV_META_CREATE;

            $attributeAvMeta = (new AttributeTypeAvMeta())
                ->setAttributeAvId($attributeAvId)
                ->setAttributeAttributeTypeId($attributeAttributeType->getId())
                ->setLocale($this->getLocale($langId));
        }

        $attributeAvMeta->setValue($value);

        $this->dispatch(
            $eventName,
            (new AttributeTypeAvMetaEvent($attributeAvMeta))
        );
    }

    /**
     * @param int $attributeTypeId
     * @param int $attributeId
     * @return AttributeAttributeType
     * @throws \Exception
     */
    protected function getAttributeAttributeType($attributeTypeId, $attributeId)
    {
        if (!isset($this->attributeAttributeTypes[$attributeTypeId])) {
            $this->attributeAttributeTypes[$attributeTypeId] = AttributeAttributeTypeQuery::create()
                ->filterByAttributeTypeId($attributeTypeId)
                ->filterByAttributeId($attributeId)
                ->findOne();

            if ($this->attributeAttributeTypes[$attributeTypeId] === null) {
                throw new \Exception('AttributeAttributeType not found');
            }
        }

        return $this->attributeAttributeTypes[$attributeTypeId];
    }

    /**
     * @param int $langId
     * @return string
     * @throws \Exception
     */
    protected function getLocale($langId)
    {
        if (!isset($this->langs[$langId])) {
            $this->langs[$langId] = LangQuery::create()->findPk($langId);

            if ($this->langs[$langId] === null) {
                throw new \Exception('Lang not found');
            }
        }

        return $this->langs[$langId]->getLocale();
    }
}
