<?php

namespace App\Models;

use App\Traits\TraitsHasAudit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class CinemaRoom.
 *
 * @package namespace App\Models;
 */
class CinemaRoom extends Model implements Transformable

    use TransformableTrait;
    use TraitsHasAudit;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cinema_id',
//        'name',
        'room_code',
        'description'
    ];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function cinemaRoomChairs()
    {
        return $this->hasMany(CinemaRoomChair::class,'cinema_room_id');
    }
}
