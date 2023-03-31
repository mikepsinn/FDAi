<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsBoolean;
use App\Types\PhpTypes;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BaseDeletedProperty extends BaseProperty{
	use IsBoolean;
	public $dbInput = self::TYPE_BOOLEAN;
	public $dbType = self::TYPE_BOOLEAN;
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'deleted';
	public $fieldType = self::TYPE_BOOLEAN;
	public $fontAwesome = FontAwesome::DELETED;
	public $htmlInput = 'checkbox,1';
	public $htmlType = 'checkbox';
	public $image = ImageUrls::DELETED;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $canBeChangedToNull = false;
	public $isOrderable = true;
	public $isSearchable = false;
	public $name = self::NAME;
	public const NAME = 'deleted';
	public $phpType = PhpTypes::BOOL;
	public $rules = 'nullable|boolean';
	public $title = 'Deleted';
	public $type = self::TYPE_BOOLEAN;
	public $validations = 'required';

}
