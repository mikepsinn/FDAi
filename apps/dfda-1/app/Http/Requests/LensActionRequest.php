<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Http\Requests;

use Illuminate\Database\Eloquent\Builder;
use LogicException;

class LensActionRequest extends ActionRequest
{
    use InteractsWithLenses;

    /**
     * Transform the request into a query.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function toQuery()
    {
        return tap($this->lens()->query(LensRequest::createFrom($this), $this->newQuery()), function ($query) {
            if (! $query instanceof Builder) {
                throw new LogicException('Lens must return an Eloquent query instance in order to apply actions.');
            }
        });
    }

    /**
     * Get the all actions for the request.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function resolveActions()
    {
        return $this->isPivotAction()
                    ? $this->lens()->resolvePivotActions($this)
                    : $this->lens()->resolveActions($this);
    }
}
