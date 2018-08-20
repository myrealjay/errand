<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Customerinfo;
use JWTFactory;
use JWTAuth;
use Validator;
use Response;


class APIRegisterController extends AppBaseController
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'f_name' => 'required|string',
           'l_name' => 'required|string',
           'phone_no' => 'required|numeric',
           'password' => 'required',
           'email' => 'required|string|email|max:255|unique:customerinfos',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        Customerinfo::create($input);

        $user = Customerinfo::first();
        //dd($user);
        $token = JWTAuth::fromUser($user);
        $customer = Customerinfo::where('email',$request->email)->get();
        return response()->json(compact('token','customer'));
        //return Response::json(compact('token'));
    }

    public function test(){
    	$good = 'it works';
    	return response()->json(['data'=> $good],201);
    }
}
