<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Controller;

use AttributeType\Model\AttributeTypeI18n;
use AttributeType\Model\AttributeTypeQuery;
use AttributeType\Event\AttributeTypeEvent;
use AttributeType\Event\AttributeTypeEvents;
use AttributeType\Model\AttributeType;
use AttributeType\AttributeType as AttributeTypeCore;
use Symfony\Component\Form\Form;
use Thelia\Controller\Admin\BaseAdminController;
use Thelia\Core\Security\AccessManager;
use Thelia\Core\Security\Resource\AdminResources;
use Thelia\Core\Translation\Translator;
use Thelia\Model\LangQuery;
use Thelia\Core\HttpFoundation\Response;

/**
 * Class AttributeTypeController
 * @package AttributeType\Controller
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeController extends BaseAdminController
{
    protected $objectName = 'Attribute type';

    /**
     * @param array $params
     * @return Response
     */
    public function viewAllAction($params = array())
    {
        if (null !== $response = $this->checkAuth(array(), 'AttributeType', AccessManager::VIEW)) {
            return $response;
        }

        return $this->render("attribute-type/configuration", $params);
    }

    /**
     * @param int $id
     * @return Response
     * @throws \Exception
     */
    public function viewAction($id)
    {
        if (null !== $response = $this->checkAuth(array(), 'AttributeType', AccessManager::VIEW)) {
            return $response;
        }

        if (null === $attributeType = AttributeTypeQuery::create()->findPk($id)) {
            throw new \Exception(Translator::getInstance()->trans(
                "Attribute type not found",
                array(),
                AttributeTypeCore::MODULE_DOMAIN
            ));
        }

        $title = array();
        $description = array();

        /** @var AttributeTypeI18n $i18n */
        foreach ($attributeType->getAttributeTypeI18ns() as $i18n) {
            if (null !== $lang = LangQuery::create()->findOneByLocale($i18n->getLocale())) {
                $title[$lang->getId()] = $i18n->getTitle();
                $description[$lang->getId()] = $i18n->getDescription();
            }
        }

        $form = $this->createForm('attribute_type.update', 'form', array(
            'id' => $attributeType->getId(),
            'slug' => $attributeType->getSlug(),
            'pattern' => $attributeType->getPattern(),
            'css_class' => $attributeType->getCssClass(),
            'has_attribute_av_value' => $attributeType->getHasAttributeAvValue(),
            'is_multilingual_attribute_av_value' => $attributeType->getIsMultilingualAttributeAvValue(),
            'input_type' => $attributeType->getInputType(),
            'min' => $attributeType->getMin(),
            'max' => $attributeType->getMax(),
            'step' => $attributeType->getStep(),
            'title' => $title,
            'description' => $description
        ));

        $this->getParserContext()->addForm($form);

        if ($this->getRequest()->isXmlHttpRequest()) {
            return $this->render("attribute-type/include/form-update");
        } else {
            return $this->viewAllAction(array(
                'attribute_type_id' => $id
            ));
        }
    }

    /**
     * @return Response
     */
    public function createAction()
    {
        if (null !== $response = $this->checkAuth(array(), 'AttributeType', AccessManager::CREATE)) {
            return $response;
        }

        $form = $this->createForm('attribute_type.create');

        try {
            $this->dispatch(
                AttributeTypeEvents::ATTRIBUTE_TYPE_CREATE,
                new AttributeTypeEvent($this->hydrateAttributeTypeByForm(
                    $this->validateForm($form, 'POST')
                ))
            );

            return $this->generateSuccessRedirect($form);
        } catch (\Exception $e) {
            $this->setupFormErrorContext(
                $this->getTranslator()->trans("%obj modification", array('%obj' => $this->objectName)),
                $e->getMessage(),
                $form
            );

            return $this->viewAllAction();
        }
    }

    /**
     * @param int $id
     * @return Response
     */
    public function updateAction($id)
    {
        if (null !== $response = $this->checkAuth(array(), 'AttributeType', AccessManager::UPDATE)) {
            return $response;
        }

        $form = $this->createForm('attribute_type.update');

        try {
            $this->dispatch(
                AttributeTypeEvents::ATTRIBUTE_TYPE_UPDATE,
                new AttributeTypeEvent(
                    $this->hydrateAttributeTypeByForm(
                        $this->validateForm($form, 'POST'),
                        $id
                    )
                )
            );

            return $this->generateSuccessRedirect($form);

        } catch (\Exception $e) {
            $this->setupFormErrorContext(
                $this->getTranslator()->trans("%obj modification", array('%obj' => $this->objectName)),
                $e->getMessage(),
                $form
            );

            return $this->viewAllAction(array(
                'attribute_type_id' => $id
            ));
        }
    }

    /**
     * @param int $id
     * @return Response
     */
    public function deleteAction($id)
    {
        if (null !== $response = $this->checkAuth(array(), 'AttributeType', AccessManager::DELETE)) {
            return $response;
        }

        $form = $this->createForm('attribute_type.delete');

        try {
            $this->validateForm($form, 'POST');

            if (null === $attributeType = AttributeTypeQuery::create()->findPk($id)) {
                throw new \Exception(Translator::getInstance()->trans(
                    "Attribute type not found",
                    array(),
                    AttributeTypeCore::MODULE_DOMAIN
                ));
            }

            $this->dispatch(
                AttributeTypeEvents::ATTRIBUTE_TYPE_DELETE,
                new AttributeTypeEvent($attributeType)
            );

            return $this->generateSuccessRedirect($form);

        } catch (\Exception $e) {
            $this->setupFormErrorContext(
                $this->getTranslator()->trans("%obj modification", array('%obj' => $this->objectName)),
                $e->getMessage(),
                $form
            );

            return $this->viewAllAction();
        }
    }

    /**
     * @param int $id
     * @return Response
     * @throws \Exception
     */
    public function copyAction($id)
    {
        if (null !== $response = $this->checkAuth(array(), 'AttributeType', AccessManager::CREATE)) {
            return $response;
        }

        if (null === $attributeType = AttributeTypeQuery::create()->findPk($id)) {
            throw new \Exception(Translator::getInstance()->trans(
                "Attribute type not found",
                array(),
                AttributeTypeCore::MODULE_DOMAIN
            ));
        }

        $title = array();
        $description = array();

        /** @var AttributeTypeI18n $i18n */
        foreach ($attributeType->getAttributeTypeI18ns() as $i18n) {
            if (null !== $lang = LangQuery::create()->findOneByLocale($i18n->getLocale())) {
                $title[$lang->getId()] = $i18n->getTitle();
                $description[$lang->getId()] = $i18n->getDescription();
            }
        }

        $form = $this->createForm('attribute_type.create', 'form', array(
            'slug' => $attributeType->getSlug() . '_' . Translator::getInstance()->trans(
                'copy',
                array(),
                AttributeTypeCore::MODULE_DOMAIN
            ),
            'pattern' => $attributeType->getPattern(),
            'css_class' => $attributeType->getCssClass(),
            'has_attribute_av_value' => $attributeType->getHasAttributeAvValue(),
            'is_multilingual_attribute_av_value' => $attributeType->getIsMultilingualAttributeAvValue(),
            'input_type' => $attributeType->getInputType(),
            'min' => $attributeType->getMin(),
            'max' => $attributeType->getMax(),
            'step' => $attributeType->getStep(),
            'title' => $title,
            'description' => $description
        ));

        $this->getParserContext()->addForm($form);

        return $this->render("attribute-type/include/form-create");
    }

    /**
     * @param Form $form
     * @param int|null $id
     * @return AttributeType
     * @throws \Exception
     */
    protected function hydrateAttributeTypeByForm($form, $id = null)
    {
        $data = $form->getData();

        if ($id !== null) {
            if (null === $attributeType = AttributeTypeQuery::create()->findPk($id)) {
                throw new \Exception(Translator::getInstance()->trans(
                    "Attribute type not found",
                    array(),
                    AttributeTypeCore::MODULE_DOMAIN
                ));
            }
        } else {
            $attributeType = new AttributeType();
        }

        $attributeType
            ->setSlug($data['slug'])
            ->setPattern($data['pattern'])
            ->setCssClass($data['css_class'])
            ->setHasAttributeAvValue(isset($data['has_attribute_av_value']) && (int) $data['has_attribute_av_value'] ? 1 : 0)
            ->setIsMultilingualAttributeAvValue(isset($data['is_multilingual_attribute_av_value']) && (int) $data['is_multilingual_attribute_av_value'] ? 1 : 0)
            ->setInputType($data['input_type'])
            ->setMin($data['min'])
            ->setMax($data['max'])
            ->setStep($data['step']);

        foreach ($data['title'] as $langId => $title) {
            $attributeType
                ->setLocale(LangQuery::create()->findPk($langId)->getLocale())
                ->setTitle($title)
                ->setDescription($data['description'][$langId]);
        }

        return $attributeType;
    }

    /**
     * @param int $id
     * @return Response
     */
    protected function viewAttribute($id)
    {
        return $this->render("attribute-edit", array(
            'attribute_id' => $id
        ));
    }
}
