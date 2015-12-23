<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        return view('travel.travel', compact('locations'));
    }

    public function travel()
    {
        $user = Auth::user();
        $radioButton = Input::get('radio');

        if ($radioButton == 'England') {
            $location = Location::where('location', '=', 'England')->first();
            if ($user->money >= $location->price) {

                $user->money -= $location->price;
                $user->location = "England";
                $user->save();

                session()->flash('flash_message', 'You traveled!');
                return redirect('/travel');
            } else {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/travel');
            }

        }
        elseif ($radioButton == 'France') {
            $location = Location::where('location', '=', 'France')->first();
            if ($user->money >= $location->price) {

                $user->money -= $location->price;
                $user->location = "France";
                $user->save();

                session()->flash('flash_message', 'You traveled!');
                return redirect('/travel');
            } else {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/travel');
            }

        }
        elseif ($radioButton == 'USA') {
            $location = Location::where('location', '=', 'USA')->first();
            if ($user->money >= $location->price) {

                $user->money -= $location->price;
                $user->location = "USA";
                $user->save();

                session()->flash('flash_message', 'You traveled!');
                return redirect('/travel');
            } else {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/travel');
            }

        }
        elseif ($radioButton == 'Brazil') {
            $location = Location::where('location', '=', 'Brazil')->first();
            if ($user->money >= $location->price) {

                $user->money -= $location->price;
                $user->location = "Brazil";
                $user->save();

                session()->flash('flash_message', 'You traveled!');
                return redirect('/travel');
            } else {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/travel');
            }

        }
        elseif ($radioButton == 'Belgium') {
            $location = Location::where('location', '=', 'Belgium')->first();
            if ($user->money >= $location->price) {

                $user->money -= $location->price;
                $user->location = "Belgium";
                $user->save();

                session()->flash('flash_message', 'You traveled!');
                return redirect('/travel');
            } else {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/travel');
            }

        }
        elseif ($radioButton == 'Iraq') {
            $location = Location::where('location', '=', 'Iraq')->first();
            if ($user->money >= $location->price) {

                $user->money -= $location->price;
                $user->location = "Iraq";
                $user->save();

                session()->flash('flash_message', 'You traveled!');
                return redirect('/travel');
            } else {
                session()->flash('flash_message_important', 'Not Enough Money!');
                return redirect('/travel');
            }

        }
        else
        {
            session()->flash('flash_message_important', 'Failed to travel!');
            return redirect('/travel');
        }
    }
}
