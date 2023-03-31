<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsDateTime;
use App\Types\PhpTypes;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
use App\Traits\PropertyTraits\IsTemporal;
class BaseLastCorrelatedAtProperty extends BaseProperty{
	use IsDateTime;
	public $dbInput = 'datetime:nullable';
	public $dbType = \Doctrine\DBAL\Types\Types::DATETIME_MUTABLE;
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'last_correlated_at';
	public $example = '2019-11-22 01:15:14';
	public $fieldType = self::TYPE_DATETIME;
	public $fontAwesome = FontAwesome::CARD_LAST_FOUR;
	public $format = 'date-time';
	public $htmlInput = 'date';
	public $htmlType = 'date';
	public $image = ImageUrls::CARD_LAST_FOUR;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = true;
	public $isSearchable = false;
	public $name = self::NAME;
	public const NAME = 'last_correlated_at';
	public $phpType = PhpTypes::STRING;
	public $rules = 'nullable|date';
	public $title = 'Last Correlated';
	public $type = self::TYPE_DATETIME;
	public $canBeChangedToNull = true;
	public $validations = 'nullable|date';

}
