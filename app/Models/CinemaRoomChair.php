<?php

namespace App\Models;

use App\Traits\TraitsHasAudit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class CinemaRoomChair.
 *
 * @package namespace App\Models;
 */
class CinemaRoomChair extends Model implements Transformable
{
    use TransformableTrait;
//    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cinema_room_id',
        'chair_code',
        'chair_type',
        'amount',
    ];

    public function cinemaRoom()
    {
        return $this->belongsTo(CinemaRoom::class);
    }
}
