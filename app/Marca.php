<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public function cars(){
        return $this->belongsTo("App\Car");
    }
}
