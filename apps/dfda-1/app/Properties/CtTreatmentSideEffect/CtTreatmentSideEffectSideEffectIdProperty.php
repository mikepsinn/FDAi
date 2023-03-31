<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\CtTreatmentSideEffect;
use App\Models\CtTreatmentSideEffect;
use App\Traits\PropertyTraits\CtTreatmentSideEffectProperty;
use App\Properties\Base\BaseSideEffectIdProperty;
class CtTreatmentSideEffectSideEffectIdProperty extends BaseSideEffectIdProperty
{
    use CtTreatmentSideEffectProperty;
    public $table = CtTreatmentSideEffect::TABLE;
    public $parentClass = CtTreatmentSideEffect::class;
}
