<?php

namespace euro_hms\Http\Controllers\Auth;

use euro_hms\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |`
    */
     use SendsPasswordResetEmails;

    // protected $resetView="auth.passwords.reset";

    /**
     * Get the e-mail subject line to be used for the reset link email.
     */
    protected $subject="Password Reset Link";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         // dd($this->broker());
        // $this->middleware('guest');
    }
     public function resetLink(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $request->only('email')
            // $this->resetEmailBuilder()
        );
       // $otp  = \Cookie::get('otp_key');
       // \Cookie::forget('otp_key');
        $otp = '';
        $msg = 'Success';
        if(isset($_SESSION['otp_key'])) {
          $otp = $_SESSION['otp_key'];
          unset($_SESSION['otp_key']);
        }
        if($response == 'passwords.user') {
          $msg = "This email address is not recognised.";
        }
        return $response == Password::RESET_LINK_SENT
                    ? ['status' => '200','message'=>$msg,'otp'=>$otp]
                    : ['status' => '200','message'=>$msg];
    }


}
