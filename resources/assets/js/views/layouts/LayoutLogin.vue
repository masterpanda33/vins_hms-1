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
                                                    <input v-model="frm_email" name="email" id="email" type="email" required autofocus placeholder="E-mail" v-validate="'required'"  class="form-control" />
                                                   <span class="help is-danger" v-show="errors.has('email')">
                                                        Field is required
                                                    </span>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                    <input v-model="frm_password" name="password" id="password" type="password" required placeholder="Password" v-validate="'required'"  class="form-control" minlength="6" maxlength="10" />
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

<script type="text/babel">

export default {
    name: "login",
    data() {
        return {
            formstate: {},
            frm_email: "",
            frm_password: "",
   
        }
    },
    methods: {
        signInUser() {
            this.$validator.validateAll().then(
                (response) => {
                 if( this.frm_email != 'vins@admin.com' || this.frm_password != '12345' ) {
                toastr.error('Please enter valid credentail ', 'Login error', {timeOut: 5000});
                    
                }
                else if (!this.errors.any()) {
                    this.$router.push({name: 'dashboard'});
                }
                else {
                toastr.error('Please enter email and password.', 'Login error', {timeOut: 5000});
            }
            });
        }
    },
    mounted: function() {
    },
    destroyed: function() {

    }
}
</script>