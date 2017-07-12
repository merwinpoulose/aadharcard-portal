<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->user_type == 'super-admin')
            return view('home');
        elseif(Auth::user()->user_type == 'admin')
            return view('home');
        else{
            $user = Auth::user();
            return view('user.welcome', compact('user'));
        }
    }
}
