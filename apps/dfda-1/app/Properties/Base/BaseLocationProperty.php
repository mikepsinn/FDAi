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
use OpenApi\Generator;
abstract class BaseLocationProperty extends BaseProperty{

	public $dbInput = 'string,255:nullable';
	public $dbType = PhpTypes::STRING;
	public $default = Generator::UNDEFINED;
	public $description = 'location';
	public $example = 'Auray/France';
	public $fieldType = PhpTypes::STRING;
	public $fontAwesome = FontAwesome::LATITUDE;
	public $htmlInput = 'text';
	public $htmlType = 'text';
	public $image = ImageUrls::TRACK_LOCATION;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = false;
	public $isSearchable = true;
	public $maxLength = 255;
	public $name = self::NAME;
	public const NAME = 'location';
	public $phpType = PhpTypes::STRING;
	public $rules = 'nullable|max:255';
	public $title = 'Location';
	public $type = PhpTypes::STRING;
	public $canBeChangedToNull = true;
	public $validations = 'nullable|max:255';
	public function showOnCreate(): bool{return false;}


}
