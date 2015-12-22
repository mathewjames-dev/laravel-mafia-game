<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        If (Auth::check()) {
            $username = Auth::user()->name;
            $quote = Auth::user()->quote;
            $user_id = Auth::id();
            $user = Auth::user();

            return view('profile.profile', compact('username', 'user_id', 'user', 'quote'));
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $roles = $user->roles;

        return view('profile.profileshow', compact('roles', 'user'));
    }

    public function edit(Request $request)
    {
        If (Auth::check()) {
            $quote = Auth::user()->quote;
            $user_id = Auth::id();
            $user = Auth::user();

            return view('profile.editprofile', compact('username', 'quote', 'user_id', 'user'));
        }
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);

        $user->quote = $request->get('quote');
        $user->save();
        return redirect('/profile');
    }
}