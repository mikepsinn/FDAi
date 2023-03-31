<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Variables\CommonVariables\EmotionsCommonVariables;
use App\UI\ImageUrls;
use App\Variables\QMCommonVariable;
use App\VariableCategories\EmotionsVariableCategory;
use App\Units\OneToFiveRatingUnit;
class GuiltinessCommonVariable extends QMCommonVariable {
	public const DEFAULT_UNIT_ID = OneToFiveRatingUnit::ID;
	public const DEFAULT_VALUE = 1.0;
	public const DESCRIPTION = 'Guilt is an unhappy feeling that you have because you have done something wrong or think that you have done something wrong.';
	public const ID = 1335;
	public const IMAGE_URL = ImageUrls::EMOTICON_SET_SAD_2;
	public const ION_ICON = 'ion-sad-outline';
	public const NAME = 'Guiltiness';
	public const PRICE = 1.29;
	public const PRODUCT_URL = 'https://www.amazon.com/Guiltiness/dp/B000V6NOUG?linkCode=xm2&camp=2025&creative=165953&creativeASIN=B000V6NOUG';
	public const SYNONYMS = ['Guiltiness', 'Guiltines', 'Guiltine'];
	public const VALENCE = 'negative';
	public const VARIABLE_CATEGORY_ID = EmotionsVariableCategory::ID;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $defaultValue = self::DEFAULT_VALUE;
	public $description = self::DESCRIPTION;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $ionIcon = self::ION_ICON;
	public $name = self::NAME;
	public float $price = self::PRICE;
	public $productUrl = self::PRODUCT_URL;
	public $synonyms = self::SYNONYMS;
	public $valence = self::VALENCE;
	public $variableCategoryId = self::VARIABLE_CATEGORY_ID;
}
