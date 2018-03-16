<template>
    <div v-if="loginData.forgotpassword==0">
    <div class="alert alert-success margin-top-15" v-if="$route.params.status=='verified'">
        {{$lang.login_set_password_message}}
    </div>
    <div class="alert alert-success margin-top-15" v-if="$route.params.status=='passwordupdated'">
        {{$lang.login_password_update_message}}
    </div>
    <form id="loginForm" method="post" @submit.prevent="validateBeforeSubmit">
        <div :class="{'form-group' : true , 'has-danger': errors.has('email') }">
            <input type="email" class="form-control form-control-danger" placeholder="Enter email" name="email"
                   v-model="loginData.email" v-validate="{ rules: { required: true, email: true } }">
            <span class="help is-danger" v-show="errors.has('email')">{{$lang.login_email_validation_message}}</span>
        </div>
        <div :class="{'form-group' : true , 'has-danger': errors.has('password') }">
            <input type="password" class="form-control form-control-danger" placeholder="Enter password" name="password"
                v-model="loginData.password" v-validate data-vv-rules="required">
            <span class="help is-danger" v-show="errors.has('password')">{{$lang.login_password_validation_message}}</span>
        </div>
        <div class="other-actions row">
            <div class="col-sm-6">
                <div class="checkbox">
                    <div class="c-input">
                        <input type="checkbox" class="euro-checkbox" id="1" name="remember" v-model="loginData.remember">
                        <label for="1">{{$lang.login_remember_message}}</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-sm-right">
                <a href="#" class="forgot-link" @click="forgotPasswordOpen()">{{$lang.login_forgotpassword_message}}</a>
            </div>
        </div>
        <button class="btn btn-login btn-full euro-button">{{$lang.login_button}}</button>
    </form>
    </div>
    <div v-else>
     <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" id="js-frm-resetpassword-activation" method="post">
        <!-- {!! csrf_field() !!} -->
        <!-- {{ csrf_field() }} -->
        <p style="font-size:14px; color:#464a4c; margin-top:25px;">{{$lang.login_forgot_password_message}}</p>
             <div :class="{'form-group' : true , 'has-danger': errors.has('email') }">
                    <!-- <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> -->
                 <input type="email" class="form-control form-control-danger" placeholder="Email address" name="email" id="
                 email" v-model="loginData.email" v-validate="{ rules: { required: true, email: true } }">
                 <span class="help is-danger" v-show="errors.has('email')">{{ errors.first('email') }}</span>
            </div>

            <div class="form-actions">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" name="resetPassword"  @click="backtologin()" class="btn btn-login uppercase w-100 ">{{$lang.login_back_button}}</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" name="resetPassword" id="resetPassword" @click="sendResetLink()" class="btn btn-login uppercase w-100 ">{{$lang.login_reset_button}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script type="text/babel">
    import Auth from '../../services/auth'

    export default {
        data() {
            return {
                loginData: {
                    email: '',
                    password: '',
                    remember: '',
                    forgotpassword: 0
                }
            }
        },
        methods: {
            validateBeforeSubmit(e){
                this.$validator.validateAll();

                if (!this.errors.any()) {
                    Auth.login(this.loginData).then(() => {
                         this.$router.push({'name':'welcome'})
                    })
                }
            },
            forgotPasswordOpen() {
                this.loginData.forgotpassword = 1
            },
            backtologin() {
                 this.loginData.forgotpassword = 0
            },

            sendResetLink() {
                this.$validator.validateAll().then(() => {
                $('#resetPassword').attr("disabled","disabled");
                let formData = {'email': this.loginData.email}
                return axios.post('/api/password/email',formData).then(response =>  {
                    // console.log(response.status)
                    if(response.status == 200){
                        this.loginData.forgotpassword = ''
                        toastr['success']('We have emailed you a password reset link!', 'Success');
                        $('#resetPassword').attr("disabled","");
                    }else{
                        toastr['error']('email address does not exist', 'Error');
                         $('#resetPassword').removeAttr("disabled","");
                    }
                }).catch(error => {
                    if (error.response.status == 401) {
                                // toastr['error']('Invalid Credentials', 'Error');
                    }else{
                    }
                });
            });
            }
        },
    }
</script>
