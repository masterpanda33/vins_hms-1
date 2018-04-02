<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Doctor's Initial Assessment</h1>
				</div>
			</div>
		</div>

		<form action="" method="post">

			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<label>History : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="history" v-model="doctorsInitialAssessmentData.history" value="" />
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-6">
						<label>History : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="history" v-validate="'required'" v-model="doctorsInitialAssessmentData.history" value="" />
						<span class="help is-danger" v-show="errors.has('history')">
              Field is required
            </span>

				<div class="col-md-6">
					<div class="text-right">
						<addressograph></addressograph>

					</div>
				</div>
			</div></div></div>

			<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Past History : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" v-validate="'required'" name="past_history" v-model="doctorsInitialAssessmentData.past_history" value=""/>
							<span class="help is-danger" v-show="errors.has('past_history')">
	              Field is required
	            </span>

						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Allergic History : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="allergic_history" v-validate="'required'" v-model="doctorsInitialAssessmentData.allergic_history" value=""/>
							<span class="help is-danger" v-show="errors.has('allergic_history')">
	              Field is required
	            </span>
						</div>
					</div>
			</div>

			<div class="row">
				<h3>In case of Road Accident : </h3>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Name of Informant : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" v-validate="'required'" name="name_informant" v-model="doctorsInitialAssessmentData.name_informant" value=""/>
						<span class="help is-danger" v-show="errors.has('name_informant')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Brought By : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text"  v-validate="'required'" name="brought_by" v-model="doctorsInitialAssessmentData.brought_by" value=""/>
						<span class="help is-danger" v-show="errors.has('brought_by')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Place of Accident : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="place_of_accident" v-model="doctorsInitialAssessmentData.place_of_accident" value="" />
						<span class="help is-danger" v-show="errors.has('place_of_accident')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Time : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="time" v-validate="'required'" name="current_time" v-model="doctorsInitialAssessmentData.current_time" value=""/>
						<span class="help is-danger" v-show="errors.has('current_time')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Date : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="date" v-validate="'required'" name="current_date" v-model="doctorsInitialAssessmentData.current_date" value=""/>
						<span class="help is-danger" v-show="errors.has('current_date')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>MLC Done outside or not : </label>
					</div>
					<div class="col-md-6">
			      <select class="form-control " name="mlc" v-model="doctorsInitialAssessmentData.mlc" value="">
							<option value="no" >No</option>
							<option value="yes" >Yes</option>
						</select>

					</div>
				</div>
			</div>

			<hr>
			<div class="row">
				<h3>History Of : </h3>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>LOC : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control " name="loc" v-model="doctorsInitialAssessmentData.loc" value="">
							<option value="no">No</option>
							<option value="yes">Yes</option>
						</select>

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>ENT Bleeding : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="ent_bleeding" v-model="doctorsInitialAssessmentData.ent_bleeding" value="">
							<option value="no" >No</option>
							<option value="yes">Yes</option>
						</select>

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Seizures : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control " name="seizures" v-model="doctorsInitialAssessmentData.seizures" value="">
							<option value="no" >No</option>
							<option value="yes" >Yes</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Vomiting : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control " name="vomiting" v-model="doctorsInitialAssessmentData.vomiting" value="">
							<option value="no">No</option>
							<option value="yes">Yes</option>
						</select>
					</div>
				</div>
			</div>
			<hr>

			<div class="row">
				<h3>Vitals : </h3>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Pulse : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" v-validate="'required'" name="pulse" v-model="doctorsInitialAssessmentData.pulse" value=""/>

						<span class="help is-danger" v-show="errors.has('pulse')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Temprature : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text"  v-validate="'required'" name="temp" v-model="doctorsInitialAssessmentData.temp" value="" />
						<span class="help is-danger" v-show="errors.has('<?php // TEMP:  ?>')">
							Field is required
						</span>
						</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>BP : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" v-validate="'required'" name="bp" v-model="doctorsInitialAssessmentData.bp" value=""/>
						<span class="help is-danger" v-show="errors.has('bp')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>SPO2 : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" v-validate="'required'" name="spo2" v-model="doctorsInitialAssessmentData.spo2" value=""/>
						<span class="help is-danger" v-show="errors.has('spo2')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>RBS : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" v-validate="'required'" name="rbs" v-model="doctorsInitialAssessmentData.rbs" value=""/>
						<span class="help is-danger" v-show="errors.has('rbs')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Pain : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control " name="pain" v-model="doctorsInitialAssessmentData.pain" value="">
							<option value="no" >No</option>
							<option value="yes" >Yes</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>GCS : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" v-validate="'required'" type="text" name="gcs_e" v-model="doctorsInitialAssessmentData.gcs_e" value=""/>
						<span class="help is-danger" v-show="errors.has('gcs_e')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <input class="form-control"  v-validate="'required'" type="text" name="gcs_m" v-model="doctorsInitialAssessmentData.gcs_m" value=""/>
						<span class="help is-danger" v-show="errors.has('gcs_m')">
							Field is required
						</span>
					</div>
					<div class="col-md-6">
			      <input class="form-control"  v-validate="'required'" type="text" name="gcs_v" v-model="doctorsInitialAssessmentData.gcs_v" value=""/>
						<span class="help is-danger" v-show="errors.has('gcs_v')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Systematic Examination : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control"  v-validate="'required'" type="text" name="systematic_examination" v-model="doctorsInitialAssessmentData.systematic_examination" value=""/>
						<span class="help is-danger" v-show="errors.has('systematic_examination')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Any other Findings or Injuries : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" v-validate="'required'" name="any_other" v-model="doctorsInitialAssessmentData.any_other" value=""/>
						<span class="help is-danger" v-show="errors.has('any_other')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Treated on Admission : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" v-validate="'required'" name="treated_on_admission" v-model="doctorsInitialAssessmentData.treated_on_admission" value=""/>
						<span class="help is-danger" v-show="errors.has('treated_on_admission')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Shifted To : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" v-validate="'required'" name="shifted_to" v-model="doctorsInitialAssessmentData.shifted_to" value=""/>
						<span class="help is-danger" v-show="errors.has('shifted_to')">
							Field is required
						</span>
					</div>
				</div>
			</div>
			<div class="text-center form-group">
				<button class="btn btn-success" type="button" @click="saveDoctorsInitialAssessment()">Submit</button>
			</div>

		</form>
		  <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal>
	</div>
</template>
<script >
	import User from '../../../api/users.js'
	import addressograph from './addressograph.vue';
	import SelectPatientModal from '../../../components/SelectPatientModal.vue';

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
								'type': 'doctorsInitialAssessment',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
								'doctorsInitialAssessmentData': {
									'history' : '',
									'past_history' : '',
									'allergic_history' : '',
									'name_informant' : '',
									'brought_by' : '',
									'place_of_accident' : '',
									'current_time' : '',
									'current_date' : '',
									'mlc' : '',
									'loc' : '',
									'ent_bleeding' : '',
									'seizures' : '',
									'vomiting' : '',
									'pulse' : '',
									'temp' : '',
									'bp' : '',
									'spo2' : '',
									'rbs' : '',
									'pain' : '',
									'gcs_e' : '',
									'gcs_m' : '',
									'gcs_v' : '',
									'systematic_examination' : '',
									'any_other' : '',
									'treated_on_admission' : '',
									'shifted_to' : '',
								}
            }
        },
				components: {
					 addressograph,
					 SelectPatientModal
			 },
			 mounted() {
			 $('.ls-select2').select2({
									 allowClear: true,
									 theme: "bootstrap",
									 placeholder: "select"
							 });
				 $('.ls-datepicker').datepicker({
				 format: 'dd/mm/yyyy',
				 'autoclose': true
			 });
			  $('#delete_modal').modal('show');

			 $('.ls-timepicker').timepicker({
			 format: 'hh-mm',
			 'autoclose': true
		 	});
			let vm =this;
      $('.ls-datepicker').datepicker().on('changeDate',function(){
        vm.doctorsInitialAssessmentData.current_date = this.value;
      });
      $('.ls-timepicker').timepicker().on('change',function(){
        vm.doctorsInitialAssessmentData.current_time = this.value;
      });
			 },
				methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveDoctorsInitialAssessment() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var doctorsInitialAssessmentData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.doctorsInitialAssessmentData};
				    	User.saveDoctorsInitialAssessment(doctorsInitialAssessmentData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Doctors Initial Assessment has been saved', 'Doctors Initial Assessment', {timeOut: 5000});
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
