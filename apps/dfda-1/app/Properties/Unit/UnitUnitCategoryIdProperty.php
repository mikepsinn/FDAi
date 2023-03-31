<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Unit;
use App\Models\Unit;
use App\Traits\PropertyTraits\UnitProperty;
use App\Properties\Base\BaseUnitCategoryIdProperty;
class UnitUnitCategoryIdProperty extends BaseUnitCategoryIdProperty
{
    use UnitProperty;
    public $table = Unit::TABLE;
    public $parentClass = Unit::class;
}
