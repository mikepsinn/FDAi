<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Buttons\RelationshipButtons\TrackingReminderNotification;
use App\Buttons\RelationshipButtons\BelongsToRelationshipButton;
use App\Models\Variable;
use App\Models\TrackingReminderNotification;
class TrackingReminderNotificationVariableButton extends BelongsToRelationshipButton {
    public $interesting = true;
	public $foreignKeyName = TrackingReminderNotification::FIELD_VARIABLE_ID;
	public $qualifiedForeignKeyName = TrackingReminderNotification::TABLE.'.'.TrackingReminderNotification::FIELD_VARIABLE_ID;
	public $ownerKeyName = Variable::FIELD_ID;
	public $qualifiedOwnerKeyName = Variable::TABLE.'.'.Variable::FIELD_ID;
	public $childClass = TrackingReminderNotification::class;
	public $parentClass = TrackingReminderNotification::class;
	public $qualifiedParentKeyName = TrackingReminderNotification::TABLE.'.'.TrackingReminderNotification::FIELD_ID;
	public $relatedClass = Variable::class;
	public $methodName = 'variable';
	public $relationshipType = 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo';
	public $color = Variable::COLOR;
	public $fontAwesome = Variable::FONT_AWESOME;
	public $id = 'variable-button';
	public $image = Variable::DEFAULT_IMAGE;
	public $text = 'Variable';
	public $title = 'Variable';
	public $tooltip = Variable::CLASS_DESCRIPTION;

}
