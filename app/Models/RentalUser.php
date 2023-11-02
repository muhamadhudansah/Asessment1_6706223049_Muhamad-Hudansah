<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Muhamad Hudansah
//6706223049
//46-03
class RentalUser extends Model
{
    protected $table = 'rental_users';

    protected $fillable = ['name', 'email', 'password'];
}
