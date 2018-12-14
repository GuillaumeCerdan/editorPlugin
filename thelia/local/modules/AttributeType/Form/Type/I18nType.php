<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Form\Type;

use AttributeType\AttributeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Thelia\Core\Translation\Translator;

/**
 * Class I18nType
 * @package AttributeType\Form\Type
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class I18nType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'lang',
            'collection',
            array(
                'type' => new AttributeTypeType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'options' => array(
                    'required' => true
                )
            )
        );
    }

    public function getName()
    {
        return 'lang';
    }
}
