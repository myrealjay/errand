<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Validator;
use JWTFactory;
use Config;
use JWTAuth;
use App\Customerinfo;
use Illuminate\Support\Facades\Auth;


class APILoginController extends AppBaseController
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password'=> 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $credentials = $request->only('email', 'password');
        try {
            /*Config::set('jwt.user', 'App\Customerinfo'); 
            Config::set('auth.providers.users.model', \App\Customerinfo::class);*/
            // verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        $user = Customerinfo::where('email',$request->email)->get();
        return response()->json(compact('token','user'));
    }

    public function logout(Request $request)
    {    
		JWTAuth::invalidate($request->token);
		return response([
			'status' => 'success',
			'message' => 'Logged out Successfully.'
		  ], 200);
	}
}
