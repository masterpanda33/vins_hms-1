<template>
  <div class="container">
  	<div class="page-header">
  		<div class="row">
  			<div class="col-md-6">
  				<h1>Counselling Form</h1>
  			</div>
  			<div class="col-md-6">
  				<div class="text-right">
  					DOC NO. F/IPD/63 <br>
  					REV. No. 0.1 <br>
  					WEF 10-04-2017
  				</div>
  			</div>
  		</div>
  	</div>
  	<hr>
  	<form action="" method="post">
      <div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>IPD No : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="ipd_no" v-model="ipd_id" value="" />
					</div>
				</div>
        <div class="col-md-6">
					<addressograph></addressograph>
				</div>
			</div>
  		<div class="row">
  			<table class="table table-bordered" >
  				<thead>
  					<tr>
  						<th class="text-center">Sr. No.</th>
  						<th class="text-center">Date</th>
  						<th class="text-center">Time</th>
  						<th class="text-center">Counsellor</th>
  						<th class="text-center">Name of Relatives</th>
  						<th class="text-center">Remarks</th>
  					</tr>
  				</thead>
  				<tbody>
  					<tr>
  						<td>1</td>
  						<td><input class="form-control" type="date" name="date_00" v-model="counsellingFormData.date_00" v-validate="'required'"/>
                <span class="help is-danger" v-show="errors.has('date_00')">
                  Field is required
                </span>
              </td>
  						<td><input class="form-control" type="time" name="time_00" v-model="counsellingFormData.time_00" v-validate="'required'"/>
                <span class="help is-danger" v-show="errors.has('time_00')">
                  Field is required
                </span>
              </td>
  						<td><input class="form-control" type="text" name="counsellor_00" v-model="counsellingFormData.counsellor_00" v-validate="'required'"/>
                <span class="help is-danger" v-show="errors.has('counsellor_00')">
                  Field is required
                </span>
              </td>
  						<td><input class="form-control" type="text" name="relatives_name_00" v-model="counsellingFormData.relatives_name_00" v-validate="'required'"/>
                <span class="help is-danger" v-show="errors.has('relatives_name_00')">
                  Field is required
                </span>
              </td>
  						<td><input class="form-control" type="text" name="remarks_00" v-model="counsellingFormData.remarks_00" v-validate="'required'"/>
                <span class="help is-danger" v-show="errors.has('remarks_00')">
                  Field is required
                </span>
              </td>
  					</tr>
  					<tr>
  						<td>2</td>
  						<td><input class="form-control" type="date" name="date_01" v-model="counsellingFormData.date_01" /></td>
  						<td><input class="form-control" type="time" name="time_01" v-model="counsellingFormData.time_01" /></td>
  						<td><input class="form-control" type="text" name="counsellor_01" v-model="counsellingFormData.counsellor_01" /></td>
  						<td><input class="form-control" type="text" name="relatives_name_01" v-model="counsellingFormData.relatives_name_01" /></td>
  						<td><input class="form-control" type="text" name="remarks_01" v-model="counsellingFormData.remarks_01" /></td>
  					</tr>
  					<tr>
  						<td>3</td>
  						<td><input class="form-control" type="date" name="date_02" v-model="counsellingFormData.date_02" /></td>
  						<td><input class="form-control" type="time" name="time_02" v-model="counsellingFormData.time_02" /></td>
  						<td><input class="form-control" type="text" name="counsellor_02" v-model="counsellingFormData.counsellor_02" /></td>
  						<td><input class="form-control" type="text" name="relatives_name_02" v-model="counsellingFormData.relatives_name_02" /></td>
  						<td><input class="form-control" type="text" name="remarks_02" v-model="counsellingFormData.remarks_02" /></td>
  					</tr>
  					<tr>
  						<td>4</td>
  						<td><input class="form-control" type="date" name="date_03" v-model="counsellingFormData.date_03" /></td>
  						<td><input class="form-control" type="time" name="time_03" v-model="counsellingFormData.time_03" /></td>
  						<td><input class="form-control" type="text" name="counsellor_03" v-model="counsellingFormData.counsellor_03" /></td>
  						<td><input class="form-control" type="text" name="relatives_name_03" v-model="counsellingFormData.relatives_name_03" /></td>
  						<td><input class="form-control" type="text" name="remarks_03" v-model="counsellingFormData.remarks_03" /></td>
  					</tr>
  					<tr>
  						<td>5</td>
  						<td><input class="form-control" type="date" name="date_04" v-model="counsellingFormData.date_04" /></td>
  						<td><input class="form-control" type="time" name="time_04" v-model="counsellingFormData.time_04" /></td>
  						<td><input class="form-control" type="text" name="counsellor_04" v-model="counsellingFormData.counsellor_04" /></td>
  						<td><input class="form-control" type="text" name="relatives_name_04" v-model="counsellingFormData.relatives_name_04" /></td>
  						<td><input class="form-control" type="text" name="remarks_04" v-model="counsellingFormData.remarks_04" /></td>
  					</tr>
  					<tr>
  						<td>6</td>
  						<td><input class="form-control" type="date" name="date_05" v-model="counsellingFormData.date_05" /></td>
  						<td><input class="form-control" type="time" name="time_05" v-model="counsellingFormData.time_05" /></td>
  						<td><input class="form-control" type="text" name="counsellor_05" v-model="counsellingFormData.counsellor_05" /></td>
  						<td><input class="form-control" type="text" name="relatives_name_05" v-model="counsellingFormData.relatives_name_05" /></td>
  						<td><input class="form-control" type="text" name="remarks_05" v-model="counsellingFormData.remarks_05" /></td>
  					</tr>
  				</tbody>
  			</table>
  		</div>
      <div class="row form-group">
        <div class="col text-center">
          <button class="btn btn-success" type="button" @click="saveCounsellingForm()">Submit</button>
        </div>
      </div>
  	</form>
  </div>
</template>
<script >
	import User from '../../../api/users.js';
  import addressograph from './addressograph.vue';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
								'type': 'counsellingForm',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'counsellingFormData' : {
                  'date_00':'',
                  'time_00':'',
                  'counsellor_00':'',
                  'relatives_name_00':'',
                  'remarks_00':'',
                  'date_01':'',
                  'time_01':'',
                  'counsellor_01':'',
                  'relatives_name_01':'',
                  'remarks_01':'',
                  'date_02':'',
                  'time_02':'',
                  'counsellor_02':'',
                  'relatives_name_02':'',
                  'remarks_02':'',
                  'date_03':'',
                  'time_03':'',
                  'counsellor_03':'',
                  'relatives_name_03':'',
                  'remarks_03':'',
                  'date_04':'',
                  'time_04':'',
                  'counsellor_04':'',
                  'relatives_name_04':'',
                  'remarks_04':'',
                  'date_05':'',
                  'time_05':'',
                  'counsellor_05':'',
                  'relatives_name_05':'',
                  'remarks_05':'',
                }
            }
        },
        components: {
           addressograph,
        },
        mounted() {
          console.log('asdasd')
        	this.$store.dispatch('SetPatientData',1);
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveCounsellingForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var Res = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.counsellingFormData};
				    	     User.saveCounsellingForm(Res).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Counselling Form Details have been saved', 'Counselling Form', {timeOut: 5000});
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
