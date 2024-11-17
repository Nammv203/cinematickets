<?php

namespace App\Models;

use App\Traits\TraitsHasAudit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Category.
 *
 * @package namespace App\Models;
 */
class Category extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;
    use TraitsHasAudit;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'categories' ;
    protected $fillable = [
        'name',
        'description',
        'picture',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
