<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $table="patients";
    public function staffs(){
        return $this->belongsToMany('App\Staff');
    }
}
