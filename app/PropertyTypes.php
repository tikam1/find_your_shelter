<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyTypes extends Model
{
    public $table ='property_types';

    protected $primaryKey = 'tid';

    public function properties() {
        $this->belongsTo('App\Properties');
    }
}
