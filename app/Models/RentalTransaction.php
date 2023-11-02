<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//Muhamad Hudansah
//6706223049
//46-03
class RentalTransaction extends Model
{
    protected $table = 'rental_transactions';

    protected $fillable = ['user_id', 'vehicle_id', 'start_date', 'end_date', 'price', 'status'];

    public function user()
    {
        return $this->belongsTo(RentalUser::class, 'user_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(RentalVehicle::class, 'vehicle_id');
    }
}
