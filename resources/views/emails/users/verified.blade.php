<!DOCTYPE html>
<html lang="en">
<head>
    <title>Euro-Sportring Administration</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <script src="/assets/js/core/pace.js"></script>
    <link href="{{mix('assets/css/laraspace.css')}}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <style>
        #password-error {
            color: #ff3860;
        }
        #password-confirm-error{
            color: #ff3860;
        }
        #divCheckPasswordMatch{
            color: #1d771f;
        }
    </style>
</head>
<body class="login-page pace-done">
<div id="app" class="template-container">

        <div class="login-wrapper">
            <div class="login-box">
                <div class="brand-main">
                    <a href="/admin">
                        <!-- <img src="http://www.euro-sportring.com/sites/default/files/euro-sportring_1.png" alt="Laraspace Logo"> -->
                        <img src="/assets/img/logo-desk.svg" alt="Laraspace Logo">
                    </a>
                </div>

                <div class="row">
                        <div class="col-md-12">
                          <div class="panel panel-default reset-password">
                                    <div class="panel-body">
                                    @if(session('reset') && session('reset') == 'reset password')
                                    <div class="alert alert-success my-3">
                                            <i class="jv-icon jv-checked-arrow text-success"
                                            >
                                            </i>
                            Your password has been updated.
                                        </div>
                                    @else
                                     <div class="alert alert-success my-3 d-inline-flex align-items-start">
                                            <i class="jv-icon jv-checked-arrow text-success mr-2">
                                            </i>
    <p class="mb-1">Your account registration is complete. You can now login to the mobile app.</p>
                                        </div>
                                    @endif
                                    </div>
                                 </div>
                        </div>
                </div>

                <div class="page-copyright">
                     <p>Copyright 2017 Euro-Sportring. All rights reserved.<br/>
                    Developed  by <a href="http://aecordigital.com" target="_blank">aecor </a></p>
                </div>
            </div>
        </div>

</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#password-confirm").val();

        if (password != confirmPassword) {
            $("#divCheckPasswordMatch").html("");
            $("#addButton").html("Set password");
        } else {
            $("#divCheckPasswordMatch").html("Your user account is now complete!");
            $("#addButton").html("Go to login page");
        }
    }


    $(document).ready(function () {
       $("#password-confirm").keyup(checkPasswordMatch);
    });

$("#js-frm-password-activation").validate({
  rules: {
        password: {
            required: true,
            minlength: 5
        },
        password_confirmation: {
            required: true,
            equalTo: "#password"
        },
    },
    messages: {
        password: {
            minlength: "Your password must be at least 5 characters long"
        },
        password_confirmation: {
            equalTo: "The passwords do match, please re-enter."
        }
    },
    submitHandler: function(form) {
        form.submit();
    }
 });
</script>
</html>
