<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $table="staffs";
    public function patients(){
        return $this->belongsToMany('App\Patient');
    }
}
