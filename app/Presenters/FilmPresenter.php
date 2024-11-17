<?php

namespace App\Presenters;

use App\Transformers\FilmTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class FilmPresenter.
 *
 * @package namespace App\Presenters;
 */
class FilmPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new FilmTransformer();
    }
}
