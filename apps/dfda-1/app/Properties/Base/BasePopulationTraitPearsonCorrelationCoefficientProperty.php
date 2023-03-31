<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsFloat;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BasePopulationTraitPearsonCorrelationCoefficientProperty extends BaseProperty{
	use IsFloat;
	public $dbInput = 'float,10,0';
	public $dbType = 'float';
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'population_trait_pearson_correlation_coefficient';
	public $example = 0.53279628287527;
	public $fieldType = 'float';
	public $fontAwesome = FontAwesome::AGGREGATE_CORRELATION;
	public $htmlType = 'text';
	public $image = ImageUrls::AGGREGATE_CORRELATION;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = true;
	public $isSearchable = false;
	public $name = self::NAME;
	public const NAME = 'population_trait_pearson_correlation_coefficient';
	public $phpType = 'float';
	public $rules = 'nullable|numeric';
	public $title = 'Population Trait Pearson Correlation Coefficient';
	public $type = self::TYPE_NUMBER;
	public $canBeChangedToNull = true;
	public $validations = 'nullable|numeric';

}
