<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\CtgIntervention;
use App\Models\CtgIntervention;
use App\Traits\PropertyTraits\CtgInterventionProperty;
use App\Properties\Base\BaseNctIdProperty;
class CtgInterventionNctIdProperty extends BaseNctIdProperty
{
    use CtgInterventionProperty;
    public $table = CtgIntervention::TABLE;
    public $parentClass = CtgIntervention::class;
}
