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

        if ($request->from_location) {
        $address = $request->from_location; // Google HQ
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        $output= json_decode($geocode);
        //dd($output);
        $lat = $output->results[0]->geometry->location->lat;
        $lon = $output->results[0]->geometry->location->lng;

        }

        if ($request->to_location) {
        $address = $request->to_location; 
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        $output= json_decode($geocode);
        //dd($output);
        $lat1 = $output->results[0]->geometry->location->lat;
        $lon1 = $output->results[0]->geometry->location->lng;

        }

        /*if ($request->to_location2) {
        $address = $request->to_location2; 
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        $output= json_decode($geocode);
        //dd($output);
        $lat2 = $output->results[0]->geometry->location->lat;
        $lon2 = $output->results[0]->geometry->location->lng;

        }
*/
        
        $total['km'] = $this->distance($lat1, $lon1, $lat, $lon);
        //$total['km'] = $this->getDistance($lat, $lon,$lat1, $lon1);

        $total['price'] = 65 * $total['km'];

        //dd($total);

        $total = (object) $total;

        return view ('customer.payment',compact('total'));
    }

    private function distance($lat1, $lon1, $lat, $lon) {
          $p = 0.017453292519943295;    // Math.PI / 180
          //$c = Math.cos;
          $a = 0.5 - cos(($lat1 - $lat) * $p)/2 + 
                  cos($lat * $p) * cos($lat1 * $p) * 
                  (1 - cos(($lon1 - $lon) * $p))/2;

          return 12742 * asin(sqrt($a)); // 2 * R; R = 6371 km
    }

    private function getDistance($lat, $lon, $lat1, $lon1) {
            $earth_radius = 6371;

            $dLat = deg2rad($lat1 - $lat);
            $dLon = deg2rad($lon1 - $lon);

            $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat)) * cos(deg2rad($lat1)) * sin($dLon/2) * sin($dLon/2);
            $c = 2 * asin(sqrt($a));
            $d = $earth_radius * $c;

            return $d; //returns in KM
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
