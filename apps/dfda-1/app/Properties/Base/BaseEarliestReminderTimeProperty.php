<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsTime;
use App\Types\PhpTypes;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BaseEarliestReminderTimeProperty extends BaseProperty{
    use IsTime;
	public $dbInput = 'time';
	public $dbType = 'time';
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'Earliest time of day at which reminders should appear in HH:MM:SS format in user timezone';
	public $example = '06:00:00';
	public $fieldType = 'time';
	public $fontAwesome = FontAwesome::EARLIEST_REMINDER_TIME;
	public $htmlInput = 'text';
	public $htmlType = 'text';
	public $image = ImageUrls::EARLIEST_REMINDER_TIME;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $canBeChangedToNull = false;
	public $isOrderable = false;
	public $isSearchable = true;
	public $name = self::NAME;
	public const NAME = 'earliest_reminder_time';
	public $phpType = PhpTypes::STRING;
	public $rules = 'nullable|string';
	public $title = 'Earliest Reminder Time';
	public $type = PhpTypes::STRING;
	public $validations = 'required';

}
