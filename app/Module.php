<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    public function components()
    {
        return $this->hasMany('App\Component');
    }

    public function pages()
    {
        return $this->belongsTo('App\Page');
    }

    public function types_modules()
    {
        return $this->belongsTo('App\TypeModule');
    }
}
