<template>
  <div class="container">
  	<div class="page-header">
  		<div class="row">
  			<div class="col-md-6">
  			<h1>Adverse Drug Reaction Form</h1>
  			</div>
  			<div class="col-md-6">
  				<div class="text-right">
  					DOC NO. FMT/IPD/42 <br>
  					REV. No. 0.1 <br>
  					WEF 01-10-2014 <br>
  					PAGE NO. 01 OF 02
  				</div>
  			</div>
  		</div>
  	</div>
    <!-- jnmbnmb -->

  	<form action="" method="post">
      <div class="row form-group">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Name Of The Suspected Drug</th>
              <th>Reason For Use</th>
              <th> Dosage And Frequency </th>
              <th>Route of Administration</th>
              <th>Date of Starting</th>
              <th>Date of Cessation</th>
              <th>Manufacturer Name</th>
              <th>Lot And Expiry</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="n in 2">
              <td>
                <input class="form-control" type="text" v-model="adverseDrugReaction.suspectedDrug[n].name" :name="'name_'+n" value=""/>
                <span class="help is-danger" v-show="errors.has('name'+n)">
                	Field is required
              	</span>
              </td>
              <td>
                <input class="form-control" type="text" v-model="adverseDrugReaction.suspectedDrug[n].reason" :name="'reason_'+n" value=""/>
                <span class="help is-danger" v-show="errors.has('reason'+n)">
                	Field is required
              	</span>
              </td>
              <td>
                <input class="form-control" type="text" v-model="adverseDrugReaction.suspectedDrug[n].dosage_freq" :name="'dosage_freq_'+n" value=""/>
                <span class="help is-danger" v-show="errors.has('dosage_freq'+n)">
                	Field is required
              	</span>
              </td>
              <td>
                <input class="form-control" type="text" v-model="adverseDrugReaction.suspectedDrug[n].route" :name="'route_'+n" value=""/>
                <span class="help is-danger" v-show="errors.has('route'+n)">
                	Field is required
              	</span>
              </td>
              <td>
                <input class="form-control" type="date" v-model="adverseDrugReaction.suspectedDrug[n].date_start" :name="'date_start_'+n" value=""/>
                <span class="help is-danger" v-show="errors.has('date_start'+n)">
                	Field is required
              	</span>
              </td>
              <td>
                <input class="form-control" type="date" v-model="adverseDrugReaction.suspectedDrug[n].date_cessation" :name="'date_cessation_'+n" value=""/>
                <span class="help is-danger" v-show="errors.has('date_cessation'+n)">
                	Field is required
              	</span>
              </td>
              <td>
                <input class="form-control" type="text" v-model="adverseDrugReaction.suspectedDrug[n].manufacturer_name" :name="'manufacturer_name_'+n" value=""/>
                <span class="help is-danger" v-show="errors.has('manufacturer_name'+n)">
                	Field is required
              	</span>
              </td>
              <td>
                <input class="form-control" type="text" v-model="adverseDrugReaction.suspectedDrug[n].lot_expiry" :name="'lot_expiry_'+n" value=""/>
                <span class="help is-danger" v-show="errors.has('lot_expiry'+n)">
                	Field is required
              	</span>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Other Relavant History : </label>
        </div>
        <div class="col-md-6">
          <input type="text" v-model="adverseDrugReaction.relevant_history" name="relevant_history" />
        </div>
      </div>

      <div class="row">
        <h3>Other medications prescribed in patient:</h3>
      </div>

      <div class="row form-group">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Other Medications</th>
              <th>Dose and Frequency</th>
              <th>Route of Administration</th>
              <th>Time Of Administration</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="n in 4">
              <td><input class="form-control" type="text" v-model="adverseDrugReaction.otherMedication[n].other_medications" :name="'other_medications'+n" value=""/></td>
              <td><input class="form-control" type="text" v-model="adverseDrugReaction.otherMedication[n].dose_freq" :name="'dose_freq'+n" value=""/></td>
              <td><input class="form-control" type="text" v-model="adverseDrugReaction.otherMedication[n].route_administration" :name="'route_administration'+n" value=""/></td>
              <td><input class="form-control" type="time" v-model="adverseDrugReaction.otherMedication[n].time_administration" :name="'time_administration'+n" value=""/></td>
            </tr>

          </tbody>
        </table>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Description Of Adverse Drug Reaction:</label>
        </div>
        <div class="form-control">
          <input class="form-control" type="text" v-model="adverseDrugReaction.description" name="description" id="description" value="" />
        </div>
      </div>


      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Date Of Event:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="date" v-validate="'required'" v-model="adverseDrugReaction.date_event" name="date_event" id="date_event" value="" >
            <span class="help is-danger" v-show="errors.has('date_event')">
              Field is required
            </span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Date Of Report:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="date" v-validate="'required'" v-model="adverseDrugReaction.date_report" name="date_report" id="date_report" value="" >
            <span class="help is-danger" v-show="errors.has('date_report')">
              Field is required
            </span>
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Types of ADR:</label>
          </div>
          <div class="col-md-6">
            <select class="form-control" name="adr_types" v-model="adverseDrugReaction.adr_types">
              <option value="Mild">Mild</option>
              <option value="Moderate">Moderate</option>
              <option value="Severe">Severe</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Specification:</label>
          </div>
          <div class="col-md-6">
            <select class="form-control" name="specification" v-model="adverseDrugReaction.specification" >
              <option value="Mild">Mild</option>
              <option value="Moderate">Moderate</option>
              <option value="Severe">Severe</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Outcome Attributed to ADR:</label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="outcome_adr" v-validate="'required'" v-model="adverseDrugReaction.outcome_adr" >
            <option value="Death">Death</option>
            <option value="life_threatening">Life Threatening</option>
            <option value="birth_defect">Congenital Anomaly/Birth Defect</option>
            <option value="hospitalization">Hospitalization- Initial or Prolonged</option>
            <option value="other_serious_event">Other Serious Events</option>
            <option value="requred_intervention">Required Intervention to prevent permanent impairment</option>
          </select>
          <span class="help is-danger" v-show="errors.has('outcome_adr')">
            Field is required
          </span>
        </div>
      </div>

      <div class="row">
        <h3>TREATMENT OF REACATION:</h3>
      </div>
      <hr>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Remedical Medication given:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" v-validate="'required'" v-model="adverseDrugReaction.remedical_medication" name="remedical_medication" value=""  />
            <span class="help is-danger" v-show="errors.has('outcome_adr')">
              Field is required
            </span>
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Alteration(in dose, frequency) Discontinuation(if any) of Medication:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" v-model="adverseDrugReaction.alteration_medication" name="alteration_medication" id="alteration_medication" value=""  />
          </div>
        </div>
      </div>


      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Events Abated After Use Stopped or Dose Reduced ?:</label>
          </div>
          <div class="col-md-6">
            <select class="form-control" name="events_abated" v-model="adverseDrugReaction.events_abated" >
              <option value="Yes">Yes</option>
              <option value="No">No</option>
              <option value="NA">Doesn't Apply</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Events reappeared after Reintroduction ?:</label>
          </div>
          <div class="col-md-6">
            <select class="form-control" name="events_reappear" v-model="adverseDrugReaction.events_reappear " >
              <option value="">Yes</option>
              <option value="">No</option>
              <option value="">Doesn't Apply</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row form-group">
  			<div class="col-md-4">
  				<div class="col-md-6">
  					<label>Name of the Nurse Administration:</label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text"  v-validate="'required'" v-model="adverseDrugReaction.nurse_admin" name="nurse_admin" id="nurse_admin" value="" >
            <span class="help is-danger" v-show="errors.has('nurse_admin')">
              Field is required
            </span>
  				</div>
        </div>
  			<div class="col-md-4">
  				<div class="col-md-6">
  					<label>Unit/Ward:</label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text"  v-validate="'required'" v-model="adverseDrugReaction.unit_ward" name="unit_ward" id="unit_ward" value="" >
            <span class="help is-danger" v-show="errors.has('unit_ward')">
              Field is required
            </span>
  				</div>
        </div>
        <div class="col-md-4">
          <div class="col-md-6">
            <label>Name Of RMO/Consultant:</label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text"  v-validate="'required'" v-model="adverseDrugReaction.rmo" name="rmo" id="rmo" value="" >
            <span class="help is-danger" v-show="errors.has('rmo')">
              Field is required
            </span>
  				</div>
        </div>
      </div>
      <div class="row form-group text-center">
        <button class="btn btn-success" type="button" @click="saveAdverseDrugReaction()">Submit</button>
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
                'type': 'adverseDrugReaction',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'adverseDrugReaction' : {
                	'fname':'',
                  'relevant_history':'',
                  'suspectedDrug': {
                    '1': {
                      'name':'',
                      'reason':'',
                      'dosage_freq':'',
                      'route':'',
                      'date_start':'',
                      'date_cessation':'',
                      'manufacturer_name':'',
                      'lot_expiry':'',

                    },
                    '2': {
                      'name':'',
                      'reason':'',
                      'dosage_freq':'',
                      'route':'',
                      'date_start':'',
                      'date_cessation':'',
                      'manufacturer_name':'',
                      'lot_expiry':'',
                    },
                  },
                  'otherMedication': {
        						'1': {
                      'other_medications':'',
                      'dose_freq':'',
                      'route_administration':'',
                      'time_administration':'',

        						},
                    '2': {
                      'other_medications':'',
                      'dose_freq':'',
                      'route_administration':'',
                      'time_administration':'',

        						},
                    '3': {
                      'other_medications':'',
                      'dose_freq':'',
                      'route_administration':'',
                      'time_administration':'',

        						},
                    '4': {
                      'other_medications':'',
                      'dose_freq':'',
                      'route_administration':'',
                      'time_administration':'',

        						},
        					},
                  'description':'',
                  'date_event':'',
                  'date_report':'',
                  'adr_types':'',
                  'specification':'',
                  'outcome_adr':'',
                  'remedical_medication':'',
                  'alteration_medication':'',
                  'events_abated':'',
                  'events_reappear':'',
                  'nurse_admin':'',
                  'unit_ward':'',
                  'rmo':'',

                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveAdverseDrugReaction() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var adverseDrugReactionData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.adverseDrugReaction};
				    	User.saveAdverseDrugReaction(adverseDrugReactionData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Adverse Drug Reaction has been saved', 'Adverse Drug Reaction', {timeOut: 5000});
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
