<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\UnitCategory;
use App\Models\UnitCategory;
use App\Traits\PropertyTraits\UnitCategoryProperty;
use App\Properties\Base\BaseCanBeSummedProperty;
class UnitCategoryCanBeSummedProperty extends BaseCanBeSummedProperty
{
    use UnitCategoryProperty;
    public $table = UnitCategory::TABLE;
    public $parentClass = UnitCategory::class;
}
