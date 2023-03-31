<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\TrackingReminder;
use App\Models\TrackingReminder;
use App\Traits\PropertyTraits\TrackingReminderProperty;
use App\Properties\Base\BaseInstructionsProperty;
class TrackingReminderInstructionsProperty extends BaseInstructionsProperty
{
    use TrackingReminderProperty;
    public $table = TrackingReminder::TABLE;
    public $parentClass = TrackingReminder::class;
    public function showOnUpdate(): bool {return true;}
    public function showOnCreate(): bool {return false;}
    public function showOnIndex(): bool {return false;}
    public function showOnDetail(): bool {return true;}
}
