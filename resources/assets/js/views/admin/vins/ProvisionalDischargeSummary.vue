<template>
<div class="container">
  <div class="page-header">
    <div class="row">
      <div class="col-md-6">
      <h1>Provisional Discharge Summary</h1>
      </div>
      <div class="col-md-6">
        <div class="text-right">
          DOC NO. F/IPD/09 <br>
          REV. No. 0.1 <br>
          WEF 25-03-2017
        </div>
      </div>
    </div>
  </div>

	<form action="" method="post">

          <div class="row form-group">
            <div class="col-md-12">
            <div class="text-right">

            <addressograph></addressograph>

            </div></div>
          </div>
          <hr>
          <div class="row form-group">
            <div class="col-md-4">
            <div class="col-md-4">
              <label class="control-label" for="address">Address :</label>
            </div>
            <div class="col-md-8">
              <input type="text" name="address"  rows="3" class="form-control" value="" v-model="provisionalDischargeSummaryData.address">
            </div></div>
            <div class="col-md-4">
            <div class="col-md-4">
              <label class="control-label" for="date_of_discharge">Date of Discharge :</label>
            </div>
            <div class="col-md-6">
              <input type="text"  name="date_of_discharge" class="form-control ls-datepicker" value="" v-model="provisionalDischargeSummaryData.date_of_discharge">
            </div></div>


        <div class="col-md-4">
  				<div class="col-md-4">
  					<label>IPD No:</label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text"  v-validate="'required'" name="ipd_id" v-model="ipd_id" id="ipd_id" value="" >
            <span class="help is-danger" v-show="errors.has('ipd_id')">
              Field is required
            </span>
  				</div>
        </div></div>

			<hr>
			<div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Referred By : </label>
          </div>
          <div class="col-md-6">
            <input type="text"  name="ref_by" class="form-control" value="" v-model="provisionalDischargeSummaryData.ref_by">
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Room No. : </label>
          </div>
          <div class="col-md-6">
            <input type="text"  name="room_no" class="form-control" value="" v-model="provisionalDischargeSummaryData.room_no">
          </div>
        </div>
			</div>
      <hr>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="address">Diagnosis :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="diagnosis"  rows="3" class="form-control" value="" v-model="provisionalDischargeSummaryData.diagnosis">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="address">Condition on discharge :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="condition_on_discharge"  rows="3" class="form-control" value="" v-model="provisionalDischargeSummaryData.condition_on_discharge">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="address">Advice on discharge :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="advice_on_discharge"  rows="4" class="form-control" value="">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="address">Followup :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="followup"  rows="2" class="form-control" value="" v-model="provisionalDischargeSummaryData.followup">
        </div>
      </div>

      <div class="row form-group">
        <h3>Collect final discharge summary</h3>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label" for="collect_discharge_summary_on">On Date:</label>
        </div>
        <div class="col-md-6">
          <input type="date"  name="collect_discharge_summary_on" class="form-control" value="" v-model="provisionalDischargeSummaryData.collect_discharge_summary_on">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label" for="collect_discharge_summary_at">At:</label>
        </div>
        <div class="col-md-6">
          <input type="text"  name="collect_discharge_summary_at" class="form-control" value="" v-model="provisionalDischargeSummaryData.collect_discharge_summary_at">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label" for="collect_discharge_summary_from">From:</label>
        </div>
        <div class="col-md-6">
          <input type="text"  name="collect_discharge_summary_from" class="form-control" value="" v-model="provisionalDischargeSummaryData.collect_discharge_summary_from">
        </div>
      </div>

			<div class="form-group text-center">
				<button class="btn btn-success" type="button" @click = "saveProvisionalDischargeSummary()">Submit</button>
			</div>
		</form>
     <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal>
	</div>
</body>
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
                'type': 'provisionalDischargeSummary',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'provisionalDischargeSummaryData' : {
                    'address' :'',
                    'date_of_discharge' :'',
                    'addressograph' :'',
                    'ref_by' :'',
                    'room_no' :'',
                    'diagnosis' :'',
                    'condition_on_discharge' :'',
                    'advice_on_discharge' :'',
                    'followup' :'',
                    'collect_discharge_summary_on' :'',
                    'collect_discharge_summary_at' :'',
                    'collect_discharge_summary_from' :'',
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
		    saveProvisionalDischargeSummary() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var provisionalDischargeSummaryData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.provisionalDischargeSummaryData};
				    	User.saveProvisionalDischargeSummary(provisionalDischargeSummaryData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Patient details have been saved', 'patient detail', {timeOut: 5000});
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
