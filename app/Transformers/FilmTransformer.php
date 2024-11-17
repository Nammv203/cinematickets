<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Film;

/**
 * Class FilmTransformer.
 *
 * @package namespace App\Transformers;
 */
class FilmTransformer extends TransformerAbstract
{
    /**
     * Transform the Film entity.
     *
     * @param \App\Models\Film $model
     *
     * @return array
     */
    public function transform(Film $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
