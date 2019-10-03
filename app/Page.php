<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    public function modules()
    {
        return $this->hasMany('App\Module');
    }
}
