<template id="">
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-8">
					<h1>Nutritional Assessment Form</h1>
				</div>
			</div>
		</div>
		<hr>
		<form action="" method="post">
			<div class="row">
				<div class="col-md-6">
				</div>
				<div class="col-md-6">
			        <div class="text-right">
        				<addressograph></addressograph>
  				    </div>
  				</div>
			</div>
			<hr>
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Diagnosis : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control " type="text" name="diagnosis" v-model="NutritionalAssessmentForm.diagnosis" v-validate="'required'" placeholder="Diagnosis" value="">
						<span class="help is-danger" v-show="errors.has('diagnosis')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Calorie Required : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="calorie_required" v-model="NutritionalAssessmentForm.calorie_required" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('calorie_required')">
							Field is required
						</span>

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Protein Required : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="protein_required" v-model="NutritionalAssessmentForm.protein_required" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('protein_required')">
							Field is required
						</span>

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Calorie Intake : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="calorie_intake" v-model="NutritionalAssessmentForm.calorie_intake" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('calorie_intake')">
							Field is required
						</span>

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Protein Intake : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="protein_intake" v-model="NutritionalAssessmentForm.protein_intake" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('protein_intake')">
							Field is required
						</span>

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Diet : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="diet" v-model="NutritionalAssessmentForm.diet" v-validate="'required'" value="">
							<option value="Vegetarian">Vegetarian</option>
							<option value="Non-Vegetarian">Non-Vegetarian</option>
							<option value="Ovatarian">Ovatarian</option>
						</select>
						<span class="help is-danger" v-show="errors.has('diet')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row">
				<h3>Assessment : </h3>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Vomiting : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="vomiting" v-model="NutritionalAssessmentForm.vomiting" v-validate="'required'" value="">
							<option value="Absent">Absent</option>
							<option value="Present">Present</option>
						</select>
						<span class="help is-danger" v-show="errors.has('vomiting')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Diarrhea : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="diarrhea" v-model="NutritionalAssessmentForm.diarrhea" v-validate="'required'" value="">
							<option value="Absent">Absent</option>
							<option value="Present">Present</option>
						</select>
						<span class="help is-danger" v-show="errors.has('diarrhea')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Constipation : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="constipation" v-model="NutritionalAssessmentForm.constipation" v-validate="'required'" value="">
							<option value="Absent">Absent</option>
							<option value="Present">Present</option>
						</select>
						<span class="help is-danger" v-show="errors.has('constipation')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Mouth Ulcer : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="mouth_ulcer" v-model="NutritionalAssessmentForm.mouth_ulcer" v-validate="'required'" value="">
							<option value="Absent">Absent</option>
							<option value="Present">Present</option>
						</select>
						<span class="help is-danger" v-show="errors.has('mouth_ulcer')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Food Intake : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="food_intake" v-model="NutritionalAssessmentForm.food_intake" v-validate="'required'" value="">
							<option value="Adequate">Adequate</option>
							<option value="Inadequate">Inadequate</option>
						</select>
						<span class="help is-danger" v-show="errors.has('food_intake')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Fluid Intake : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="fluid_intake" v-model="NutritionalAssessmentForm.fluid_intake" v-validate="'required'" value="">
							<option value="Adequate">Adequate</option>
							<option value="Inadequate">Inadequate</option>
						</select>
						<span class="help is-danger" v-show="errors.has('fluid_intake')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Nutritional Need : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="nutritional_need" v-model="NutritionalAssessmentForm.nutritional_need" v-validate="'required'" value="">
							<option value="Low">Low</option>
							<option value="Medium">Medium</option>
							<option value="High">High</option>
						</select>
						<span class="help is-danger" v-show="errors.has('nutritional_need')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Life Style : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="life_style" v-model="NutritionalAssessmentForm.life_style" v-validate="'required'" value="">
							<option value="Sedentary">Sedentary</option>
							<option value="Moderate">Moderate</option>
							<option value="Heavy">Heavy</option>
						</select>
						<span class="help is-danger" v-show="errors.has('life_style')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Mode of feed : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="mode_of_feed" v-model="NutritionalAssessmentForm.mode_of_feed" v-validate="'required'" value="">
							<option value="Self Feed">Self Feed</option>
							<option value="With Assisstance">With Assisstance</option>
							<option value="Tube Feed">Tube Feed</option>
						</select>
						<span class="help is-danger" v-show="errors.has('mode_of_feed')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Height : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="height" v-model="NutritionalAssessmentForm.height" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('height')">
							Field is required
						</span>

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Weight : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="weight" v-model="NutritionalAssessmentForm.weight" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('weight')">
							Field is required
						</span>

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>BMI : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="bmi" v-model="NutritionalAssessmentForm.bmi" v-validate="'required'" value="">
							<option value="30">  30</option>
							<option value="24">  24</option>
							<option value="18.5-24">18.5 - 24</option>
							<option value="18.5">  18.5</option>
						</select>
						<span class="help is-danger" v-show="errors.has('bmi')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Diet Recall : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="diet_recall" v-model="NutritionalAssessmentForm.diet_recall" v-validate="'required'" value="">
							<option value="Adequate Nutrional Intake">Adequate Nutritional Intake</option>
							<option value="Less Nutrional Intake">Less Nutritional Intake</option>
							<option value="No Nutrional Intake for >5 days">No Nutritional Intake for > 5 days</option>
							<option value="Unknown">Unknown</option>
						</select>
						<span class="help is-danger" v-show="errors.has('diet_recall')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Has food intake declined in the last 3-6 months : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="food_intake_decline" v-model="NutritionalAssessmentForm.food_intake_decline" v-validate="'required'" value="">
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						<span class="help is-danger" v-show="errors.has('food_intake_decline')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If yes, reason thereof : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="food_intake_decline_reason" v-model="NutritionalAssessmentForm.food_intake_decline_reason" v-validate="'required'" value="">
							<option value="Loss of apetite">Loss of apetite</option>
							<option value="Digestive Problem">Digestive Problem</option>
							<option value="Chewing or Swallowing">Chewing or Swallowing</option>
							<option value="Any Other">Any other</option>
						</select>
						<span class="help is-danger" v-show="errors.has('food_intake_decline_reason')">
							Field is required
						</span>
					</div>
				</div>
			</div>

			<div class="row">
				<h3>Clinical History</h3>
			</div>

			<div class="form-group">
				<table class="table table-bordered">
					<tr>
						<td>
							<input  type="checkbox" class="" name="blood_pressure" v-model="NutritionalAssessmentForm.blood_pressure"  value=""/>
						</td>
						<th>
							<label class="">Blood Pressure Problem</label>
						</th>
						<td>
							<input  type="checkbox" class="" name="diabetes" v-model="NutritionalAssessmentForm.diabetes"  value=""/>
						</td>
						<th>
							<label class="">Diabetes Mellitus</label>
						</th>
						<td>
							<input  type="checkbox" class="t" name="old_operated_patient" v-model="NutritionalAssessmentForm.old_operated_patient"  value=""/>
						</td>
						<th>
							<label class="">Old operated patient</label>
						</th>
					</tr>
					<tr>
						<td>
							<input  type="checkbox" name="cardiac_diseases" v-model="NutritionalAssessmentForm.cardiac_diseases"  value=""/>
						</td>
						<th>
							<label>Cardiac Diseases</label>
						</th>
						<td>
							<input  type="checkbox" name="liver_diseases" v-model="NutritionalAssessmentForm.liver_diseases"  value=""/>
						</td>
						<th>
							<label>Liver Diseases</label>
						</th>
						<td>
							<input  type="checkbox" name="renal_failure" v-model="NutritionalAssessmentForm.renal_failure"  value=""/>
						</td>
						<th>
							<label>Renal Failure</label>
						</th>
					</tr>
					<tr>
						<td>
							<input  type="checkbox" name="cancer" v-model="NutritionalAssessmentForm.cancer"  value=""/>
						</td>
						<th>
							<label>Cancer</label>
						</th>
						<td>
							<input  type="checkbox" name="trauma_burn" v-model="NutritionalAssessmentForm.trauma_burn"  value=""/>
						</td>
						<th>
							<label>Trauma or Burn</label>
						</th>
						<td>
							<input  type="checkbox" name="gout" v-model="NutritionalAssessmentForm.gout"  value=""/>
						</td>
						<th>
							<label>Gout</label>
						</th>
					</tr>
					<tr>
						<td>
							<input  type="checkbox" name="cancer" v-model="NutritionalAssessmentForm.other"  value=""/>
						</td>
						<th>
							<label>Any Other</label>
						</th>
						<td colspan="4">
							<input class="form-control" type="text" name="any_other" v-model="NutritionalAssessmentForm.any_other" placeholder="If any other" value=""/>
						</td>
					</tr>
				</table>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Risk to patient : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="risk_type" v-model="NutritionalAssessmentForm.risk_type" v-validate="'required'" value="">
							<option value="Low risk">Low Risk</option>
							<option value="	Medium Risk">Medium Risk</option>
							<option value="High Risk">High Risk</option>
						</select>
						<span class="help is-danger" v-show="errors.has('risk_type')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Reason for risk : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="risk_reason" v-model="NutritionalAssessmentForm.risk_reason" placeholder="In case of Medium-High risk" value=""/>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Diet Suggested to patient : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control  ls-select2" name="diet_suggested" v-model="NutritionalAssessmentForm.diet_suggested" v-validate="'required'" value="">
							<option value="FD">FD</option>
							<option value="ADD">ADD</option>
							<option value="SRD">SRD</option>
							<option value="Semi_solid_Diet">Semi solid Diet</option>
							<option value="Soft_Diet">Soft Diet</option>
							<option value="Liquid_Diet">Liquid Diet</option>
							<option value="Peg_Feed">Peg Feed</option>
							<option value="RT_Feed">RT Feed</option>
							<option value="HPD_Gout_Diet">HPD Gout Diet</option>
							<option value="Hepatic_Diet">Hepatic Diet</option>
							<option value="Without_Chilly">Without Chilly</option>
							<option value="Any_Other">Any Other</option>
						</select>
						<span class="help is-danger" v-show="errors.has('diet_suggested')">
							Field is required
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Remarks : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="remarks" v-model="NutritionalAssessmentForm.remarks" placeholder="Remarks" value=""/>
						<span class="help is-danger" v-show="errors.has('remarks')">
							Field is required
						</span>

					</div>
				</div>
			</div>

			<div class="row form-group">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Date</th>
							<th>Diet</th>
							<th>Remarks</th>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input class="form-control ls-datepicker" type="text" name="date_table" v-model="NutritionalAssessmentForm.date_table" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('date_table')">
							Field is required
						</span>

							</td>
							<td><input class="form-control" type="text" name="diet_table" v-model="NutritionalAssessmentForm.diet_table" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('diet_table')">
							Field is required
						</span>

							</td>
							<td><input class="form-control" type="text" name="remarks_table" v-model="NutritionalAssessmentForm.remarks_table" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('remarks_table')">
							Field is required
						</span>

							</td>
							<td><input class="form-control" type="text" name="name_table" v-model="NutritionalAssessmentForm.name_table" v-validate="'required'" value=""/>
						<span class="help is-danger" v-show="errors.has('name_table')">
							Field is required
						</span>

							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="row form-group">
				<div class="col text-center">
					<input class="btn btn-success" type="button" @click="saveNutritionalAssessmentForm()" value="Submit">
				</div>
			</div>
		</form>
		 <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import addressograph from './addressograph.vue';
    import SelectPatientModal from '../../../components/SelectPatientModal.vue'

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'type': 'nutritionalAssessmentForm',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'NutritionalAssessmentForm' : {
									'diagnosis':'',
									'calorie_required':'',
									'protein_required':'',
									'calorie_intake':'',
									'protein_intake':'',
									'diet':'',
									'vomiting':'',
									'diarrhea':'',
									'constipation':'',
									'mouth_ulcer':'',
									'food_intake':'',
									'fluid_intake':'',
									'nutritional_need':'',
									'life_style':'',
									'mode_of_feed':'',
									'height':'',
									'weight':'',
									'bmi':'',
									'diet_recall':'',
									'food_intake_decline':'',
									'food_intake_decline_reason':'',
									'blood_pressure':'',
									'diabetes':'',
									'old_operated_patient':'',
									'cardiac_diseases':'',
									'liver_diseases':'',
									'renal_failure':'',
									'cancer':'',
									'trauma_burn':'',
									'gout':'',
									'other':'',
									'any_other':'',
									'risk_type':'',
									'risk_reason':'',
									'diet_suggested':'',
									'remarks':'',
									'date_table':'',
									'diet_table':'',
									'remarks_table':'',
									'name_table':'',
                }
            }
        },
        components: {
			 addressograph,
			 SelectPatientModal,
		},
		mounted() {
        	$('.ls-datepicker').datepicker({
         		format: 'dd/mm/yyyy',
         		'autoclose': true
     		})
        	// if(this.ipd_id == 0){
	     		   $('#delete_modal').modal('show');
	    	// }
		 	$('.ls-datepicker').datepicker().on('changeDate',function(){
				if (this.id == 'date_table') {
					vm.NutritionalAssessmentForm.date_table = this.value;
			 	}
			})
			$('.ls-select2').select2({
				 placeholder: "Select",
			});
       	},
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        	saveNutritionalAssessmentForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
									 var Res = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.NutritionalAssessmentForm};
                   User.saveNutritionalAssessmentForm(Res).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Nutritional Assessment Form has been saved', 'Nutritional Assessment Form', {timeOut: 5000});
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
