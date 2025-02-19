<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Variable;
use App\Models\Variable;
use App\Properties\Base\BaseMostCommonValueProperty;
use App\Traits\PropertyTraits\IsCalculated;
use App\Traits\PropertyTraits\VariableProperty;
use App\Traits\VariableValueTraits\VariableValueTrait;
use App\Utils\Stats;
use App\Variables\QMCommonVariable;
class VariableMostCommonValueProperty extends BaseMostCommonValueProperty
{
    use VariableValueTrait, VariableProperty;
    use IsCalculated;
    public $table = Variable::TABLE;
    public $parentClass = Variable::class;
    /**
     * @param QMCommonVariable $model
     * @return float
     */
    public static function calculate($model): ?float{
        $values = $model->getValidValues();
        $val = ($values) ? Stats::mostCommonValue($values): null;
        $model->setAttribute(static::NAME, $val);
        return $val;
    }
}
