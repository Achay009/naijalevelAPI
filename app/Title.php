<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function level(){
        return $this->hasMany('App\Level');
    }
    public function compensations(){
        return $this->hasMany('App\Compensation');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
}
