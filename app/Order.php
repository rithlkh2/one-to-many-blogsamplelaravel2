<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = "orders";
    public function productitem(){
        return $this->hasMany('App\Productitem');
    }
}
