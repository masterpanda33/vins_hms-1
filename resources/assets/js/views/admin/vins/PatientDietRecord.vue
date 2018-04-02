<template id="">
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h1>Patient Diet Record</h1>
				</div>
							</div>
		</div>
		<div class="text-right">
			<addressograph></addressograph>
		</div>
		<hr>

		<form action="" method="post">
			<div class="row form-group">
				<div class="col-md-6">
						<label>Dietician / Nurses Name : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="dietician_name" v-model="patientDietRecordData.dietician_name" v-validate="'required'" value="">
					<span class="help is-danger" v-show="errors.has('dietician_name')">
						Dietician name is required
					</span>
				</div>
			</div>

			<div class="row form-group">
				<div class="col">
					<div class="row">
						<div class="col">
							<label>Date : </label>
						</div>
						<div class="col">
							<input class="form-control ls-datepicker" type="text" name="date_diet" v-model="patientDietRecordData.date_diet" v-validate="'required'" value="" />
							<span class="help is-danger" v-show="errors.has('date_diet')">
								Date is required
							</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<div class="col">
							<label>Time : </label>
						</div>
						<div class="col">
							<input class="form-control ls-timepicker" type="text" name="time_diet" v-model="patientDietRecordData.time_diet" v-validate="'required'" value="" />
							<span class="help is-danger" v-show="errors.has('time_diet')">
								Time is required
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col">
					<div class="row">
						<div class="col">
					<label>Bed No : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="bed_no" v-model="patientDietRecordData.bed_no" v-validate="'required'" value=""/>
					<span class="help is-danger" v-show="errors.has('bed_no')">
						Bed number is required
					</span>
				</div></div></div>


				<div class="col">
					<div class="row">
						<div class="col">
					<label>IPD No : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="ipd_id" v-model="ipd_id" v-validate="'required|numeric'" value=""/>
					<span class="help is-danger" v-show="errors.has('ipd_id')">
						Numeric IPD is required
					</span>
				</div></div>
			</div></div>

			<div class="row form-group">
				<div class="col">
					<div class="row">
						<div class="col">
							<label>Patient Name : </label>
						</div>
						<div class="col">
							<input class="form-control" type="text" name="patient_name" v-model="patientDietRecordData.patient_name" v-validate="'required'" value=""/>
							<span class="help is-danger" v-show="errors.has('patient_name')">
								Patient name is required
							</span>
						</div>
					</div>
				</div>
				<div class="col">

				</div>
			</div>

			<div class="row form-group">
				<div class="col">
					<div class="row">
						<div class="col">
							<label>Diagnosis : </label>
						</div>
						<div class="col">
							<input class="form-control" type="text" name="diagnosis" v-model="patientDietRecordData.diagnosis" v-validate="'required'" value="" />
							<span class="help is-danger" v-show="errors.has('diagnosis')">
								Diagnosis is required
							</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<div class="col">
							<label>Consultant's Name : </label>
						</div>
						<div class="col">
							<input class="form-control" type="text" name="consultants_name" v-model="patientDietRecordData.consultants_name" v-validate="'required'" value="" />
							<span class="help is-danger" v-show="errors.has('consultants_name')">
								Consultant's name is required
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col">
					<div class="row">
						<div class="col">
							<label>Diet to be Given : </label>
						</div>
						<div class="col">
							<input class="form-control" type="text" name="diet_to_be_given" v-model="patientDietRecordData.diet_to_be_given" v-validate="'required'" value="" />
							<span class="help is-danger" v-show="errors.has('diet_to_be_given')">
								Diet to be given is required
							</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<div class="col">
							<label>Remarks : </label>
						</div>
						<div class="col">
							<input class="form-control" type="text" name="remarks" v-model="patientDietRecordData.remarks" v-validate="'required'" value=""/>
							<span class="help is-danger" v-show="errors.has('remarks')">
								Remarks is required
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col text-center">
					<input class="btn btn-success" type="button" @click="savePatientDietRecord()" value="Submit"/>
				</div>
			</div>
		</form>
		 <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import addressograph from './addressograph.vue';
	import SelectPatientModal from '../../../components/SelectPatientModal.vue';

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
				'type': 'patientDietRecord',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
               	'deleteConfirmMsg': 'Are you sure you would like to delete this referee? All information associated with this referee will be permanently deleted.',
                'patientDietRecordData' : {
									'dietician_name':'',
									'date_diet':'',
									'time_diet':'',
									'bed_no':'',
									'patient_name':'',
									'diagnosis':'',
									'consultants_name':'',
									'diet_to_be_given':'',
									'remarks':'',
                }
            }
        },
		components: {
           addressograph,
           SelectPatientModal
       },
       	mounted(){
					$('.ls-datepicker').datepicker({
            format: 'dd/mm/yyyy',
            'autoclose': true
          })
					$('.ls-timepicker').timepicker({
            format: 'hh-mm',
                     'autoclose': true
           })
			// if(this.ipd_id == 0){
				$('#delete_modal').modal('show');
        	 // }
					 $('.ls-datepicker').datepicker().on('changeDate',function(){
             if (this.id == 'date_diet') {
               vm.doctorsDailyNotesData.date_diet = this.value;
             }
           })
					 $('.ls-timepicker').timepicker().on('change',function(){

	           if (this.id == 'time_diet') {
	             vm.doctorsDailyNotesData.time_diet = this.value;
	           }
	       })

		},
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },


        savePatientDietRecord() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
									 var patientDietRecordData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.patientDietRecordData};
                   User.savePatientDietRecord(patientDietRecordData).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Patient Diet Record has been saved', 'PatientDietRecord', {timeOut: 5000});
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
