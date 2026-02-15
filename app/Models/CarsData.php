<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarsData extends Model
{
    protected $table = 'cars_data';

    protected $fillable = [
        'car_name',
        'car_model'
    ];
     public $timestamps = false;

     public function cars()
    {
        return $this->hasMany(Car::class, 'car_data_id');
    }
}
