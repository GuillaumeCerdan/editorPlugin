<?php
/*************************************************************************************/
/*      This file is part of the module AttributeType                                */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace AttributeType\Event;

/**
 * Class AttributeTypeEvents
 * @package AttributeType\Event
 * @author Gilles Bourgeat <gilles.bourgeat@gmail.com>
 */
class AttributeTypeEvents
{
    const ATTRIBUTE_TYPE_CREATE = "attribute.type.create";
    const ATTRIBUTE_TYPE_UPDATE = "attribute.type.update";
    const ATTRIBUTE_TYPE_DELETE = "attribute.type.delete";
    const ATTRIBUTE_TYPE_ASSOCIATE = 'attribute.type.associate';
    const ATTRIBUTE_TYPE_DISSOCIATE = 'attribute.type.dissociate';
    const ATTRIBUTE_TYPE_AV_META_UPDATE = 'attribute.type.av.meta.update';
    const ATTRIBUTE_TYPE_AV_META_CREATE = 'attribute.type.av.meta.create';
}
