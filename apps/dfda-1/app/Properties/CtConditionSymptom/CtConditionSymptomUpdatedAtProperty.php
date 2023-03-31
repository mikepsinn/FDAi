<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\CtConditionSymptom;
use App\Models\CtConditionSymptom;
use App\Traits\PropertyTraits\CtConditionSymptomProperty;
use App\Properties\Base\BaseUpdatedAtProperty;
class CtConditionSymptomUpdatedAtProperty extends BaseUpdatedAtProperty
{
    use CtConditionSymptomProperty;
    public $table = CtConditionSymptom::TABLE;
    public $parentClass = CtConditionSymptom::class;
}
