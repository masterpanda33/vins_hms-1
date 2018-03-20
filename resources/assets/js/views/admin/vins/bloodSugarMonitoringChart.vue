<template>
  <div class="container">
  	<div class="page-header">
  		<div class="row">
  			<div class="col-md-6">
  			<h1>Blood Sugar Monitoring Chart</h1>
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
        <div class="col-md-4">
          <div class="col-md-6">
            <label>Patient's Name:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text"  v-validate="'required'" name="patient_name" v-model="bloodSugarMonitoringChart.patient_name" id="patient_name" value="" >
            <span class="help is-danger" v-show="errors.has('patient_name')">
              Field is required
            </span>
          </div>
        </div>
  			<div class="col-md-4">
  				<div class="col-md-6">
  					<label>Bed No:</label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text"  v-validate="'required'" name="bed_no" v-model="bloodSugarMonitoringChart.bed_no" id="bed_no" value="" >
            <span class="help is-danger" v-show="errors.has('bed_no')">
              Field is required
            </span>
  				</div>
        </div>
        <div class="col-md-4">
  			<div class="text-right">

  			<addressograph></addressograph>

  		</div></div>
      </div>

      <div class="row form-group">
  			<div class="col-md-4">
  				<div class="col-md-6">
  					<label>IPD No:</label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text"  v-validate="'required'" name="ipd_id" v-model="ipd_id" id="ipd_id" value="" >
            <span class="help is-danger" v-show="errors.has('ipd_id')">
              Field is required
            </span>
  				</div>
        </div>


  			<div class="col-md-4">
  				<div class="col-md-6">
  					<label>Age:</label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text"  v-validate="'required'" name="age" v-model="bloodSugarMonitoringChart.age" id="age" value="" >
            <span class="help is-danger" v-show="errors.has('age')">
              Field is required
            </span>
  				</div>
        </div>
        <div class="col-md-4">
          <div class="col-md-6">
  					<label>Sex:</label>
  				</div>
  				<div class="col-md-6">
  					<select class="form-control" name="sex" v-validate="'required'" v-model="bloodSugarMonitoringChart.sex" value="">
  						<option value="Male">Male</option>
  						<option value="Female">Female</option>
  					</select>
            <span class="help is-danger" v-show="errors.has('sex')">
              Field is required
            </span>
  				</div>
        </div>
      </div>

      <div class="row form-group"><hr>
  		  <table class="table table-bordered">
  		    <thead>
    			  <tr>
      				<th>Date</th>
      				<th>Time</th>
      				<th>Blood Sugar Level</th>
      				<th>Insulin(Unit)</th>
              <th>Name & Sign</th>
    			  </tr>
    			</thead>
    			<tbody>
            <tr v-for="n in 5">
              <td><input class="form-control ls-datepicker" type="text" id = "'date_'+n" :name="'date_'+n" v-model="bloodSugarMonitoringChart.monitoring[n].date" value=""/></td>
              <td><input class="form-control ls-timepicker" type="text" id = "'time_'+n" :name="'time_'+n" v-model="bloodSugarMonitoringChart.monitoring[n].time" value=""/></td>
              <td><input class="form-control" type="text" :name="'bloodsugar_level_'+n" v-model="bloodSugarMonitoringChart.monitoring[n].bloodsugar_level" value=""/></td>
              <td><input class="form-control" type="text" :name="'insulin_'+n" v-model="bloodSugarMonitoringChart.monitoring[n].insulin" value=""/></td>
              <td><input class="form-control" type="text" :name="'name_sign_'+n" v-model="bloodSugarMonitoringChart.monitoring[n].name_sign" value=""/></td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="row form-group text-center">
        <button class="form-group btn btn-success" type="button" @click="saveBloodSugarMonitoringChart()" >Submit</button>
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
                'type': 'bloodSugarMonitoringChart',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'bloodSugarMonitoringChart' : {
                  'patient_name': '',
                  'bed_no': '',
                  'age': '',
                  'sex': '',
                  'monitoring': {
                    '1': {
                      'date': '',
                      'time': '',
                      'bloodsugar_level': '',
                      'insulin': '',
                      'name_sign': '',
                    },
                    '2': {
                      'date': '',
                      'time': '',
                      'bloodsugar_level': '',
                      'insulin': '',
                      'name_sign': '',
                    },
                    '3': {
                      'date': '',
                      'time': '',
                      'bloodsugar_level': '',
                      'insulin': '',
                      'name_sign': '',
                    },
                    '4': {
                      'date': '',
                      'time': '',
                      'bloodsugar_level': '',
                      'insulin': '',
                      'name_sign': '',
                    },
                    '5': {
                      'date': '',
                      'time': '',
                      'bloodsugar_level': '',
                      'insulin': '',
                      'name_sign': '',
                    },
                  },


                }
            }
        },
        components: {
           addressograph,
       },

       			 mounted() {
                     $('.ls-datepicker').datepicker({
       				    format: 'dd/mm/yyyy',
       				    'autoclose': true
       					})
                $('.ls-timepicker').timepicker({
       			    format: 'hh-mm',
       			    'autoclose': true
       			})

                     let vm =this;
         			$('.ls-datepicker').datepicker().on('changeDate',function(){
         			    if(this.id == 'date_1'){
                    vm.bloodSugarMonitoringChart.monitoring[1].date = this.value;
                  }
                  if(this.id == 'date_2'){
                    vm.bloodSugarMonitoringChart.monitoring[2].date = this.value;
                  }
                  if(this.id == 'date_3'){
                    vm.bloodSugarMonitoringChart.monitoring[3].date = this.value;
                  }

                  if(this.id == 'date_4'){
                    vm.bloodSugarMonitoringChart.monitoring[4].date = this.value;
                  }
                  if(this.id == 'date_5'){
                    vm.bloodSugarMonitoringChart.monitoring[5].date = this.value;
                  }
         			})
              $('.ls-timepicker').on('change', function(e)  {
         				if(this.id == 'time_1'){
                  vm.bloodSugarMonitoringChart.monitoring[1].time = this.value;
                }
                if(this.id == 'time_2'){
                  vm.bloodSugarMonitoringChart.monitoring[2].time = this.value;
                }
                if(this.id == 'time_3'){
                  vm.bloodSugarMonitoringChart.monitoring[3].time = this.value;
                }
                if(this.id == 'time_4'){
                  vm.bloodSugarMonitoringChart.monitoring[4].time = this.value;
                }
                if(this.id == 'time_5'){
                  vm.bloodSugarMonitoringChart.monitoring[5].time = this.value;
                }

         			});

       				},

        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveBloodSugarMonitoringChart() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var bloodSugarMonitoringChart = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.bloodSugarMonitoringChart};
				    	User.saveBloodSugarMonitoringChart(bloodSugarMonitoringChart).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Blood Sugar Monitoring Details have been saved', 'Blood Sugar Monitoring Chart', {timeOut: 5000});
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
