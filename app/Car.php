<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    public function marca(){
        return $this->belongsTo('App\Marca');
    }
}
