<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Buttons\RelationshipButtons\UserClient;
use App\Buttons\RelationshipButtons\BelongsToRelationshipButton;
use App\Models\User;
use App\Models\UserClient;
class UserClientUserButton extends BelongsToRelationshipButton {
	public $interesting = true;
	public $foreignKeyName = UserClient::FIELD_USER_ID;
	public $qualifiedForeignKeyName = UserClient::TABLE . '.' . UserClient::FIELD_USER_ID;
	public $ownerKeyName = User::FIELD_ID;
	public $qualifiedOwnerKeyName = User::TABLE . '.' . User::FIELD_ID;
	public $childClass = UserClient::class;
	public $parentClass = UserClient::class;
	public $qualifiedParentKeyName = UserClient::TABLE . '.' . UserClient::FIELD_ID;
	public $relatedClass = User::class;
	public $methodName = 'user';
	public $relationshipType = 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo';
	public $color = User::COLOR;
	public $fontAwesome = User::FONT_AWESOME;
	public $id = 'user-button';
	public $image = UserClient::DEFAULT_IMAGE;
	public $text = 'User';
	public $title = 'User';
	public $tooltip = User::CLASS_DESCRIPTION;
}
