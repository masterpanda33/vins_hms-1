<template id="">
	<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>Monitoring For Moderate Sedation</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/IPD/36 <br>
					REV. No. 0.1 <br>
					WEF 01-10-2014 <br>
					PAGE NO. 01 OF 02
				</div>
			</div>
		</div>
	</div>

	<form action="" method="post">
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Date:</label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="date" name="date" v-model="MonitoringModerateSedation.date" v-validate="'required'" id="date" value="" >
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-10">
				<div class="col-md-12">
					<label>Diagnosis:</label>
				</div>
				<div class="col-md-10">
					<textarea class="form-control" type="text" rows="3"name="diagnosis" v-model="MonitoringModerateSedation.diagnosis" v-validate="'required'" id="diagnosis" value="" ></textarea>
				</div>
			</div>
		</div>

		Pre-Medication Sedative and Anesthetic Drug:

		<hr>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Name:</label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="name" v-model="MonitoringModerateSedation.name" v-validate="'required'" id="name" value="" >
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-10">
				<div class="col-md-12">
					<label>Dose:</label>
				</div>
				<div class="col-md-10">
					<textarea class="form-control" type="text" rows="3" name="dose" v-model="MonitoringModerateSedation.dose" v-validate="'required'" id="dose" value="" ></textarea>
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-10">
				<div class="col-md-12">
					<label>Repetition:</label>
				</div>
				<div class="col-md-10">
					<textarea class="form-control" type="text" rows="3" name="repitation" v-model="MonitoringModerateSedation.repitation" v-validate="'required'" id="repitation" value="" ></textarea>
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Airway:</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="airway" v-model="MonitoringModerateSedation.airway" v-validate="'required'" value="">
						<option value="nasal" >Nasal</option>
						<option value="et" >ET</option>
						<option value="tracheostmy" >Tracheostmy</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Breathing:</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="breathing" v-model="MonitoringModerateSedation.breathing" v-validate="'required'" value="">
						<option value="on_ventilator" >On Ventilator</option>
					</select>
				</div>
			</div>
		</div>

		Sedation:

		<hr>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Name:</label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="name01" v-model="MonitoringModerateSedation.name01" v-validate="'required'" id="name01" value="" >
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-10">
				<div class="col-md-12">
					<label>Dose of the Drug:</label>
				</div>
				<div class="col-md-10">
					<textarea class="form-control" type="text" rows="3" name="dose01" v-model="MonitoringModerateSedation.dose01" v-validate="'required'" id="dose01" value="" ></textarea>
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-10">
				<div class="col-md-12">
					<label>Name of the Procedure:</label>
				</div>
				<div class="col-md-10">
					<textarea class="form-control" type="text" rows="3" name="procedure" v-model="MonitoringModerateSedation.procedure" v-validate="'required'" id="procedure" value="" ></textarea>
				</div>
			</div>
		</div>

		Vital Chart:
		Vitals must be taken every 10-15 minutes during sedation and post sedation.

		<hr>

		<div class="row form-group">
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th></th>
						<th>Pre Sedation</th>
						<th colspan="6">During Sedation</th>
						<th colspan="4">Post Sedation</th>
					</tr>
				</thead>
				<tbody>
					<tbody>
						<tr>
							<th>Time</th>
							<td>
								<input class="form-control" type="text" name="time_00" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_01" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_02" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_03" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_04" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_05" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_06" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_07" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_08" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_09" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="time_10" value=""/>
							</td>
						</tr>
						<tr>
							<th>Pulse</th>
							<td>
								<input class="form-control" type="text" name="pulse_00" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_01" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_02`" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_03" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_04" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_05" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_06" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_07" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_08" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_09" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pulse_10" value=""/>
							</td>
						</tr>
						<tr>
							<th> Respiratory Rate</th>
							<td>
								<input class="form-control" type="text" name="`resp_rate_00`" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_01" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_02`" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_03" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_04" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_05" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_06" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_07" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_08" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_09" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="resp_rate_10" value=""/>
							</td>
						</tr>
						<tr>
							<th>B.P</th>
							<td>
								<input class="form-control" type="text" name="bp_00" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="bp_01" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="bp_02`" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="bp_03" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="bp_04" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="bp_05" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="bp_06" value=""/>

							</td>
							<td>
								<input class="form-control" type="text" name="bp_07" value=""/>

							</td>
							<td>
								<input class="form-control" type="text" name="bp_08" value=""/>

							</td>
							<td>
								<input class="form-control" type="text" name="bp_09" value=""/>

							</td>
							<td>
								<input class="form-control" type="text" name="bp_10" value=""/>

							</td>
						</tr>
						<tr>
							<th>SPO2</th>
							<td>
								<input class="form-control" type="text" name="spo2_00" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_01" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_02" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_03" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_04" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_05" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_06" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_07" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_08" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_09" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="spo2_10" value=""/>
							</td>
						</tr>
						<tr>
							<th>Level Of Consciousness</th>
							<td>
								<input class="form-control" type="text" name="consciousness_00" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="consciousness_01" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="`consciousness_02`" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="consciousness_03" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="consciousness_04" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="consciousness_05" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="consciousness_06" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="consciousness_07" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="consciousness_08" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="consciousness_09" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="consciousness_10" value=""/>
							</td>
						</tr>
						<tr>
							<th>Pain Score (0-10)</th>
							<td>
								<input class="form-control" type="text" name="pain_score_00" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_01" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_02" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_03" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_04" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_05" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_06" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_07" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_08" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_09" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="pain_score_10" value=""/>
							</td>
						</tr>
						<tr>
							<th>Name and ID No of the Doctor</th>
							<td>
								<input class="form-control" type="text" name="name_sign_00" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_01" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_02" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_03" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_04" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_05" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_06" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_07" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_08" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_09" value=""/>
							</td>
							<td>
								<input class="form-control" type="text" name="name_sign_10" value=""/>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row form-group"><hr>
				<div class="col-md-4">
					<div class="">
						<label>Adverse Effect If Any (During and Post Sedation):</label>
					</div>
				</div>
				<div class="col-md-8">
					<textarea class="form-control" type="text"  rows="3"name="ad_effect" id="ad_effect" value="" ></textarea>
				</div>
			</div>
			<hr>
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Anaesthetist Name:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text"  name="anaesthetist_name" id="anaesthetist_name" value="" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Anesthetist's Sign:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text"  name="sign" id="sign" value="" >
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Date:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="date"  name="date_02" id="date_02" value="" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Time:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time"  name="time_02" id="time_02" value="" >
					</div>
				</div>
			</div>

			<div class="row form-group text-center">
				<button class="form-group btn btn-success" type="submit">Submit</button>
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
                'MonitoringModerateSedation' : {

                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        saveMonitoringModerateSedation() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   User.saveMonitoringModerateSedation(this.MonitoringModerateSedation).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Monitoring Moderate Sedation has been saved', 'MonitoringModerateSedation', {timeOut: 5000});
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
