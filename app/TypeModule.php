<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeModule extends Model
{
    //
    public function modules()
    {
        return $this->hasMany('App\Module');
    }
}
