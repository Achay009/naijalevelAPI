<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = 'titles';

    protected $hidden = ['created_at','updated_at','deleted_at'];

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
