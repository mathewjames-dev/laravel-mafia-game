<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\User;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.search');
    }

    public function search()
    {
        $keyword = Input::get('keyword');

        $users = User::where('name', 'LIKE', '%'.$keyword.'%')->get();

        return view('search.users', compact('users'));
    }
}