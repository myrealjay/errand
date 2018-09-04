<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Auth::check()){
                $role = Auth::user()->role;
                if($role == "1"){  //Only Admins with role = 1 can login.
                    return $next($request);
                }else{
                    Session::flush();
                    return redirect('/');
                }
            }else{
               return redirect('/');
               }
        });

        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('welcome');
    }
}
