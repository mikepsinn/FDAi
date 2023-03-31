<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Buttons\RelationshipButtons\WpPost;
use App\Buttons\RelationshipButtons\HasManyRelationshipButton;
use App\Models\Application;
use App\Models\WpPost;
class WpPostApplicationsButton extends HasManyRelationshipButton {
	public $interesting = true;
	public $parentClass = WpPost::class;
	public $qualifiedParentKeyName = 'id';
	public $relatedClass = Application::class;
	public $methodName = Application::TABLE;
	public $relationshipType = 'Illuminate\\Database\\Eloquent\\Relations\\HasMany';
	public $color = Application::COLOR;
	public $fontAwesome = Application::FONT_AWESOME;
	public $id = 'applications-button';
	public $image = Application::DEFAULT_IMAGE;
	public $text = 'Applications';
	public $title = 'Applications';
	public $tooltip = Application::CLASS_DESCRIPTION;
}
