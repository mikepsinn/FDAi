<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BaseAllowAutoMergeProperty extends BaseProperty
{
    use \App\Traits\PropertyTraits\IsBoolean;
	public $dbInput = self::TYPE_BOOLEAN;
	public $dbType = self::TYPE_BOOLEAN;
	public $default = 'undefined';
	public $description = 'Example: ';
	public $example = false;
	public $fieldType = self::TYPE_BOOLEAN;
	public $fontAwesome = FontAwesome::AUTOPREFIXER;
	public $htmlInput = 'checkbox,1';
	public $htmlType = 'checkbox';
	public $image = ImageUrls::QUESTION_MARK;
	public $importance = false;
	public $isOrderable = false;
	public $isSearchable = true;
	public $name = self::NAME;
	public const NAME = 'allow_auto_merge';
	public $order = 99;
	public $phpType = self::TYPE_BOOLEAN;
	public $rules = self::TYPE_BOOLEAN;
	public $showOnDetail = true;
	public $title = 'Allow Auto Merge';
	public $type = self::TYPE_BOOLEAN;
	public $validations = 'boolean';

}
