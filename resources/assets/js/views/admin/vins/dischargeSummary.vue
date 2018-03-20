<template id="">
  <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col-md-6">
          <h1>Discharge Summary</h1>
        </div>
      </div>
    </div>

    <form action="" method="post">
      <div class="row form-group">
        <div class="col-md-8">
          <div class="col-md-2">
            <label>IPD No. : </label>
          </div>
          <div class="col-md-4">
            <input class="form-control" name="ipd_id" type="text" v-model="ipd_id" v-validate="'required|numeric'"  />
            <span class="help is-danger" v-show="errors.has('ipd_id')">
              Numeric only.
            </span>
          </div>
        </div>
        <div class="col-md-4">
    			<addressograph></addressograph>
    		</div>
      </div>
      <div class="row form-group">
        <div class="col-md-8">
          <div class="row form-group">
            <div class="col-md-4">
              <label class="control-label" for="address">Date of Admission :</label>
            </div>
            <div class="col-md-8">
              <input  class="form-control ls-datepicker" type="text" name="date_of_admission" id = "date_of_admission" v-model="dischargeSummaryData.date_of_admission" v-validate="'required'"  value="">
              <span class="help is-danger" v-show="errors.has('date_of_admission')">
                Field is required
              </span>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label class="control-label" for="address">Date of Operation :</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control ls-datepicker" name="date_of_operation" id = "date_of_operation" v-model="dischargeSummaryData.date_of_operation" v-validate="'required'"  value="">
              <span class="help is-danger" v-show="errors.has('date_of_operation')">
                Field is required
              </span>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-4">
              <label class="control-label" for="date_of_discharge">Date of Discharge :</label>
            </div>
            <div class="col-md-8">
              <input class="form-control ls-datepicker" type="text" name="date_of_discharge" id = "date_of_discharge" v-model="dischargeSummaryData.date_of_discharge" v-validate="'required'"  value="">
              <span class="help is-danger" v-show="errors.has('date_of_discharge')">
                Field is required
              </span>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label" for="">Diagnosis :</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="diagnosis" v-model="dischargeSummaryData.diagnosis" v-validate="'required'" class="form-control" value="">
          <span class="help is-danger" v-show="errors.has('diagnosis')">
            Field is required
          </span>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label" for="">ICD Code :</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="icd" v-model="dischargeSummaryData.icd" v-validate="'required'" class="form-control" value="">
          <span class="help is-danger" v-show="errors.has('icd')">
            Field is required
          </span>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label>Operation Performed : </label>
        </div>
        <div class="col-md-6">
          <input type="text"  name="operation_performed" v-model="dischargeSummaryData.operation_performed" v-validate="'required'" class="form-control" value="">
          <span class="help is-danger" v-show="errors.has('operation_performed')">
            Field is required
          </span>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label>Consultants Involved : </label>
        </div>
        <div class="col-md-6">
          <textarea name="consultants_involved" v-model="dischargeSummaryData.consultants_involved" v-validate="'required'" rows="3" class="form-control"></textarea>
          <span class="help is-danger" v-show="errors.has('consultants_involved')">
            Field is required
          </span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Anaesthesiologist : </label>
        </div>
        <div class="col-md-6">
          <input type="text"  name="anaesthesiologist" v-model="dischargeSummaryData.anaesthesiologist" v-validate="'required'" class="form-control" value="">
          <span class="help is-danger" v-show="errors.has('anaesthesiologist')">
            Field is required
          </span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Clinical History : </label>
        </div>
        <div class="col-md-6">
          <textarea name="clinical_history" v-model="dischargeSummaryData.clinical_history" v-validate="'required'" rows="4" class="form-control"></textarea>
          <span class="help is-danger" v-show="errors.has('clinical_history')">
            Field is required
          </span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Investigation : </label>
        </div>
        <div class="col-md-6">
          <textarea name="investigation" v-model="dischargeSummaryData.investigation" v-validate="'required'" rows="4" class="form-control"></textarea>
          <span class="help is-danger" v-show="errors.has('investigation')">
            Field is required
          </span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Course in Hospital : </label>
        </div>
        <div class="col-md-6">
          <textarea name="course_in_hospital" v-model="dischargeSummaryData.course_in_hospital" v-validate="'required'" rows="4" class="form-control"></textarea>
          <span class="help is-danger" v-show="errors.has('course_in_hospital')">
            Field is required
          </span>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Treatment on Discharge : </label>
        </div>
        <div class="col-md-6">
          <textarea name="treatment_on_discharge" v-model="dischargeSummaryData.treatment_on_discharge" v-validate="'required'" rows="4" class="form-control"></textarea>
          <span class="help is-danger" v-show="errors.has('treatment_on_discharge')">
            Field is required
          </span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label">Preventive Aspect :</label>
        </div>
        <div class="col-md-6">
          <textarea name="preventive_aspect" v-model="dischargeSummaryData.preventive_aspect" v-validate="'required'" rows="3" class="form-control" value=""></textarea>
          <span class="help is-danger" v-show="errors.has('preventive_aspect')">
            Field is required
          </span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label" for="address">Followup :</label>
        </div>
        <div class="col-md-6">
          <textarea name="followup" v-model="dischargeSummaryData.followup" v-validate="'required'" rows="3" class="form-control" value=""></textarea>
          <span class="help is-danger" v-show="errors.has('followup')">
            Field is required
          </span>
        </div>
      </div>

      <div class="form-group text-center">
        <button class="btn btn-success" type="button" @click="saveDischargeSummary()" >Submit</button>
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
                'type': 'dischargeSummary',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'dischargeSummaryData' : {
                  'date_of_admission' : '',
                  'date_of_operation' : '',
                  'date_of_discharge' : '',
                  'addressograph' : '',
                  'diagnosis' : '',
                  'icd' : '',
                  'operation_performed' : '',
                  'consultants_involved' : '',
                  'anaesthesiologist' : '',
                  'clinical_history' : '',
                  'investigation' : '',
                  'course_in_hospital' : '',
                  'treatment_on_discharge' : '',
                  'preventive_aspect' : '',
                  'followup' : '',
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
      $('.ls-datepicker').datepicker().on('changeDate',function(){
        if(this.id ==  'date_of_admission'){
            vm.dischargeSummaryData.date_of_admission = this.value;
        }
      })
      $('.ls-datepicker').datepicker().on('changeDate',function(){
        if(this.id ==  'date_of_operation'){
            vm.dischargeSummaryData.date_of_operation = this.value;
        }
      })
      $('.ls-datepicker').datepicker().on('changeDate',function(){
        if(this.id ==  'date_of_discharge'){
            vm.dischargeSummaryData.date_of_discharge = this.value;
        }
      })
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveDischargeSummary() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var dischargeSummaryData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.dischargeSummaryData};
				    	User.saveDischargeSummary(dischargeSummaryData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Discharge Summary has been saved', 'Discharge Summary', {timeOut: 5000});
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
