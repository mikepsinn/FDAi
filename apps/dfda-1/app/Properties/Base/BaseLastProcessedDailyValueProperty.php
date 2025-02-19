<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsFloat;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Variables\QMUserVariable;
use App\Variables\QMVariable;
class BaseLastProcessedDailyValueProperty extends BaseValueProperty{
	use IsFloat;
	public $dbInput = 'float,10,0';
	public $dbType = 'float';
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'Last value for user after daily aggregation and filling';
	public $fieldType = 'float';
	public $fontAwesome = FontAwesome::CARD_LAST_FOUR;
	public $htmlType = 'text';
	public $image = ImageUrls::CARD_LAST_FOUR;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = true;
	public $isSearchable = false;
	public $name = self::NAME;
	public const NAME = 'last_processed_daily_value';
	public $phpType = 'float';
	public $rules = 'nullable|numeric';
	public $title = 'Last Processed Daily Value';
	public $type = self::TYPE_NUMBER;
	public $canBeChangedToNull = true;
	public $validations = 'nullable|numeric';

}
