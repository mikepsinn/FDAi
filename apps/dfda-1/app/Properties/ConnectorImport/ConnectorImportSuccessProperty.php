<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\ConnectorImport;
use App\Models\ConnectorImport;
use App\Traits\PropertyTraits\ConnectorImportProperty;
use App\Properties\Base\BaseSuccessProperty;
class ConnectorImportSuccessProperty extends BaseSuccessProperty
{
    use ConnectorImportProperty;
    public $table = ConnectorImport::TABLE;
    public $parentClass = ConnectorImport::class;
}
