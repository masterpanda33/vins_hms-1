<?php

namespace euro_hms\Api\Controllers;

use Brotzka\DotenvEditor\DotenvEditor;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

// Need to Define Only Contracts
// use euro_hms\Api\Contracts\UserContract;
use JWTAuth;
use euro_hms\Models\User;
use euro_hms\Models\Role;
use euro_hms\Api\Repositories\UserRepository;
use euro_hms\Custom\Helper\Common;
use Hash;
/**
 * Users Resource Description.
 *
 * @Resource("users")
 *
 * @Author mtilokani@aecordigital.com
 */
class UserController extends BaseController
{
    public function __construct()
    {
        $this->userRepoObj = new UserRepository();
        // $this->middleware('auth');
        // $this->middleware('jwt.auth');
    }



    /**
     * Create New User Result.
     *
     * @Post("/user/create")
     *
     * @Versions({"v1"})
     * @Request("name=test", contentType="application/x-www-form-urlencoded")
     */
    public function createUser(Request $request)
    {
        // Data Initilization
        $data = $request->all()['userData'];
        // dd($data);
        $roleId = Role::where('slug', 'doctor')->first()->id;

        \Log::info('User Create Method Called');
        $userData=array();
        $userData['user']=array();
        $userPassword = NULL;
        $token = str_random(30);
        //$data['is_mobile_user'] = 0;
        // Validation checks for Email Validation



        // // Also check From Desktop
        // $userData['user']['is_mobile_user'] = false;
        // if(isset($data['registerType']) && trim($data['registerType']) == 'mobile') {
        //   $userData['user']['is_mobile_user'] = true;
        //   $data['userType'] = '5';
        //   $data['organisation'] = 'EuroSportring';
          $userPassword = Hash::make(trim($data['password']));
        // }
        // here we check that if userType is




        $userData['user']['first_name']=$data['fName'];
        $userData['user']['last_name']=$data['lName'];
        $userData['user']['email']=$data['email'];
        $userData['user']['address']=$data['address'];
        $userData['user']['mobile_no']=$data['mobileNo'];
        $userData['user']['user_type']=$data['userType'];
        $userData['user']['department']=$data['department'];
      
        // We cant Allow untikl its set password
        $userData['user']['password']=$userPassword;

      
        $userData['user']['token'] = $token;
        \Log::info($userData);
        \Log::info('Insert in UserTable');
        $userRes=$this->userRepoObj->create($userData['user']);
       \Log::info('deleted user');
        if($userRes['status'] == false )
          {
            return ['status_code' => '200', 'message' => 'This email already exists.'];
          }
        $userObj = $userRes['user'];
        // $userObj->roles()->sync($data['userType'])
        // $userObj->attachRole($data['userType']);
        // Here we add code for Mobile Users to relate tournament to users
        $user_id = $userObj->id;


        if ($data) {
            \Log::info('Sent email');
            $email_details = array();
            $email_details['first_name'] = $data['fName'];
            $email_details['token'] = $token;
            $email_details['is_mobile_user'] = 0;
            $recipient = $data['email'];
           
                // $email_templates = 'emails.users.desktop_user';
                // $email_msg = 'Euro-Sportring Tournament Planner - Set password';
             

           //  if($userObj->is_mobile_user == 1) {
           // //   $email_templates = 'emails.users.mobile_create';
           //    $email_msg = 'Euro-Sportring email verification';
           //    $email_details['is_mobile_user'] = 1;
           //  }
            // Common::sendMail($email_details, $recipient, $email_msg, $email_templates);
            return ['status_code' => '200', 'message' => 'Please check your inbox to verify your email address and complete your account registration.'];
        }

        // return $this->userObj->create($request);
    }

    /**
     * Edit User
     *
     * @GET("/user/edit/{$id}")
     *
     */
    public function edit(Request $request, $userId)
    {
        return $this->userObj->edit($userId);
    }

    public function getUserDetailsByID(Request $request)
    {
        // dd($request->all());
        return $this->userRepoObj->getUserDetailsByID($request->all()['userId']);

    }

}