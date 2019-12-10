<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function title(){
        return $this->hasMany('App\Title');
    }
}
