<?php

namespace App\Repositories;

use App\Models\LocationDistrict;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class CategoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class LocationDistrictRepositoryEloquent extends BaseRepository implements LocationDistrictRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return LocationDistrict::class;
    }

    /**
    * Specify Validator class name
    *
    // * @return mixed
    */
    // public function validator()
    // {

    //     return CategoryValidator::class;
    // }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
