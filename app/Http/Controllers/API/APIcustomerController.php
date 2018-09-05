<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\CustomerRecord;

class APIcustomerController extends Controller
{
    public function track($id){
        $customer = $id;
       $tracker = \App\ErrandTracker::where(['status'=>1,'customerID'=>$customer])->get();
       return response()->json(compact('tracker'));
    }

    public function getDetails($orderid){
        $tracker = \App\ErrandTracker::where('orderID',$orderid)->get()->first();
        $driver_id=$tracker->driverID;
        $driver=\App\Models\Driver::where('id',$driver_id)->get()->first();
        $record=CustomerRecord::where('orderID',$orderid)->get()->first();
        return response()->json(compact('tracker','driver','record'));
    }
}
