<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customerinfo;
use Session;
use Hash;

class CustomersAuthController extends Controller
{
    public function postLogin(Request $request){
        $this->validate($request,[
           'password' => 'required',
           'email' => 'required',
        ]);
        if(is_numeric($request->email)){
           $sender = Customerinfo::where('phone_no', $request->email)->get()->first();
       }else{
           $sender = Customerinfo::where('email', $request->email)->get()->first();
           
       }
  
        if ($sender) {
          $storedPass = $sender->password;
          if ($request->email == $sender->email && Hash::check($request->password, $storedPass) || $request->email == $sender->phone_no && Hash::check($request->password, $storedPass) )
          {
            $loggedIn = $sender->id;
            Session::put('loggedin',$loggedIn);

            return redirect()->route('dashboard');
            
          }else{
             return redirect()->back()->with('message', 'Wrong User ID or Password');
          }
        }else{
          return redirect()->back()->with('message', 'Invalid Input');
        }
        
    }

    public function getRegister(){
        return view ('customer.register');
    }

    public function getLogin(){
    	return view ('customer.login');
    }

    public function postRegister(Request $request){
        $this->validate($request,[
           'f_name' => 'required|string',
           'l_name' => 'required|string',
           'phone_no' => 'required|numeric',
           'password' => 'required',
           'email' => 'required|string|email|max:255|unique:customerinfos',
        ]);
      
        $details = $request->all();
        //dd($details);
        $details['password'] = bcrypt($request->password);
       
        Customerinfo::create($details);
        $user = Customerinfo::where('email',$request->email)->get()->first();
        $loggedIn = $user->id;
        Session::put('loggedin',$loggedIn);

        return redirect()->route('dashboard');
    }

    public function postRequest(Request $request){
        $total = $request->all();
        //dd($total);
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

        $price = 65 * $total['km'];

        $total['price'] = ceil($price);

        $total['price_kobo'] = ceil($price)*100; //Price in Kobo

        $total['orderID'] = "ERRAND".str_random(11);

        //dd($total);

        $total = (object) $total;
        /*Session::flash('price', 'The estimated price is '. ceil($price)); 
        return redirect()->back();*/
        return response()->json(['success'=>'The estimated price is &#x20a6;'.number_format(ceil($price))]);
    }

    private function distance($lat1, $lon1, $lat, $lon) {
          $p = 0.017453292519943295;    // The Haversine Formula
          //$c = Math.cos;
          $a = 0.5 - cos(($lat1 - $lat) * $p)/2 + 
                  cos($lat * $p) * cos($lat1 * $p) * 
                  (1 - cos(($lon1 - $lon) * $p))/2;

          return 12742 * asin(sqrt($a)); //  km
    }
}
