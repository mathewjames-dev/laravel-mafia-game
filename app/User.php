<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function roles()
	{
		return $this->belongsToMany('App\Role')->withTimestamps();
	}

	public function hasRole($name)
	{
		foreach($this->roles as $role)
		{
			if($role->name == $name)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function assignRole($role)
	{
		$this->roles()->attach($role);
	}

	public function removeRole($role)
	{
		$this->roles()->detach($role);
	}

	public function banks()
	{
		return $this->hasOne('App\Bank');
	}

	public function guns()
	{
		return $this->belongsToMany('App\Gun');
	}
	public function assignGun($gun)
	{
		$this->guns()->attach($gun);
	}
	public function removeGun($gun)
	{
		$this->guns()->detach($gun);
	}

	public function armors()
	{
		return $this->belongsToMany('App\Armor');
	}
	public function assignArmor($armor)
	{
		$this->armors()->attach($armor);
	}

	public function cars()
	{
		return $this->belongsToMany('App\Car');
	}
	public function assignCar($car)
	{
		$this->cars()->attach($car);
	}
}
