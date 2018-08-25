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

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}