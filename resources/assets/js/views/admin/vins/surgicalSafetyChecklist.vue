<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Surgical Safety Checklist</h1>
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

    <div class="row">
      <h3>Before Induction of Anesthesia</h3>
    </div>

		<div class="table-responsive ">
			<table class="table table-bordered table-stripe">
				<tbody>
					<tr>
						<td colspan="6">Patient Has Confirmed : </td>
					</tr>
					<tr>
						<td><input class="form-control" type="checkbox" name="identity" v-model="surgicalSafetyChecklistData.identity" value="yes"/></td>
						<th>Identity</th>
						<td><input class="form-control" type="checkbox" name="site" v-model="surgicalSafetyChecklistData.site" value="yes"/></td>
						<th>Site</th>
						<td><input class="form-control" type="checkbox" name="proced" v-model="surgicalSafetyChecklistData.proced" value="yes"/></td>
						<th>Procedure</th>
					</tr>
					<tr>
						<td><input class="form-control" type="checkbox" name="consent" v-model="surgicalSafetyChecklistData.consent" value="yes"/></td>
						<th><label>Consent</label></th>
						<td><input class="form-control" type="checkbox" name="site_marked" v-model="surgicalSafetyChecklistData.site_marked" value="yes"/></td>
						<th><label>Site marked </label></th>
						<td><input class="form-control" type="checkbox" name="anesthesia_check" v-model="surgicalSafetyChecklistData.anesthesia_check" value="yes"/></td>
						<th><label>Anesthesia Safety Check Complete</label></th>
					</tr>
					<tr>
						<td><input class="form-control" type="checkbox" name="all_monitors_functioning" v-model="surgicalSafetyChecklistData.all_monitors_functioning" value="yes"/></td>
						<th><label>All Monitors on Patient & Functioning</label></th>
						<td><input class="form-control" type="checkbox" name="allergy" v-model="surgicalSafetyChecklistData.allergy" value="yes"/></td>
						<th><label>Does Patient Have a known allergy</label></th>
						<td><input class="form-control" type="checkbox" name="airway_risk" v-model="surgicalSafetyChecklistData.airway_risk" value="yes"/></td>
						<th><label>Difficult Airway / Aspiration risk</label></th>
					</tr>
					<tr>
						<th colspan="3"><label>Risk of Blood Loss : </label></th>
						<td colspan="3">
							<select class="form-control" name="risk_blood_loss" v-model="surgicalSafetyChecklistData.risk_blood_loss">
		            <option value="7kg_in_children">7ML/kg in children</option>
		            <option value="adequate_intervenous_access">Yes, and adequate interevenous access and fluids planned</option>
		            <option value="component_therapy_need_anticipated">Blood component Therapy Need anticipated</option>
		            <option value="components_are_ready">Yes and components are ready/available</option>
		            <option value="no">No.</option>
		          </select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

    <div class="row">
      <h4>Before Skin incision</h4>
    </div>

		<div class="row form-group">
			<div class="table table-bordered">
				<tbody>
					<tr>
						<td><input class="form-control" type="checkbox" name="team_member_intro" v-model="surgicalSafetyChecklistData.team_member_intro" value="yes"/></td>
						<th><label>Confirm all team members have introduced themselves by name and role</label></th>
						<td><input class="form-control" type="checkbox" name="surgeon_nurse_confirm" v-model="surgicalSafetyChecklistData.surgeon_nurse_confirm" value="yes"/></td>
						<th><label>Surgeon, Anesthesia professional and Nurse verbally confirm</label></th>
					</tr>
				</tbody>
			</div>
		</div>

    <div class="row">
      <h4>Anticipated Critical Events : </h4>
    </div>

		<div class="row form-group">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td><input class="form-control" type="checkbox" name="surgeon_reviews" v-model="surgicalSafetyChecklistData.surgeon_reviews" value="yes"/></td>
						<th><label>Surgeon review : Are there critical or unexpected steps, Operative duration, anticipated blood loss ?</label></th>
						<td><input class="form-control" type="checkbox" name="anesthesia_reviews" v-model="surgicalSafetyChecklistData.anesthesia_reviews" value="yes"/></td>
						<th><label>Anesthesia team reviews : Are there any patient specific concerns ? </label></th>
						<td><input class="form-control" type="checkbox" name="nursing_reviews" v-model="surgicalSafetyChecklistData.nursing_reviews" value="yes"/></td>
						<th><label>Nursing Team Reviews : has sterility( including indicator results) been confirmed? are there equipment or any concerns? </label></th>
					</tr>
					<tr>
						<td><input class="form-control" type="checkbox" name="antibiotic_given" v-model="surgicalSafetyChecklistData.antibiotic_given" value="yes"/></td>
						<th><label>Has Antibiotic Prophylaxis been given withing last 60 minutes</label></th>
						<td><input class="form-control" type="checkbox" name="essential_imaging" v-model="surgicalSafetyChecklistData.essential_imaging" value="yes"/></td>
						<th><label>Is essential Imaging displayed</label></th>
						<td></td>
						<th></th>
					</tr>
				</tbody>
			</table>
		</div>

    <div class="row">
      <h4>After Patients Positioning : </h4>
    </div>

		<div class="row form-group">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td><input class="form-control" type="checkbox" name="pressure_points_padded" v-model="surgicalSafetyChecklistData.pressure_points_padded" value="yes"/></td>
						<th><label>Pressure points padded / checked </label></th>
						<td><input class="form-control" type="checkbox" name="confirm_patient_position" v-model="surgicalSafetyChecklistData.confirm_patient_position" value="yes"/></td>
						<th><label>Surgeon Confirms Patient Position</label></th>
						<td><input class="form-control" type="checkbox" name="anesthetist_airway_lines" v-model="surgicalSafetyChecklistData.anesthetist_airway_lines" value="yes"/></td>
						<th><label>Anesthetist Confirms Airway / lines</label></th>
					</tr>
					<tr>
						<td><input class="form-control" type="checkbox" name="parts_prepped" v-model="surgicalSafetyChecklistData.parts_prepped" value="yes"/></td>
						<th><label>Parts Prepped / Draped </label></th>
						<td><input class="form-control" type="checkbox" name="cautery" v-model="surgicalSafetyChecklistData.cautery" value="yes"/></td>
						<th><label>Cautery / Suction Connected / Functioning</label></th>
						<td><input class="form-control" type="checkbox" name="patient_electrode_connected" v-model="surgicalSafetyChecklistData.patient_electrode_connected" value="yes"/></td>
						<th><label>Patient Electrode Connected / Functioning </label></th>
					</tr>
					<tr>
						<td><input class="form-control" type="checkbox" name="instruments_checked" v-model="surgicalSafetyChecklistData.instruments_checked" value="yes"/></td>
						<th><label>Light / Trolleys / Instruments Checked </label></th>
						<td></td>
						<th></th>
						<td></td>
						<th></th>
					</tr>
				</tbody>
			</table>
		</div>

    <div class="row">
      <h3>Before Patient Leaves operating room</h3>
    </div>

		<div class="row form-group">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td><input class="form-control" type="checkbox" name="procedure_name_recorded" v-model="surgicalSafetyChecklistData.procedure_name_recorded" value="yes"/></td>
						<th><label>Name of procedure recorded ? </label></th>
						<td><input class="form-control" type="checkbox" name="instrument_count" v-model="surgicalSafetyChecklistData.instrument_count" value="yes"/></td>
						<th><label>Instrument Sponge and needle counts are correct : </label></th>
						<td><input class="form-control" type="checkbox" name="specimen_labelled" v-model="surgicalSafetyChecklistData.specimen_labelled" value="yes"/></td>
						<th><label>How the specimen is labeled : </label></th>
					</tr>
					<tr>
						<td><input class="form-control" type="checkbox" name="equipment_problems" v-model="surgicalSafetyChecklistData.equipment_problems" value="yes"/></td>
						<th><label>Whether there are any equipment problems </label></th>
						<td><input class="form-control" type="checkbox" name="surgeon_review_key_concepts" v-model="surgicalSafetyChecklistData.surgeon_review_key_concepts" value="yes"/></td>
						<th><label>Surgeon, Anestheisa Professional and Nurse Review the Key concerns for Recovery and management of patient</label></th>
						<td><input class="form-control" type="checkbox" name="anesthetist_confirm" v-model="surgicalSafetyChecklistData.anesthetist_confirm" value="yes"/></td>
						<th><label>Anesthetist Confirm : immediate Post Operation clinical Assessment</label></th>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="row form-group">
			<div class="col">
				<label>Surgeon Name : </label>
			</div>
			<div class="col">
				<input class="form-control" type="text" name="surgeon_name" v-model="surgicalSafetyChecklistData.surgeon_name" v-validate="'required'" value="yes"/>
				<span class="help is-danger" v-show="errors.has('surgeon_name')">
					Field is required
				</span>
			</div>
			<div class="col">
				<label>Anesthetist Name : </label>
			</div>
			<div class="col">
				<input class="form-control" type="text" name="anesthetist_name" v-model="surgicalSafetyChecklistData.anesthetist_name" v-validate="'required'" value="yes"/>
				<span class="help is-danger" v-show="errors.has('anesthetist_name')">
					Field is required
				</span>
			</div>
		</div>

		<div class="row form-group">
			<div class="col text-center">
				<button class="btn btn-success" type="button" @click="saveSurgicalSafetyChecklist()">Submit</button>
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
                'surgicalSafetyChecklistData' : {
									'identity' : '',
									'site' : '',
									'procedure' : '',
									'consent' : '',
									'site_marked' : '',
									'anesthesia_check' : '',
									'all_monitors_functioning' : '',
									'allergy' : '',
									'airway_risk' : '',
									'risk_blood_loss' : '',
									'team_member_intro' : '',
									'surgeon_nurse_confirm' : '',
									'surgeon_reviews' : '',
									'anesthesia_reviews' : '',
									'nursing_reviews' : '',
									'antibiotic_given' : '',
									'essential_imaging' : '',
									'pressure_points_padded' : '',
									'confirm_patient_position' : '',
									'anesthetist_airway_lines' : '',
									'parts_prepped' : '',
									'cautery' : '',
									'patient_electrode_connected' : '',
									'instruments_checked' : '',
									'procedure_name_recorded' : '',
									'instrument_count' : '',
									'specimen_labelled' : '',
									'equipment_problems' : '',
									'surgeon_review_key_concepts' : '',
									'anesthetist_confirm' : '',
									'surgeon_name' : '',
									'anesthetist_name' : '',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveSurgicalSafetyChecklist() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveSurgicalSafetyChecklist(this.surgicalSafetyChecklistData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Surgical Safety Checklist has been saved', 'Surgical Safety Checklist', {timeOut: 5000});
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
