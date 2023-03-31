<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Connection;
use App\Models\Connection;
use App\Traits\PropertyTraits\ConnectionProperty;
use App\Properties\Base\BaseImportedDataFromAtProperty;
class ConnectionImportedDataFromAtProperty extends BaseImportedDataFromAtProperty
{
    use ConnectionProperty;
    public $table = Connection::TABLE;
    public $parentClass = Connection::class;
}
