<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Http\Requests;

use Closure;
use Illuminate\Support\Collection;

class DeleteLensResourceRequest extends LensResourceDeletionRequest
{
    /**
     * Get the selected models for the action in chunks.
     *
     * @param  int  $count
     * @param  \Closure  $callback
     * @return mixed
     */
    public function chunks($count, Closure $callback)
    {
        return $this->chunkWithAuthorization($count, $callback, function ($models) {
            return $this->deletableModels($models);
        });
    }

    /**
     * Get the models that may be deleted.
     *
     * @param  \Illuminate\Support\Collection  $models
     * @return \Illuminate\Support\Collection
     */
    protected function deletableModels(Collection $models)
    {
        return $models->mapInto($this->resource())
                        ->filter
                        ->authorizedToDelete($this)
                        ->map->model();
    }
}
