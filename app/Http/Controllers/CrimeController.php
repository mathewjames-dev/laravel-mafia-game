<?php

namespace App\Http\Controllers;

use App\CrimeTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class CrimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->jailtime <= Carbon::now()) {
            $user = Auth::user();
            $name = $user->name;
            $query = CrimeTime::where('name', '=', $name)->first();
            $crime1 = $query->crime1;
            $crime2 = $query->crime2;
            $crime3 = $query->crime3;
            $crime4 = $query->crime4;
            $crime5 = $query->crime5;


            return view('crime', compact('crime1', 'crime2', 'crime3', 'crime4', 'crime5'));
        }
        else
        {
            session()->flash('flash_message_important', 'You are currently jailed!');
            return redirect('/jail');
        }
    }

    public function crime()
    {
        $user = Auth::user();
        $name = $user->name;
        $query = CrimeTime::where('name', '=', $name)->first();
        $query2 = User::where('name', '=', $name)->first();

        $radioButton = Input::get('radio');

        if ($radioButton == 1)
        {
            if($query->crime1 <= Carbon::now()) {
                $crime_chance = rand(1, 10);
                $crime_exp = rand(1, 10);
                $crime_money = rand(1, 50);
                $timewait1 = Carbon::now()->addSeconds(30);
                $query->crime1 = $timewait1;
                $query->save();

                if ($crime_chance >= 4)
                {
                    $query2->money += $crime_money;
                    $query2->exp += $crime_exp;
                    $query2->save();
                    session()->flash('flash_message', 'You completed the crime!');
                    return redirect('/home');
                }
                else
                {
                    session()->flash('flash_message_important', 'You failed the crime!');
                    $user->jailtime = Carbon::now()->addSeconds(20);
                    $user->save();
                    return redirect('/crime');
                }
            }
            else
            {
                return redirect('/crime');
            }
        }
        else if ($radioButton == 2)
        {
            if($query->crime2 <= Carbon::now()) {
                $crime_chance = rand(1, 20);
                $crime_exp = rand(10, 25);
                $crime_money = rand(10, 200);
                $timewait2 = Carbon::now()->addSeconds(120);
                $query->crime2 = $timewait2;
                $query->save();

                if ($crime_chance >= 15)
                {
                    $query2->money += $crime_money;
                    $query2->exp += $crime_exp;
                    $query2->save();
                    session()->flash('flash_message', 'You completed the crime!');
                    return redirect('/home');
                }
                else
                {
                    session()->flash('flash_message_important', 'You failed the crime!');
                    $user->jailtime = Carbon::now()->addSeconds(20);
                    $user->save();
                    return redirect('/crime');
                }
            }
            else
            {
                return redirect('/crime');
            }
        }
        else if ($radioButton == 3)
        {
            if($query->crime3 <= Carbon::now()) {
                $crime_chance = rand(1, 50);
                $crime_exp = rand(10, 75);
                $crime_money = rand(200, 2000);
                $timewait3 = Carbon::now()->addSeconds(600);

                $query->crime3 = $timewait3;
                $query->save();

                if ($crime_chance >= 35)
                {
                    $query2->money += $crime_money;
                    $query2->exp += $crime_exp;
                    $query2->save();
                    session()->flash('flash_message', 'You completed the crime!');
                    return redirect('/home');
                }
                else
                {
                    session()->flash('flash_message_important', 'You failed the crime!');
                    $user->jailtime = Carbon::now()->addMinute(1);
                    $user->save();
                    return redirect('/crime');
                }
            }
            else
            {
                return redirect('/crime');
            }
        }
        else if ($radioButton == 4)
        {
            if($query->crime4 <= Carbon::now()) {
                $crime_chance = rand(1, 100);
                $crime_exp = rand(50, 250);
                $crime_money = rand(400, 3500);
                $timewait4 = Carbon::now()->addSeconds(1800);

                $query->crime4 = $timewait4;
                $query->save();

                if ($crime_chance >= 85)
                {
                    $query2->money += $crime_money;
                    $query2->exp += $crime_exp;
                    $query2->save();
                    session()->flash('flash_message', 'You completed the crime!');
                    return redirect('/home');
                }
                else
                {
                    session()->flash('flash_message_important', 'You failed the crime!');
                    $user->jailtime = Carbon::now()->addMinute(1);
                    $user->save();
                    return redirect('/crime');
                }
            }
            else
            {
                return redirect('/crime');
            }
        }
        else if ($radioButton == 5)
        {
            if($query->crime5 <= Carbon::now()) {
                $crime_chance = rand(1, 500);
                $crime_exp = rand(100, 500);
                $crime_money = rand(500, 10000);
                $timewait5 = Carbon::now()->addSeconds(3600);

                $query->crime5 = $timewait5;
                $query->save();

                if ($crime_chance >= 450)
                {
                    $query2->money += $crime_money;
                    $query2->exp += $crime_exp;
                    $query2->save();
                    session()->flash('flash_message', 'You completed the crime!');
                    return redirect('/home');
                }
                else
                {
                    session()->flash('flash_message_important', 'You failed the crime!');
                    $user->jailtime = Carbon::now()->addMinute(5);
                    $user->save();
                    return redirect('/crime');
                }
            }
            else
            {
                return redirect('/crime');
            }
        }
        else
        {
            return redirect('/crime');
        }
    }
}
