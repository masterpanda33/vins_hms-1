<template>
  <div class="container">
  	<div class="page-header">
  		<div class="row">
  			<div class="col-md-6">
  				<h1>Counselling Form</h1>
  			</div>
  		</div>
  	</div>
  	<hr>
  	<form>
      <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
  				<div class="text-right">
            <addressograph></addressograph>
          </div>
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

  						<td><input class="form-control ls-datepicker" type="text" :id = "'date_'+n" :name="'date_'+n" v-model="counsellingFormData.counselling[n].date" /></td>
  						<td><input class="form-control ls-timepicker" type="text" :id = "'tim e_'+n" :name="'time_'+n" v-model="counsellingFormData.counselling[n].time" /></td>

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

       mounted() {
          // if(this.ipd_id == 0){
            $('#delete_modal').modal('show');
          // }
          $('.ls-timepicker').timepicker({
            format: 'hh-mm',
                     'autoclose': true
           })
           $('.ls-datepicker').datepicker({
             format: 'dd/mm/yy',
             'autoclose': true
          })

         let vm =this;
         $('.ls-timepicker').timepicker().on('change',function(){

           if (this.id == 'time_1') {
             vm.counsellingFormData.counselling[1].time = this.value;
           }
           if (this.id == 'time_2') {
             vm.counsellingFormData.counselling[2].time = this.value;
           }
           if (this.id == 'time_3') {
             vm.counsellingFormData.counselling[3].time = this.value;
           }
           if (this.id == 'time_4') {
            vm.counsellingFormData.counselling[4].time = this.value;
           }
           if (this.id == 'time_5') {
             vm.counsellingFormData.counselling[5].time = this.value;
           }
       })
       $('.ls-datepicker').datepicker().on('changeDate',function(){

         if (this.id == 'date_1') {
           vm.counsellingFormData.counselling[1].date = this.value;
         }
         if (this.id == 'date_2') {
           vm.counsellingFormData.counselling[2].date = this.value;
         }
         if (this.id == 'date_3') {
           vm.counsellingFormData.counselling[3].date = this.value;
         }
         if (this.id == 'date_4') {
          vm.counsellingFormData.counselling[4].date = this.value;
         }
         if (this.id == 'date_5') {
           vm.counsellingFormData.counselling[5].date = this.value;
         }
     })

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
