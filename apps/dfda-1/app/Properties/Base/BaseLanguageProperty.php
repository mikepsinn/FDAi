<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsString;
use App\Types\PhpTypes;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BaseLanguageProperty extends BaseProperty{
	use IsString;
	public $dbInput = 'string,255:nullable';
	public $dbType = PhpTypes::STRING;
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'language';
	public $fieldType = PhpTypes::STRING;
	public $fontAwesome = FontAwesome::LANGUAGE;
	public $htmlInput = 'text';
	public $htmlType = 'text';
	public $image = ImageUrls::LANGUAGE;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = false;
	public $isSearchable = true;
	public $maxLength = 255;
	public $name = self::NAME;
	public const NAME = 'language';
	public $phpType = PhpTypes::STRING;
	public $rules = 'nullable|max:255';
	public $title = 'Language';
	public $type = PhpTypes::STRING;
	public $canBeChangedToNull = true;
	public $validations = 'nullable|max:255';

}
