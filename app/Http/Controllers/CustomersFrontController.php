<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customerinfo;
use Session;

class CustomersFrontController extends Controller
{
    public function __construct(){
        
	    $this->middleware(function ($request, $next) {
	        if (Session::has('loggedin')) {
	           return $next($request);
	        }else{
	           return redirect('/');
	           }
	     });
    }

    public function dashboard(){

    	 $id = Session::get('loggedin');
    	 $user = Customerinfo::find($id);
    	 //dd($user);
    	return view ('customer.dashboard',compact('user'));
    }

    public function logout(){
    	Session::flush();
    	return redirect('/');
    }

    public function track(){

       return view ('customer.track');

    }

    public function logs(){

       return view ('customer.logs');

    }

    public function postRequest(Request $request){

    }

    public function getRequest(){

        return view ('customer.request');

    }

    public function update(){

        $id = Session::get('loggedin');
         $user = Customerinfo::find($id);
         //dd($user);
        return view ('customer.update',compact('user'));

    }

    public function postUpdate(Request $request){

       $input = $request->except(['password']);
       
       if ($request->password) {
           $input['password'] = bcrypt($request->password);
       }
       //dd($user);
        $id = Session::get('loggedin');
        $users = Customerinfo::find($id);
        $users->update($input);

       return redirect()->back()->with('message','Your Profile has been successfully updated.');

    }
}
