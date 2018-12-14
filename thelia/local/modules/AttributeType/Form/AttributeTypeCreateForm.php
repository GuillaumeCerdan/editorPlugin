<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Form;

use AttributeType\Model\AttributeTypeQuery;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Callback;
use AttributeType\AttributeType;
use Symfony\Component\Validator\ExecutionContextInterface;
use Thelia\Core\Translation\Translator;

/**
 * Class AttributeTypeCreateForm
 * @package AttributeType\Form
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeCreateForm extends AttributeTypeForm
{
    /**
     * @return string the name of you form. This name must be unique
     */
    public function getName()
    {
        return 'attribute_type-create';
    }

    /**
     *
     * in this function you add all the fields you need for your Form.
     * Form this you have to call add method on $this->formBuilder attribute :
     *
     */
    protected function buildForm()
    {
        parent::buildForm();

        $this->formBuilder
            ->add('slug', 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Slug', array(), AttributeType::MODULE_DOMAIN),
                'label_attr' => array(
                    'for' => 'slug'
                ),
                'constraints' => array(
                    new NotBlank(),
                    new Callback(array(
                        "methods" => array(
                            array($this,
                                "checkFormatType"),
                            array($this,
                                "checkExistType")
                        )
                    ))
                )
            ))
            ->add('title', 'collection', array(
                'type' => 'text',
                'allow_add'    => true,
                'allow_delete' => true,
                'label' => Translator::getInstance()->trans('Title'),
                'label_attr' => array(
                    'for' => 'title'
                ),
                'options' => array(
                    'required' => true
                )
            ))
            ->add('description', 'collection', array(
                'type' => 'text',
                'allow_add'    => true,
                'allow_delete' => true,
                'label_attr' => array(
                    'for' => 'description'
                ),
                'label' => Translator::getInstance()->trans('Description'),
                'options' => array(
                    'required' => true
                )
            ))
            ->add('has_attribute_av_value', 'text', array(
                'required' => false,
                'empty_data' => false,
                'label' => Translator::getInstance()->trans('Has attribute av value', array(), AttributeType::MODULE_DOMAIN),
                'label_attr' => array(
                    'for' => 'has_attribute_av_value'
                )
            ))
            ->add('is_multilingual_attribute_av_value', 'text', array(
                'required' => false,
                'empty_data' => false,
                'label' => Translator::getInstance()->trans('Multilingual value', array(), AttributeType::MODULE_DOMAIN),
                'label_attr' => array(
                    'for' => 'is_multilingual_attribute_av_value'
                )
            ))
            ->add('pattern', 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Pattern', array(), AttributeType::MODULE_DOMAIN),
                'label_attr' => array(
                    'for' => 'pattern'
                )
            ))
            ->add('css_class', 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Input css class', array(), AttributeType::MODULE_DOMAIN),
                'label_attr' => array(
                    'for' => 'css_class'
                )
            ))
            ->add('input_type', 'choice', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Input type', array(), AttributeType::MODULE_DOMAIN),
                'label_attr' => array(
                    'for' => 'input_type'
                ),
                'empty_value' => 'text',
                'choices'   => array(
                    'text'   => Translator::getInstance()->trans('Type text', array(), AttributeType::MODULE_DOMAIN),
                    'boolean'   => Translator::getInstance()->trans('Type boolean', array(), AttributeType::MODULE_DOMAIN),
                    'textarea'   => Translator::getInstance()->trans('Type textarea', array(), AttributeType::MODULE_DOMAIN),
                    'color'   => Translator::getInstance()->trans('Type color', array(), AttributeType::MODULE_DOMAIN),
                    'number'   => Translator::getInstance()->trans('Type number', array(), AttributeType::MODULE_DOMAIN),
                    'range'   => Translator::getInstance()->trans('Type range', array(), AttributeType::MODULE_DOMAIN),
                    'url'   => Translator::getInstance()->trans('Type url', array(), AttributeType::MODULE_DOMAIN)
                )
            ))
            ->add('min', 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Input min', array(), AttributeType::MODULE_DOMAIN),
                'label_attr' => array(
                    'for' => 'min'
                )
            ))
            ->add('max', 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Input max', array(), AttributeType::MODULE_DOMAIN),
                'label_attr' => array(
                    'for' => 'max'
                )
            ))
            ->add('step', 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Input step', array(), AttributeType::MODULE_DOMAIN),
                'label_attr' => array(
                    'for' => 'step'
                )
            ));
    }

    /**
     * @param $value
     * @param ExecutionContextInterface $context
     */
    public function checkFormatType($value, ExecutionContextInterface $context)
    {
        // test if good format
        if (!preg_match('/[a-z][a-z_0-9]{3,50}/', $value)) {
            $context->addViolation(Translator::getInstance()->trans(
                "The slug is not valid",
                array(),
                AttributeType::MODULE_DOMAIN
            ));
        }

        // test if reserved
        if (in_array($value, explode(',', AttributeType::RESERVED_SLUG))) {
            $context->addViolation(Translator::getInstance()->trans(
                "The attribute slug <%slug> is reserved",
                array(
                    '%slug' => $value
                ),
                AttributeType::MODULE_DOMAIN
            ));
        }
    }

    /**
     * @param $value
     * @param ExecutionContextInterface $context
     */
    public function checkExistType($value, ExecutionContextInterface $context)
    {
        // test if exist
        if (AttributeTypeQuery::create()->findOneBySlug($value) !== null) {
            $context->addViolation(Translator::getInstance()->trans(
                "The attribute slug <%slug> already exists",
                array(
                    '%slug' => $value
                ),
                AttributeType::MODULE_DOMAIN
            ));
        }
    }
}
