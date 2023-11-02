<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Muhamad Hudansah
//6706223049
//46-03
class RentalVehicle extends Model
{
    protected $table = 'rental_vehicles';

    protected $fillable = ['name', 'type_id', 'license_plate', 'daily_price', 'status'];

    public function type()
    {
        return $this->belongsTo(RentalType::class, 'type_id');
    }

    public function transactions()
    {
        return $this->hasMany(RentalTransaction::class, 'vehicle_id');
    }
}
