<?php
/**
 * Created by PhpStorm.
 * User: mjames
 * Date: 27/11/2015
 * Time: 11:10
 */

namespace App\Http\Controllers;

use App\Gun;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SetStateRequest;
use App\Http\Requests;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\MakeGunRequest;
use App\Http\Requests\MakeArmorRequest;
use App\Armor;
use App\Car;
use App\Http\Requests\MakeCarRequest;
use App\Http\Requests\MakeLocationRequest;
use App\Location;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('admin' or 'super_admin')) {
            return view('admin.panel');
        }
        else
        {
            return redirect('/home');
        }
    }

    public function createRole(CreateRoleRequest $request)
    {
        $role = new Role(Input::all());
        $role->save();

        return redirect('/admin');
    }

    public function editUser(EditUserRequest $request)
    {
        $user = User::where('username' == Input::get('name'))->first();
        $role = Role::where('name' == Input::get('name'));

        $user->assignRole($role);

        return redirect('/admin');
    }

    public function setState(SetStateRequest $request)
    {
        $user = User::where('name', Input::get('username'))->first();
        $state = Input::get('state');

        $user->sitestate = $state;
        $user->save();

        return redirect('/admin');
    }

    public function makeGun(MakeGunRequest $request)
    {
        $gun = new Gun();
        $gun->name = Input::get('name');
        $gun->description = Input::get('desc');
        $gun->image = Input::get('image');
        $gun->power = Input::get('power');
        $gun->accuracy = Input::get('accuracy');
        $gun->price = Input::get('price');
        $gun->save();

        return redirect('/admin');
    }

    public function makeArmor(MakeArmorRequest $request)
    {
        $armor = new Armor();
        $armor->name = Input::get('name');
        $armor->description = Input::get('description');
        $armor->image = Input::get('image');
        $armor->defence = Input::get('defence');
        $armor->value = Input::get('value');
        $armor->price = Input::get('price');
        $armor->save();

        return redirect('/admin');
    }

    public function makeCar(MakeCarRequest $request)
    {
        $car = new Car();
        $car->name = Input::get('name');
        $car->description = Input::get('description');
        $car->image = Input::get('image');
        $car->speed = Input::get('speed');
        $car->armor = Input::get('armor');
        $car->value = Input::get('value');
        $car->price = Input::get('price');
        $car->save();

        return redirect('/admin');
    }

    public function makeLocation(MakeLocationRequest $request)
    {
        $location = new Location();
        $location->location = Input::get('location');
        $location->price = Input::get('price');
        $location->save();

        return redirect('/admin');
    }
}