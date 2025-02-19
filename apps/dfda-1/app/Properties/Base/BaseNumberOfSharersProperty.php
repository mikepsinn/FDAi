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
class BaseNumberOfSharersProperty extends BaseProperty
{
    use IsInt;
	public $dbInput = 'integer,false,true';
	public $dbType = \Doctrine\DBAL\Types\Types::INTEGER;
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'Number of people sharing their data with you.';
	public $example = 0;
	public $fieldType = self::TYPE_INTEGER;
	public $fontAwesome = FontAwesome::QUESTION_CIRCLE;
	public $htmlType = self::TYPE_NUMBER;
	public $image = ImageUrls::QUESTION_MARK;
	public $importance = false;
	public $isOrderable = true;
	public $isSearchable = false;
	public $name = self::NAME;
	public const NAME = 'number_of_sharers';
            	public $phpType = \App\Types\PhpTypes::INTEGER;
	public $showOnDetail = true;
	public $title = 'Sharers';
	public $type = self::TYPE_INTEGER;

}
