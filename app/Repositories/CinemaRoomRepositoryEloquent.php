<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CinemaRoomRepository;
use App\Models\CinemaRoom;
use App\Validators\CinemaRoomValidator;

/**
 * Class CinemaRoomRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CinemaRoomRepositoryEloquent extends BaseRepository implements CinemaRoomRepository
{
    protected $limit = 10;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CinemaRoom::class;
    }

    public function getListByCinemaId(Request $request, $cinemaId)
    {
        return $this->model->where('cinema_id', $cinemaId)->paginate($request->limit ?? $this->limit);
    }

    public function getCinemaRoomWithCinemaById($roomId)
    {
        return $this->model->with(['cinema'])->find($roomId);
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
