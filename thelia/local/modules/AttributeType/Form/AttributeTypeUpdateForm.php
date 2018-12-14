<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Form;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Class AttributeTypeUpdateForm
 * @package AttributeType\Form
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeUpdateForm extends AttributeTypeCreateForm
{
    /**
     * @return string the name of you form. This name must be unique
     */
    public function getName()
    {
        return 'attribute_type-update';
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
            ->add('id', 'integer', array(
                'required' => true,
                'constraints' => array(
                    new NotBlank()
                )
            ));
    }

    /**
     * @param $value
     * @param ExecutionContextInterface $context
     */
    public function checkExistType($value, ExecutionContextInterface $context)
    {
    }
}
