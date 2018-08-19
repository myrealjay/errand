<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Validator;
use JWTFactory;
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
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function logout(Request $request)
    {    
		JWTAuth::invalidate($request->token);
		return response([
			'status' => 'success',
			'msg' => 'Logged out Successfully.'
		  ], 200);
	}
}
