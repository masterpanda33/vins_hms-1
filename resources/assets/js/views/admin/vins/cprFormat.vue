<template>
  <div class="container">
  	<div class="page-header">
  		<div class="row">
  			<div class="col-md-6">
    			<h1>CPR Format</h1>
  			</div>
  			<div class="col-md-6">
  				<div class="text-right">
  					DOC NO. FMT/NUR/37 <br>
  					REV. No. 0.1 <br>
  					WEF 01-11-2014 <br>
  					PAGE NO.
  				</div>
  			</div>
  		</div>
    </div>

  	<form action="" method="post">
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Patient's Name:</label>
  				</div>
  				<div class="col-md-6">
  					<input type="text" class="form-control" name="patient_name" v-model="cprFormatData.patient_name" v-validate="'required'" id="patient_name" value="">
            <span class="help is-danger" v-show="errors.has('patient_name')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

      <div class="row form-group">
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>IPD No.:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control" name="ipd_id" v-model="ipd_id" v-validate="'required'" id="ipd_id" value="">
              <span class="help is-danger" v-show="errors.has('ipd_id')">
                Field is required
              </span>

  					</div>
  				</div>
  				<div class="col-md-6">
  					<div class="col-md-6">
  						<label>Age:</label>
  					</div>
  					<div class="col-md-6">
  						<input type="text" class="form-control" name="age" v-model="cprFormatData.age" v-validate="'required'" id="age" value="">
              <span class="help is-danger" v-show="errors.has('age')">
                Field is required
              </span>

  					</div>
  				</div>
      </div>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Sex:</label>
  				</div>
  				<div class="col-md-6">
  					<select class="form-control" name="sex" v-model="cprFormatData.sex" v-validate="'required'" value="">
              <option>NA</option>
  						<option>Male</option>
  						<option>Female</option>
  					</select>
            <span class="help is-danger" v-show="errors.has('sex')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-6"></div>
  		</div>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Date:</label>
  				</div>
  				<div class="col-md-6">
  					<input type="date" class="form-control" name="date" v-model="cprFormatData.date" v-validate="'required'" id="date" value="">
            <span class="help is-danger" v-show="errors.has('date')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Start Time:</label>
  				</div>
  				<div class="col-md-6">
  					<input type="time" class="form-control" name="start_time" v-model="cprFormatData.start_time" v-validate="'required'" id="start_time" value="">
            <span class="help is-danger" v-show="errors.has('start_time')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Bed No.:</label>
  				</div>
  				<div class="col-md-6">
  					<input type="text" class="form-control" name="bed_no" v-model="cprFormatData.bed_no" v-validate="'required'" id="bed_no" value="">
            <span class="help is-danger" v-show="errors.has('bed_no')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>
  		<hr>

  		<table class="table table-bordered">
  			<tr>
  				<th>Diagnosis</th>
  				<td  colspan="6">
  						<input type="text" class="form-control" name="diagnosis" v-model="cprFormatData.diagnosis" v-validate="'required'" id="diagnosis" value="">
              <span class="help is-danger" v-show="errors.has('diagnosis')">
                Field is required
              </span>
  				</td>
  			</tr>
  			<tr>
  				<th>Name of Doctor leading CPR</th>
  				<td colspan="6">
  					<div>
  						<input type="text" class="form-control" name="name_doctor" v-model="cprFormatData.name_doctor" v-validate="'required'" id="name_doctor" value="">
              <span class="help is-danger" v-show="errors.has('name_doctor')">
                Field is required
              </span>

  					</div>
  				</td>
  			</tr>
  			<tr>
  				<th>CPR Team</th>
  				<td colspan="6">
  					<div>
  						<input type="text" class="form-control" name="cpr_team" v-model="cprFormatData.cpr_team" v-validate="'required'" id="cpr_team" value="">
              <span class="help is-danger" v-show="errors.has('cpr_team')">
                Field is required
              </span>

  					</div>
  				</td>
  			</tr>
  			<tr>
  				<th>Intubation Time (if done)</th>
  				<td colspan="6">
  					<div>
  						<input type="time" class="form-control" name="intubation_time" v-model="cprFormatData.intubation_time" v-validate="'required'" id="intubation_time" value="">
              <span class="help is-danger" v-show="errors.has('intubation_time')">
                Field is required
              </span>

  					</div>
  				</td>
  			</tr>
  			<tr>
  				<th rowspan="2">Defribillator (if used how many shocks and joules)</th>
  				<th>ECG Rhythm</th>
  				<td><input type="text" class="form-control" name="defib_rhythm_00" v-model="cprFormatData.defib_rhythm_00" id="defib_rhythm_00" value=""></td>
  				<td><input type="text" class="form-control" name="defib_rhythm_01" v-model="cprFormatData.defib_rhythm_01" id="defib_rhythm_01" value=""></td>
  				<td><input type="text" class="form-control" name="defib_rhythm_02" v-model="cprFormatData.defib_rhythm_02" id="defib_rhythm_02" value=""></td>
  				<td><input type="text" class="form-control" name="defib_rhythm_03" v-model="cprFormatData.defib_rhythm_03" id="defib_rhythm_03" value=""></td>
  				<td><input type="text" class="form-control" name="defib_rhythm_04" v-model="cprFormatData.defib_rhythm_04" id="defib_rhythm_04" value=""></td>
  			</tr>
  			<tr>
  				<th>DC Shock</th>
  				<td><input type="text" class="form-control" name="defib_dc_00" v-model="cprFormatData.defib_dc_00" id="defib_dc_00" value=""></td>
  				<td><input type="text" class="form-control" name="defib_dc_01" v-model="cprFormatData.defib_dc_01" id="defib_dc_01" value=""></td>
  				<td><input type="text" class="form-control" name="defib_dc_02" v-model="cprFormatData.defib_dc_02" id="defib_dc_02" value=""></td>
  				<td><input type="text" class="form-control" name="defib_dc_03" v-model="cprFormatData.defib_dc_03" id="defib_dc_03" value=""></td>
  				<td><input type="text" class="form-control" name="defib_dc_04" v-model="cprFormatData.defib_dc_04" id="defib_dc_04" value=""></td>
  			</tr>
  			<tr>
  				<th rowspan="6">Medication</th>
  				<th>Time</th>
  				<th colspan="5">Medicines</th>
  			</tr>
  			<tr>
  				<td><input type="time" class="form-control" name="medication_time_00" v-model="cprFormatData.medication_time_00" v-validate="'required'" id="medication_time_00" value=""></td>
  				<td colspan="5"><input type="text" class="form-control" name="medication_name_00" v-model="cprFormatData.medication_name_00" v-validate="'required'" id="medication_name_00" value=""></td>
  			</tr>
  			<tr>
  				<td><input type="time" class="form-control" name="medication_time_01" v-model="cprFormatData.medication_time_01" id="medication_time_01" value=""></td>
  				<td colspan="5"><input type="text" class="form-control" name="medication_name_01" v-model="cprFormatData.medication_name_01" id="medication_name_01" value=""></td>
  			</tr>
  			<tr>
  				<td><input type="time" class="form-control" name="medication_time_02" v-model="cprFormatData.medication_time_02" id="medication_time_02" value=""></td>
  				<td colspan="5"><input type="text" class="form-control" name="medication_name_02" v-model="cprFormatData.medication_name_02" id="medication_name_02" value=""></td>
  			</tr>
  			<tr>
  				<td><input type="time" class="form-control" name="medication_time_03" v-model="cprFormatData.medication_time_03" id="medication_time_03"  value=""></td>
  				<td colspan="5"><input type="text" class="form-control" name="medication_name_03" v-model="cprFormatData.medication_name_03" id="medication_name_03" value=""></td>
  			</tr>
  			<tr>
  				<td><input type="time" class="form-control" name="medication_time_04" v-model="cprFormatData.medication_time_04" id="medication_time_04" value=""></td>
  				<td colspan="5"><input type="text" class="form-control" name="medication_name_04" v-model="cprFormatData.medication_name_04" id="medication_name_04" value=""></td>
  			</tr>
  			<tr>
  				<th>Total time of Resuscitation</th>
  				<td colspan="6">
  					<div>
  						<input type="time" class="form-control" name="total_time" v-model="cprFormatData.total_time" v-validate="'required'" id="total_time"  value="">
              <span class="help is-danger" v-show="errors.has('total_time')">
                Field is required
              </span>

  					</div>
  				</td>
  			</tr>
  			<tr>
  				<th>Outcome</th>
  				<td colspan="6">
  					<div>
  						<input type="text" class="form-control" name="outcome" v-model="cprFormatData.outcome" v-validate="'required'" id="outcome" value="">
              <span class="help is-danger" v-show="errors.has('outcome')">
                Field is required
              </span>

  					</div>
  				</td>
  			</tr>
  			<tr>
  				<th>Doctor Name </th>
  				<td colspan="6"><input type="text" class="form-control" name="doctor_name" v-model="cprFormatData.doctor_name" v-validate="'required'" id="doctor_name" value="">
            <span class="help is-danger" v-show="errors.has('doctor_name')">
              Field is required
            </span>
          </td>
  			</tr>
  			<tr>
  				<th>Remarks</th>
  				<td colspan="6">
  					<div>
  						<textarea class="form-control" rows="3" name="remarks" v-model="cprFormatData.remarks" v-validate="'required'"></textarea>
              <span class="help is-danger" v-show="errors.has('remarks')">
                Field is required
              </span>

  					</div>
  				</td>
  			</tr>
  		</table>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Consultant Counseled:</label>
  				</div>
  				<div class="col-md-6">
  					<input type="text" class="form-control" name="consultant_counseled" v-model="cprFormatData.consultant_counseled" v-validate="'required'" id="consultant_counseled" value="">
            <span class="help is-danger" v-show="errors.has('consultant_counseled')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Relative's Name:</label>
  				</div>
  				<div class="col-md-6">
  					<input type="text" class="form-control" name="relative_name" v-model="cprFormatData.relative_name" v-validate="'required'" id="relative_name" value="">
            <span class="help is-danger" v-show="errors.has('relative_name')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<hr>
  		<div class="row form-group">
  			<table class="table table-bordered table-responsive">
  				<thead>
  					<tr>
  						<th>Initial Time</th>
  						<th rowspan="2">Pulse</th>
  						<th rowspan="2">BP</th>
  						<th rowspan="2">SPO<sub>2</sub></th>
  						<th rowspan="2">RR</th>
  						<th rowspan="2">Chest Compression</th>
  						<th rowspan="2">ECG Rhythm</th>
  						<th rowspan="2">DC Shock</th>
  						<th rowspan="2">Medication</th>
  					</tr>
  					<tr>
  						<th>
  							Initial Time <input type="time" class="form-control" name="initial_time" id="initial_time" v-model="cprFormatData.initial_time" />
  						</th>
  					</tr>
  				</thead>
  				<tbody>
  					<tr v-for="n in 7  ">
  						<th v-if="n == 1">0 Minutes</th>
              <th v-else-if="n == 2">5 Minutes</th>
              <th v-else-if="n == 3">10 Minutes</th>
              <th v-else-if="n == 4">15 Minutes</th>
              <th v-else-if="n == 5">20 Minutes</th>
              <th v-else-if="n == 6">25 Minutes</th>
              <th v-else-if="n == 7">30 Minutes</th>
  						<td><input type="text" class="form-control" :name="'pulse'+n" v-model="cprFormatData.vitals[n].pulse" id="pulse" value=""/></td>
  						<td><input type="text" class="form-control" :name="'bp'+n" v-model="cprFormatData.vitals[n].bp" id="bp" value=""/></td>
  						<td><input type="text" class="form-control" :name="'spo2'+n" v-model="cprFormatData.vitals[n].spo2" id="spo2" value=""/></td>
  						<td><input type="text" class="form-control" :name="'rr'+n" v-model="cprFormatData.vitals[n].rr" id="rr" value=""/></td>
  						<td><input type="text" class="form-control" :name="'chest_compression'+n" v-model="cprFormatData.vitals[n].chest_compression" id="chest_compression" value=""/></td>
  						<td><input type="text" class="form-control" :name="'ecg_rythm'+n" v-model="cprFormatData.vitals[n].ecg_rythm" id="ecg_rythm" value=""/></td>
  						<td><input type="text" class="form-control" :name="'dc_shock'+n" v-model="cprFormatData.vitals[n].dc_shock" id="dc_shock" value=""/></td>
  						<td><input type="text" class="form-control" :name="'medication'+n" v-model="cprFormatData.vitals[n].medication" id="medication" value=""/></td>
  					</tr>
  				</tbody>
  			</table>
  		</div>
  		<div class="row form-group text-center">
  			<button class="btn btn-success" type="button" @click="saveCptFormat()">Submit</button>
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
                'type': 'cprFormat',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'cprFormatData' : {
                  'patient_name' : '',
                  'age' : '',
                  'sex' : '',
                  'date' : '',
                  'start_time' : '',
                  'bed_no' : '',
                  'diagnosis' : '',
                  'name_doctor' : '',
                  'cpr_team' : '',
                  'intubation_time' : '',
                  'defib_rhythm_00' : '',
                  'defib_rhythm_01' : '',
                  'defib_rhythm_02' : '',
                  'defib_rhythm_03' : '',
                  'defib_rhythm_04' : '',
                  'defib_dc_00' : '',
                  'defib_dc_01' : '',
                  'defib_dc_02' : '',
                  'defib_dc_03' : '',
                  'defib_dc_04' : '',
                  'vitals' : {
                    '1' : {
                        'pulse' : '',
                        'bp' : '',
                        'spo2' : '',
                        'rr' : '',
                        'chest_compression' : '',
                        'ecg_rythm' : '',
                        'dc_shock' : '',
                        'medication' : '',
                    },
                    '2' : {
                        'pulse' : '',
                        'bp' : '',
                        'spo2' : '',
                        'rr' : '',
                        'chest_compression' : '',
                        'ecg_rythm' : '',
                        'dc_shock' : '',
                        'medication' : '',
                    },
                    '3' : {
                        'pulse' : '',
                        'bp' : '',
                        'spo2' : '',
                        'rr' : '',
                        'chest_compression' : '',
                        'ecg_rythm' : '',
                        'dc_shock' : '',
                        'medication' : '',
                    },
                    '4' : {
                        'pulse' : '',
                        'bp' : '',
                        'spo2' : '',
                        'rr' : '',
                        'chest_compression' : '',
                        'ecg_rythm' : '',
                        'dc_shock' : '',
                        'medication' : '',
                    },
                    '5' : {
                        'pulse'  : '',
                        'bp'  : '',
                        'spo2'  : '',
                        'rr'  : '',
                        'chest_compression'  : '',
                        'ecg_rythm'  : '',
                        'dc_shock'  : '',
                        'medication'  : '',
                    },
                    '6' : {
                        'pulse'  : '',
                        'bp'  : '',
                        'spo2'  : '',
                        'rr'  : '',
                        'chest_compression'  : '',
                        'ecg_rythm'  : '',
                        'dc_shock'  : '',
                        'medication'  : '',
                    },
                    '7' : {
                        'pulse'  : '',
                        'bp'  : '',
                        'spo2'  : '',
                        'rr'  : '',
                        'chest_compression'  : '',
                        'ecg_rythm'  : '',
                        'dc_shock'  : '',
                        'medication'  : '',
                    },

                  },
                  'total_time' : '',
                  'outcome' : '',
                  'doctor_name' : '',
                  'remarks' : '',
                  'consultant_counseled' : '',
                  'relative_name' : '',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveCprFormat() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var cprFormatData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.cprFormatData};
				    	User.saveCprFormat(cprFormatData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('CPR details have been saved', 'CPR Format', {timeOut: 5000});
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
