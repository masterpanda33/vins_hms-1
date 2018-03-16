<template id="">
	<div class="container">
		<div class="page-header" id="second_page">
			<div class="row">
				<div class="col-md-6">
					<h1>Nutritional Screening Form</h1>
				</div>
			</div>
		</div>

		<hr>

		<form class="" action="" method="post">
			<div class="row form-group">
				<div class="col">
					<div class="row">
						<label class="col control-label" for="type_of_diet">Type of Diet:</label>
						<div class="col">
							<select class="form-control" name="type_of_diet" v-model="NutritionalScreeningForm.type_of_diet" v-validate="'required'" id="type_of_diet">
								<option value="veg">Veg</option>
								<option value="non_veg">Non-veg</option>
								<option value="jain">Jain</option>
							</select>
							<span class="help is-danger" v-show="errors.has('type_of_diet')">
  		        	Type of diet is required
  		        </span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<label class="col control-label" for="date_of_screening">Date of Screening:</label>
						<div class="col">
							<input type="date" class="form-control" name="date_of_screening" v-model="NutritionalScreeningForm.date_of_screening" v-validate="'required'" id="date_of_screening">
							<span class="help is-danger" v-show="errors.has('date_of_screening')">
  		        	Date of screening is required
  		        </span>
						</div>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<table name="" class="table table-bordered">
					<thead>
						<tr>
							<th>Sr.No.</th>
							<th>Questions</th>
							<th>Remarks</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<th>Has there been any unintentional weight loss in the last three months?</th>
							<td>
								<select class="form-control" name="weight_loss" v-model="NutritionalScreeningForm.weight_loss" v-validate="'required'" id="weight_loss">
									<option value="3">>6 Kgs</option>
									<option value="2">3-6 Kgs</option>
									<option value="1">0-3 Kgs (Don't Know)</option>
									<option value="0">No weight loss</option>
								</select>
								<span class="help is-danger" v-show="errors.has('weight_loss')">
	  		        	Weight loss is required
	  		        </span>
							</td>
						</tr>
						<tr>
							<th>2</th>
							<th>Does the patient appear emaciated?</th>
							<td>
								<select class="form-control" name="emaciated" v-model="NutritionalScreeningForm.emaciated" v-validate="'required'" id="emaciated">
									<option value="2">Yes</option>
									<option value="1">No</option>
								</select>
								<span class="help is-danger" v-show="errors.has('emaciated')">
	  		        	Emaciated is required
	  		        </span>
							</td>
						</tr>
						<tr>
							<th>3</th>
							<th>Is the patient mentally well oriented?</th>
							<td>
								<select class="form-control" name="mental_orientation" v-model="NutritionalScreeningForm.mental_orientation" v-validate="'required'" id="mental_orientation">
									<option value="2">Yes</option>
									<option value="1">No</option>
								</select>
								<span class="help is-danger" v-show="errors.has('mental_orientation')">
	  		        	Mental orientation is required
	  		        </span>
							</td>
						</tr>
						<tr>
							<th>4</th>
							<th>Patient mode of feeding :</th>
							<td>
								<select class="form-control" name="mode_of_feeding" v-model="NutritionalScreeningForm.mode_of_feeding" v-validate="'required'" id="mode_of_feeding">
									<option value="3">Parental Nutritional / NBM</option>
									<option value="2">External Tube Feeding</option>
									<option value="1">Oral Feeding - Liquids</option>
									<option value="0">Diet</option>
								</select>
								<span class="help is-danger" v-show="errors.has('mode_of_feeding')">
	  		        	Mode of feeding is required
	  		        </span>
							</td>
						</tr>
						<tr>
							<th>5</th>
							<th>Foods to be avoided :</th>
							<td>
								<input type="text" class="form-control radio-inline" name="food_to_be_avoided" v-model="NutritionalScreeningForm.food_to_be_avoided" v-validate="'required'" placeholder="Sour / Spicy / Milk / Others">
								<span class="help is-danger" v-show="errors.has('food_to_be_avoided')">
	  		        	Food to be avoided is required
	  		        </span>
							</td>
						</tr>
						<tr>
							<th colspan="2">Score</th>
							<th></th>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row form-group">
				<div class="col">
					<div class="row">
						<div class="col">
							<label class="control-label" for="nursing_care_plan">Nursing Care Plan:</label>
						</div>
						<div class="col">
							<textarea class="form-control" name="nursing_care_plan" v-model="NutritionalScreeningForm.nursing_care_plan" v-validate="'required'" id="nursing_care_plan" rows="3"></textarea>
							<span class="help is-danger" v-show="errors.has('nursing_care_plan')">
  		        	Nursing care plan is required
  		        </span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<div class="col">
							<label class="control-label" for="assessment_done_by">Assessment done by:</label>
						</div>
						<div class="col">
							<input type="text" class="form-control" name="assessment_done_by" v-model="NutritionalScreeningForm.assessment_done_by" v-validate="'required'" id="assessment_done_by">
							<span class="help is-danger" v-show="errors.has('assessment_done_by')">
  		        	Assessment done by is required
  		        </span>
						</div>
					</div>
				</div>
			</div>
			<div class="row form-group">
			  <div class="col">
			    <div class="row">
			      <div class="col">
			        <label class="control-label" for="date_nursing">Date:</label>
			      </div>
			      <div class="col">
			        <input type="date" class="form-control" name="date_nursing" v-model="NutritionalScreeningForm.date_nursing" v-validate="'required'" id="date_nursing">
							<span class="help is-danger" v-show="errors.has('date_nursing')">
  		        	Date of nursing is required
  		        </span>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="row">
			      <div class="col">
			        <label class="control-label" for="time_nursing">Time:</label>
			      </div>
			      <div class="col">
			        <input type="time" class="form-control" name="time_nursing" v-model="NutritionalScreeningForm.time_nursing" v-validate="'required'" id="time_nursing">
							<span class="help is-danger" v-show="errors.has('time_nursing')">
  		        	Time of nursing is required
  		        </span>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="row form-group">
        <div class="col text-center">
          <input class="btn btn-success" type="button" @click="saveNutritionalScreeningForm()" value="Submit">
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
                'NutritionalScreeningForm' : {
									'type_of_diet':'',
									'date_of_screening':'',
									'weight_loss':'',
									'emaciated':'',
									'mental_orientation':'',
									'mode_of_feeding':'',
									'food_to_be_avoided':'',
									'nursing_care_plan':'',
									'assessment_done_by':'',
									'date_nursing':'',
									'time_nursing':'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        saveNutritionalScreeningForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   User.saveNutritionalScreeningForm(this.NutritionalScreeningForm).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Nutritional Screening Form has been saved', 'NutritionalScreeningForm', {timeOut: 5000});
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
