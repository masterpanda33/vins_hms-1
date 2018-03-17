<template id="">
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h1>Patient Diet Record</h1>
				</div>
				<div class="col">
					<div class="text-right">
						DOC NO. FMT/HIC/09 <br>
						REV. No. 0.1 <br>
						WEF 10-10-2015
					</div>
				</div>
			</div>
		</div>

		<hr>

		<form action="" method="post">
			<div class="row form-group">
				<div class="col">
					<label>Dietician / Nurses Name : </label>
				</div>
				<div class="col">
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
							<input class="form-control" type="date" name="date" v-model="patientDietRecordData.date" v-validate="'required'" value="" />
							<span class="help is-danger" v-show="errors.has('date')">
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
							<input class="form-control" type="time" name="time" v-model="patientDietRecordData.time" v-validate="'required'" value="" />
							<span class="help is-danger" v-show="errors.has('time')">
								Time is required
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col">
					<label>Bed No : </label>
				</div>
				<div class="col">
					<input class="form-control" type="text" name="bed_no" v-model="patientDietRecordData.bed_no" v-validate="'required'" value=""/>
					<span class="help is-danger" v-show="errors.has('bed_no')">
						Bed number is required
					</span>
				</div>
			</div>

			<div class="row form-group">
				<div class="col">
					<label>IPD No : </label>
				</div>
				<div class="col">
					<input class="form-control" type="text" name="ipd_id" v-model="ipd_id" v-validate="'required|numeric'" value=""/>
					<span class="help is-danger" v-show="errors.has('ipd_id')">
						Numeric IPD is required
					</span>
				</div>
			</div>

			<div class="row form-group">
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
	</div>
</template>
<script >
	import User from '../../../api/users.js';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
								'type': 'patientDietRecord',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'patientDietRecordData' : {
									'dietician_name':'',
									'date':'',
									'time':'',
									'bed_no':'',
									'patient_name':'',
									'diagnosis':'',
									'consultants_name':'',
									'diet_to_be_given':'',
									'remarks':'',
                }
            }
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
