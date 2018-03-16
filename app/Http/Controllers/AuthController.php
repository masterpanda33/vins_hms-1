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
        \Log::info(\Request::header('Authorization'));
        \Log::info(\Request::header('IsMobileUser'));
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
                // here we put check for Mobile Users

          \Log::info('UserData');
          $isMobileUsers = \Request::header('IsMobileUser');
           // dd($userData->is_mobile_user,$isMobileUsers);

          if( $userData->is_verified == 0 ) {
            return response(['authenticated' => false, 'message'=>'Account is not verified.']);
          }

          if( ($userData->is_mobile_user == 0 && $isMobileUsers == true) || ($userData->is_desktop_user == 0 && $isMobileUsers != true) ) {
            return response(['authenticated' => false, 'message'=>'Account is de-activated. Please contact your administrator.']);
          }

          if($userData->is_active == 0) {
            return response(['authenticated' => false,'message'=>'Account de-activated please contact your administrator.']);
          }
          \Log::info('Success');
          //if($userData->is_mobile_user == 1) {

            $path = getenv('S3_URL').'/assets/img/users/';
            $userDataQuery = \euro_hms\Models\User::where('users.id',$userData->id)
                              ->leftJoin('users_favourite','users_favourite.user_id','=','users.id')
                              ->leftJoin('people','people.id','=','users.person_id')
                              ->select('users.id',
                                'users.locale',
                                'people.first_name',
                                'people.last_name','users.email',
                                'users.user_image',
                                \DB::raw('IF(users.user_image is not null,CONCAT("'.$path.'", users.user_image),"" ) as userImage'),
                                'users_favourite.tournament_id')
                              ->get();
            $userDetails = array();
            if(isset($userDataQuery)) {
             $userData = $userDataQuery[0];

             $userDetails['first_name'] = $userData->first_name;
             $userDetails['sur_name'] = $userData->last_name;
             $userDetails['email'] = $userData->email;
             $userDetails['profile_image_url'] = $userData->userImage;
             $userDetails['tournament_id'] = $userData->tournament_id;
             $userDetails['user_id'] = $userData->id;
             $userDetails['locale'] = $userData->locale;
             $userSettings = Settings::where('user_id','=',$userData->id)->first();
             $userDetails['settings'] = $userSettings ? $userSettings->toArray() : null;

             $tournament_id = array();
             return response(['authenticated' => true,'userData'=> $userDetails]);
           //  $userDetails['tournament_id'] = $userData->UserFavourites->tournament_id;
            }

            //echo '<pre>';
            //print_r($userData->personDetail->id);exit;
            //$userInfo = \euro_hms\Models\Person::where('id',$userData->person_id)->get();
            //$userData['first_name'] = $userInfo[0]['first_name'];
            //print_r($userInfo[0]);exit;
            //return response(['authenticated' => true,'userData'=>$userData]);
          //}
          //return response(['authenticated' => true]);
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
