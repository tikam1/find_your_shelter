<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $primaryKey = 'pid';

    protected $fillable = [
        'house_img', 'district', 'city', 'city_area', 'house_no', 'no_of_rooms', 'rent', 'tid', 'aid', 'features',
        'other_notes', 'owner', 'contact', 'address'
    ];

    public function propertyTypes() {
        return $this->belongsTo('App/PropertyTypes');
    }
}
