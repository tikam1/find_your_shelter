<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = [
        'house_img', 'district', 'city', 'city_area', 'house_no', 'no_of_rooms', 'rent', 'availability', 'features',
        'other_notes', 'type_id', 'owner_id',
    ];
}
