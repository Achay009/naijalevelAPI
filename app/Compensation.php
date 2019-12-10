<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compensation extends Model
{



    public function level(){
        return $this->belongsTo('App\Level');
    }
    public function title(){
        return $this->belongsTo('App\Title');
    }
}
