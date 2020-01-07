<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $hidden = ['created_at','updated_at','deleted_at'];


    public function title(){
        return $this->hasMany('App\Title');
    }
}
