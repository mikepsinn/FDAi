<?php
namespace App\Properties\IpDatum;
use App\Models\IpDatum;
use App\Traits\PropertyTraits\IpDatumProperty;
use App\Properties\Base\BaseCountryCodeProperty;
class IpDatumCountryCodeProperty extends BaseCountryCodeProperty
{
    use IpDatumProperty;
    public $table = IpDatum::TABLE;
    public $parentClass = IpDatum::class;
}