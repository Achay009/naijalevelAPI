<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compensation extends Model
{
    protected $table = 'compensations';

    protected $hidden = ['created_at','updated_at','deleted_at','approved'];

    public function level(){
        return $this->belongsTo('App\Level');
    }
    public function title(){
        return $this->belongsTo('App\Title');
    }
}
