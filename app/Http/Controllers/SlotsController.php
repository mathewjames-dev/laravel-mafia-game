<?php

namespace App\Http\Controllers;

use App\Slot;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SlotsController extends Controller
{
    public function show($location)
    {
        $slot = Slot::where('location', '=', $location)->first();
        $location = Auth::user()->location;
        if($location == $slot->location)
        {
            return view('slot.slot', compact('slot'));
        }
        else{
            return redirect('/home');
        }
    }

    public function slots()
    {
        $user = Auth::user();
        $location = $user->location;
        $slot = Slot::where('location', '=', $location)->first();
        $input = Input::get('wager');
        $owner = User::where('name', '=', $slot->owner)->first();

        $num1 = rand(1, 10);
        $num2 = rand(5, 7);
        $num3 = rand(5, 7);
        if($user->name != $owner->name) {
            if ($num1 & $num2 & $num3 == 6) {
                $money = rand(250, 300);
                $payment = $money += ($input * 1.75);
                $user->money += $payment;
                $user->save();
                session()->flash('flash_message', 'You rolled three sixes!!');
                return redirect('/home');
            } else {
                $user->money -= $input;
                $user->save();

                $owner->money += $input;
                $owner->save();

                session()->flash('flash_message_important', 'You failed to roll three sixes!!');
                return redirect(action('SlotsController@show', [$slot->location]));
            }
        }else{
            session()->flash('flash_message_important', 'You own this slot!!');
            return redirect(action('SlotsController@show', [$slot->location]));
        }
    }
}