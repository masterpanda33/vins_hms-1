<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h2>New User Form</h2>
				</div>
			</div>
		</div>
		<form method="post"> 
            <div class="row">
                <div class="col-md-12">
                        <div class="card-body">
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="firstName" class="control-label float-right txt_media1">First Name :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="firstName"
                                               placeholder="First Name" v-model="userData.fName">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="lastName" class="control-label float-right txt_media1">Last Name :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" v-model="userData.lName">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="userType" class="control-label float-right txt_media1">User Type :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control ls-select2" id="userType" v-model="userData.user_type">
                                            <option :value="type.text" v-for="type in userData.userTypeOption">{{type.text}}</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="department " class="control-label float-right txt_media1">Department :</label>
                                    </div>
                                    <div class="col-md-9">
                                         <select class="form-control ls-select2" id="department" v-model="userData.department">
                                            <option :value="dept.text" v-for="dept in userData.departmentOption">{{dept.text}}</option>
                                        </select> 

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="email" class="control-label float-right txt_media1">EmailId :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" id="email" placeholder="Email Address" v-model="userData.email">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="mobileNo" class="control-label float-right txt_media1">Mobile No :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="phoneNumber" class="form-control" id="mobileNo" placeholder="Mobile Number" v-model="userData.mobileNo">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="address" class="control-label float-right txt_media1">Address :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea rows="3" class="form-control" id="address" v-model="userData.address">
                                        </textarea>
                                    </div>
                                </div>
                                 <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="password" class="control-label float-right txt_media1">Password :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password" placeholder="Password" v-model="userData.password">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="confirmPassword" class="control-label float-right txt_media1">Confirm Password :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" v-model="userData.confirmPassword">
                                    </div>
                                </div>
                               <!-- <div class="row form-group">
				                    <div class="col-md-3">
				                        <label class="control-label float-right txt_media1" for="uploadImage">
				                            Select File :</label>
				                    </div>
				                    <div class="col-md-9">
				                        <input id="uploadImage" type="file" accept="image/*" class="file-loading">
				                    </div>
				         	  </div> -->
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9">
                                        <button class="btn btn-success" type="button" @click="validateBeforeSubmit()">Add</button>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
      
        </form>
	</div>
</template>

<script>
	import User from '../../../api/users.js';

    export default {
        data() {
            return {
                    'userData' : {
                            	'fName':'',
                            	'lName': '',
                            	'email': '',
                            	'password': '',
                                'confirmPassword':'',
                            	'mobileNo': '',
                            	'address': '',
                                'userTypeOption': [{text:'Doctor'},
                                             {text:'Others'}
                                            ],
                                'user_type': '',
                                'departmentOption':[{text:'Neurology'},
                                              {text:'Neurosurgery'},
                                              {text:'Cardiology'},
                                              {text:'Vascular'},
                                              {text:'ONCO'},
                                              {text:'Ortho'},
                                              {text:'Others'}
                                            ],
                                'department':''
                           // 	'userIamge': ''
                    }
                }
        },
        mounted() {
            var vm = this;
            setTimeout(function(){
                $('.ls-select2').select2();

                  $('#userType').on('select2:selecting', function(e) {
                    vm.userData.userType =  e.params.args.data.text;
                  });
                  $('#department').on('select2:selecting', function(e) {
                    vm.userData.department =  e.params.args.data.text;
                  });
            },200);

        },
        methods: {
             initialState() {
                this.$data.userData.fName = '',
                this.$data.userData.lName =  '',
                this.$data.userData.email ='',
                this.$data.userData.password='',
                this.$data.userData.confirmPassword='',
                this.$data.userData.mobileNo ='',
                this.$data.userData.address =''
            },
            validateBeforeSubmit() {
               
                this.$validator.validateAll().then(() => {
                    console.log('test');
                    // if(this.$data.userData.id=="") {
                                // here we add code for Mobile user for create user
                                User.createUser(this.userData).then(
                                  (response)=> {
                                    toastr.success('User has been added successfully.', 'Add User', {timeOut: 5000});
                                  },
                                  (error)=>{
                                  }

                                )
                        // }
                })
            }
        }
    }
</script>