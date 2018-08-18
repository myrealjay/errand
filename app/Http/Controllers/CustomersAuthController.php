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

    
}
