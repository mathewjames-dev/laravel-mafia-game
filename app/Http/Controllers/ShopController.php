<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Gun;
use App\Armor;
use App\Car;
use Illuminate\Support\Facades\Input;
use DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guns = Gun::all();
        $armors = Armor::all();
        $cars = Car::all();

        return view('shop.shop', compact('guns', 'armors', 'cars'));
    }

    public function purchaseWeapon()
    {
        $user = Auth::user();
        $radioButton = Input::get('radio');

        if($radioButton == 'Colt Derringer')
        {
            $gun = Gun::where('name', '=', 'Colt Derringer')->first();
            if($user->money >= $gun->price)
            {

                $user->money -= $gun->price;
                $user->assignGun($gun);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }

        }
        elseif ($radioButton == 'Colt SAA')
        {
            $gun = Gun::where('name', '=', 'Colt SAA')->first();
            if($user->money >= $gun->price)
            {

                $user->money -= $gun->price;
                $user->assignGun($gun);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif ($radioButton == 'Smith and Wesson')
        {
            $gun = Gun::where('name', '=', 'Smith and Wesson')->first();
            if($user->money >= $gun->price)
            {

                $user->money -= $gun->price;
                $user->assignGun($gun);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif ($radioButton == 'Winchester')
        {
            $gun = Gun::where('name', '=', 'Winchester')->first();
            if($user->money >= $gun->price)
            {

                $user->money -= $gun->price;
                $user->assignGun($gun);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif ($radioButton == 'Barrett .50 Cal')
        {
            $gun = Gun::where('name', '=', 'Barrett .50 Cal')->first();
            if($user->money >= $gun->price)
            {

                $user->money -= $gun->price;
                $user->assignGun($gun);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif ($radioButton == 'Thompson')
        {
            $gun = Gun::where('name', '=', 'Thompson')->first();
            if($user->money >= $gun->price)
            {

                $user->money -= $gun->price;
                $user->assignGun($gun);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif ($radioButton == 'Minigun')
        {
            $gun = Gun::where('name', '=', 'Minigun')->first();
            if($user->money >= $gun->price)
            {

                $user->money -= $gun->price;
                $user->assignGun($gun);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        else
        {
            session()->flash('flash_message_important', 'You Failed To Purchase The Item!!');
            return redirect('/shop');
        }
    }

    public function purchaseArmor()
    {
        $user = Auth::user();
        $radioButton = Input::get('radio');
        $armors = $user->armors->count();

        if($armors < 1) {
            if ($radioButton == 'Guard Dog') {
                $armor = Armor::where('name', '=', 'Guard Dog')->first();
                if ($user->money >= $armor->price) {

                    $user->money -= $armor->price;
                    $user->assignArmor($armor);
                    $user->save();

                    session()->flash('flash_message', 'You bought the item!');
                    return redirect('/shop');
                } else {
                    session()->flash('flash_message_important', 'Not Enough Money!');
                    return redirect('/shop');
                }

            } elseif ($radioButton == 'Trained Guard Dog') {
                $armor = Armor::where('name', '=', 'Trained Guard Dog')->first();
                if ($user->money >= $armor->price) {

                    $user->money -= $armor->price;
                    $user->assignArmor($armor);
                    $user->save();

                    session()->flash('flash_message', 'You bought the item!');
                    return redirect('/shop');
                } else {
                    session()->flash('flash_message_important', 'Not Enough Money!');
                    return redirect('/shop');
                }

            } elseif ($radioButton == 'Armed Escort') {
                $armor = Armor::where('name', '=', 'Armed Escort')->first();
                if ($user->money >= $armor->price) {

                    $user->money -= $armor->price;
                    $user->assignArmor($armor);
                    $user->save();

                    session()->flash('flash_message', 'You bought the item!');
                    return redirect('/shop');
                } else {
                    session()->flash('flash_message_important', 'Not Enough Money!');
                    return redirect('/shop');
                }

            } elseif ($radioButton == '2 Armed Escorts') {
                $armor = Armor::where('name', '=', '2 Armed Escorts')->first();
                if ($user->money >= $armor->price) {

                    $user->money -= $armor->price;
                    $user->assignArmor($armor);
                    $user->save();

                    session()->flash('flash_message', 'You bought the item!');
                    return redirect('/shop');
                } else {
                    session()->flash('flash_message_important', 'Not Enough Money!');
                    return redirect('/shop');
                }

            } elseif ($radioButton == 'Reinforced Pontiac') {
                $armor = Armor::where('name', '=', 'Reinforced Pontiac')->first();
                if ($user->money >= $armor->price) {

                    $user->money -= $armor->price;
                    $user->assignArmor($armor);
                    $user->save();

                    session()->flash('flash_message', 'You bought the item!');
                    return redirect('/shop');
                } else {
                    session()->flash('flash_message_important', 'Not Enough Money!');
                    return redirect('/shop');
                }

            } elseif ($radioButton == 'Armored Ford T.') {
                $armor = Armor::where('name', '=', 'Armored Ford T.')->first();
                if ($user->money >= $armor->price) {

                    $user->money -= $armor->price;
                    $user->assignArmor($armor);
                    $user->save();

                    session()->flash('flash_message', 'You bought the item!');
                    return redirect('/shop');
                } else {
                    session()->flash('flash_message_important', 'Not Enough Money!');
                    return redirect('/shop');
                }

            } elseif ($radioButton == 'Armored Duesenberg') {
                $armor = Armor::where('name', '=', 'Armored Duesenberg')->first();
                if ($user->money >= $armor->price) {

                    $user->money -= $armor->price;
                    $user->assignArmor($armor);
                    $user->save();

                    session()->flash('flash_message', 'You bought the item!');
                    return redirect('/shop');
                } else {
                    session()->flash('flash_message_important', 'Not Enough Money!');
                    return redirect('/shop');
                }

            } else {
                session()->flash('flash_message_important', 'You Failed To Purchase The Item!!');
                return redirect('/shop');
            }
        }
        else{
            session()->flash('flash_message_important', 'Sell your current armor first!!');
            return redirect('/shop');
        }
    }

    public function purchaseCar()
    {
        $user = Auth::user();
        $radioButton = Input::get('radio');

        if($radioButton == 'Nissan Micra')
        {
            $car = Car::where('name', '=', 'Nissan Micra')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'Peugeot 107')
        {
            $car = Car::where('name', '=', 'Peugeot 107')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'Fiat Punto')
        {
            $car = Car::where('name', '=', 'Fiat Punto')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'Mini Cooper S')
        {
            $car = Car::where('name', '=', 'Mini Cooper S')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'Vauxhall Insignia')
        {
            $car = Car::where('name', '=', 'Vauxhall Insignia')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'Audi A3')
        {
            $car = Car::where('name', '=', 'Audi A3')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'BMW 1 Series M Sport')
        {
            $car = Car::where('name', '=', 'BMW 1 Series M Sport')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'Audi RS7')
        {
            $car = Car::where('name', '=', 'Audi RS7')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'Ferrari 599 GTB Fiorano')
        {
            $car = Car::where('name', '=', 'Ferrari 599 GTB Fiorano')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'Mercedes-Benz SLR McLaren')
        {
            $car = Car::where('name', '=', 'Mercedes-Benz SLR McLaren')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        elseif($radioButton == 'Bugatti Veyron')
        {
            $car = Car::where('name', '=', 'Bugatti Veyron')->first();
            if($user->money >= $car->price)
            {

                $user->money -= $car->price;
                $user->assignCar($car);
                $user->save();

                session()->flash('flash_message', 'You bought the item!');
                return redirect('/shop');
            }
            else
            {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/shop');
            }
        }
        else
        {
            session()->flash('flash_message_important', 'You Failed To Purchase The Item!!');
            return redirect('/shop');
        }
    }
}
