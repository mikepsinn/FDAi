<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Buttons\RelationshipButtons\Variable;
use App\Buttons\RelationshipButtons\HasManyRelationshipButton;
use App\Models\UserVariableRelationship;
use App\Models\Variable;
class VariableCorrelationsWhereEffectVariableButton extends HasManyRelationshipButton {
	public $interesting = false;
	public $parentClass = Variable::class;
	public $qualifiedParentKeyName = Variable::TABLE . '.' . Variable::FIELD_ID;
	public $relatedClass = UserVariableRelationship::class;
	public $methodName = 'correlations_where_effect_variable';
	public $relationshipType = 'Illuminate\\Database\\Eloquent\\Relations\\HasMany';
	public $color = UserVariableRelationship::COLOR;
	public $fontAwesome = UserVariableRelationship::FONT_AWESOME;
	public $id = 'correlations-where-effect-variable-button';
	public $image = UserVariableRelationship::DEFAULT_IMAGE;
	public $text = 'Correlations Where Effect Variable';
	public $title = 'Correlations Where Effect Variable';
	public $tooltip = 'Correlations where this is the Effect Variable';
}
