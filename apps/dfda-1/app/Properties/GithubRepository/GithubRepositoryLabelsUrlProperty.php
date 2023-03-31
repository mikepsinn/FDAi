<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\GithubRepository;
use App\Models\GithubRepository;
use App\Traits\PropertyTraits\GithubRepositoryProperty;
use App\Properties\Base\BaseLabelsUrlProperty;
class GithubRepositoryLabelsUrlProperty extends BaseLabelsUrlProperty
{
    use GithubRepositoryProperty;
    public $table = GithubRepository::TABLE;
    public $parentClass = GithubRepository::class;
}
