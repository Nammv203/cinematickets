<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CinemaRepository;
use App\Models\Cinema;
use App\Validators\CinemaValidator;

/**
 * Class CinemaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CinemaRepositoryEloquent extends BaseRepository implements CinemaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cinema::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
