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
                return response()->json(['error' => 'invalid_credentials'], 200);
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
    
    public function getUserDetails($id){
        $user = Customerinfo::find($id);
        return response()->json(compact('user'));
    }

    public function postUpdate(Request $request,$id ){

        $validator = Validator::make($request->all(), [
           'f_name' => 'nullable|string',
           'l_name' => 'nullable|string',
           'phone_no' => 'nullable|numeric',
           'password' => 'nullable',
           'email' => 'nullable|string|email|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

       $input = $request->except(['password']);
       
       if ($request->password) {
           $input['password'] = bcrypt($request->password);
       }
       //dd($input);
        $users = Customerinfo::find($id);
        $users->update($input);

       return response()->json(['success'=> true, 
        'message'=> 'User details updated successfully...'],200);

    }
}
