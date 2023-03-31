<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsInt;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BaseNoSymptomsProperty extends BaseProperty{
	use IsInt;
	public $dbInput = 'integer,false';
	public $dbType = \Doctrine\DBAL\Types\Types::INTEGER;
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'no_symptoms';
	public $example = 76;
	public $fieldType = self::TYPE_INTEGER;
	public $fontAwesome = FontAwesome::COMBINE_NOTIFICATIONS;
	public $htmlType = self::TYPE_NUMBER;
	public $image = ImageUrls::ANALYTICS_ENGINE_NO_BORDER_PNG;
	public $importance = false;
	public $isOrderable = true;
	public $isSearchable = false;
	public $maximum = 2147483647;
	public $minimum = -2147483648;
	public $name = self::NAME;
	public const NAME = 'no_symptoms';
	public $canBeChangedToNull = true;
	public $phpType = \App\Types\PhpTypes::INTEGER;
	public $rules = 'nullable|integer|min:-2147483648|max:2147483647';
	public $showOnDetail = true;
	public $title = 'No Symptoms';
	public $type = self::TYPE_INTEGER;
	public $validations = 'nullable|integer|min:-2147483648|max:2147483647';

}
