<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customerinfo;
use App\CustomerRecord;
use App\Models\Driver;
use Session;

class DriversFrontController extends Controller
{
    public function __construct(){
        
	    $this->middleware(function ($request, $next) {
	        if (Session::has('driver_id')) {
	           return $next($request);
	        }else{
	           return redirect('/');
	           }
	     });
    }

    public function dashboard(){

    	 $id = Session::get('driver_id');
    	 $user = Driver::find($id);
    	 //dd($user);
    	return view ('driverboard.dashboard',compact('user'));
    }

    public function logout(){
    	Session::flush();
    	return redirect('/');
    }

    public function track(){
       $driver = Session::get('driver_id');
       $tracker = \App\ErrandTracker::where(['status'=>1,'driverID'=>$driver])->get();
       //dd($tracker);
       return view ('driverboard.current',compact('tracker'));
    }

    public function updateTracker($orderID){
        //dd('Great');
        $tracker = \App\ErrandTracker::where(['status'=>1,'orderID'=>$orderID])->first();
        $tracker = $tracker->id;
        $errandUpdate = \App\ErrandTracker::find($tracker);
        //dd($tracker);
        $errandUpdate->update(['status'=>2]);  //Update status to Completed

        $id = Session::get('driver_id');
        $user = Driver::find($id);
        $user->update(['status' => 0]); //Update the Driver's status back to inactive
        return redirect()->back()->with('message','Successfully Completed the Trip...');
    }

    public function logs(){
     $driver = Session::get('driver_id');
     $tracker = \App\ErrandTracker::where(['status'=>2,'driverID'=>$driver])->paginate(10);
        //dd($tracker);
     return view ('driverboard.logs',compact('tracker'));
    }

    public function profile(){
        $id = Session::get('driver_id');
        $user = Driver::find($id);
        //dd($driver);
        return view('driverboard.profile',compact('user'));
    }

    public function updateAvailability(Request $request){
        $update = $request->status;
        $id = Session::get('driver_id');
        $user = Driver::find($id);
        $user->update(['status'=>$update]);
        
        Session::flash('update','You have Successfully changed your status...');
        return redirect()->back();
    }

}
