<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gun extends Model
{
    protected $table = 'guns';

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
