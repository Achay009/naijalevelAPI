<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function title(){

        return $this->belongsTo('App\Title');
    }
}
