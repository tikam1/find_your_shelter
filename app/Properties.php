<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $primaryKey = 'pid';

    protected $fillable = [
        'house_img', 'district', 'vdc_mun', 'ward', 'house', 'rooms', 'rent', 'tid', 'aid', 'features',
        'notes', 'owner', 'contact', 'address'
    ];

    public function propertyTypes() {
        return $this->hasOne('App/PropertyTypes');
    }

    public function availability() {
        return $this->hasOne('App/Availability');
    }
}

