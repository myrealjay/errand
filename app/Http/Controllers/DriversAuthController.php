<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\DriversForm;
use Session;
use Hash;

class DriversAuthController extends Controller
{
    public function postLogin(Request $request){
        $this->validate($request,[
           'password' => 'required',
           'email' => 'required',
        ]);
        if(is_numeric($request->email)){
           $sender = Driver::where('phone_no', $request->email)->get()->first();
       }else{
           $sender = Driver::where('email', $request->email)->get()->first();
           
       }
  
        if ($sender) {
          $storedPass = $sender->password;
          if ($request->email == $sender->email && Hash::check($request->password, $storedPass) || $request->email == $sender->phone_no && Hash::check($request->password, $storedPass) )
          {
            $loggedIn = $sender->id;
            Session::put('driver_id',$loggedIn);

            return redirect()->route('driverboard');
            
          }else{
             return redirect()->back()->with('message', 'Wrong User ID or Password');
          }
        }else{
          return redirect()->back()->with('message', 'Invalid Input');
        }
        
    }

    public function getRegister(){
        return view ('driverboard.register');
    }

    public function getLogin(){
    	return view ('driverboard.login');
    }

    public function postRegister(Request $request){
      $this->validate($request,[
           'f_name' => 'required',
           'l_name' => 'required',
           'email' => 'required',
           'phone_no' => 'required|numeric',
           'address' => 'required',
           'd_o_b' => 'required'
      ]);

        $input = $request->all();
        //dd($x);
        DriversForm::create($input);
      Session::flash('message','Your request has been received. We will get back to you.');
      return redirect()->back();
    }
    
}
