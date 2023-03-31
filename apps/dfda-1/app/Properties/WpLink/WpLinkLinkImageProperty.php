<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\WpLink;
use App\Models\WpLink;
use App\Traits\PropertyTraits\WpLinkProperty;
use App\Properties\Base\BaseLinkImageProperty;
class WpLinkLinkImageProperty extends BaseLinkImageProperty
{
    use WpLinkProperty;
    public $table = WpLink::TABLE;
    public $parentClass = WpLink::class;
}
