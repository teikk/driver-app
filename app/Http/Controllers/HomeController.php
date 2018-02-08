<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
          /**
           * @todo Get users previous rides non rated rides 
           * and suggest to rate them
           */
          $userRides = [];
          return view('dashboard',['user_rides' => $userRides]);
        }

        return view('home');
    }
}
