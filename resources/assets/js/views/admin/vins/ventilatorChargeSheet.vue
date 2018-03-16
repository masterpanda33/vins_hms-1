<template>

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Ventilator Charge Sheet</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/12 <br>
					REV. No. --- <br>
					WEF ----------
				</div>
			</div>
		</div>
	</div>


	<form action="" method="post">

		<div class = "row from-group">
			<div class = "col-md-6">
				<div class = "col-md-6">
					<label> ID </label>
					<input class = "form-control" type = "text" name = "id" value = "" v-model = "ventilatorChargeSheetData.id"/>
				</div>
			</div>
			<div class ="col-md-6">
				<div class = "col-md-6">
				<label> IPD </label>
				<input class = "form-control" type = "text" name = "ipd" value = "" v-model = "ventilatorChargeSheetData.ipd"/>
			</div>
			</div>
		</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Name : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="name" v-model="ventilatorChargeSheetData.name">
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Age : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="age" v-model="ventilatorChargeSheetData.age">
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Sex : </label>
			</div>
			<div class="col-md-6">
				<select required class="form-control" name="sex" value="" v-model="ventilatorChargeSheetData.sex">
					<option value="NA">NA</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>BED No : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="bed_no" v-model="ventilatorChargeSheetData.bed_no">
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Time : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="time" name="time" v-model="ventilatorChargeSheetData.time">
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Date : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="date" name="date" v-model="ventilatorChargeSheetData.date">
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Settings (GREEN)</th>
						<th class="form-inline">Hour :
							<select required class="form-control" name="time_slot01" value="" v-model="ventilatorChargeSheetData.time_slot01">
								<option>Select Hour</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>

						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mode</td>
						<td><input class="form-control" type="text" name="mode" v-model="ventilatorChargeSheetData.mode">
						</td>

					</tr>
					<tr>
						<td>Tidal Volume</td>
						<td><input class="form-control" type="text" name="tidal_volume" v-model="ventilatorChargeSheetData.tidal_volume">
						</td>

					</tr>
					<tr>
						<td>Set Frequency (Controlled)</td>
						<td><input class="form-control" type="text" name="freq_controlled" v-model="ventilatorChargeSheetData.freq_controlled">
						</td>

					</tr>
					<tr>
						<td>Set Frequency (SIMV)</td>
						<td><input class="form-control" type="text" name="freq_simv" v-model="ventilatorChargeSheetData.freq_simv">
						</td>


					</tr>
					<tr>
						<td>Pressure Control</td>
						<td><input class="form-control" type="text" name="pressure_control" v-model="ventilatorChargeSheetData.pressure_control">
						</td>

					</tr>
					<tr>
						<td>Pressure Support (IPAP)</td>
						<td><input class="form-control" type="text" name="pressure_support" v-model="ventilatorChargeSheetData.pressure_support">
						</td>

					</tr>
					<tr>
						<td>PEEP / CPAP (EDAP)</td>
						<td><input class="form-control" type="text" name="peep_cpap" v-model="ventilatorChargeSheetData.peep_cpap">
						</td>

					</tr>
					<tr>
						<td>Triggering</td>
						<td><input class="form-control" type="text" name="triggering" v-model="ventilatorChargeSheetData.triggering">
						</td>

					</tr>
					<tr>
						<td>Flo2</td>
						<td><input class="form-control" type="text" name="flo2" v-model="ventilatorChargeSheetData.flo2">
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Measured (RED)</th>
						<th class="form-inline">Hour :
							<select required class="form-control" name="time_slot02" value="" v-model="ventilatorChargeSheetData.time_slot02">
								<option>Select Hour</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th colspan="2">A. Volume</th>
					</tr>
					<tr>
						<td>Inp. TV</td>
						<td><input class="form-control" type="text" name="inp_tv" v-model="ventilatorChargeSheetData.inp_tv">
						</td>

					</tr>
					<tr>
						<td>Exp. TV</td>
						<td><input class="form-control" type="text" name="exp_tv" v-model="ventilatorChargeSheetData.exp_tv">
						</td>

					</tr>
					<tr>
						<td>Exp. MV</td>
						<td><input class="form-control" type="text" name="exp_mv" v-model="ventilatorChargeSheetData.exp_mv">
						</td>

					</tr>
					<tr>
						<td>Measured Frequency</td>
						<td><input class="form-control" type="text" name="measured_freq"  v-model="ventilatorChargeSheetData.measured_freq">
						</td>

					</tr>
					<tr>
						<th colspan="2">B. Pressure</th>

					</tr>
					<tr>
						<td>Peak Pressure</td>
						<td><input class="form-control" type="text" name="peak_pressure" v-model="ventilatorChargeSheetData.peak_pressure">
						</td>

					</tr>
					<tr>
						<td>Mean</td>
						<td><input class="form-control" type="text" name="mean_pressure"  v-model="ventilatorChargeSheetData.mean_pressure">
						</td>

					</tr>
					<tr>
						<td>End. Exp.</td>
						<td><input class="form-control" type="text" name="end_exp"  v-model="ventilatorChargeSheetData.end_exp">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Alarms</th>
						<th class="form-inline">Hour :
							<select required class="form-control" name="time_slot03" value=""  v-model="ventilatorChargeSheetData.time_slot03">
								<option>Select Hour</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Pressure Low</td>
						<td><input class="form-control" type="text" name="pressure_low"  v-model="ventilatorChargeSheetData.pressure_low">
						</td>

					</tr>
					<tr>
						<td>Volume High MV</td>
						<td><input class="form-control" type="text" name="volume_high_mv"  v-model="ventilatorChargeSheetData.volume_high_mv">
						</td>

					</tr>
					<tr>
						<td>Volume Low MV</td>
						<td><input class="form-control" type="text" name="volume_low_mv"  v-model="ventilatorChargeSheetData.volume_low_mv">
						</td>

					</tr>
					<tr>
						<td>Gas Supply</td>
						<td><input class="form-control" type="text" name="gas_supply"  v-model="ventilatorChargeSheetData.gas_supply">
						</td>

					</tr>
					<tr>
						<td>Power Failure</td>
						<td><input class="form-control" type="text" name="power_failure"  v-model="ventilatorChargeSheetData.power_failure">
						</td>

					</tr>

						<th colspan="2">D. Position</th>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="position"  v-model="ventilatorChargeSheetData.position">
						</td>

					</tr>

					<tr>
						<th colspan="2">E. Suction</th>
					</tr>
					<tr>
						<td>E.T. / T'stomy</td>
						<td><input class="form-control" type="text" name="et_tstomy"  v-model="ventilatorChargeSheetData.et_tstomy">
						</td>

					</tr>
					<tr>
						<td>Oral</td>
						<td><input class="form-control" type="text" name="oral" v-model="ventilatorChargeSheetData.oral">
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th></th>
						<th class="form-inline">Hour :

							<select required class="form-control"  name="time_slot04" value="" v-model="ventilatorChargeSheetData.time_slot04">
								<option>Select Hour</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
							</select>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>F. Chest Physiotherapy</th>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="chest_physio" v-model="ventilatorChargeSheetData.chest_physio">
						</td>

					</tr>

					<tr>
						<th colspan="2">G. ABG</th>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="abg" v-model="ventilatorChargeSheetData.abg">
						</td>

					</tr>

					<tr>
						<th colspan="2">H. X-Ray Chest</th>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="xray_chest" v-model="ventilatorChargeSheetData.xray_chest">
						</td>

					</tr>

					<tr>
						<th colspan="2">I. Disposable Change</th>
					</tr>
					<tr>
						<td>Catheter Mount</td>
						<td><input class="form-control" type="text" name="catheter_mount" v-model="ventilatorChargeSheetData.catheter_mount">
						</td>

					</tr>
					<tr>
						<td>Filter</td>
						<td><input class="form-control" type="text" name="filter" v-model="ventilatorChargeSheetData.filter">
						</td>

					</tr>
					<tr>
						<td>Ventilator Circuit</td>
						<td><input class="form-control" type="text" name="ventilator_circuit" v-model="ventilatorChargeSheetData.ventilator_circuit">
						</td>
					</tr>
					<tr>
						<td>E.T. Tube/ T'stomy Tube</td>
						<td><input class="form-control" type="text" name="et_tube" v-model="ventilatorChargeSheetData.et_tube">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row form-group text-center">
		<input class="btn btn-success" type="button" value = "Submit" @click = "saveVentilatorChargeSheet()"/>
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
                'ventilatorChargeSheetData' : {
										'id':'',
										'ipd':'',
										'name':'',
							      'age':'',
							      'sex':'',
							      'bed_no':'',
							      'time':'',
							      'date':'',
							      'time_slot01':'',
							      'time_slot02':'',
							      'time_slot03':'',
							      'time_slot04':'',
							      'mode':'',
							      'tidal_volume':'',
							      'freq_controlled':'',
							      'freq_simv':'',
							      'pressure_control':'',
							      'pressure_support':'',
							      'peep_cpap':'',
							      'flo2':'',
							      'triggering':'',
							      'inp_tv':'',
							      'exp_tv':'',
							      'exp_mv':'',
							      'measured_freq':'',
							      'peak_pressure':'',
							      'mean_pressure':'',
							      'end_exp':'',
							      'pressure_low':'',
							      'volume_high_mv':'',
							      'volume_low_mv':'',
							      'gas_supply':'',
							      'power_failure':'',
							      'position':'',
							      'et_tstomy':'',
							      'oral':'',
							      'chest_physio':'',
							      'abg':'',
							      'xray_chest':'',
							      'catheter_mount':'',
							      'filter':'',
							      'ventilator_circuit':'',
							      'et_tube':'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveVentilatorChargeSheet() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveVentilatorChargeSheet(this.ventilatorChargeSheetData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Patient details have been saved', 'ventiator chargesheet detail', {timeOut: 5000});
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
