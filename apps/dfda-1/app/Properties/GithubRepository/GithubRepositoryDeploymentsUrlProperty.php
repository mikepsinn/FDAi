<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\GithubRepository;
use App\Models\GithubRepository;
use App\Traits\PropertyTraits\GithubRepositoryProperty;
use App\Properties\Base\BaseDeploymentsUrlProperty;
class GithubRepositoryDeploymentsUrlProperty extends BaseDeploymentsUrlProperty
{
    use GithubRepositoryProperty;
    public $table = GithubRepository::TABLE;
    public $parentClass = GithubRepository::class;
}
