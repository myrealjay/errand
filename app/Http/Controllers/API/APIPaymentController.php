<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Customerinfo;
use App\Models\Driver;
use App\ErrandTracker;
use App\CustomerRecord;

class APIPaymentController extends Controller
{
    public function saverecord(Request $request,$id){
        $from_location=$request->from_location;
        $to_location=$request->to_location;
        $contact_person=$request->contact_person;
        $contact_phone=$request->contact_phone;
        $description=$request->description;
        $trip_type=$request->trip_type;
        $price=$request->price;
        $status='Successful';
        $orderID="ERRAND".str_random(11);
        $customerID=$id;
        $driverID=$request->driverID;


        $inputs=[
            'from_location'=>$from_location,
            'to_location'=>$to_location,
            'contact_person'=>$contact_person,
            'contact_phone'=>$contact_phone,
            'description'=>$description,
            'trip_type'=>$trip_type,
            'price'=>$price,
            'status'=>$status,
            'orderID'=>$orderID,
            'customerID'=>$customerID
        ];

        //save customer record
        CustomerRecord::create($inputs);

        //save tracking records
        $tracking = ['orderID'=>$orderID,'status'=>1,'driverID'=>$driverID,'customerID'=>$customerID];
        ErrandTracker::create($tracking);

        return response()->json(['message'=>'Saved']);

    }

    public function getdriver(){
        $driver = Driver::where('status',0)->inRandomOrder()->get()->first();
        if(!$driver){
            return response()->json(['message'=>'All drivers are currently engaged, please retry!']);
        }
        else{
            $id=$driver->id;
            return response()->json(['message'=>'found','id'=>$id]);
        }
    }

    public function getauthcode(Request $request,$id){
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer sk_test_7147d7b2f32d1b09a53a55b9b7a7f095ab11735d',
        ];
        $reference=$request->reference;

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
        $r = $client->request('GET', 'https://api.paystack.co/transaction/verify/'.$reference);
        $response = $r->getBody()->getContents();
        $response = json_decode($response, true);
        if($response['status']){
            $authcode=$response['data']['authorization']['authorization_code'];
            $users = Customerinfo::find($id);
            $users->update(['authorization_code'=>$authcode]);
            return response('success');
        }
        else{
            return response('error');
        }

    }
    
    //check for authorization code
    public function checkauthcode($id){
        $code=Customerinfo::where('id',$id)->get()->first();
        if($code){
            if($code->authorization_code !=null){
                return response()->json(['authcode'=>$code->authorization_code]);
            }
            else{
                return response()->json(['authcode'=>'not found']);
            }
            
        }
        else{
            return response()->json(['authcode'=>'not found']);
        }
        
    }

}
