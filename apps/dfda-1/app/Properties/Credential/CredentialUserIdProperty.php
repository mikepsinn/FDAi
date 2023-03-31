<?php
namespace App\Properties\Credential;
use App\Models\Credential;
use App\Traits\PropertyTraits\CredentialProperty;
use App\Properties\Base\BaseUserIdProperty;
class CredentialUserIdProperty extends BaseUserIdProperty
{
    use CredentialProperty;
    public $table = Credential::TABLE;
    public $parentClass = Credential::class;
}