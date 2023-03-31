<?php /*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */ /** @noinspection PhpUnused */
namespace App\Policies;
use App\Models\User;
use App\Slim\Middleware\QMAuth;
class VariableCategoryPolicy extends BasePolicy
{
    /**
     * Determine whether the user can view any models.
     * @param  \App\Models\User  $user
     * @return mixed
     * @noinspection PhpUnused*/
    public function viewAny(User $user): bool{
        return true;
    }
    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VariableCategory  $model
     * @return mixed
     */
    public function view(User $user, $model): bool{
        return true;
    }
    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user): bool{
        return false;
    }
    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VariableCategory  $model
     * @return mixed
     */
    public function update(User $user, $model){
        return QMAuth::isAdmin();
    }
    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VariableCategory  $model
     * @return mixed
     */
    public function delete(User $user, $model): bool{
        return false;
    }
    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VariableCategory  $model
     * @return mixed
     */
    public function restore(User $user, $model): bool{
        return false;
    }
    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VariableCategory  $model
     * @return mixed
     */
    public function forceDelete(User $user, $model): bool{
        return false;
    }
}
