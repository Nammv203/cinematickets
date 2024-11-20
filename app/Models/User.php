<?php

namespace App\Models;

use App\Traits\TraitsHasAudit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User.
 *
 * @package namespace App\Models;
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use TransformableTrait;

    use SoftDeletes;

    use TraitsHasAudit;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role_id',
        'birthday',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
