<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\AggregateCorrelation;
use App\Models\AggregateCorrelation;
use App\Traits\VariableValueTraits\CauseAggregatedVariableValueTrait;
use App\Traits\PropertyTraits\AggregateCorrelationProperty;
use App\Properties\Base\BaseGroupedCauseValueClosestToValuePredictingLowOutcomeProperty;
use App\Traits\PropertyTraits\IsAverageOfCorrelations;
use App\Correlations\QMAggregateCorrelation;
class AggregateCorrelationGroupedCauseValueClosestToValuePredictingLowOutcomeProperty extends BaseGroupedCauseValueClosestToValuePredictingLowOutcomeProperty
{
    use AggregateCorrelationProperty, CauseAggregatedVariableValueTrait, IsAverageOfCorrelations;
    use \App\Traits\PropertyTraits\IsCalculated;
    public $table = AggregateCorrelation::TABLE;
    public $parentClass = AggregateCorrelation::class;
}