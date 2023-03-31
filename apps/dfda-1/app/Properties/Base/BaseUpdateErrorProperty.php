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
class BaseUpdateErrorProperty extends BaseProperty{
	use IsString;
	public $dbInput = 'text,65535:nullable';
	public $dbType = 'text';
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'Indicates if there was an error during the update.';
	public $fieldType = 'text';
	public $fontAwesome = FontAwesome::_AT;
	public $htmlInput = 'textarea';
	public $htmlType = 'textarea';
	public $image = ImageUrls::CREATED;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = false;
	public $isSearchable = true;
	public $maxLength = 65535;
	public $name = self::NAME;
	public const NAME = 'update_error';
	public $phpType = PhpTypes::STRING;
	public $rules = 'nullable|max:65535';
	public $title = 'Update Error';
	public $type = PhpTypes::STRING;
	public $canBeChangedToNull = true;
	public $validations = 'nullable|max:65535';
    public function showOnUpdate(): bool {return false;}
    public function showOnCreate(): bool {return false;}
    public function showOnIndex(): bool {return false;}
    public function showOnDetail(): bool {return true;}
}
