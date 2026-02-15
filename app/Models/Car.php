<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_data_id'
    ];

    public function carData()
    {
        return $this->belongsTo(CarsData::class, 'car_data_id');
    }
    

}
