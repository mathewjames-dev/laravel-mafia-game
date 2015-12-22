<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CrimeTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Bank;

class BankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $user_name = $user->name;
        $bank = Bank::where('name', '=', $user_name)->first();
        $users = User::orderBy('money', 'desc')->take(5)->get();
        return view('bank.bank', compact('user', 'user_name', 'bank', 'users'));
    }

    public function update(Request $request, $user_name)
    {
    }

    public function store(Request $request, $user_name)
    {
        $user = Auth::user();
        $input = Input::get('money');
        if ($input <= $user->money) {
            $bank = Bank::where('name', '=', $user_name)->first();
            $bank->name = $user_name;
            $bank->money += $input;
            $bank->save();
            $user->money -= $input;
            $user->save();
            session()->flash('flash_message', 'You deposited your money!');
            return redirect('/bank');
        }
        else
        {
            session()->flash('flash_message_important', 'You dont have enough money!');
            return redirect('/bank');
        }
    }

    public function withdraw()
    {
        $user = Auth::user();
        $input = Input::get('amount');
        $bank = Bank::where('name', '=', $user->name)->first();

        if ($input <= $bank->money)
        {
            $bank->money -= $input;
            $bank->save();
            $user->money += $input;
            $user->save();
            session()->flash('flash_message', 'You withdrew your money!');
            return redirect('/bank');
        }
        else
        {
            session()->flash('flash_message_important', 'You failed to withdraw your money!');
            return redirect('/bank');
        }
    }
}