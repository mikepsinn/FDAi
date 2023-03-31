<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BaseLifetimeQueryCountProperty extends BaseProperty
{
    use \App\Traits\PropertyTraits\IsInt;
	public $canBeChangedToNull = true;
	public $dbInput = 'integer,false,true';
	public $dbType = self::TYPE_INTEGER;
	public $default = 'undefined';
	public $description = 'lifetime_query_count';
	public $example = 0;
	public $fieldType = self::TYPE_INTEGER;
	public $fontAwesome = FontAwesome::COUNTRY;
	public $htmlType = self::TYPE_NUMBER;
	public $image = ImageUrls::JS_JQUERY;
	public $importance = false;
	public $isOrderable = false;
	public $isSearchable = false;
	public $name = self::NAME;
	public const NAME = 'lifetime_query_count';
	public $order = 99;
	public $phpType = \App\Types\PhpTypes::INTEGER;
	public $showOnDetail = true;
	public $title = 'Lifetime Query Count';
	public $type = self::TYPE_INTEGER;

}
