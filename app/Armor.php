<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    protected $table = 'armors';

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
