<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Customerinfo;
use App\Models\Driver;

class APIPaymentController extends Controller
{

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

    public function payViaCode(Request $request){

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer sk_test_bfbb2717cce37f44e52adc8779fd6a442e7dbf9d',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $auth_code = \App\Customerinfo::find(Session::get('loggedin'))->authorization_code;
        $body = array("authorization_code" => $auth_code,
         "email" => $request->email,
          "amount" => $request->amount);

        $r = $client->request('POST', 'https://api.paystack.co/transaction/charge_authorization', [
            'body' => json_encode($body)
        ]);
        $response = $r->getBody()->getContents();
        $response = json_decode($response, true);
        //dd($response);
        if ($response['status']) {
            $inputs = $request->all();
            $inputs['status'] = 'Successful';
            $inputs['customerID'] = Session::get('loggedin');
            //CustomerRecord::create($inputs);

            //Getting the Driver

            $select = \App\Models\Driver::where('status',0)->get();
            //dd($select);
            if($select){
	            $pick = [];
	            foreach ($select as $key ) {
	                array_push($pick, $key->id);
	            }
	            //dd($pick);
	            if ($pick == null) {
	            	return redirect('/customer/request')->with('message','All drivers are engaged at the moment....Pls try again');
	            }
	            $index = array_rand($pick,1);
	            $random = $pick[$index];

	            $driver = \App\Models\Driver::where('id',$random)->get();
	            // Send an SMS to the Biker to check his App.

	            //dd($driver);
	            $input = ['status' => 1];
	            $driverUpdate = \App\Models\Driver::find($random);
	            $driverUpdate->update($input);

	            $tracking = ['orderID'=>$request->orderID,'status'=>1,'driverID'=>$random,'customerID'=>Session::get('loggedin')];
	            \App\ErrandTracker::create($tracking);
	            CustomerRecord::create($inputs);
            }else{
                return redirect('/customer/request')->with('message','All drivers are engaged at the monent...Pls try again');
            }    

           return redirect('/customer/request')->with('message','Successfully paid...');
        }else{
            return redirect('/customer/request')->with('message','Invalid Input... Try Again');
        } 
        
    }

}
