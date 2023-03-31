<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\AggregateCorrelation;
use App\Models\AggregateCorrelation;
use App\Traits\PropertyTraits\AggregateCorrelationProperty;
use App\Properties\Base\BaseDurationOfActionProperty;
use App\Traits\PropertyTraits\IsAverageOfCorrelations;
use App\Traits\PropertyTraits\IsCalculated;
class AggregateCorrelationDurationOfActionProperty extends BaseDurationOfActionProperty
{
    use AggregateCorrelationProperty;
    use IsCalculated;
    use IsAverageOfCorrelations;
    public $table = AggregateCorrelation::TABLE;
    public $parentClass = AggregateCorrelation::class;
    public $canBeChangedToNull = false;
    public $required = true;
}
