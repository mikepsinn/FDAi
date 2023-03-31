<?php
namespace App\Properties\WpUsermetum;
use App\Models\WpUsermetum;
use App\Traits\PropertyTraits\WpUsermetumProperty;
use App\Properties\Base\BaseClientIdProperty;
class WpUsermetumClientIdProperty extends BaseClientIdProperty
{
    use WpUsermetumProperty;
    public $table = WpUsermetum::TABLE;
    public $parentClass = WpUsermetum::class;
}