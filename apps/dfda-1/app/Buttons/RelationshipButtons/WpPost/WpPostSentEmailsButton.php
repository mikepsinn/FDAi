<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Buttons\RelationshipButtons\WpPost;
use App\Buttons\RelationshipButtons\HasManyRelationshipButton;
use App\Models\SentEmail;
use App\Models\WpPost;
class WpPostSentEmailsButton extends HasManyRelationshipButton {
	public $interesting = true;
	public $parentClass = WpPost::class;
	public $qualifiedParentKeyName = 'id';
	public $relatedClass = SentEmail::class;
	public $methodName = SentEmail::TABLE;
	public $relationshipType = 'Illuminate\\Database\\Eloquent\\Relations\\HasMany';
	public $color = SentEmail::COLOR;
	public $fontAwesome = SentEmail::FONT_AWESOME;
	public $id = 'sent-emails-button';
	public $image = SentEmail::DEFAULT_IMAGE;
	public $text = 'Sent Emails';
	public $title = 'Sent Emails';
	public $tooltip = SentEmail::CLASS_DESCRIPTION;
}
