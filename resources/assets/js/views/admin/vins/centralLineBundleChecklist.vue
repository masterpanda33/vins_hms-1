<template>
  <div class="container">
      <div class="page-header">
    	   <div class="row">
    	 	       <div class="col-md-6">
    			         <h1>Central Line Bundle Checklist</h1>
    		        </div>
    	   </div>
      </div>
    <hr>
    <form class="" action="" method="post">
      <div class="row">
				
					 <div class="col-md-6">
						    
					   </div>
            <div class="col-md-6">
              <div class="text-right">
                <addressograph></addressograph>
              </div>
  				    
  			     </div>
        <div class="row form-group">
            <table class="table table-bordered">
              <thead>
      		      <tr>
          				<th>Sr. No.</th>
          				<th>Practice</th>
          				<th class="text-center">Observation</th>
      		      </tr>
      		    </thead>
      		    <tbody>
      	         <tr>
              	    <td>1</td>
              			<td>Hand hygiene-6 steps disinfection, PPE before task</td>
              			<td class="text-center"><input type="checkbox" name="hand_hygiene" v-model="CentralLineBundleChecklistData.hand_hygiene" id="hand_hygiene" value="yes"></td>
      	         </tr>
      	         <tr>
      	           <td>2</td>
      			       <td>Site preparation & Dressing changes using Povidine iodine / 2% Chlorhexidine</td>
      			       <td class="text-center"><input type="checkbox" name="site_preparation" v-model="CentralLineBundleChecklistData.site_preparation" id="site_preparation" value="yes"></td>
      	         </tr>
      	         <tr>
              	    <td>3</td>
              			<td>Site Labelled - Date & Time</td>
              			<td class="text-center"><input type="checkbox" name="site_labelled" v-model="CentralLineBundleChecklistData.site_labelled" id="site_labelled" value="yes"></td>
      	         </tr>
      	         <tr>
              	    <td>4</td>
              			<td>Daily review of line necessity / Prompt removal</td>
              			<td class="text-center"><input type="checkbox" name="daily_review" v-model="CentralLineBundleChecklistData.daily_review" id="daily_review" value="yes"></td>
      	         </tr>
      	         <tr>
              	    <td>5</td>
              			<td>Inspection dressing Intact / Dampened / Loosened / Soiled</td>
              			<td class="text-center"><input type="checkbox" name="inspection_dressing" v-model="CentralLineBundleChecklistData.inspection_dressing" id="inspection_dressing" value="yes"></td>
      	         </tr>
          	  <tr>
          	    <td>6</td>
          			<td>Redness / Swelling / Pus / Phlebitis</td>
          			<td class="text-center"><input type="checkbox" name="redness_swelling" v-model="CentralLineBundleChecklistData.redness_swelling" id="redness_swelling" value="yes"></td>
          	  </tr>

          	  <tr>
          	    <td>7</td>
          			<td>Dressing Change - Transparent 7 days or when required /Gauze every 24-48 hrs</td>
          			<td class="text-center"><input type="checkbox" name="dressing_change" v-model="CentralLineBundleChecklistData.dressing_change" id="dressing_change" value="yes"></td>
          	  </tr>

          	  <tr>
          	    <td>8</td>
          			<td>Flushing by ACL Single Use Prefilled 0.9% NS (Posiflush) / Single Use sterile NS Vials.</td>
          			<td class="text-center"><input type="checkbox" name="flushing_by_acl" v-model="CentralLineBundleChecklistData.flushing_by_acl" id="flushing_by_acl" value="yes"></td>
          	  </tr>

          	  <tr>
          	    <td>9</td>
          			<td>Disinfect top of vial/bag before withdrawing medicine</td>
          			<td class="text-center"><input type="checkbox" name="disinfect_top_of_vial" v-model="CentralLineBundleChecklistData.disinfect_top_of_vial" id="disinfect_top_of_vial" value="yes"></td>
          	  </tr>

          	  <tr>
          	    <td>10</td>
          			<td>Alcohol disinfection of hub before each access</td>
          			<td class="text-center"><input type="checkbox" name="alcohol_disinfection_of_hub" v-model="CentralLineBundleChecklistData.alcohol_disinfection_of_hub" id="alcohol_disinfection_of_hub" value="yes"></td>
          	  </tr>

          	  <tr>
          	    <td>11</td>
          			<td>Date of administration set - Change Intermittent - 24 hrs, Continuous - 48 -72 hrs, Blood 4hrs, TPN - 24hrs.</td>
          			<td class="text-center"><input type="checkbox" name="date_of_administration_set" v-model="CentralLineBundleChecklistData.date_of_administration_set" id="date_of_administration_set" value="yes"></td>
          	  </tr>

          	  <tr>
          	    <td>12</td>
          			<td>Clamping of unused lines.</td>
          			<td class="text-center"><input type="checkbox" name="clampin_of_unused_lines" v-model="CentralLineBundleChecklistData.clampin_of_unused_lines" id="clampin_of_unused_lines" value="yes"></td>
          	  </tr>

          	  <tr>
          	    <td>13</td>
          			<td>Use of split septum closed connectors (e.g Q syte)</td>
          			<td class="text-center"><input type="checkbox" name="use_of_split_septum" v-model="CentralLineBundleChecklistData.use_of_split_septum" id="use_of_split_septum" value="yes"></td>
          	  </tr>

          	  <tr>
          	    <td>14</td>
          			<td>Culture & Sensitivity Report</td>
          			<td class="text-center"><input type="checkbox" name="culture_sensitivity_report" v-model="CentralLineBundleChecklistData.culture_sensitivity_report" id="culture_sensitivity_report" value="yes"></td>
          	  </tr>

          	  <tr>
          	    <td>15</td>
          			<td>Antibiotics</td>
          			<td class="text-center"><input type="checkbox" name="antibiotics" v-model="CentralLineBundleChecklistData.antibiotics" id="antibiotics" value="yes"></td>
          	  </tr>
      	</tbody>
        </table>
      </div>

      <div class="row form-group">
        <div class="col text-center">
          <button type="button" name="" class="btn btn-success" @click="saveCentralLineBundleChecklist()">Submit</button>
        </div>
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
                'type': 'centralLineBundleChecklist',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'CentralLineBundleChecklistData' : {
                  'hand_hygiene':'',
                  'site_preparation':'',
                  'site_labelled':'',
                  'daily_review':'',
                  'inspection_dressing':'',
                  'redness_swelling':'',
                  'dressing_change':'',
                  'flushing_by_acl':'',
                  'disinfect_top_of_vial':'',
                  'alcohol_disinfection_of_hub':'',
                  'date_of_administration_set':'',
                  'clampin_of_unused_lines':'',
                  'use_of_split_septum':'',
                  'culture_sensitivity_report':'',
                  'antibiotics':'',
                }
            }
        },
        components: {
					 addressograph,
           SelectPatientModal
			 },
       mounted(){
          // if(this.ipd_id == 0){
                $('#delete_modal').modal('show');
          // }
       },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        saveCentralLineBundleChecklist() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
									 var Res = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.CentralLineBundleChecklistData};
                   User.saveCentralLineBundleChecklist(Res).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Central Line Bundle Checklist has been saved', 'Central Line Bundle Checklist', {timeOut: 5000});
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
