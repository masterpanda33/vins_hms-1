<?php

namespace euro_hms\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use euro_hms\Models\Settings;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        // dd($request->all());
        // grab credentials from the request
        $credentials = $request->only('email', 'password');
        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'The login details entered are invalid. If you have forgotten your password please follow the forgot password process.'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        //return response()->json(compact('token'));
        //$token = response()->json(compact('token'));
       // $token = compact('token');
        return response()->json(compact('token'));

    }

    public function check()
    {
        \Log::info('Check Method is called');
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (JWTException $e) {
            return response(['authenticated' => false]);
        }
        \Log::info('After Authenticate');
        // Here Add Functionality if use is Active then allowed to login
        $token=JWTAuth::getToken();

        \Log::info('After Getting token');
        if($token) {
          $userData = JWTAuth::toUser($token);

          if( $userData->is_verified == 0 ) {
            return response(['authenticated' => false, 'message'=>'Account is not verified.']);
          }


          if($userData->is_active == 0) {
            return response(['authenticated' => false,'message'=>'Account de-activated please contact your administrator.']);
          }
          \Log::info('Success');
          return response(['authenticated' => true,'userData'=> $userData]);
        }
        \Log::info('NOT GETTING TOKEN');
    }

    public function logout()
    {

        try {
            $token = JWTAuth::getToken();

            if ($token) {

                JWTAuth::invalidate($token);
            }

        } catch (JWTException $e) {
            return response()->json($e->getMessage(), 401);
        }

        return response()->json(['message' => 'Log out success'], 200);
    }
}
