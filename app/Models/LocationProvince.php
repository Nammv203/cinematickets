<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationProvince extends Model
{
    use HasFactory;

    protected $table = 'location_provinces';

    protected $fillable = [
        'province_name'
    ];

    public function location_districts(){
        return $this->hasMany(LocationDistrict::class, 'province_id', 'id');
    }
}
