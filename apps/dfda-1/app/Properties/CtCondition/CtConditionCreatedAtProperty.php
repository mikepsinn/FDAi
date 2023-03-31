<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\CtCondition;
use App\Models\CtCondition;
use App\Traits\PropertyTraits\CtConditionProperty;
use App\Properties\Base\BaseCreatedAtProperty;
class CtConditionCreatedAtProperty extends BaseCreatedAtProperty
{
    use CtConditionProperty;
    public $table = CtCondition::TABLE;
    public $parentClass = CtCondition::class;
}
