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
                                <vue-form :state="formstate" @submit.prevent="onSubmit">
                                    <div class="row">
                                        <div class="col-sm-12 mt-3 ">
                                            <div class="form-group">
                                                    <input v-model="model.email" name="email" id="email" type="email" required autofocus placeholder="E-mail" class="form-control" />
                                                   
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                    <input v-model="model.password" name="password" id="password" type="password" required placeholder="Password" class="form-control" minlength="6" maxlength="10" />
                                                    
                                                
                                            </div>
                                        </div>
                                        <div class="col text-center">
                                            <button class="btn btn-success text-center" type="button" @click="saveLabSheet()">Sign in</button>
                                        </div>
                                            
                                    </div>
                                </vue-form>
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
            model: {
                email: "",
                password: ""

            }
        }
    },
    methods: {
        onSubmit() {
            if (this.formstate.$invalid) {
                return;
            } else {
                this.$router.push("/");
            }
        }
    },
    mounted: function() {
    },
    destroyed: function() {

    }
}
</script>