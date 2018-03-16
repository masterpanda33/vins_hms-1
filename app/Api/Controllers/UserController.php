<?php

namespace euro_hms\Api\Controllers;

use Brotzka\DotenvEditor\DotenvEditor;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

// Need to Define Only Contracts
use euro_hms\Api\Contracts\UserContract;
use JWTAuth;
use euro_hms\Models\User;
use euro_hms\Models\Role;
use euro_hms\Api\Repositories\UserRepository;
use euro_hms\Custom\Helper\Common;

/**
 * Users Resource Description.
 *
 * @Resource("users")
 *
 * @Author mtilokani@aecordigital.com
 */
class UserController extends BaseController
{
    public function __construct(UserContract $userObj)
    {
        $this->userObj = $userObj;
        $this->userRepoObj = new UserRepository();
        // $this->middleware('auth');
        // $this->middleware('jwt.auth');
    }

    /**
     * Show all User Results Details.
     *
     * Get a JSON representation of all the Users.
     *
     * @Get("/users")
     * @Versions({"v1"})
     * @Response(200, body={"id": 10, "username": "foo"})
     */
    public function getUsers()
    {
        return $this->userObj->getAllUsers();
    }
    public function getUserDetails(Request $request)
    {
        return $this->userObj->getUserDetails($request->all());
    }

    /**
     * Show all User Results Details.
     *
     * Get a JSON representation of all the Users.
     *
     * @Get("/users")
     * @Versions({"v1"})
     * @Response(200, body={"id": 10, "username": "foo"})
     */
    public function getUsersByRegisterType(Request $request)
    {
        return $userData = $this->userObj->getUsersByRegisterType($request->all());
    }

    public function getUserTableData(Request $request)
    {
        return $userData = $this->userObj->getUserTableData($request->all());
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
        return $this->userObj->create($request);
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

    /**
     * Update User
     *
     * @Post("/user/edit/{$id}")
     *
     * @Request("name=test", contentType="application/x-www-form-urlencoded")
     */
    public function update(Request $request, $userId)
    {
        return $this->userObj->update($request, $userId);
    }

    /**
     * Delete User
     *
     * @param  [type] $id User Id
     *
     * @return [type]           [description]
     */
    public function deleteUser($id)
    {
        return $this->userObj->delete($id);
    }
    public function changeUserStatus(Request $request)
    {
      return $this->userObj->changeUserStatus($request->all());
    }


      public function setPassword($key, Request $request)
    {
      $usersPasswords = User::where(['token'=>$key])->get();

      $message = "";
      $error = false;
      if (count($usersPasswords) == 0) {
          $isUserVerified = User::withTrashed()->where(['token'=>$key])->get();
          if(count($isUserVerified) > 0) {
              $error=true;
              $message = "You have already set the password.";
          } else {
              //return response()->view('errors.404', [], 404);
              return array('message'=> 'Link is Expired');
          }
      }

      // TODO: Here we put Code for Mobile Verification
      if(isset($usersPasswords) && count($usersPasswords) > 0 && $usersPasswords[0]['registered_from'] == 0) {

        //TODO: Need to put code for change Status For User with user Update
        //$usersDetail['key'] = $key;
          $usersPassword = User::where('token', $key)->first();
          //$users = User::where("id", $usersPassword->id)->first();
          $usersPassword->is_verified = 1;
          $usersPassword->is_active = 1;
          $usersPassword->token = '';
          $user =  $usersPassword->save();
        // Already set the password
       // $usersDetail['password'] = $usersPasswords[0]['password'];
       // $result = $this->userRepoObj->createPassword($usersDetail);
          return redirect('/mlogin');
      }

      // echo "<pre>";print_r($usersPasswords);echo "</pre>";exit;

      return view('emails.users.setpassword', compact('usersPasswords'));
      // return view('emails.users.setpassword');
    }

    public function passwordActivate(Request $request)
    {
      $key = $request->key;
      $password = $request->password;
      $usersDetail['key'] = $key;
      $usersDetail['password'] = $password;
      $result = $this->userRepoObj->createPassword($usersDetail);
      return ($result == 'Mobile') ?  redirect('/mlogin') : redirect('/login/verified');
    }



    public function resendEmail(Request $request)
    {
      $userData = User::where(['email'=>$request->email])->first();
      $email_details =[];
      // dd($userData->name);
      $email_details['name'] = $userData->personDetail->first_name;
      $email_details['token'] =  $userData->token;
      $email_details['is_mobile_user'] = 0;
      $recipient = $userData->email;
      $email_templates = null;
      $email_msg = null;
      
      if($userData->registered_from === 0)
      {
        $email_templates = 'emails.users.mobile_user';
        $email_msg = 'Euro-Sportring - Email Verification';
      } else {
        $mobileUserRoleId = Role::where('slug', 'mobile.user')->first()->id;
        if($userData->roles[0]->id == $mobileUserRoleId) {
          $email_templates = 'emails.users.mobile_user_registered_from_desktop';
          $email_msg = 'Euro-Sportring - Set password';
        } else {
          $email_templates = 'emails.users.desktop_user';
          $email_msg = 'Euro-Sportring Tournament Planner - Set password';
        }
      }

      // dd($email_details,$recipient);
      Common::sendMail($email_details, $recipient, $email_msg, $email_templates);
      // return redirect('/login');
    }

    public function setFavourite(Request $request)
    {
      return $this->userObj->setFavourite($request->all());
    }
    public function removeFavourite(Request $request)
    {
      return$this->userObj->removeFavourite($request->all());
    }
    public function setDefaultFavourite(Request $request)
    {
      return $this->userObj->setDefaultFavourite($request->all());
    }
    public function postSetting(Request $request)
    {
      return $this->userObj->postSetting($request->all());
    }
    public function getSetting(Request $request)
    {
      return $this->userObj->getSetting($request->all());
    }
    public function setUserImage(Request $request)
    {
      return $this->userObj->setUserImage($request->all());
    }
    public function updatefcm(Request $request) {
      return $this->userObj->setFCM($request->all());
    }
    public function getAllAppUsers(Request $request) {
      return $this->userObj->getAllAppUsers($request->all());
    }

    public function changeTournamentPermission(Request $request) {
      return $this->userObj->changeTournamentPermission($request->all());  
    }

    public function getUserTournaments(Request $request, $id) {
      return $this->userObj->getUserTournaments($id);
    }

}
