<template id="">
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h1>Form for Restraint Administration</h1>
				</div>
				<div class="col">
					<div class="text-right">
						DOC NO. F/IPD/43 <br>
						REV. No. 0.1 <br>
						WEF 12-05-2017
					</div>
				</div>
			</div>
		</div>

		<hr>

		<form action="" method="post">
			<div class="row form-group">
				<div class="col">
				</div>
				<div class="col">
					<textarea name="addressograph" v-model="RestraintAdministration.addressograph" v-validate="'required'" rows="3" class="form-control" placeholder="Addressograph here"></textarea>
					<span class="help is-danger" v-show="errors.has('addressograph')">
						Field is required
					</span>
				</div>
			</div>

			<div class="row">
				<h3>A. Assessment and Initiation (To be completed by Primary Nurse)</h3>
			</div>
			<div class="row form-group">
				<h4>Check behaviors that warrant use restraint</h4>
			</div>
			<div class="row form-group">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td>
								<input type="checkbox" name="assessment" v-model="RestraintAdministration.assessment" value="attempting_to_remove_tube">
							</td>
							<td>
								<label for="">Attempting to remove tubes, line or Iv’s or Dressings/Surgical Wounds</label>
							</td>
							<td>
								<input type="checkbox" name="assessment" v-model="RestraintAdministration.assessment" value="voluntary_involuntary_movements">
							</td>
							<td>
								<label for="">Voluntary or involuntary movements that may re-injure a treated condition</label>
							</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="assessment" v-model="RestraintAdministration.assessment" value="unable_to_follow_instructions">
							</td>
							<td>
								<label for="">Unable to follow directions or instructions:</label>
							</td>
							<td>
								<input type="checkbox" name="assessment" v-model="RestraintAdministration.assessment" value="other">
							</td>
							<td>
								<div class="row">
									<div class="col">
										<label for="">Other:</label>
									</div>
									<div class="col">
										<input type="text" name="assessment_other" v-model="RestraintAdministration.assessment_other" class="form-control" value="">
										</span>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<hr>

			<div class="row">
				<h3>B. Types of Restraints Used</h3>
			</div>
			<div class="row form-group">
				<h4>Family informed of need for restraints and criteria for release</h4>
			</div>
			<div class="form-group">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th class="text-center">Soft Wrist</th>
							<td>
								<select class="form-control" name="soft_wrist" v-model="RestraintAdministration.soft_wrist" v-validate="'required'">
									<option value="none">None</option>
									<option value="left">Left</option>
									<option value="right">Right</option>
									<option value="both">Both</option>
								</select>
								<span class="help is-danger" v-show="errors.has('soft_wrist')">
									Field is required
								</span>
							</td>
						</tr>
						<tr>
							<th class="text-center">Soft Ankle</th>
							<td>
								<select class="form-control" name="soft_ankle" v-model="RestraintAdministration.soft_ankle" v-validate="'required'">
									<option value="none">None</option>
									<option value="left">Left</option>
									<option value="right">Right</option>
									<option value="both">Both</option>
								</select>
								<span class="help is-danger" v-show="errors.has('soft_ankle')">
									Field is required
								</span>
							</td>
						</tr>
						<tr>
							<th class="text-center">Finger</th>
							<td>
								<select class="form-control" name="finger" v-model="RestraintAdministration.finger" v-validate="'required'">
									<option value="none">None</option>
									<option value="left">Left Hand</option>
									<option value="right">Right Hand</option>
								</select>
								<span class="help is-danger" v-show="errors.has('finger')">
									Field is required
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<hr>

			<div class="row">
				<h3>C. Information to Family </h3>
			</div>
			<div class="row form-group">
				<h4>Family informed of need for restraints and criteria for release</h4>
			</div>
			<div class="row form-group">
				<table class="table table-bordered">
					<tbody>
						<td>
							<input type="checkbox" name="information_to_family" v-model="RestraintAdministration.information_to_family" value="expressed_understanding">
						</td>
						<td>
							<label for="">Expressed Understanding</label>
						</td>
						<td>
							<input type="checkbox" name="information_to_family" v-model="RestraintAdministration.information_to_family" value="unable_to_express_understanding">
						</td>
						<td>
							<label for="">Unable to express understanding</label>
						</td>
						<td>
							<input type="checkbox" name="information_to_family" v-model="RestraintAdministration.information_to_family" value="unable_to_contact_family">
						</td>
						<td>
							<label for="">Unable to contact family: </label>
						</td>
					</tbody>
				</table>
			</div>

			<hr>

			<div class="row">
				<h3>D. Consent </h3>
			</div>
			<div class="row form-group">
				<h4>Strictly to be filled by relative</h4>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-1">
						I Mr./ Ms.
					</div>
					<div class="col-md-3">
						<input type="text" name="relative_name" v-model="RestraintAdministration.relative_name" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('relative_name')">
							Field is required
						</span>
					</div>
					<div class="col-md-8">
						of the patient have been explained about the restraint administration and fully agree that the use of restraints
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-3">
						if essential for my patient Mr./ Ms.
					</div>
					<div class="col-md-5">
						<input type="text" name="patient_name" v-model="RestraintAdministration.patient_name" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('patient_name')">
							Field is required
						</span>
					</div>
					<div class="col">

					</div>
				</div>
			</div>
			<div class="form-group">
				I have also been informed about the risks and complications related to the use of restraints by the Doctor / Nurse.
			</div>

			<hr>

			<div class="row form-group">
				<div class="col">
					<label for="">Patient's Relative Signature</label>
				</div>
				<div class="col">
					<input type="text" name="patient_relative_sig" v-model="RestraintAdministration.patient_relative_sig" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('patient_relative_sig')">
							Field is required
						</span>
				</div>
				<div class="col">
					<label for="">Relation to Patient</label>
				</div>
				<div class="col">
					<input type="text" name="relation_to_patient" v-model="RestraintAdministration.relation_to_patient" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('relation_to_patient')">
							Field is required
						</span>
				</div>
			</div>

			<div class="row form-group">
				<div class="col">
					<div class="row">
						<div class="col">
							<label for="">RMO:</label>
						</div>
						<div class="col">
							<input type="text" name="rmo" v-model="RestraintAdministration.rmo" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('rmo')">
							Field is required
						</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<div class="col">
							<label for="">Attending Consultant:</label>
						</div>
						<div class="col">
							<input type="text" name="attending_consultant" v-model="RestraintAdministration.attending_consultant" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('attending_consultant')">
							Field is required
						</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col">
					<div class="row">
						<div class="col">
							<label for="">Date:</label>
						</div>
						<div class="col">
							<input type="date" name="date" v-model="RestraintAdministration.date" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('date')">
							Field is required
						</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<div class="col">
							<label for="">Time:</label>
						</div>
						<div class="col">
							<input type="time" name="time" v-model="RestraintAdministration.time" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('time')">
							Field is required
						</span>
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="row form-group">
				<h3>Use 24:00 hour clock, eg. 2 pm should be maintained as 14:00 hrs</h3>
			</div>

			<div class="form-group">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Behaviour</th>
							<th># Intervention</th>
							<th>Remarks</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="date" name="date_00" v-model="RestraintAdministration.date_00" v-validate="'required'" class="form-control" value="">
								<span class="help is-danger" v-show="errors.has('date_00')">
									Field is required
								</span>
							</td>
							<td>
								<input type="time" name="time_00" v-model="RestraintAdministration.time_00" v-validate="'required'" class="form-control" value="">
								<span class="help is-danger" v-show="errors.has('time_00')">
									Field is required
								</span>
							</td>
							<td>
								<select class="form-control" name="behavior_00" v-model="RestraintAdministration.behavior_00" v-validate="'required'">
									<option value="agitated">1</option>
									<option value="hallucination">2</option>
									<option value="self_injurious">3</option>
									<option value="crying">4</option>
									<option value="confused">5</option>
									<option value="shouting">6</option>
									<option value="co_operative">7</option>
									<option value="uncooperative">8</option>
									<option value="restless">9</option>
									<option value="calm">10</option>
									<option value="sleeping">11</option>
									<option value="incontinent">12</option>
									<option value="unable_to_follow_instructions">13</option>
									<option value="attempting_to_disrupt_therapies">14</option>
									<option value="other1">15</option>
									<option value="other2">16</option>
								</select>
								<span class="help is-danger" v-show="errors.has('behavior_00')">
									Field is required
								</span>
							</td>
							<td>
								<select class="form-control" name="intervention_00" v-model="RestraintAdministration.intervention_00" v-validate="'required'">
									<option value="skin_circulation">A</option>
									<option value="nutrition">B</option>
									<option value="elimination_addressed">C</option>
									<option value="restraint_checked_for_proper_application">D</option>
									<option value="range_of_motion">E</option>
									<option value="hygiene_care">F</option>
									<option value="verbal_interaction">G</option>
									<option value="position_adjusted">H</option>
									<option value="see_progress_note">I</option>
									<option value="dr_notified">J</option>
									<option value="explanation_given_to_family">K</option>
									<option value="criteria_for_removal_discusses">L</option>
									<option value="criteria_for_removal_of_restraints_met">M</option>
									<option value="criteria_for_removal_of_restraints_not_met">N</option>
									<option value="other">O</option>
								</select>
								<span class="help is-danger" v-show="errors.has('intervention_00')">
									Field is required
								</span>
							</td>
							<td>
								<input type="text" name="remark_00" v-model="RestraintAdministration.remark_00" v-validate="'required'" class="form-control" value="">
								<span class="help is-danger" v-show="errors.has('remark_00')">
									Field is required
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="row form-group">
				<h3>G. Patient Behavior / Condition / Response (To be documented every 2 hours) </h3>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<div class="row">
							<div class="col">
								1 = Agitated
							</div>
							<div class="col">
								2 = Hallucination
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col">
								3 = Self injurious
							</div>
							<div class="col">
								4 = Crying
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="row">
							<div class="col">
								5 = Confused
							</div>
							<div class="col">
								6 = Shouting
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col">
								7 = Co operative
							</div>
							<div class="col">
								8 = Uncooperative
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="row">
							<div class="col">
								9 = Restless
							</div>
							<div class="col">
								10 = Calm
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col">
								11 = Sleeping
							</div>
							<div class="col">
								12 = Incontinent
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="row">
							<div class="col">
								13 = Unable to follow instructions
							</div>
							<div class="col">
								14 = Attempting to disrupt therapies
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col">
								<div class="row">
									<div class="col">
										15 = Other
									</div>
									<div class="col">
										<input type="text" name="other1" v-model="RestraintAdministration.other1" v-validate="'required'" class="form-control" value="">
										<span class="help is-danger" v-show="errors.has('other1')">
											Field is required
										</span>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="row">
									<div class="col">
										16 = Other
									</div>
									<div class="col">
										<input type="text" name="other2" v-model="RestraintAdministration.other2" v-validate="'required'" class="form-control" value="">
										<span class="help is-danger" v-show="errors.has('other2')">
											Field is required
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<h3>H. Staff Interventions (every 2 hours, including assessment of need to continue restraints & check for proper application) </h3>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						A = Skin /Circulation
					</div>
					<div class="col">
						B = Nutrition / hydration addressed
					</div>
					<div class="col">
						C = Elimination addressed
					</div>
				</div>
				<div class="row">
					<div class="col">
						D = Restraint Checked for Proper application
					</div>
					<div class="col">
						E = Range of motion
					</div>
					<div class="col">
						F = Hygiene care
					</div>
				</div>
				<div class="row">
					<div class="col">
						G = Verbal interaction
					</div>
					<div class="col">
						H = Position adjusted
					</div>
					<div class="col">
						I = See progress note
					</div>
				</div>
				<div class="row">
					<div class="col">
						J = Dr. notified
					</div>
					<div class="col">
						K = Explanation given to patient / family
					</div>
					<div class="col">
						L = Criteria for removal discusses
					</div>
				</div>
				<div class="row">
					<div class="col">
						M = Criteria for removal of restraints (in consultant order) met
					</div>
					<div class="col">
						N = Criteria for removal of restraints ( in consultant order) not met
					</div>
					<div class="col">
						<div class="row">
							<div class="col">
								O = Other
							</div>
							<div class="col">
								<input type="text" name="other_intervention" v-model="RestraintAdministration.other_intervention" v-validate="'required'" class="form-control" value="">
								<span class="help is-danger" v-show="errors.has('other_intervention')">
									Field is required
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="row form-group">
				<h3>I. Complication due to Restraints </h3>
			</div>
			<div class="form-group">
				<select class="form-control" name="complications" v-model="RestraintAdministration.complications" v-validate="'required'">
					<option value="none">None</option>
					<option value="pressure_sore">Pressure sore</option>
					<option value="redness">Redness</option>
					<option value="injury">Injury</option>
					<option value="increased_body_temperature">Increased body temperature</option>
					<option value="swelling">Swelling</option>
					<option value="other">Other</option>
				</select>
				<span class="help is-danger" v-show="errors.has('complications')">
					Field is required
				</span>
			</div>

			<div class="row form-group">
				<h3>J. Renewal / Continuation of Restraint Order (by the attending consultant) </h3>
			</div>
			<div class="form-group">
				<div class="form-group">
					I have seen and assessed the patient and determined that the prior order for restraint is still necessary.
				</div>
				<div class="form-group">
					(if any element of the initial order has changed, initiate a new order form)
				</div>
				<div class="form-group">
					(Behavior necessitating continuation of restraints: (mention specific behavior relating to safety risk & or disruption of medical therapies)
				</div>
			</div>

			<div class="row form-group">
				<div class="col">
					<label for="">Consultant Signature</label>
				</div>
				<div class="col">
					<input type="text" name="consultant_signature" v-model="RestraintAdministration.consultant_signature" v-validate="'required'" class="form-control" value="">
					<span class="help is-danger" v-show="errors.has('consultant_signature')">
						Field is required
					</span>
				</div>

				<div class="col">
					<label for="">Patient's Signature</label>
				</div>
				<div class="col">
					<input type="text" name="patient_signature" v-model="RestraintAdministration.patient_signature" v-validate="'required'" class="form-control" value="">
					<span class="help is-danger" v-show="errors.has('patient_signature')">
						Field is required
					</span>
				</div>

				<div class="col">
					<label for="">Relative Signature</label>
				</div>
				<div class="col">
					<input type="text" name="relative_signature" v-model="RestraintAdministration.relative_signature" v-validate="'required'" class="form-control" value="">
					<span class="help is-danger" v-show="errors.has('relative_signature')">
						Field is required
					</span>
				</div>
			</div>

			<hr>

			<div class="row form-group">
				<h3>K. Discontinuation of Restraints </h3>
			</div>
			<div class="form-group">
				<div class="row form-group">
					<div class="col">
						<div class="row">
							<div class="col">
								<label for="">Discontinuation Date</label>
							</div>
							<div class="col">
								<input type="date" name="discontinuation_date" v-model="RestraintAdministration.discontinuation_date" v-validate="'required'" class="form-control" value="">
								<span class="help is-danger" v-show="errors.has('discontinuation_date')">
									Field is required
								</span>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col">
								<label for="">Discontinuation Time</label>
							</div>
							<div class="col">
								<input type="time" name="discontinuation_time" v-model="RestraintAdministration.discontinuation_time" v-validate="'required'" class="form-control" value="">
								<span class="help is-danger" v-show="errors.has('discontinuation_time')">
									Field is required
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col">
						<label for="">Plan of treatment modified</label>
					</div>
					<div class="col">
						<select class="form-control" name="plan_of_treatment_modified" v-model="RestraintAdministration.plan_of_treatment_modified" v-validate="'required'">
							<option value="yes">Yes</option>
							<option value="yes">No</option>
						</select>
						<span class="help is-danger" v-show="errors.has('plan_of_treatment_modified')">
							Field is required
						</span>
					</div>
				</div>
				<div class="row form-group">
					<div class="col">
						<label for="">Remarks:</label>
					</div>
					<div class="col">
						<input type="text" name="remarks" v-model="RestraintAdministration.remarks" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('remarks')">
							Field is required
						</span>
					</div>
				</div>
				<div class="row form-group">
				<div class="col">
					<div class="row">
						<div class="col">
							<label for="">Attending Consultant Name</label>
						</div>
						<div class="col">
							<input type="text" name="attending_consultant_name" v-model="RestraintAdministration.attending_consultant_name" v-validate="'required'" class="form-control" value="">
							<span class="help is-danger" v-show="errors.has('attending_consultant_name')">
								Field is required
							</span>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<div class="col">
							<label for="">PN Name</label>
						</div>
						<div class="col">
							<input type="text" name="pn_name" v-model="RestraintAdministration.pn_name" v-validate="'required'" class="form-control" value="">
							<span class="help is-danger" v-show="errors.has('pn_name')">
								Field is required
							</span>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="row form-group">
				<div class="col text-center">
					<input class="form-group btn btn-success" type="button" value="Submit" @click="saveRestraintAdministration()">
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
                'RestraintAdministration' : {
									'addressograph':'',
									'assessment':'',
									'assessment_other':'',
									'soft_wrist':'',
									'soft_ankle':'',
									'finger':'',
									'information_to_family':'',
									'relative_name':'',
									'patient_name':'',
									'patient_relative_sig':'',
									'relation_to_patient':'',
									'rmo':'',
									'attending_consultant':'',
									'date':'',
									'time':'',
									'date_00':'',
									'time_00':'',
									'behavior_00':'',
									'intervention_00':'',
									'remark_00':'',
									'other1':'',
									'other2':'',
									'other_intervention':'',
									'complications':'',
									'consultant_signature':'',
									'patient_signature':'',
									'relative_signature':'',
									'discontinuation_date':'',
									'discontinuation_time':'',
									'plan_of_treatment_modified':'',
									'remarks':'',
									'attending_consultant_name':'',
									'pn_name':'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        saveRestraintAdministration() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   User.saveRestraintAdministration(this.RestraintAdministration).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Physiotherapy Assessment has been saved', 'RestraintAdministration', {timeOut: 5000});
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
