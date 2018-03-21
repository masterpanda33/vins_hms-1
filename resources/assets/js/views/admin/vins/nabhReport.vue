<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<h1 class="text-center">National Accreditation Board For Hospitals and Health Care Providers</h1>
		</div>
	</div>
  <form method="POST" name="frmReport" id="frmReport" >

	  <div class="row">
			<h3>Quarterly Mandatory Data Information Sheet</h3>
		</div>

		<div class="row form-group">
			<div class="table-responsive">
				<table class="table table-bordered table-striped ">
					<tbody>
						<tr>
							<th colspan="2">Data Period</th>
						</tr>
						<tr>
							<th width="50%">Start Date :</th>
							<td width="50%"><input class="form-control ls-datepicker" type="date" name="start_date" v-model="report.start_date" v-validate="'required'"  />
							<span class="help is-danger" v-show="errors.has('start_date')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>End Date : </th>
							<td class="text-center"><input class="form-control" type="date" name="end_date" v-model="report.end_date" v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('end_date')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th class="text-center">General Information</th>
							<th class="text-center">Data Filled</th>
						</tr>
						<tr>
							<th>Name of the Hospital</th>
							<td><input class="form-control" type="text" name="name_hospital" v-model="report.name_hospital"  v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('name_hospital')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Total number of hospital beds</th>
							<td><input class="form-control" type="text" name="total_beds" v-model="report.total_beds"  v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('total_beds')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Total number of ICU beds</th>
							<td><input class="form-control" type="text" name="total_icu_beds" v-model="report.total_icu_beds"  v-validate="'required'"  />
							<span class="help is-danger" v-show="errors.has('total_icu_beds')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Total number of non-ICU beds</th>
							<td><input class="form-control" type="text" name="total_non_icu_beds" v-model="report.total_non_icu_beds"  v-validate="'required'" /><span class="help is-danger" v-show="errors.has('total_non_icu_beds')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average number of Doctors on hospital rolls at any point of time</th>
							<td><input class="form-control" type="text" name="avg_doctors" v-model="report.avg_doctors"  v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('avg_doctors')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average number of Nurses on hospital rolls at any point of time</th>
							<td><input class="form-control" type="text" name="avg_nurses" v-model="report.avg_nurses"  v-validate="'required'" /><span class="help is-danger" v-show="errors.has('avg_nurses')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Total number of operation theatre tables</th>
							<td><input class="form-control" type="text" name="total_ot" v-model="report.total_ot"  v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('total_ot')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average number of admissions/day</th>
							<td><input class="form-control" type="text" name="avg_admissions_per_day" v-model="report.avg_admissions_per_day" v-validate="'required'"  />
							<span class="help is-danger" v-show="errors.has('avg_admissions_per_day')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average number of patients visiting OPD/day</th>
							<td><input class="form-control" type="text" name="avg_patients_visiting_opd" v-model="report.avg_patients_visiting_opd"  v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('avg_patients_visiting_opd')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average number of patients visiting Emergency/day</th>
							<td><input class="form-control" type="text" name="avg_patients_visiting_emergency" v-model="report.avg_patients_visiting_emergency"  v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('avg_patients_visiting_emergency')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average number of elective surgeries/day</th>
							<td><input class="form-control" type="text" name="avg_surgeries" v-model="report.avg_surgeries"  v-validate="'required'" /><span class="help is-danger" v-show="errors.has('avg_surgeries')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average number of emergency surgeries/day</th>
							<td><input class="form-control" type="text" name="avg_emergency_surgeries" v-model="report.avg_emergency_surgeries"  v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('avg_emergency_surgeries')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average number of day care surgeries/day</th>
							<td><input class="form-control" type="text" name="avg_day_care_surgeries" v-model="report.avg_day_care_surgeries"  v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('avg_day_care_surgeries')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average units of water consumed/month</th>
							<td><input class="form-control" type="text" name="avg_units_water" v-model="report.avg_units_water"  v-validate="'required'"  />
							<span class="help is-danger" v-show="errors.has('avg_units_water')">
		                	Field is required
		                </span></td>
						</tr>
						<tr>
							<th>Average units of electricity consumed/month</th>
							<td><input class="form-control" type="text" name="avg_electricity" v-model="report.avg_electricity"  v-validate="'required'" />
							<span class="help is-danger" v-show="errors.has('avg_electricity')">
		                	Field is required
		                </span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
<!--  -->
		<p hidden>
			{{report.incidence_medication_error = (Number(report.total_medication_error) / Number(report.total_inpatient_medicationerror))* 100}}
			{{report.transfusion_reaction = (Number(report.units_blood_transfusion_reaction) / Number(report.total_units_issued))* 100}}
			{{report.cauti = (Number(report.uninary_catheterised) / Number(report.uninary_catheter_days))* 1000}}
			{{report.vap_rates = (Number(report.total_episodes_vap) / Number(report.total_ventilator_days))* 1000}}
			{{report.catheter_related_infection = (Number(report.total_crbsi) / Number(report.total_central_line_days))* 1000}}
			{{report.surgical_site_infection = (Number(report.total_ssi) / Number(report.total_surgeries))* 100}}
			{{report.fall_rate = (Number(report.total_fall_patients) / Number(report.total_inpatient_fall))* 100}}
			{{report.bed_sore = (Number(report.total_bed_sores) / Number(report.total_inpatient_bedsore))* 100}}
			{{report.bed_occupancy_rate = (Number(report.total_patient_days_month) / Number(report.available_bed_days))* 100}}
			{{report.total_needle_injury = (Number(report.reported_needle_injury) / Number(report.total_inpatient_needle))* 100}}
			{{report.avg_stay = (Number(report.total_inpatient_avgStay) / Number(report.total_spearations))}}
		</p>

		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr style="border: 3px solid #ddd !important;">
						<th>Indicator Name</th>
						<th>Data Description</th>
						<th>Tracability to NABH Standards</th>
						<th>Data Field</th>
						<th>Calculated Values</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th colspan="5">Percentage of Medication Errors</th>
					</tr>
					<tr>
						<td>Incidence of Medication Errors</td>
						<td>Total No. Of Medication Errors</td>
						<td>CQI 3 (c)</td>
						<td><input class="form-control" type="text" name="total_medication_error" v-model="report.total_medication_error" value=""  v-validate="'required'" /></td>
						<td><input class="form-control" type="text" name="incidence_medication_error" v-model="report.incidence_medication_error" value="" readonly /></td>
					</tr>

					<tr>
						<td></td>
						<td>Number of In Patient Days</td>
						<td>CQI 3 (c)</td>
						<td><input class="form-control" type="text" name="total_inpatient_medicationerror" v-model="report.total_inpatient_medicationerror" value=""  v-validate="'required'"  /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Percentage of Transfusion Reactions</th>
					</tr>
					<tr>
						<td>Transfusion Reaction (Percentage)</td>
						<td>Units of blood transfusion reaction</td>
						<td>COP 5(g),CQI (3f)</td>
						<td><input class="form-control" type="text" name="units_blood_transfusion_reaction" v-model="report.units_blood_transfusion_reaction" value=""  v-validate="'required'"  /></td>
						<td><input class="form-control" type="text" name="transfusion_reaction" v-model="report.transfusion_reaction" readonly /></td>

					</tr>
					<tr>
						<td></td>
						<td>Total number of units issued </td>
						<td>COP 5(g),CQI (3f)</td>
						<td><input class="form-control" type="text" name="total_units_issued" v-model="report.total_units_issued" value=""  v-validate="'required'" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Symptomatic Urinary tract infection rate (SUTI)</th>
					</tr>
					<tr>
						<td>Catheter Associated UTI (CAUTI) /1000 Catheter days </td>
						<td>Number of urinary catheterised in patients developing UTI / identified  in the hospital</td>
						<td>HIC 4(a),CQI 3 (g)</td>
						<td><input class="form-control" type="text" name="uninary_catheterised" v-model="report.uninary_catheterised" value=""  v-validate="'required'" /></td>
						<td><input class="form-control" type="text" name="cauti" v-model="report.cauti" readonly /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total number of urinary catheter days</td>
						<td>HIC 4(a),CQI 3 (g)</td>
						<td><input class="form-control" type="text" name="uninary_catheter_days" v-model="report.uninary_catheter_days" value=""  v-validate="'required'" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Ventilator associated pneumonias (VAP)</th>
					</tr>
					<tr>
						<td>VAP rates/1000 ventilator days ( Hospital, NICU, PICU)</td>
						<td>Total episodes of VAP identified in Hospital  </td>
						<td>HIC 4(b),CQI (3g)</td>
						<td><input class="form-control" type="text" name="total_episodes_vap" v-model="report.total_episodes_vap" value=""  v-validate="'required'" /></td>
						<td><input class="form-control" type="text" name="vap_rates" v-model="report.vap_rates" readonly /></td>
					</tr>
					<tr>
						<td></td>
						<td>Number of Ventilator days</td>
						<td>HIC 4(b),CQI (3g)</td>
						<td><input class="form-control" type="text" name="total_ventilator_days" v-model="report.total_ventilator_days" value=""  v-validate="'required'" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Central Line Associated Blood Stream Infection (CLABSI)</th>
					</tr>
					<tr>
						<td>Catheter related blood stream infection /1000 in patient days </td>
						<td>Total episodes of CRBSI identified</td>
						<td>HIC 4(c), CQI 3(g)</td>
						<td><input class="form-control" type="text" name="total_crbsi" v-model="report.total_crbsi" value=""  v-validate="'required'" /></td>
						<td><input class="form-control" type="text" name="catheter_related_infection" v-model="report.catheter_related_infection" readonly /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total central line days </td>
						<td>HIC 4(c), CQI 3(g)</td>
						<td><input class="form-control" type="text" name="total_central_line_days" v-model="report.total_central_line_days" value=""  v-validate="'required'" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Surgical site infection rate (SSI)</th>
					</tr>
					<tr>
						<td>Surgical Site Infection per 100 surgeries</td>
						<td>Number of episodes developing SSI during defined period</td>
						<td>HIC 4(d), CQI 3(g)</td>
						<td><input class="form-control" type="text" name="total_ssi" v-model="report.total_ssi" value=""  v-validate="'required'" /></td>
						<td><input class="form-control" type="text" name="surgical_site_infection" v-model="report.surgical_site_infection" readonly /></td>
					</tr>
					<tr>
						<td></td>
						<td>Number of surgeries during specific defined period</td>
						<td>HIC 4(d), CQI 3(g)</td>
						<td><input class="form-control" type="text" name="total_surgeries" v-model="report.total_surgeries" value=""  v-validate="'required'" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Incidence of fall </th>
					</tr>
					<tr>
						<td>Fall Rate</td>
						<td>Number of episodes of fall of in patients without injury</td>
						<td>CQI4(b)</td>
						<td><input class="form-control" type="text" name="total_fall_patients" v-model="report.total_fall_patients" value=""  v-validate="'required'" /></td>
						<td><input class="form-control" type="text" name="fall_rate" v-model="report.fall_rate" readonly /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total number of in patient days</td>
						<td>CQI4(b)</td>
						<td><input class="form-control" type="text" name="total_inpatient_fall" v-model="report.total_inpatient_fall" value=""  v-validate="'required'"  /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Incidence of bed sores after admission</th>
					</tr>
					<tr>
						<td>Bed Sore</td>
						<td>Number of episodes of bed sore</td>
						<td>CQI 4(b)</td>
						<td><input class="form-control" type="text" name="total_bed_sores" v-model="report.total_bed_sores" value=""  v-validate="'required'"  /></td>
						<td><input class="form-control" type="text" name="bed_sore" v-model="report.bed_sore" readonly /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total number of in patient days</td>
						<td>CQI 4(b)</td>
						<td><input class="form-control" type="text" name="total_inpatient_bedsore" v-model="report.total_inpatient_bedsore" value=""  v-validate="'required'" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Bed occupancy rate</th>
					</tr>
					<tr>
						<td>Bed Occupancy Rate</td>
						<td>No. of in patient days in a given month </td>
						<td>CQI 4(C)</td>
						<td><input class="form-control" type="text" name="total_patient_days_month" v-model="report.total_patient_days_month" value=""  v-validate="'required'"  /></td>
						<td><input class="form-control" type="text" name="bed_occupancy_rate" v-model="report.bed_occupancy_rate" readonly /></td>
					</tr>
					<tr>
						<td></td>
						<td>Available Bed days</td>
						<td>CQI 4(C)</td>
						<td><input class="form-control" type="text" name="available_bed_days" v-model="report.available_bed_days" value=""  v-validate="'required'" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Average length of stay (ALOS)</th>
					</tr>
					<tr>
						<td>Average Length of Stay –  (Hospital)</td>
						<td>Total in patient days</td>
						<td>AAC 14(a),CQI 4 (c) </td>
						<td><input class="form-control" type="text" name="total_inpatient_avgStay" v-model="report.total_inpatient_avgStay" value=""  v-validate="'required'" /></td>
						<td><input class="form-control" type="text" name="avg_stay" v-model="report.avg_stay" readonly /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total spearations from hospital (Death / discharge /transfer out/LAMA/Abscond)</td>
						<td>AAC 14(a),CQI 4 (c) </td>
						<td><input class="form-control" type="text" name="total_spearations" v-model="report.total_spearations" value=""  v-validate="'required'" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Incidence of needle stick injuries</th>
					</tr>
					<tr>
						<td>Needle stick injury</td>
						<td>Total cases of needle stick injury reported </td>
						<td>CQI 6(a),CQI 4 (f)</td>
						<td><input class="form-control" type="text" name="reported_needle_injury" v-model="report.reported_needle_injury" value=""  v-validate="'required'"  /></td>
						<td><input class="form-control" type="text" name="total_needle_injury" v-model="report.total_needle_injury" readonly value=""/></td>
					</tr>
					<tr>
						<td></td>
						<td>Total in patient days</td>
						<td>CQI 6(a),CQI 4 (f)</td>
						<td><input class="form-control" type="text" name="total_inpatient_needle" v-model="report.total_inpatient_needle" value=""  v-validate="'required'"  /></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>


    <div class="row form-group">
      <div class="col text-center">
        <button class="btn btn-success" type="button" @click="submitNabhReport()">Submit</button>
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
                'report' : {
										'start_date' : '',
										'end_date' : '',
										'name_hospital' : '',
										'total_beds' : '',
										'total_icu_beds' : '',
										'total_non_icu_beds' : '',
										'avg_doctors' : '',
										'avg_nurses' : '',
										'total_ot' : '',
										'avg_admissions_per_day' : '',
										'avg_patients_visiting_opd' : '',
										'avg_patients_visiting_emergency' : '',
										'avg_surgeries' : '',
										'avg_emergency_surgeries' : '',
										'avg_day_care_surgeries' : '',
										'avg_units_water' : '',
										'avg_electricity' : '',
										'total_medication_error' : 0,
										'incidence_medication_error' : 0,
										'total_inpatient_medicationerror' : 0,
										'units_blood_transfusion_reaction' : 0,
										'transfusion_reaction' : 0,
										'total_units_issued' : 0,
										'uninary_catheterised' : 0,
										'cauti' : 0,
										'uninary_catheter_days' : 0,
										'total_episodes_vap' : 0,
										'vap_rates' : 0,
										'total_ventilator_days' : 0,
										'total_crbsi' : 0,
										'catheter_related_infection' : 0,
										'total_central_line_days' : 0,
										'total_ssi' : 0,
										'surgical_site_infection' : 0,
										'total_surgeries' : 0,
										'total_fall_patients' : 0,
										'fall_rate' : 0,
										'total_inpatient_fall' : 0,
										'total_bed_sores' : 0,
										'bed_sore' : 0,
										'total_inpatient_bedsore' : 0,
										'total_patient_days_month' : 0,
										'bed_occupancy_rate' : 0,
										'available_bed_days' : 0,
										'total_inpatient_avgStay' : 0,
										'avg_stay' : 0,
										'total_spearations' : '',
										'reported_needle_injury' : '',
										'total_needle_injury' : '',
										'total_inpatient_needle' : '',

                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    submitNabhReport() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
	            		 var ReportData = $('#frmReport').serialize()+'&report_download=yes';
	              			window.location.href = "/report/create/?"+ReportData;
				    	User.submitReport(this.report).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Patient details have been saved', 'patient detail', {timeOut: 5000});
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
