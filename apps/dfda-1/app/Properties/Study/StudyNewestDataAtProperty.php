<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Study;
use App\Models\Study;
use App\Traits\PropertyTraits\StudyProperty;
use App\Properties\Base\BaseNewestDataAtProperty;
class StudyNewestDataAtProperty extends BaseNewestDataAtProperty
{
    use StudyProperty;
    public $table = Study::TABLE;
    public $parentClass = Study::class;
}
