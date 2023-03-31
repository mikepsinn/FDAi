<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\TrackingReminder;
use App\Models\TrackingReminder;
use App\Traits\PropertyTraits\TrackingReminderProperty;
use App\Properties\Base\BaseUpdatedAtProperty;
class TrackingReminderUpdatedAtProperty extends BaseUpdatedAtProperty
{
    use TrackingReminderProperty;
    public $table = TrackingReminder::TABLE;
    public $parentClass = TrackingReminder::class;
}
