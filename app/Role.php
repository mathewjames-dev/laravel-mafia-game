<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model {

    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];

    public function permissions()
    {
        return $this->belongsToMany('App\Permission')->withTimestamps();
    }

    public function assignPermission($permission)
    {
        $this->permissions()->attach($permission);
    }

    public function removePermission($permission)
    {
        $this->permissions()->detach($permission);
    }
}
