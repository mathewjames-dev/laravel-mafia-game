<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'Cars';

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
