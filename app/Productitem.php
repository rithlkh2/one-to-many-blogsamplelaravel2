<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productitem extends Model
{
    public $table='productitems';
    public function order(){
        return $this->belongsTo('App\Order');
    }
}
