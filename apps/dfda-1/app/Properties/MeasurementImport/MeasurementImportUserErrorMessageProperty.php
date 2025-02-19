<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\MeasurementImport;
use App\Models\MeasurementImport;
use App\Traits\PropertyTraits\MeasurementImportProperty;
use App\Properties\Base\BaseUserErrorMessageProperty;
class MeasurementImportUserErrorMessageProperty extends BaseUserErrorMessageProperty
{
    use MeasurementImportProperty;
    public $table = MeasurementImport::TABLE;
    public $parentClass = MeasurementImport::class;
}
