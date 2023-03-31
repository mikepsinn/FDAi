<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Measurement;
use App\Models\Measurement;
use App\Traits\PropertyTraits\IsString;
use App\Traits\PropertyTraits\MeasurementProperty;
use App\Properties\Base\BaseLocationProperty;
class MeasurementLocationProperty extends BaseLocationProperty
{	use IsString;
    use MeasurementProperty;
    public $table = Measurement::TABLE;
    public $parentClass = Measurement::class;
}
