<template>
  <div class="container">
  	<div class="page-header">
  		<div class="row">
  			<div class="col-md-6">
  			<h2>Doctor's Daily Notes</h2>
  			</div>
  			<div class="col-md-6">
  				<div class="text-right">
  					DOC NO. FMT/HIC/09 </br>
  					REV. No. 0.1 </br>
  					WEF 10-10-2015
  				</div>
  			</div>
  		</div>
  	</div>
<hr>
  	<form action="" method="post">


  		<div class="row form-group">
  			<div class="col-md-3">
  				<div class="col-md-6">
  					<label>Patient's name: </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" id="name" type="text" name="name" v-model="doctorsDailyNotesData.name" v-validate="'required'" value=""  >
            <span class="help is-danger" v-show="errors.has('name')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-3">
  				<div class="col-md-6">
  					<label>IPD No : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" id="ipd_no" type="text" name="ipd_id" v-model="ipd_id" v-validate="'required|numeric'" value="">
            <span class="help is-danger" v-show="errors.has('ipd_id')">
              Numeric Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-3">
  				<div class="col-md-6">
  					<label>Sex : </label>
  				</div>
  				<div class="col-md-6">
  					<select class="form-control" name="sex" v-model="doctorsDailyNotesData.sex" v-validate="'required'">
              <span class="help is-danger" v-show="errors.has('sex')">
                Field is required
              </span>
  						<option value="na" >NA</option>
  						<option value="male" >Male</option>
  						<option value="female" >Female</option>
  					</select>
  				</div>
  			</div>

        <div class="col-md-3">
        <div class="text-right">

        <addressograph></addressograph>

      </div></div>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-3">
  				<div class="col-md-6">
  					<label>Attending consultant: </label>
  				</div>
  				<div class="col-md-6">
  					<input type="text" class="form-control" id="attending_consultant" name="attending_consultant" v-model="doctorsDailyNotesData.attending_consultant" v-validate="'required'" value="">
            <span class="help is-danger" v-show="errors.has('attending_consultant')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-3">
  				<div class="col-md-6">
  					<label> Age : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" id="ipd_no" type="text" name="age" v-model="doctorsDailyNotesData.age" v-validate="'required'" value="">
            <span class="help is-danger" v-show="errors.has('age')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-3">
  				<div class="col-md-6">
  					<label>Date : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control ls-datepicker" type="text" name="date" v-model="doctorsDailyNotesData.date" v-validate="'required'" value="">
            <span class="help is-danger" v-show="errors.has('date')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<hr />
  		<div class="row">
  			<h3>7 AM S/B</h3>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>C/O : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="c_o_07" v-model="doctorsDailyNotesData.c_o_07" value=""/>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>O/E Pulse : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="oe_pulse_07" v-model="doctorsDailyNotesData.oe_pulse_07" value=""/>
  				</div>
  			</div>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>BP : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="bp_07" v-model="doctorsDailyNotesData.bp_07" value=""/>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Temprature : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="temp_07" v-model="doctorsDailyNotesData.temp_07" value=""/>
  				</div>
  			</div>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Resp / SPO2 : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="resp_spo2_07" v-model="doctorsDailyNotesData.resp_spo2_07" value=""/>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Pain : </label>
  				</div>
  				<div class="col-md-6">
  					<select class="form-control" name="pain_07" v-model="doctorsDailyNotesData.pain_07">
  						<option value="1" >1</option>
  						<option value="2" >2</option>
  						<option value="3" >3</option>
  						<option value="4" >4</option>
  						<option value="5" >5</option>
  						<option value="6" >6</option>
  					</select>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<h3>9 AM S/B</h3>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>C/O : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="c_o_09" v-model="doctorsDailyNotesData.c_o_09" value="" />
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>O/E Pulse : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="oe_pulse_09" v-model="doctorsDailyNotesData.oe_pulse_09" value="" />
  				</div>
  			</div>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>BP : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="bp_09" v-model="doctorsDailyNotesData.bp_09" value="" />
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Temprature : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="temp_09" v-model="doctorsDailyNotesData.temp_09" value="" />
  				</div>
  			</div>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Resp / SPO2 : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="resp_spo2_09" v-model="doctorsDailyNotesData.resp_spo2_09" value="" />
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Pain : </label>
  				</div>
  				<div class="col-md-6">
  					<select class="form-control" name="pain_09" v-model="doctorsDailyNotesData.pain_09">
  						<option value="1" >1</option>
  						<option value="2" >2</option>
  						<option value="3" >3</option>
  						<option value="4" >4</option>
  						<option value="5" >5</option>
  						<option value="6" >6</option>
  					</select>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<h3>3 PM S/B</h3>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>C/O : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="c_o_15" v-model="doctorsDailyNotesData.c_o_15" value=""  />
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>O/E Pulse : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="oe_pulse_15" v-model="doctorsDailyNotesData.oe_pulse_15" value=""  />
  				</div>
  			</div>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>BP : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="bp_15" v-model="doctorsDailyNotesData.bp_15" value=""  />
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Temprature : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="temp_15" v-model="doctorsDailyNotesData.temp_15" value=""  />
  				</div>
  			</div>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Resp / SPO2 : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="resp_spo2_15" v-model="doctorsDailyNotesData.resp_spo2_15" value=""  />
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Pain : </label>
  				</div>
  				<div class="col-md-6">
  					<select class="form-control" name="pain_15" v-model="doctorsDailyNotesData.pain_15">
  						<option value="1" >1</option>
  						<option value="2" >2</option>
  						<option value="3" >3</option>
  						<option value="4" >4</option>
  						<option value="5" >5</option>
  						<option value="6" >6</option>
  					</select>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<h3>9 PM S/B</h3>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>C/O : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="c_o_21" v-model="doctorsDailyNotesData.c_o_21" value=""/>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>O/E Pulse : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="oe_pulse_21" v-model="doctorsDailyNotesData.oe_pulse_21" value=""/>
  				</div>
  			</div>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>BP : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="bp_21" v-model="doctorsDailyNotesData.bp_21" value=""/>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Temprature : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="temp_21" v-model="doctorsDailyNotesData.temp_21" value=""/>
  				</div>
  			</div>
  		</div>
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Resp / SPO2 : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="resp_spo2_21" v-model="doctorsDailyNotesData.resp_spo2_21" value=""/>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Pain : </label>
  				</div>
  				<div class="col-md-6">
  					<select class="form-control" name="pain_21" v-model="doctorsDailyNotesData.pain_21">
  						<option value="1" >1</option>
  						<option value="2" >2</option>
  						<option value="3" >3</option>
  						<option value="4" >4</option>
  						<option value="5" >5</option>
  						<option value="6" >6</option>
  					</select>
  				</div>
  			</div>
  		</div>
  		<div class="text-center form-group">
  			<button class="btn btn-success" type="button" @click="saveDoctorsDailyNotes()" >Submit</button>
  		</div>
  	</form>
      <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal>
  </div>
</template>
<script >
	import User from '../../../api/users.js';
  import addressograph from './addressograph.vue';
  import SelectPatientModal from '../../../components/SelectPatientModal.vue';

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'type': 'doctorsDailyNotes',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'doctorsDailyNotesData' : {
                  'name': '',
                  'ipd_no': '',
                  'sex': '',
                  'attending_consultant': '',
                  'age': '',
                  'date': '',
                  'c_o_07': '',
                  'oe_pulse_07': '',
                  'bp_07': '',
                  'temp_07': '',
                  'resp_spo2_07': '',
                  'pain_07': '',
                  'c_o_09': '',
                  'oe_pulse_09': '',
                  'bp_09': '',
                  'temp_09': '',
                  'resp_spo2_09': '',
                  'pain_09': '',
                  'c_o_15': '',
                  'oe_pulse_15': '',
                  'bp_15': '',
                  'temp_15': '',
                  'resp_spo2_15': '',
                  'pain_15': '',
                  'c_o_21': '',
                  'oe_pulse_21': '',
                  'bp_21': '',
                  'temp_21': '',
                  'resp_spo2_21': '',
                  'pain_21': '',
                }
            }
        },
        components: {
           addressograph,
           SelectPatientModal
       },
       mounted() {
         $('.ls-datepicker').datepicker({
         format: 'dd/mm/yyyy',
         'autoclose': true
        })
          if(this.ipd_id == 0){
            $('#delete_modal').modal('show');
         }
       },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveDoctorsDailyNotes() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var doctorsDailyNotesData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.doctorsDailyNotesData};
				    	User.saveDoctorsDailyNotes(doctorsDailyNotesData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Doctors Daily Notes have been saved', 'Doctors Daily Notes', {timeOut: 5000});
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
