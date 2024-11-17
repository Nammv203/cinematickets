<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SchedulePublishFilmRepository;
use App\Models\SchedulePublishFilm;
use App\Validators\SchedulePublishFilmValidator;

/**
 * Class SchedulePublishFilmRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SchedulePublishFilmRepositoryEloquent extends BaseRepository implements SchedulePublishFilmRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SchedulePublishFilm::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
