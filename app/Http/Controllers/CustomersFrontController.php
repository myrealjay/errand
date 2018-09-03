<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customerinfo;
use App\CustomerRecord;
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
        $customer = Session::get('loggedin');
       $tracker = \App\ErrandTracker::where(['status'=>1,'customerID'=>$customer])->get();
       //dd($tracker);
       return view ('customer.track',compact('tracker'));

    }

    public function logs(){

       /*$logs = CustomerRecord::find(Session::get('loggedin'))->orderBy('id','desc')->paginate(10);*/
       $logs = CustomerRecord::where('customerID',Session::get('loggedin'))->orderBy('customerID','desc')->paginate(10);
       //dd($logs);
       return view ('customer.logs',compact('logs'));

    }

    public function postRequest(Request $request){
        $total = $request->all();
        $total['trip_type'] = $request->trip_type;
        //dd($total['trip_type']);
        
        if ($request->from_location) {
        $address = $request->from_location; 
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false&key=AIzaSyCy4AGMeMLvNWcVq5qjPjIu5cBaQr8QECE');
        $output= json_decode($geocode);
        //dd($output);
            if($output->status == "OK"){
                $lat = $output->results[0]->geometry->location->lat;
                $lon = $output->results[0]->geometry->location->lng;
            }else{
                return redirect()->back()->with('message',' Slow or No network.');
                //Throw this when $output returns an empty array.
            }

        }

        if ($request->to_location) {
        $address = $request->to_location; 
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false&key=AIzaSyCy4AGMeMLvNWcVq5qjPjIu5cBaQr8QECE');
        $output= json_decode($geocode);
        //dd($output);
            if($output->status == "OK"){
                $lat1 = $output->results[0]->geometry->location->lat;
                $lon1 = $output->results[0]->geometry->location->lng;
            }else{
                return redirect()->back()->with('message',' Slow or No network.');
                //Throw this when $output returns an empty array.
            }

        }
        
        $total['km'] = $this->distance($lat1, $lon1, $lat, $lon);
        //$total['km'] = $this->getDistance($lat, $lon,$lat1, $lon1);
        //dd($total['km']);

        $price = 65 * $total['km'];

        $total['price'] = ceil($price)*$total['trip_type'];

        $total['price_kobo'] = ceil($price)*100*$total['trip_type']; //Price in Kobo

        $total['orderID'] = "ERRAND".str_random(11);

        //dd($total);

        $total = (object) $total;

        return view ('customer.payment',compact('total'));
    }

    private function distance($lat1, $lon1, $lat, $lon) {
          $p = 0.017453292519943295;    // The Haversine Formula
          //$c = Math.cos;
          $a = 0.5 - cos(($lat1 - $lat) * $p)/2 + 
                  cos($lat * $p) * cos($lat1 * $p) * 
                  (1 - cos(($lon1 - $lon) * $p))/2;

          return 12742 * asin(sqrt($a)); //  km
    }

    private function getDistance($lat, $lon, $lat1, $lon1) {
            $earth_radius = 6371;  // The Haversine Formula

            $dLat = deg2rad($lat1 - $lat);
            $dLon = deg2rad($lon1 - $lon);

            $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat)) * cos(deg2rad($lat1)) * sin($dLon/2) * sin($dLon/2);
            $c = 2 * asin(sqrt($a));
            $d = $earth_radius * $c;

            return $d; //returns in KM
    }

    public function getRequest(){
        //Getting the Driver
        $check = \App\Models\Driver::where('status',0)->get();
        if ($check->count() == 0) {
            Session::flash('notice', 'All drivers are engaged at the moment....Pls try again in 30 mins'); 
            return view ('customer.request');
        }

        return view ('customer.request');

    }

    public function singleway(){

        return view ('customer.singleway');

    }

    public function multiway(){

        return view ('customer.multiway');

    }

    public function update(){

        $id = Session::get('loggedin');
        $user = Customerinfo::find($id);
         
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
