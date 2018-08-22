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
        $total = $request->all();

        $total['price'] = 1000;

        
        //dd($total);
        $address = $request->to_location; // Google HQ
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false&key=AIzaSyC4ZXWHs3r0f0AVQbJjmEFktEgmHCV7t88');
        $output= json_decode($geocode,true);
        dd($output);
        $latitude = $output->results[0]->geometry->location->lat;
        $longitude = $output->results[0]->geometry->location->lng;

        $x =[];
        $x['latitude'] = $latitude;
        $x['longitude'] = $longitude;
        dd($x);

        $total = (object) $total;

        return view ('customer.payment',compact('total'));
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
