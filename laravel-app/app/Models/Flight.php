<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use SoftDeletes;
    //use HasFactory;
    // protected $table = 'my_flights';
    // protected $primaryKey = 'flight_id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    // protected $dateFormat = 'U';

    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    // protected $connection = 'sqlite';
    // protected $attributes = [
    //     'delayed' => false,
    // ];

    

}
