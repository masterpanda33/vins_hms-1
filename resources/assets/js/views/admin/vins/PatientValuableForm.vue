<template id="">
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h1>Patient Valuable Form</h1>
				</div>
				<div class="col">
					<div class="text-right">
						F/IPD/41
					</div>
				</div>
			</div>
		</div>

		<hr>

		<form action="" method = "post">
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col">
						<label>Unit:</label>
					</div>
					<div class="col">
						<input class="form-control" type="text"  name="unit" v-model="patientValuableFormData.unit" v-validate="'required'" id="unit" value="" >
						<span class="help is-danger" v-show="errors.has('unit')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
				<div class="text-right">

				<addressograph></addressograph>

			</div></div>
			</div>

			<div class="row form-group">
				<div class="col">
					<div class="col">
						<label>Patient's Name:</label>
					</div>
					<div class="col">
						<input class="form-control" type="text"  name="patient_name" v-model="patientValuableFormData.patient_name" v-validate="'required'" id="patient_name" value="" >
						<span class="help is-danger" v-show="errors.has('patient_name')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col">
					<div class="col">
						<label>IPD No:</label>
					</div>
					<div class="col">
						<input class="form-control" type="text"  name="ipd_no" v-model="ipd_id" v-validate="'required'" id="ipd_id" value="" >
						<span class="help is-danger" v-show="errors.has('ipd_no')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col">
					<div class="col">
						<label>Items Collected By:</label>
					</div>
					<div class="col">
						<input class="form-control" type="text"  name="items_by" v-model="patientValuableFormData.items_by" v-validate="'required'" id="items_by" value="" >
						<span class="help is-danger" v-show="errors.has('items_by')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col">
					<div class="col">
						<label>Details Of Personal Items Collected:</label>
					</div>
					<div class="col">
						<input class="form-control" type="text"  name="details" v-model="patientValuableFormData.details" v-validate="'required'" id="details" value="" >
						<span class="help is-danger" v-show="errors.has('details')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<hr>

			<div class="form-group">
				<table class="table">
					<thead>
						<tr>
							<th>Sr. No.</th>
							<th>Description</th>
							<th>Handed to Relative</th>
							<th>Kept in Locker</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="n in 5">
							<td>{{n}}</td>
							<td>
								<input class="form-control" type="text" :name="'description_'+n" v-model="patientValuableFormData.valuables[n].description" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" :name="'relative_'+n" v-model="patientValuableFormData.valuables[n].relative" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" :name="'locker_'+n" v-model="patientValuableFormData.valuables[n].locker" value=""/>
							</td>
						</tr>
					</tbody>
				</table>


				<div class="row form-group"><hr>
					<div class="col">
						<div class="col">
							<label>Sign Of Unit Nurse:</label>
						</div>
						<div class="col">
							<input class="form-control" type="text"  name="sign_nurse" v-model="patientValuableFormData.sign_nurse" v-validate="'required'" id="sign_nurse" value="" >
						<span class="help is-danger" v-show="errors.has('sign_nurse')">
							Field is required
						</span>
						</div>
					</div>
					<div class="col">
						<div class="col">
							<label> Sign Of Security:</label>
						</div>
						<div class="col">
							<input class="form-control" type="text"  name="sign_security" v-model="patientValuableFormData.sign_security" v-validate="'required'" id="sign_security" value="" >
						<span class="help is-danger" v-show="errors.has('sign_security')">
							Field is required
						</span>
						</div>
					</div>
					<div class="col">
						<div class="col">
							<label> Sign Of Sister In Charge:</label>
						</div>
						<div class="col">
							<input class="form-control" type="text"  name="sign_sister" v-model="patientValuableFormData.sign_sister" v-validate="'required'" id="sign_sister" value="" >
						<span class="help is-danger" v-show="errors.has('sign_sister')">
							Field is required
						</span>
						</div>
					</div>
				</div>
			</div>

			To be filled by when the items are handed over to the patient's relatives:

			<div class="row form-group"><hr>
				<table class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Released by: (Name and Sign)</th>
							<th>Name and Address of the Relative</th>
							<th>Relationship with the Patient's</th>
							<th>Name and Sign of the Relative</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input class="form-control ls-datepicker" type="text" name="date" v-model="patientValuableFormData.date" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('date')">
							Field is required
						</span>
							</td>
							<td>
								<input class="form-control" type="time" name="time" v-model="patientValuableFormData.time" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('time')">
							Field is required
						</span>
							</td>
							<td>
								<input class="form-control" type="text" name="released_by" v-model="patientValuableFormData.released_by" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('released_by')">
							Field is required
						</span>
							</td>
							<td>
								<input class="form-control" type="text" name="name_address" v-model="patientValuableFormData.name_address" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('name_address')">
							Field is required
						</span>
							</td>
							<td>
								<input class="form-control" type="text" name="relationship" v-model="patientValuableFormData.relationship" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('relationship')">
							Field is required
						</span>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign" v-model="patientValuableFormData.name_sign" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('name_sign')">
							Field is required
						</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			I have recieved the above mentioned items from the  hospital management in good condition.
			The hospital is not responsible for the loss of any other items and i'm not entitled to claim any other items.<hr>

			Its the policy of the hospital that on admission, all the valuables and belongings of the patient be sent home with patient's relatives.
			The above items are deposited in the understanding that in the event of loss, the hospital shall not be held liable beyond the exercise of ordinary care and deligence.

			The Patient authorizes the hospital to dispose of the property without liability.<hr>
			<div class="row form-group">
				<div class="col text-center">
					<button class="form-group btn btn-success" type="button" @click="savePatientValuableForm()">Submit</button>
				</div>
			</div>
		</form>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import addressograph from './addressograph.vue';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
								'type': 'patientValuablesForm',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'patientValuableFormData' : {
									'unit':'',
									'patient_name':'',
									'items_by':'',
									'details':'',
									'valuables' : {
										'1':{
											'description':'',
											'relative':'',
											'locker':'',
										},
										'2':{
											'description':'',
											'relative':'',
											'locker':'',
										},
										'3':{
											'description':'',
											'relative':'',
											'locker':'',
										},
										'4':{
											'description':'',
											'relative':'',
											'locker':'',
										},
										'5':{
											'description':'',
											'relative':'',
											'locker':'',
										},
									},
									'sign_nurse':'',
									'sign_security':'',
									'sign_sister':'',
									'date':'',
									'time':'',
									'released_by':'',
									'name_address':'',
									'relationship':'',
									'name_sign':'',
                }
            }
        },
				components: {
           addressograph,
       },
			 mounted() {
         $('.ls-datepicker').datepicker({
         format: 'dd/mm/yyyy',
         'autoclose': true
     })
       },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        savePatientValuableForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
									 var patientValuableFormData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.patientValuableFormData};
                   User.savePatientValuableForm(patientValuableFormData).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Patient Valuable Form has been saved', 'PatientValuableForm', {timeOut: 5000});
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
