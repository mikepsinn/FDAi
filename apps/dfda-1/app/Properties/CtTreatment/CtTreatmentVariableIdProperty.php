<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\CtTreatment;
use App\Models\CtTreatment;
use App\Traits\PropertyTraits\CtTreatmentProperty;
use App\Properties\Base\BaseVariableIdProperty;
class CtTreatmentVariableIdProperty extends BaseVariableIdProperty
{
    use CtTreatmentProperty;
    public $table = CtTreatment::TABLE;
    public $parentClass = CtTreatment::class;
}
