<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CustomerRecord;
use App\Customerinfo;
use Session;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback( Request $request)
    {
        //dd($request->all());
        $paymentDetails = Paystack::getPaymentData();

        //dd($paymentDetails);
        $id = Session::get('loggedin');
        $users = Customerinfo::find($id);
        //dd($users);
        if($paymentDetails['status']){
        if (is_null($users->authorization_code)) {
            $inputs = $paymentDetails['data']['metadata'];
            $input = $paymentDetails['data']['authorization']['authorization_code'];
            //dd($input);
            $inputs['status'] = 'Successful';
            $inputs['customerID'] = Session::get('loggedin');
            $users->update(['authorization_code'=>$input]);
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

        }else{

            $inputs = $paymentDetails['data']['metadata'];
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

        }

        return redirect('/customer/request')->with('message','Successfully paid');
        }else{
            return redirect('/customer/request')->with('message','Invalid Input... Try Again');
        }
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
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