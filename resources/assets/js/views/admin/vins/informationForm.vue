<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Information Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/27 <br>
					REV. No. 0.0 <br>
					WEF 01-08-2013
				</div>
			</div>
		</div>
	</div>

	<hr>

	<form action="" method="post">
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>IPD No. : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="ipd_id" v-model="ipd_id" v-validate="'required|numeric'" />
					<span class="help is-danger" v-show="errors.has('ipd_id')">
						Numeric Field is required
					</span>
				</div>
			</div>
			<div class="col-md-6">
			<div class="text-right">

			<addressograph></addressograph>

		</div></div>
		</div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">Date:</label>
        </div>
        <div class="col-md-6">
					<input class="form-control ls-datepicker" type = "text" v-validate="'required'" id = "date" name="date" value=""  v-model="informationFormData.date"/>
					<span class="help is-danger" v-show="errors.has('date')">
						Field is required
					</span>

        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="time">Time:</label>
        </div>
        <div class="col-md-6">
					<input class="form-control ls-timepicker" type = "text" v-validate="'required'" id = "time" name="time" value=""  v-model="informationFormData.time"/>
					<span class="help is-danger" v-show="errors.has('time')">
						Field is required
					</span>

        </div>
      </div>
    </div>

    <hr>
		<div class="row form-group">
			<h3>Patient information given by Patient himself / Relative of Patient</h3>
		</div>

	  <table class="table table-bordered">
	    <thead>
			  <tr>
  				<th>Sr. No.</th>
  				<th>Contents</th>
  				<th>Response</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>1</td>
					<td>Do you get pain in chest of breathlessness on walking or after exertion?

					</td>
					<td>
							 <select class="form-control" v-validate="'required'" id = "pain_chest" name="pain_chest" value=""  v-model="informationFormData.pain_chest">
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="help is-danger" v-show="errors.has('pain_chest')">
                Field is required
              </span>
					</td>

			  </tr>

			  <tr>
		    <td>2</td>
				<td>Have you suffered in past from high blood pressure, heart disease or angina?

				</td>
					<td>
							 <select class="form-control" v-validate="'required'" id = "bp_heart" name="bp_heart" value=""  v-model="informationFormData.bp_heart">
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="help is-danger" v-show="errors.has('bp_heart')">
                Field is required
              </span>
					</td>
			 </tr>

			  <tr>
			    <td>3</td>
  				<td>
  					Have you been treated in past or at present for any major illness? If yes, please specify:
						<input class="form-control" type = "text" id = "major_illness" name="major_illness" value=""  v-model="informationFormData.major_illness"/>
  				</td>
  					<td>
  							 <select class="form-control" v-validate="'required'" id = "major_illness" name="major_illness" value=""  v-model="informationFormData.major_illness">
  								<option value="Yes">Yes</option>
  								<option value="No">No</option>
  							</select>
								<span class="help is-danger" v-show="errors.has('major_illness')">
	                        Field is required
	                      </span>
  					</td>
			  </tr>

			  <tr>
			    <td>4</td>
  				<td>Have you ever suffered from any previous nervous disorders convulsions or paralysis before?

  				</td>
  					<td>
  							 <select class="form-control" v-validate="'required'" id = "nervous_disorder" name="nervous_disorder" value=""  v-model="informationFormData.nervous_disorder">
  								<option value="Yes">Yes</option>
  								<option value="No">No</option>
  							</select>
								<span class="help is-danger" v-show="errors.has('nervous_disorder')">
	                        Field is required
	                      </span>
  					</td>
			  </tr>

			  <tr>
			    <td>5</td>
  				<td>Do you have a disorder of bleeding or clotting of blood?

  				</td>
  					<td>
  						<div class="form-group">
  							 <select class="form-control" v-validate="'required'" id = "bleeding_clot" name="bleeding_clot" value=""  v-model="informationFormData.bleeding_clot">
  								<option value="Yes">Yes</option>
  								<option value="No">No</option>
  							</select>
								<span class="help is-danger" v-show="errors.has('bleeding_clot')">
	                        Field is required
	                      </span>
  						</div>
  					</td>
			  </tr>

			  <tr>
			    <td>6</td>
  				<td>
  					Have you been treated for diabetes?

  				</td>
  					<td>
  						<div class="form-group">
  							 <select class="form-control" v-validate="'required'" id = "diabetes" name="diabetes" value=""  v-model="informationFormData.diabetes">
  								<option value="Yes">Yes</option>
  								<option value="No">No</option>
  							</select>
								<span class="help is-danger" v-show="errors.has('diabetes')">
	                        Field is required
	                      </span>
  						</div>
  					</td>
			  </tr>

			  <tr>
			    <td>7</td>
  				<td>
  					Do you have a history of Peptic Ulcer or hyper acidity?

  				</td>
  					<td>
  						<div class="form-group">
  							 <select class="form-control" v-validate="'required'" id = "peptic_ulcer" name="peptic_ulcer" value=""  v-model="informationFormData.peptic_ulcer">
  								<option value="Yes">Yes</option>
  								<option value="No">No</option>
  							</select>
								<span class="help is-danger" v-show="errors.has('peptic_ulcer')">
	                        Field is required
	                      </span>
  						</div>
  					</td>
			  </tr>

			  <tr>
			    <td>8</td>
  				<td>
  					Do you suffer from any allergy or drug hypersensitivity?

  				</td>
  					<td>
  						<div class="form-group">
  							 <select class="form-control" v-validate="'required'" id = "allergy" name="allergy" value=""  v-model="informationFormData.allergy">
  								<option value="Yes">Yes</option>
  								<option value="No">No</option>
  							</select>
								<span class="help is-danger" v-show="errors.has('allergy')">
	                        Field is required
	                      </span>
  						</div>
  					</td>

			  </tr>

			  <tr>
			    <td>9</td>
  				<td>
  					Do you suffer from Asthama / breathing difficulty?

  				</td>
  					<td>
  						<div class="form-group">
  							 <select class="form-control" v-validate="'required'" id = "asthama" name="asthama" value=""  v-model="informationFormData.asthama">
  								<option value="Yes">Yes</option>
  								<option value="No">No</option>
  							</select>
								<span class="help is-danger" v-show="errors.has('asthama')">
	                        Field is required
	                      </span>
  						</div>
  					</td>

			  </tr>

			  <tr>
			    <td>10</td>
  				<td>Have you had difficulty in passing urine in the past?

  				</td>
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="difficulty_passing_urine" v-model="informationFormData.difficulty_passing_urine" v-validate="'required'">
  								<option value="Yes">Yes</option>
  								<option value="No">No</option>
  							</select>
								<span class="help is-danger" v-show="errors.has('difficulty_passing_urine')">
	                        Field is required
	                      </span>
  						</div>
  					</td>
			  </tr>

        <tr>
			    <td>11</td>
  				<td>Have you been operated in the past?
            <div class="">
              If yes, please specify:
            </div>
              <div class="col-md-6">
								<input class="form-control" type = "text" id = "operated_in_past" name="operated_in_past" value=""  v-model="informationFormData.operated_in_past"/>
              </div>

            <ul>
              <li>Did you have any anesthetic or surgical complication?</li>
              <li>Did you receive any blood transfusion?</li>
            </ul>
  				</td>
					<td>
            <div class="form-group">
							 <select class="form-control" v-validate="'required'" id = "surgical_complication" name="surgical_complication" value=""  v-model="informationFormData.surgical_complication">
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="help is-danger" v-show="errors.has('surgical_complication')">
                        Field is required
                      </span>
						</div>
            <div class="form-group">
							 <select class="form-control" v-validate="'required'" id = "blood_transfusion" name="blood_transfusion" value=""  v-model="informationFormData.blood_transfusion">
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="help is-danger" v-show="errors.has('blood_transfusion')">
                Field is required
              </span>
						</div>
					</td>
			  </tr>

        <tr>
			    <td>12</td>
  				<td>
            Are you taking any drugs at present?
            <div class="">
              If yes, give details:
            </div>
            <div class="row form-group">
              <div class="col-md-6">
								<input class="form-control" type = "text" id = "taking_drugs_at_present" name="taking_drugs_at_present" value=""  v-model="informationFormData.taking_drugs_at_present"/>
              </div>
            </div>

  				</td>
					<td>
						<div class="form-group">
							 <select class="form-control" v-validate="'required'" id = "drug_details" name="drug_details" value=""  v-model="informationFormData.drug_details">
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							<span class="help is-danger" v-show="errors.has('drug_details')">
                        Field is required
                      </span>
						</div>
					</td>
			  </tr>
			</tbody>
	  </table>

    <div class="row form-group">
			<div class="col">
				<div class="row">
					<div class="col-md-6">
						<label for="name_of_patient">Name of Patient:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type = "text" v-validate="'required'" id = "name_of_patient" name="name_of_patient" value=""  v-model="informationFormData.name_of_patient"/>
						<span class="help is-danger" v-show="errors.has('name_of_patient')">
							Field is required
						</span>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<div class="col-md-6">
						<label for="name_of_relative">Name of Relative:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type = "text" v-validate="'required'" id = "name_of_relative" name="name_of_relative" value=""  v-model="informationFormData.name_of_relative"/>
						<span class="help is-danger" v-show="errors.has('name_of_relative')">
							Field is required
						</span>
					</div>
				</div>
			</div>
    </div>

		<div class="row form-group">
			<div class="col text-center">
				<button class="btn btn-success" type="button" @click="saveInformationForm()">Submit</button>
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
								'type': 'informationForm',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'informationFormData' : {
									'date':'',
									'time':'',
									'pain_chest':'',
									'bp_heart':'',
									'major_illness':'',
									'major_illness':'',
									'nervous_disorder':'',
									'bleeding_clot':'',
									'diabetes':'',
									'peptic_ulcer':'',
									'allergy':'',
									'asthama':'',
									'difficulty_passing_urine':'',
									'operated_in_past':'',
									'surgical_complication':'',
									'blood_transfusion':'',
									'taking_drugs_at_present':'',
									'drug_details':'',
									'name_of_patient':'',
									'name_of_relative':''
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
		 		});
				 $('.ls-timepicker').timepicker({
				 format: 'hh-mm',
				 'autoclose': true
		 		});
				let vm =this;
				$('.ls-datepicker').datepicker().on('changeDate',function(){
					vm.informationFormData.date = this.value;
				});
				$('.ls-timepicker').timepicker().on('change',function(){
					vm.informationFormData.time = this.value;
				});
			 },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveInformationForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
									 var informationFormData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.informationFormData};
				    	User.saveInformationForm(informationFormData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Information Form has been saved', 'Information Form', {timeOut: 5000});
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
