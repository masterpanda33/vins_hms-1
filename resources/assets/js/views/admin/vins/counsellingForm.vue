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
  	<form>
      <div class="row form-group">
        <div class="col-md-8">
          <div class="col-md-6">
            <label>IPD : </label>
          </div>
          <div class="col-md-4">
            <input class="form-control" name="ipd_id" type="text" id="ipd_id" v-model="ipd_id" v-validate="'required|numeric'"/>
            <span class="help is-danger" v-show="errors.has('ipd_id')">
              Numeric values only.
            </span>
          </div>
        </div>
        <div class="col-md-4">
  				<addressograph></addressograph>
  			</div>
      </div>
  		<div class="table-responsive">
  			<table class="table table-bordered table-striped" >
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
  					<tr v-for="n in 5">
  						<td>{{n}}</td>
  						<td><input class="form-control" type="date" :name="'date_'+n" v-model="counsellingFormData.counselling[n].date" /></td>
  						<td><input class="form-control" type="time" :name="'time_'+n" v-model="counsellingFormData.counselling[n].time" /></td>
  						<td><input class="form-control" type="text" :name="'counsellor_'+n" v-model="counsellingFormData.counselling[n].counsellor" /></td>
  						<td><input class="form-control" type="text" :name="'relatives_name_'+n" v-model="counsellingFormData.counselling[n].relatives_name" /></td>
  						<td><input class="form-control" type="text" :name="'remarks_'+n" v-model="counsellingFormData.counselling[n].remarks" /></td>
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
                'type': 'counsellingForm',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'counsellingFormData' : {
                  'counselling' : {
                    '1' : {
                      'date':'',
                      'time':'',
                      'counsellor':'',
                      'relatives_name':'',
                      'remarks':'',
                    },
                    '2' : {
                      'date':'',
                      'time':'',
                      'counsellor':'',
                      'relatives_name':'',
                      'remarks':'',
                    },
                    '3' : {
                      'date':'',
                      'time':'',
                      'counsellor':'',
                      'relatives_name':'',
                      'remarks':'',
                    },
                    '4' : {
                      'date':'',
                      'time':'',
                      'counsellor':'',
                      'relatives_name':'',
                      'remarks':'',
                    },
                    '5' : {
                      'date':'',
                      'time':'',
                      'counsellor':'',
                      'relatives_name':'',
                      'remarks':'',
                    },

                  },

                }
            }
        },
        components: {
					 addressograph,
           SelectPatientModal,
			 },
       mounted(){
          if(this.ipd_id == 0){
                $('#delete_modal').modal('show');
          }
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
                   var counsellingFormData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.counsellingFormData};
				    	User.saveCounsellingForm(counsellingFormData).then(
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
