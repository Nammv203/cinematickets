<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CinemaRoomChairRepository;
use App\Models\CinemaRoomChair;
use App\Validators\CinemaRoomChairValidator;

/**
 * Class CinemaRoomChairRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CinemaRoomChairRepositoryEloquent extends BaseRepository implements CinemaRoomChairRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CinemaRoomChair::class;
    }

    public function getChairsByRoomId($roomId)
    {
        return $this->findWhere(['cinema_room_id' => $roomId]);
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
