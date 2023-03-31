<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\VariableCategories;
use App\Properties\Base\BaseFillingTypeProperty;
use App\UI\FontAwesome;
use App\Variables\QMVariableCategory;
class PaymentsVariableCategory extends QMVariableCategory {
	public const AMAZON_PRODUCT_CATEGORY = null;
	public const BORING = true;
	public const CAUSE_ONLY = false;
	public const COMBINATION_OPERATION = 'SUM';
	public const COMMON = null;
	public const DEFAULT_UNIT_ABBREVIATED_NAME = '$';
	public const DEFAULT_UNIT_ID = 49;
	public const DURATION_OF_ACTION = 86400 * 30;
	public const EFFECT_ONLY = null;
    public const FILLING_TYPE = BaseFillingTypeProperty::FILLING_TYPE_ZERO;
    public const FILLING_VALUE = 0;
	public const HELP_TEXT = 'What did you pay for?';
	public const FONT_AWESOME = FontAwesome::MONEY_BILL_ALT;
	public const ID = 32;
    public const IMAGE_URL = 'https://static.quantimo.do/img/variable_categories/banknotes-96.png';
	public const ION_ICON = 'ion-cash';
	public const MANUAL_TRACKING = false;
	public const MAXIMUM_ALLOWED_VALUE = null;
	public const MEASUREMENT_SYNONYM_SINGULAR_LOWERCASE = 'payment';
	public const MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS = null;
	public const MINIMUM_ALLOWED_VALUE = null;
	public const MORE_INFO = 'Effortlessly see how supplements from Amazon might be influencing you, for example, by automatically logging spending by connecting the Slice app';
	public const NAME = 'Payments';
	public const ONSET_DELAY = 0;
	public const OUTCOME = false;
	public const PNG_PATH = 'img/variable_categories/payments.png';
    public const PNG_URL = 'https://static.quantimo.do/img/variable_categories/payments.png';
	public const PREDICTOR = true;
	public const PUBLIC = false;
	public const SETUP_QUESTION = null;
	public const STUDY_IMAGE_FILE_NAME = null;
	public const SUFFIX = null;
	public const SVG_PATH = 'img/variable_categories/payments.svg';
    public const SVG_URL = 'https://static.quantimo.do/img/variable_categories/payments.svg';
	public const SYNONYMS = ['Purchases', 'Payments', 'Payment', 'Purchase'];
	public const VALENCE = null;
	public const VARIABLE_CATEGORY_NAME = 'Payments';
	public const VARIABLE_CATEGORY_NAME_SINGULAR = 'Payment';
    public $amazonProductCategory = self::AMAZON_PRODUCT_CATEGORY;
	public $boring = self::BORING;
	public $causeOnly = self::CAUSE_ONLY;
	public $combinationOperation = self::COMBINATION_OPERATION;
	public $common = self::COMMON;
	public $defaultUnitAbbreviatedName = self::DEFAULT_UNIT_ABBREVIATED_NAME;
	public $defaultUnitId = self::DEFAULT_UNIT_ID;
	public $durationOfAction = self::DURATION_OF_ACTION;
	public $effectOnly = self::EFFECT_ONLY;
	public $fillingType = self::FILLING_TYPE;
	public ?float $fillingValue = self::FILLING_VALUE;
	public $helpText = self::HELP_TEXT;
	public $fontAwesome = self::FONT_AWESOME;
	public $id = self::ID;
	public $imageUrl = self::IMAGE_URL;
	public $ionIcon = self::ION_ICON;
	public $manualTracking = self::MANUAL_TRACKING;
	public $maximumAllowedValue = self::MAXIMUM_ALLOWED_VALUE;
	public $measurementSynonymSingularLowercase = self::MEASUREMENT_SYNONYM_SINGULAR_LOWERCASE;
	public $minimumAllowedSecondsBetweenMeasurements = self::MINIMUM_ALLOWED_SECONDS_BETWEEN_MEASUREMENTS;
	public $minimumAllowedValue = self::MINIMUM_ALLOWED_VALUE;
	public $moreInfo = self::MORE_INFO;
	public $name = self::NAME;
	public $onsetDelay = self::ONSET_DELAY;
	public $outcome = self::OUTCOME;
	public $pngPath = self::PNG_PATH;
	public $pngUrl = self::PNG_URL;
	public $predictor = self::PREDICTOR;
	public $public = self::PUBLIC;
	public $setupQuestion = self::SETUP_QUESTION;
	public $studyImageFileName = self::STUDY_IMAGE_FILE_NAME;
	public $suffix = self::SUFFIX;
	public $svgPath = self::SVG_PATH;
	public $svgUrl = self::SVG_URL;
	public $synonyms = self::SYNONYMS;
	public $valence = self::VALENCE;
	public $variableCategoryName = self::VARIABLE_CATEGORY_NAME;
	public $variableCategoryNameSingular = self::VARIABLE_CATEGORY_NAME_SINGULAR;
}
