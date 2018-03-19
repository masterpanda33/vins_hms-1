<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<h1 class="text-center">National Accreditation Board For Hospitals and Health Care Providers</h1>
		</div>
	</div>
  <form>

	  <div class="row">
			<h3>Quarterly Mandatory Data Information Sheet</h3>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th colspan="2">Data Period</th>
						</tr>
						<tr>
							<th width="50%">Start Date :</th>
							<td width="50%"><input class="form-control" type="date" name=""  /></td>
						</tr>
						<tr>
							<th>End Date : </th>
							<td class="text-center"><input class="form-control" type="date" name=""  /></td>
						</tr>
						<tr>
							<th class="text-center">General Information</th>
							<th class="text-center">Data Filled</th>
						</tr>
						<tr>
							<th>Name of the Hospital</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Total number of hospital beds</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Total number of ICU beds</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Total number of non-ICU beds</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average number of Doctors on hospital rolls at any point of time</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average number of Nurses on hospital rolls at any point of time</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Total number of operation theatre tables</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average number of admissions/day</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average number of patients visiting OPD/day</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average number of patients visiting Emergency/day</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average number of elective surgeries/day</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average number of emergency surgeries/day</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average number of day care surgeries/day</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average units of water consumed/month</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
						<tr>
							<th>Average units of electricity consumed/month</th>
							<td><input class="form-control" type="text" name="" /></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row form-group">
			<table class="table table-bordered">
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
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Number of In Patient Days</td>
						<td>CQI 3 (c)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Percentage of Transfusion Reactions</th>
					</tr>
					<tr>
						<td>Transfusion Reaction (Percentage)</td>
						<td>Units of blood transfusion reaction</td>
						<td>COP 5(g),CQI (3f)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total number of units issued </td>
						<td>COP 5(g),CQI (3f)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Symptomatic Urinary tract infection rate (SUTI)</th>
					</tr>
					<tr>
						<td>Catheter Associated UTI (CAUTI) /1000 Catheter days </td>
						<td>Number of urinary catheterised in patients developing UTI / identified  in the hospital</td>
						<td>HIC 4(a),CQI 3 (g)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total number of urinary catheter days</td>
						<td>HIC 4(a),CQI 3 (g)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Ventilator associated pneumonias (VAP)</th>
					</tr>
					<tr>
						<td>VAP rates/1000 ventilator days ( Hospital, NICU, PICU)</td>
						<td>Total episodes of VAP identified in Hospital  </td>
						<td>HIC 4(b),CQI (3g)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Number of Ventilator days</td>
						<td>HIC 4(b),CQI (3g)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Central Line Associated Blood Stream Infection (CLABSI)</th>
					</tr>
					<tr>
						<td>Catheter related blood stream infection /1000 in patient days </td>
						<td>Total episodes of CRBSI identified</td>
						<td>HIC 4(c), CQI 3(g)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total central line days </td>
						<td>HIC 4(c), CQI 3(g)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Surgical site infection rate (SSI)</th>
					</tr>
					<tr>
						<td>Surgical Site Infection per 100 surgeries</td>
						<td>Number of episodes developing SSI during defined period</td>
						<td>HIC 4(d), CQI 3(g)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Number of surgeries during specific defined period</td>
						<td>HIC 4(d), CQI 3(g)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Incidence of fall </th>
					</tr>
					<tr>
						<td>Fall Rate</td>
						<td>Number of episodes of fall of in patients without injury</td>
						<td>CQI4(b)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total number of in patient days</td>
						<td>CQI4(b)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Incidence of bed sores after admission</th>
					</tr>
					<tr>
						<td>Bed Sore</td>
						<td>Number of episodes of bed sore</td>
						<td>CQI 4(b)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total number of in patient days</td>
						<td>CQI 4(b)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Bed occupancy rate</th>
					</tr>
					<tr>
						<td>Bed Occupancy Rate</td>
						<td>No. of in patient days in a given month </td>
						<td>CQI 4(C)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Available Bed days</td>
						<td>CQI 4(C)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Average length of stay (ALOS)</th>
					</tr>
					<tr>
						<td>Average Length of Stay –  (Hospital)</td>
						<td>Total in patient days</td>
						<td>AAC 14(a),CQI 4 (c) </td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled /></td>
					</tr>
					<tr>
						<td></td>
						<td>Total spearations from hospital (Death / discharge /transfer out/LAMA/Abscond)</td>
						<td>AAC 14(a),CQI 4 (c) </td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>

					<tr>
						<th colspan="5">Incidence of needle stick injuries</th>
					</tr>
					<tr>
						<td>Needle stick injury</td>
						<td>Total cases of needle stick injury reported </td>
						<td>CQI 6(a),CQI 4 (f)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td><input class="form-control" type="text" name="" disabled value=""/></td>
					</tr>
					<tr>
						<td></td>
						<td>Total in patient days</td>
						<td>CQI 6(a),CQI 4 (f)</td>
						<td><input class="form-control" type="text" name="" value="" /></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>


    <div class="row form-group">
      <div class="col text-center">
        <button class="btn btn-success" type="button">Submit</button>
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
                'hospital_currentYear': new Date().getFullYear(),
                'nabhReport' : {
                	'nabh_start_date': '',
                	'nabh_end_date': '',
                	'hospital_name': '',
                	'no_of_hospital_beds': '',
                	'no_of_icu_beds': '',
                	'no_of_non_icu_beds': '',
                	'no_of_doctors': '',
                	'no_of_nurses': '',
                	'no_of_oepration_theatre': '',
                	'avg_no_of_admission_per_day': '',
                	'avg_no_of_opd_patient': '',
                	'avg_no_of_emergency_patient': '',
                	'avg_no_of_elective_surgery': '',
                	'avg_no_of_emergency_surgery': '',
                	'avg_no_of_care_surgery': '',
                	'avg_unit_of_water_consumed': '',
                	'avg_unit_of_electricity_consumed': '',
                	'nabh_indicator': {
                		'incidence_of_medication_error': {
                			'no_of_medication_error':'',
                			'no_of_patient':'',
                			'calculated_value':'',
                		},
                		'transfusion_reaction': {
                			'units_of_blood_transfusion_reaction':'',
                			'no_of_units_issued':'',
                			'calculated_value':'',
                		},
                	}
                	
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    testFunction() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.testFunction(this.testData).then(
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
