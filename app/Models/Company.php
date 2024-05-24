<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'latitide',
        'lognitude',
        'radius_km',
        'time_in',
        'time_out',
    ];
}
