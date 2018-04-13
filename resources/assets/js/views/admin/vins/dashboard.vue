<template>

  <div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-8">
				<h1>List Of Forms</h1>
			</div>
			<div class="col-md-4">
				<div class="text-right">
					<input  type="button" class="btn btn-default" name="newUser" value="New User"
					@click="GetSelectComponent('NewUser')" />
				</div>
			</div>

		</div>
	</div>

  <div class="row mt-20">
		<h3>New Forms</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('vascularExamination')">Vascular Examination</a>
		</div>
    <div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('neuroExamination')">Neuro Examination</a>
		</div>
    <div class="col-md-4 top-buffer">
  		<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('opd_form')">OPD Form</a>
  	</div>
	</div>



  <hr />

	<div class="row mt-20">
		<h3>Emergency Patient</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('doctorsInitialAssessment')">Doctors Initial Assessment</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('er_observation')">ER Observation</a>
		</div>
		<div class="col-md-4 top-buffer">
      <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('nabhReport')">NABH Report</a>
		</div>
	</div>
	<hr />
	<div class="row mt-20">
		<h3>Pre-Admission Forms</h3>
	</div>
  <!-- <div class="col-md-4 top-buffer">
  <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('PatientAdmissionSheet')" >Patient Admission Sheet </a>
</div> -->

	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('patients_detail_form')">Patients Details Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('information_form')" > Information Form </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('PatientValuableForm')"> Patient Valuables Form </a>
		</div>
	</div>

	<hr />

	<div class="row mt-20">
		<h3>Within 24 Hours</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('counsellingForm')">Counselling Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('completeNursingAssessment')">Complete Nursing Assessment</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('NutritionalAssessmentForm')">Nutritional Assessment Form</a>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('plan_of_care')"> Plan Of Care </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('history_form')"> History Form </a>
		</div>
	</div>

	<hr />

	<div class="row mt-20">
		<h3>Operation / Surgery</h3>
	</div>

  <div name="operation / surgery">
    <!-- <div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('cprFormat')" >CPR Format</a>
		</div> -->
    <!-- <div class="col-md-4 top-buffer">
      <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('intraoperativeEventManagement')" > Intra Operative Event & Management</a>
    </div> -->
<!-- <div class="col-md-4 top-buffer">
      <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('post_anaesthesia_evaluation')"> Post Anesthesia Evaluation </a>
    </div> -->
<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('investigation_sheet')" > Investigation Sheet </a>
			</div> -->
<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('pre_OT_checklist')"> Pre-OT Checklist </a>
			</div> -->
  </div>

  	<div class="row">
  		<div class="col-md-4 top-buffer">
  			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('LabSheet')">Lab Sheet</a>
  		</div>
      <div class="col-md-4 top-buffer">
  			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('codeBlueEvaluationForm')">Code Blue Evaluation Form</a>
  		</div>
  		<div class="col-md-4 top-buffer">
  			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('OperativeDetailSheet')"> Operative Detail Sheet </a>
  		</div>
  	</div>

		<div class="row">
			<div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;"  @click="GetSelectComponent('surgicalSafetyChecklist')" > Surgical Safety Checklist </a>
			</div>
			<div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('pre_anaesthesia_checkup_form')"> Pre-Anaesthesia Form </a>
			</div>
      <div class="col-md-4 top-buffer">
  			<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('briefOperativeNote')" >Brief Operative Note</a>
  		</div>

		</div>

		<hr />

		<div class="row mt-20">
			<h3>Daily Ward / General Forms</h3>
		</div>
    <div name="Daily ward / general forms">
      <!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('infusionTherapyChart')" >Infusion Therapy Chart</a>
			</div> -->
			<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('dailyDietForm')">Daily Diet Form</a>
			</div> -->
<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('transfer_checklist_for_nurses')" >Transfer Checklist For Nurses</a>
			</div> -->
<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('NursingDutyOver')" >Nursing Duty Over</a>
			</div> -->
			<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('glass_gow')" >Glassgow Form</a>
			</div> -->
			<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('ventilator_charge_sheet')">Ventilator Charge Sheet</a>
			</div> -->
<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('adverseDrugReaction')" > Adverse Drug Reaction </a>
			</div> -->
<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('RestraintAdministration')"> Restraint Administration </a>
			</div> -->
			<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" > JSON Monitoring for Moderate Sedation </a>
			</div> -->
      <!-- <div class="col-md-4 top-buffer">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('transfusion_reaction_form')" > Transfusion Reaction </a>
      </div> -->
    </div>

		<div class="row">
			<!--div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('mar_flowsheet')" > JSON MAR Flow Sheet</a>
			</div-->
      <div class="col-md-4 top-buffer">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('bloodSugarMonitoringChart')" > Blood-Sugar Monitoring Chart </a>
      </div>
      <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('doctorsDailyNotes')" >Doctor's Daily Notes</a>
			</div>
			<div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('ward_procedure_record')" >Ward Procedure Record</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('bloodTransfusionDetails')" >Blood Transfusion Form</a>
			</div>
			<div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('doctors_handover')" >Doctors Handover</a>
			</div>
			<div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('PatientDietRecord')">Patient Diet Record</a>
			</div>
		</div>
		<div class="row">

		</div>


		<hr />

		<div class="row mt-20">
			<h3>Discharge</h3>
		</div>

    <div name="discharge">
      <!-- <div class="col-md-4 top-buffer">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('PhysiotherapyAssessment')"> Physiotherapy Assessment </a>
      </div> -->
      <!-- <div class="col-md-4 top-buffer">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;"  @click="GetSelectComponent('dischargeGatepass')"> Discharge Gatepass </a>
      </div> -->
    </div>

		<div class="row">
      <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('dischargeSummary')" > Discharge Summary </a>
			</div>
      <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;"  @click = "GetSelectComponent('provisional_discharge_summary')"> Provisional Discharge Summary </a>
			</div>
		</div>


		<hr />

		<div class="row mt-20">
			<h3>Other / Unassigned</h3>
		</div>
    <div name="unassigned">
      <!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('radiology_requisition')" >Radiology Requisition Form</a>
			</div> -->
			<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" >JSON Peripheral Line Bundle Checklist</a>
			</div> -->
<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click = "GetSelectComponent('pre_angiography_angioplasty_checklist')">Pre-Angiography Angioplasty Checklist</a>
			</div> -->
<!-- <div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" > JSON Folley's Cathether Checklist </a>
			</div> -->
<!-- <div class="col-md-4 top-buffer top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" > JSON WAP Audit Checklist </a>
			</div> -->
<!-- <div class="col-md-4 top-buffer top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('NurseProgressNotes')" > Nurse's Progress Notes </a>
			</div> -->
			<!-- <div class="col-md-4 top-buffer top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('drug_requisition')" > Drug Requisition </a>
			</div> -->
      <!-- <div class="col-md-4 top-buffer top-buffer">
      <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('gate_pass')"> Gate Pass </a>
    </div> -->
    <!-- <div class="col-md-4 top-buffer">
      <a class="btn btn-default btn-block text-center" style="white-space: normal;" >JSON Checklist</a>
    </div> -->
    </div>


		<div class="row">
			<div class="col-md-4 top-buffer">
				<a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('cultureBiopsyForm')">Culture Biopsy Form</a>
			</div>
      <div class="col-md-4 top-buffer">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('centralLineBundleChecklist')" > Central Line Bundle Checklist </a>
      </div>
      <div class="col-md-4 top-buffer">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" @click="GetSelectComponent('appointmentBook')" >Appointment Book</a>
      </div>

		</div>

	<hr />
</div>
</template>

<script >
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear()
            }
        },
        mounted() {
        	this.$store.dispatch('SetIpdId',0);

    },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    }
		  },
    }
</script>
