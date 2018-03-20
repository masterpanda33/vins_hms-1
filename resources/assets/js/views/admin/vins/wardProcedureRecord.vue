<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Ward Procedure Record</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/19 <br>
					REV. No. --- <br>
					WEF ----------
				</div>
			</div>
		</div>
	</div>



	<form action="" method="post">
	<!--<div class="row form-group">
				<div class="col-md-8">
				</div>
				<div class="col-md-4 text-right">
					<label>Addressograph : </label>
					<textarea class="form-control text-right" placeholder="Addressograph here" ></textarea>
				</div>
			</div>-->
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Procedure Name</th>
						<th>

							<select required class="form-control" name="time" value="" v-model="wardProcedureRecordData.time">
								<option  disabled selected hidden>Select Time (Hrs)</option>
								<option value="4_6">0400 - 0600</option>
								<option value="6_8">0600 - 0800</option>
								<option value="8_10">0800 - 1000</option>
								<option value="10_12">1000 - 1200</option>
								<option value="12_14">1200 - 1400</option>
								<option value="14_16">1400 - 1600</option>
								<option value="16_18">1600 - 1800</option>
								<option value="18_20">1800 - 2000</option>
								<option value="20_22">2000 - 2200</option>
								<option value="22_24">2200 - 0000</option>
							</select>

						</th>
						<th>No.</th>
						<th>Procedure Name</th>
						<th>
						<!--
							<select class="form-control" name="time">
								<option>Select Time</option>
								<option>0400 - 0600</option>
								<option>0600 - 0800</option>
								<option>0800 - 1000</option>
								<option>1000 - 1200</option>
								<option>1200 - 1400</option>
								<option>1400 - 1600</option>
								<option>1600 - 1800</option>
								<option>1800 - 2000</option>
								<option>2000 - 2200</option>
								<option>2200 - 0000</option>
							</select>
						-->
						</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Multipara Monitoring 6 Hrs</td>
					<td><input class="form-control" type="text" name="multipara_monitoring_less6" value="" v-model="wardProcedureRecordData.multipara_monitoring_less6">

					</td>
					<td>2</td>
					<td>Multipara Monitoring > 6 Hrs</td>
					<td><input class="form-control" type="text" name="multipara_monitoring_more6" value="" v-model="wardProcedureRecordData.multipara_monitoring_more6">

					</td>
				</tr>
				<tr>
					<td>3.1</td>
					<td>Oxygen Charge(Up to 12 Hrs)</td>
					<td><input class="form-control" type="text" name="oxygen_upto12" value="" v-model="wardProcedureRecordData.oxygen_upto12">

					</td>
					<td>3.2</td>
					<td>Oxygen Charge(More than 12 Hrs)</td>
					<td><input class="form-control" type="text" name="oxygen_more12" value="" v-model="wardProcedureRecordData.oxygen_more12">

					</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Pulse Oximetry Intermittent</td>
					<td><input class="form-control" type="text" name="pulse_intermittent" value="" v-model="wardProcedureRecordData.pulse_intermittent">

					</td>
					<td>5</td>
					<td>Pulse Oximetry continuous</td>
					<td><input class="form-control" type="text" name="pulse_continuous" value="" v-model="wardProcedureRecordData.pulse_continuous">

					</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Ventilator / Bipap</td>
					<td><input class="form-control" type="text" name="ventilator_bipap" value="" v-model="wardProcedureRecordData.ventilator_bipap">

					</td>
					<td>7</td>
					<td>Nebulization</td>
					<td><input class="form-control" type="text" name="nebulization" value="" v-model="wardProcedureRecordData.nebulization">

					</td>
				</tr>
				<tr>
					<td>8</td>
					<td>Pulse Oximetry Intermittent</td>
					<td><input class="form-control" type="text" name="blood_transfusion" value="" v-model="wardProcedureRecordData.blood_transfusion">

					</td>
					<td>9</td>
					<td>RBS</td>
					<td><input class="form-control" type="text" name="rbs" value="" v-model="wardProcedureRecordData.rbs">

					</td>
				</tr>
				<tr>
					<td>10</td>
					<td>ECG</td>
					<td><input class="form-control" type="text" name="ecg" value="" v-model="wardProcedureRecordData.ecg">

					</td>
					<td>11</td>
					<td>Ripple Bed Charges</td>
					<td><input class="form-control" type="text" name="bed_charges" value="" v-model="wardProcedureRecordData.bed_charges">

					</td>
				</tr>
				<tr>
					<td>12</td>
					<td>Traction</td>
					<td><input class="form-control" type="text" name="traction" value="" v-model="wardProcedureRecordData.traction">

					</td>
					<td>13</td>
					<td>Dressing</td>
					<td><input class="form-control" type="text" name="dressing" value="" v-model="wardProcedureRecordData.dressing">

					</td>
				</tr>
				<tr>
					<td>14</td>
					<td>Special Dressing</td>
					<td><input class="form-control" type="text" name="spcl_dressing" value="" v-model="wardProcedureRecordData.spcl_dressing">

					</td>
					<td>15</td>
					<td>Ryle's Tube Insertion</td>
					<td><input class="form-control" type="text" name="tube_insertion" value="" v-model="wardProcedureRecordData.tube_insertion">

					</td>
				</tr>
				<tr>
					<td>16</td>
					<td>Catheterisation</td>
					<td><input class="form-control" type="text" name="catheterisation" value=""  v-model="wardProcedureRecordData.catheterisation">

					</td>
					<td>17</td>
					<td>Suture Removal</td>
					<td><input class="form-control" type="text" name="suture_removal" value="" v-model="wardProcedureRecordData.suture_removal">

					</td>
				</tr>
				<tr>
					<td>18</td>
					<td>CLW Suturing</td>
					<td><input class="form-control" type="text" name="clw_suturing" value="" v-model="wardProcedureRecordData.clw_suturing">

					</td>
					<td>19</td>
					<td>Diet Consultation</td>
					<td><input class="form-control" type="text" name="diet_consultation" value="" v-model="wardProcedureRecordData.diet_consultation">

					</td>
				</tr>
				<tr>
					<td>20</td>
					<td>Enema</td>
					<td><input class="form-control" type="text" name="enema" value="" v-model="wardProcedureRecordData.enema">

					</td>
					<td>21</td>
					<td>Syringe Pump / Special Infection</td>
					<td><input class="form-control" type="text" name="syringe_pump" value="" v-model="wardProcedureRecordData.syringe_pump">

					</td>
				</tr>
				<tr>
					<td>22</td>
					<td>Echo</td>
					<td><input class="form-control" type="text" name="echo" value="" v-model="wardProcedureRecordData.echo">

					</td>
					<td>23</td>
					<td>Urine Sugar</td>
					<td><input class="form-control" type="text" name="urine_sugar" value="" v-model="wardProcedureRecordData.urine_sugar">
          </td>
				</tr>
				<tr>
					<td>24</td>
					<td>Peripheral Venous Line</td>
					<td><input class="form-control" type="text" name="peripheral_line" value="" v-model="wardProcedureRecordData.peripheral_line">

					</td>
					<td>25</td>
					<td>Central / Femoral / Arterial Line</td>
					<td><input class="form-control" type="text" name="central_line" value="" v-model="wardProcedureRecordData.central_line">

					</td>
				</tr>
				<tr>
					<td>26</td>
					<td>Lumbar Puncture</td>
					<td><input class="form-control" type="text" name="lumbar_puncture" value="" v-model="wardProcedureRecordData.lumbar_puncture">

					</td>
					<td>27</td>
					<td>CSF Manometry</td>
					<td><input class="form-control" type="text" name="csf_manometry" value="" v-model="wardProcedureRecordData.csf_manometry">

					</td>
				</tr>
				<tr>
					<td>28</td>
					<td>Intubation</td>
					<td><input class="form-control" type="text" name="intubation" value="" v-model="wardProcedureRecordData.intubation">

					</td>
					<td>29</td>
					<td>Code Blue</td>
					<td><input class="form-control" type="text" name="code_blue" value="" v-model="wardProcedureRecordData.code_blue">

					</td>
				</tr>
				<tr>
					<td>30</td>
					<td>Resuscitation</td>
					<td><input class="form-control" type="text" name="resuscitation" value="" v-model="wardProcedureRecordData.resuscitation">

					</td>
					<td>31</td>
					<td>Ambulance Charges</td>
					<td><input class="form-control" type="text" name="ambulance_charges" value="" v-model="wardProcedureRecordData.ambulance_charges">

					</td>
				</tr>
				<tr>
					<td>32.1</td>
					<td>ESCORT (With Ventilator)</td>
					<td><input class="form-control" type="text" name="escort_ventilator" value="" v-model="wardProcedureRecordData.escort_ventilator">

					</td>
					<td>32.2</td>
					<td>ESCORT (Without Ventilator)</td>
					<td><input class="form-control" type="text" name="escort_without" value="" v-model="wardProcedureRecordData.escort_without">

					</td>
				</tr>
				<tr>
					<td>33.1</td>
					<td>MLC (Within City Limits)</td>
					<td><input class="form-control" type="text" name="mlc_inside_city" value="" v-model="wardProcedureRecordData.mlc_inside_city">

					</td>
					<td>33.2</td>
					<td>MLC (Outside City Limits)</td>
					<td><input class="form-control" type="text" name="mlc_outside_city" value="" v-model="wardProcedureRecordData.mlc_outside_city">

					</td>
				</tr>
				<tr>
					<td>34</td>
					<td>Defibrillator Charge</td>
					<td><input class="form-control" type="text" name="defibrillator_charges" value="" v-model="wardProcedureRecordData.defibrillator_charges">

					</td>
					<td>35</td>
					<td>Physio Therapy</td>
					<td><input class="form-control" type="text" name="physiotherapy" value="" v-model="wardProcedureRecordData.physiotherapy">

					</td>
				</tr>

			</tbody>
			</table>
		</div>
		<div class="form-group text-center">
		  <input class="btn btn-success" type="button" @click = "saveWardProcedureRecord()" value="Submit">
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
                'wardProcedureRecordData' : {
											'time' :'',
								      'multipara_monitoring_less6' :'',
								      'multipara_monitoring_more6' :'',
								      'oxygen_upto12' :'',
								      'oxygen_more12' :'',
								      'pulse_intermittent' :'',
								      'pulse_continuous' :'',
								      'ventilator_bipap' :'',
								      'nebulization' :'',
								      'blood_transfusion' :'',
								      'rbs' :'',
								      'ecg' :'',
								      'bed_charges' :'',
								      'traction' :'',
								      'dressing' :'',
								      'spcl_dressing' :'',
								      'tube_insertion' :'',
								      'catheterisation' :'',
								      'suture_removal' :'',
								      'clw_suturing' :'',
								      'diet_consultation' :'',
								      'enema' :'',
								      'syringe_pump' :'',
								      'echo' :'',
								      'urine_sugar' :'',
								      'peripheral_line' :'',
								      'central_line' :'',
								      'lumbar_puncture' :'',
								      'csf_manometry' :'',
								      'intubation' :'',
								      'code_blue' :'',
								      'resuscitation' :'',
								      'ambulance_charges' :'',
								      'escort_ventilator' :'',
								      'escort_without' :'',
								      'mlc_inside_city' :'',
								      'mlc_outside_city' :'',
								      'defibrillator_charges' :'',
								      'physiotherapy' :'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveWardProcedureRecord() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveWardProcedureRecord(this.wardProcedureRecordData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Ward Procedure Record have been saved', 'Ward Procedure Record', {timeOut: 5000});
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
