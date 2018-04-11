<template>
    <div class="container-fluid login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-10 col-sm-8 mx-auto login-form">

                    <h2 class="text-center logo_h2">
                    
                      <img src="/assets/img/nabh_vins_logo.png" id="logo-desk" alt="NABH Logo" class="hidden-sm-down" height="80px" >

                    </h2>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-sm-12 mt-3 ">
                                            <div class="form-group">
                                                    <input v-model="loginData.email" name="email" id="email" type="email" required autofocus placeholder="E-mail" v-validate="'required'"  class="form-control" />
                                                   <span class="help is-danger" v-show="errors.has('email')">
                                                        Field is required
                                                    </span>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                    <input name="password" v-model="loginData.password" id="password" type="password" required placeholder="Password" v-validate="'required'"  class="form-control" minlength="6" maxlength="10" />
                                                    <span class="help is-danger" v-show="errors.has('password')">
                                                        Field is required
                                                    </span>
                                                
                                            </div>
                                        </div>
                                        <div class="col text-center">
                                            <button class="btn btn-success text-center" type="button" @click="signInUser()">Sign in</button>
                                        </div>
                                            
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script >
    import Auth from '../../services/auth';
    import User from '../../api/users.js';
    import Ls from '../../services/ls'
export default {
    name: "login",
    data() {
        return {
            formstate: {},
           loginData: {
                    email: '',
                    password: '',
                    remember: '',
                    forgotpassword: 0
                }
   

        }
    },
    methods: {
        signInUser() {
            var vm = this;
            this.$validator.validateAll().then(
                (response) => {
                                    // this.$validator.validateAll();
                if (!this.errors.any()) {(
                    Auth.login(this.loginData).then((response) => {
                        console.log(Ls.get('userId'),Ls.get('email'));
                        setTimeout(function(){
                            var userId = Ls.get('userId');

                                vm.$store.dispatch('SetUserDetailsData',userId);
                            // User.getUserDetails(userId).then((response) => {
                            //     console.log('response',response);
                            // });
                        },1500)
                        

                         this.$router.push({'name':'dashboard'});
                    })
                )}
                else {
                toastr.error('Please enter email and password.', 'Login error', {timeOut: 5000});
                }
            });
        }

    },
    mounted: function() {
    console.log(Ls.get('userId'),Ls.get('email'));

    },
    destroyed: function() {

    }
}
</script>