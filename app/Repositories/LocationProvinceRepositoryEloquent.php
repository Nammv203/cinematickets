<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\LocationProvince;

/**
 * Class CategoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class LocationProvinceRepositoryEloquent extends BaseRepository implements LocationProvinceRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return LocationProvince::class;
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