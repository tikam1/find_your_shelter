<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    public $table ='properties';

    protected $primaryKey = 'pid';

    protected $fillable = [
        'district', 'vdc_mun', 'ward', 'house', 'rooms', 'rent', 'tid', 'aid', 'features',
        'notes', 'owner', 'contact', 'address'
    ];
}

