<?php

namespace euro_hms\Http\Controllers\Auth;

use euro_hms\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Notifications;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Str;
use euro_hms\Models\User;
use euro_hms\Models\Role;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }
    /*protected function guard()
    {
        return Auth::guard('guard-name');
    }*/
    // public function showResetForm(Request $request, $token = null)
    // {
    //     return view('auth.passwords.reset')->with(
    //         ['token' => $token, 'email' => $request->email]
    //     );
    // }
    public function showResetForm(Request $request, $token = null)
    {
         $password_reset = \DB::table('password_resets')->where('token', $token)->first();
        // if(empty($password_reset)){
        //     throw new NotFoundHttpException;
        // }
        $email = '';
        // dd($email);
        // return view('auth.reset')->with('token', $token)->with('email', $email);
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $email]
        );
    }


    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
    /**
     * Get the response for a successful password reset.
     *
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetResponse($response)
    {
        return redirect($this->redirectPath())
                            ->with('status', trans($response));
    }
    /**
     * Get the response for a failed password reset.
     *
     * @param  \Illuminate\Http\Request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
    }
    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker('users');
    }
   /* protected function broker()
    {
        return Password::broker('name');
    } */
     public function reset(Request $request)
    {


        ///$this->validate($request, $this->rules(), $this->validationErrorMessages());

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        // here we check for Mobile user
        $data = $request->all();

        $mobileUserRoleId = Role::where('slug', 'mobile.user')->first()->id;
        $userData = User::where(['email'=>$data['email']])->first();

        // if($userData->roles[0]->id == $mobileUserRoleId) {
        //     $data['otp'] = (isset($data['otp'])) ? $data['otp'] : '1';
        // //   if($this->isValidOTP($mobileUser, $data['otp'])) {
        //     // if its valid otp
        //     $mobileUser->password =  \Hash::make($data['password']);
        //     $mobileUser->save();
        //     $response = 'passwords.reset';
        //   // } else {
        //    // return response(['status_code' => 319,'message'=>'Sorry code Expired']);
        //   // }
        // } else {

        $response = $this->broker()->reset(
          $this->credentials($request), function ($user, $password) {
            $this->resetPassword($user, $password);
          }
        );
        // }
        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.

        $response == Password::PASSWORD_RESET
                ? $this->sendResetResponse($response)
                : $this->sendResetFailedResponse($request, $response);
        if($userData->roles[0]->id != $mobileUserRoleId)
            return redirect('/login/passwordupdated');
        else
            return redirect('/mlogin')->with('reset','reset password');
    }

    public function userMlogin(Request $request) {
         return view('emails.users.verified');
    }


    protected function isValidOTP($user,$otp)
    {
       $encoded_otp = base64_encode($user->id."|".$otp);
        $userOtp = \euro_hms\Models\UserOtp::where(["user_id"=>$user->id,
          'encoded_key'=>$encoded_otp])->first();
        if($userOtp){

            $timediff = time() - strtotime($userOtp->created_at);
            $userOtp->delete();

            if($timediff <= 600){ // valid only for 10 minutes
                return true;
            }
        }
        return false;
    }
    /**
     * Get the password reset credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password','password_confirmation','token'
        );
    }
    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {
        $user->forceFill([
            'password' => \Hash::make($password),
            'remember_token' => Str::random(60),
        ])->save();

        $this->guard()->login($user);
    }
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject("Euro-Sportring - Password Reset")
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('Reset password', route('password.reset', $this->token))
            ->line('If you did not request this password reset please ignore this email.');
    }

}
