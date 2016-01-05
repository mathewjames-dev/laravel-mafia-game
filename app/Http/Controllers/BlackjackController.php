<?php

namespace App\Http\Controllers;

use App\Blackjack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlackjackController extends Controller
{
    public function show($location)
    {
        $blackjack = Blackjack::where('location','=',$location)->first();
        $location = Auth::user()->location;
        if ($location == $blackjack->location) {
            return view('blackjack.blackjack', compact('blackjack'));
        }
        else{
            return redirect('/home');
        }
    }
}
