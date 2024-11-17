<?php

namespace App\Models;

use App\Traits\TraitsHasAudit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class SchedulePublishFilm.
 *
 * @package namespace App\Models;
 */
class SchedulePublishFilm extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;
    use TraitsHasAudit;

    protected $table = 'schedule_publish_films';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'film_id',
        'cinema_room_id',
        'show_date',
        'show_time',
        'ticket_price',
        'description',
        'status',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function cinemaRoom()
    {
        return $this->belongsTo(CinemaRoom::class);
    }
}
