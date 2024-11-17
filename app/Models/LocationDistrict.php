<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationDistrict extends Model
{
    use HasFactory;

    protected $table = 'location_districts';

    protected $fillable = [
        'province_id',
        'district_name'
    ];

    public function location_province(){
        return $this->belongsTo(LocationProvince::class, 'id', 'province_id');
    }

    public function cinemas(){
        return $this->belongsTo(Cinema::class, 'location_id', 'id');
    }
}
