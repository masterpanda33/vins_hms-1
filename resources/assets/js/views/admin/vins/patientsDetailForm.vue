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
						<input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value=""  v-model="patientData.dob" v-validate="'required'"/>
						<span class="help is-danger" v-show="errors.has('date_of_birth')">
            	Field is required
            </span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label" for="sex">Sex: </label>
					</div>
					<div class="col-md-6">
						<select class="form-control ls-select2" id="sex" name="sex" v-model="patientData.gender" v-validate="'required'">
							<option value="M" >Male</option>
							<option value="F">Female</option>
						</select>
						<span class="help is-danger" v-show="errors.has('sex')">
		                	Field is required
		                </span>
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
				      	<input class="form-control" type="text" id="phone_no" name="ph_no" value="" v-model="patientData.ph_no"/>
				      	<span class="help is-danger" v-show="errors.has('ph_no')">
		                	Field is required
		                </span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="mobile_no">Mobile no.: </label>
					</div>
					<div class="col-md-6">
			      	<input class="form-control" type="text" id="mobile_no" name="mob_no" value="" v-model="patientData.mob_no" v-validate="'required'"/>
			      		<span class="help is-danger" v-show="errors.has('mob_no')">
		                	Field is required
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
			      	<input class="form-control" type="text" id="consulting_dr" name="consulting_dr" value="" v-model="patientData.consulting_dr" v-validate="'required'"/>
			      		<span class="help is-danger" v-show="errors.has('consulting_dr')">
		                	Field is required
		                </span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="case">Case: </label>
					</div>
					<div class="col-md-6">
						<select class="form-control ls-select2" id="case" name="case" value="" v-model="patientData.case" v-validate="'required'">
							<option value="new" >New</option>
							<option value="old" >Old</option>
						</select>
						<span class="help is-danger" v-show="errors.has('case')">
		                	Field is required
		                </span>
					</div>
				</div>
			</div>
			<delete-modal :deleteConfirmMsg="deleteConfirmMsg" @confirmed="deleteConfirmed()"></delete-modal>
			<div class="form-group text-center">
				<button class="btn btn-success" type="button" @click="savePatient()">Submit</button>
			</div>

		</form>
	</div>

</template>
<script >
	import User from '../../../api/users.js';
	import DeleteModal from '../../../components/DeleteModal.vue'
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
                	'consulting_dr': '',
                	'case': ''
                }
            }
        },
        mounted() {
        	
        	// $('.ls-select2').select2({
         //            allowClear: true,
         //            theme: "bootstrap",
         //            placeholder: "select"
         //        });
        },
        components: {
    		DeleteModal
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
		                	if(response.data.status == 200) {
		                		toastr.success('Patient details have been saved', 'patient detail', {timeOut: 5000});
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
