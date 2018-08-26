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
            $users->update(['authorization_code'=>$input]);
            CustomerRecord::create($inputs);

        }else{

            $inputs = $paymentDetails['data']['metadata'];
            $inputs['status'] = 'Successful';
            CustomerRecord::create($inputs);
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
        //dd($request->all());

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
            CustomerRecord::create($inputs);
           return redirect('/customer/request')->with('message','Successfully paid...');
        }else{
            return redirect('/customer/request')->with('message','Invalid Input... Try Again');
        } 
        
    }

}