<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    //
    public function modules()
    {
        return $this->belongsTo('App\Module');
    }
}
