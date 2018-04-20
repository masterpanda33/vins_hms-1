<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Patient Details Form</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						F/OPD/01
					</div>
				</div>
			</div>
		</div>
		<form method = "post">


			<div class="row form-group">
				<div class="col-md-4">
						<div class="col-md-6">
							<label for="first_name" class="control-label">First Name : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type = "text" v-validate="'required'" id = "first_name" name="first_name" value="" :class="{'is-danger': errors.has('first_name') }" v-model="patientData.fname"/>
 							<span class="help is-danger" v-show="errors.has('first_name')">
			                	Field is required
			              	</span>
						</div>
				</div>
				<div class="col-md-4">
					<div class="col-md-6">
						<label for="middle_name" class="control-label">Middle Name: </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" id="middle_name" name="middle_name" value=""  v-model="patientData.mname"/>


					</div>
				</div>
				<div class="col-md-4">
					<div class="col-md-6">
						<label for="last_name" class="control-label">Last Name: </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" id="last_name" name="last_name" value="" v-model="patientData.lname" v-validate="'required'"/>
						<span class="help is-danger" v-show="errors.has('last_name')">
            	Field is required
          	</span>

					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label for="date_of_birth">Date of Birth: </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value=""  v-model="patientData.dob" />
						<span class="help is-danger" v-show="errors.has('date_of_birth')">
            	Field is required
            </span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label" for="sex">Gender: </label>
					</div>
					<div class="col-md-6">
						<select class="form-control ls-select2" id="sex" name="sex" v-model="patientData.gender" >
							<option value="Male" >Male</option>
							<option value="Female">Female</option>
						</select>
						<!--span class="help is-danger" v-show="errors.has('sex')">
		                	Field is required
		                </span-->
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label for="address">Address: </label>
					</div>
					<div class="col-md-6">
			      	<input class="form-control" type="text" id="address" name="address" value="" v-model="patientData.address" v-validate="'required'"/>
			      	<span class="help is-danger" v-show="errors.has('address')">
	                	Field is required
	                </span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="phone_no">Phone no.: </label>
					</div>
					<div class="col-md-6">
				      	<input class="form-control" type="text" id="phone_no" name="ph_no" value="" v-validate="'required|numeric'" v-model="patientData.ph_no"/>
				      	<span class="help is-danger" v-show="errors.has('ph_no')">
		                	Field and Numeric value required
		                </span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="mobile_no">Mobile no.: </label>
					</div>
					<div class="col-md-6">
			      	<input class="form-control" type="text" id="mobile_no" name="mob_no" value="" v-model="patientData.mob_no" v-validate="'required|numeric'"/>
			      		<span class="help is-danger" v-show="errors.has('mob_no')">
		                	Field and Numeric value is required
		                </span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="reference_dr">Reference Dr.: </label>
					</div>
					<div class="col-md-6">
			      	<input class="form-control" type="text" id="reference_dr" name="reference_dr" value="" v-model="patientData.reference_dr" v-validate="'required'"/>
			      		<span class="help is-danger" v-show="errors.has('reference_dr')">
		                	Field is required
		                </span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="consulting_dr">Consulting Dr..: </label>
					</div>
					<div class="col-md-6">

						<!-- <input type="text" name=""> -->
			      	<select class="form-control ls-select2"  id="consulting_dr" name="consulting_dr"  v-model="patientData.consulting_dr">

			      		 <option :value="doctor.text" v-for="doctor in patientData.consulting_dr_option">{{doctor.text}}</option>

			      	</select>
			      		<!--span class="help is-danger" v-show="errors.has('consulting_dr')">
		                	Field is required
		                </span-->
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="case">Case: </label>
					</div>
					<div class="col-md-6">

						<select class="form-control ls-select2 " id="case" name="case" value="" v-model="patientData.case">
							<option value="new" selected="" >New</option>

							<option value="old" >Old</option>
						</select>
						<!--span class="help is-danger" v-show="errors.has('case')">
		                	Field is required
		                </span-->
					</div>

				</div>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-success" type="button" @click="savePatient()">Submit</button>
			</div>

		</form>
	</div>

</template>
<script >
	import User from '../../../api/users.js';

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'deleteConfirmMsg': 'Are you sure you would like to delete this referee? All information associated with this referee will be permanently deleted.',
                'patientData' : {

                	'fname':'',
                	'mname': '',
                	'lname': '',
                	'dob': '',
                	'gender': '',
                	'address': '',
                	'ph_no': '',
                	'mob_no': '',
                	'reference_dr': '',
                	'consulting_dr':'',
                	'consulting_dr_option': [{text:'Dr.VIJAY THAKORE'},
                							 {text:'Dr. KAUSHIK K. TRIVEDI'},
                							 {text:'Dr. HEMANT MATHUR'},
                							 {text:'Dr. MIHIR ACHARYA'},
                							 {text:'Dr. SUMIT KAPADIA'},
                							 {text:'Dr. KETAN KAPASHI'},
                							 {text:'Dr. RAJESH KANTHARIA'},
                							 {text:'Dr. V.C. CHAUHAN'},
                							 {text:'Dr. NIRAJ BHATT'},
                							 {text:'Dr. K.C. PATEL'},
                							 {text:'Dr. CHIRAG MASTER'}
                							 ],
                	'case': ''
                }
            }
        },
        mounted() {
					$('.ls-select2').select2({
						 placeholder: "Select",
				  });
					let vm =this;
          $('.ls-select2').on("select2:select", function (e) {
             vm.patientData.case = $(this).val();
             if($(this).val() == 'old') {
             }
             else {
                setTimeout(function(){
                $('#createPatientDetail').modal('show');
             },500)
					 }
				});

     //    	 $('.ls-select2').select2({
     //                allowClear: true,
     //                theme: "bootstrap",
     //                placeholder: "select"
     //            });
     //    	 $('.ls-datepicker').datepicker({
					// format: 'dd/mm/yyyy',
					// 'autoclose': true
					// });
					// $('.ls-timepicker').timepicker({
					// format: 'hh-mm',
					// 'autoclose': true
					// });
					// let vm =this;
					// $('.ls-datepicker').datepicker().on('changeDate',function(){
					// 	if(this.id = 'date'){
					// 			vm.patientData.date = this.value;}
					// 	if(this.id = 'dob'){
					// 		vm.patientData.dob = this.value;}
					// });
					// $('.ls-timepicker').timepicker().on('change',function(){
					// 	vm.patientData.time = this.value;
					// });

        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    deleteConfirmed() {

		        // Tournament.removeReferee(this.refereeId).then(
		        //   (response) => {
		        //        toastr['success']('Referee has been removed successfully', 'Success');
		        //        $('#delete_modal').modal('hide')
		        //        $('#refreesModal').modal('hide')
		        //         this.$store.dispatch('getAllReferee',this.$store.state.Tournament.tournamentId);
		        //        // this.$root.$emit('setRefereeReset')
		        //        // this.$root.$emit('setPitchPlanTab','refereeTab')
		        //   }
		        //   )
		      },
		    savePatient() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.savePatient(this.patientData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Patient details have been saved', 'patient detail', {timeOut: 5000});
		                	} else if(response.data.code == 300) {
		                		toastr.error('Record not found', 'Error', {timeOut: 5000});
		                	} else{

		                	 toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
		                	}
		                	 $("body .js-loader").addClass('d-none');
		                },
		                (error) => {
		                	 $("body .js-loader").addClass('d-none');

		                }
		                )
			    	}
			    },
                (error) => {
                }
                )

			}
		  },

    }
</script>
