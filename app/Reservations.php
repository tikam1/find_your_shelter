<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $primaryKey = 'res_id';

    protected $fillable = [
        'name', 'email', 'contact', 'pid',
    ];
}
