<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Form;

use AttributeType\AttributeType;
use AttributeType\Form\Type\I18nType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Thelia\Core\Translation\Translator;

/**
 * Class AttributeTypeAvMetaUpdateForm
 * @package AttributeType\Form
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeAvMetaUpdateForm extends AttributeTypeForm
{
    /**
     * @return string the name of you form. This name must be unique
     */
    public function getName()
    {
        return 'attribute_type_av_meta-update';
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

            $this->formBuilder->add(
                'attribute_av',
                'collection',
                array(
                    'type' => new I18nType(),
                    'allow_add'    => true,
                    'allow_delete' => true,
                    'label_attr' => array(
                        'for' => 'description'
                    ),
                    'label' => Translator::getInstance()->trans('Description', array(), AttributeType::MODULE_DOMAIN),
                    'options' => array(
                        'required' => true
                    )
                )
            );

            $this->formBuilder->add(
                'attribute_id',
                'integer',
                array(
                    'constraints' => array(
                        new NotBlank()
                    )
                )
            );
    }
}
