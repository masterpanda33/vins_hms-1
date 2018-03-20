<template>
  <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col-md-6">
        <h1>Doctor's Handover</h1>
        </div>
        <div class="col-md-6">
          <div class="text-right">
            DOC NO. F/IPD/62 <br>
            REV. No. 0.0 <br>
            WEF 25-02-2017
          </div>
        </div>
      </div>
    </div>

    <hr>

    <form action="" method = "post">
      <div class="row form-group">
        <div class="col-md-4">
          <div class="row">
            <div class="col">
              <label for="diagnosis" class="control-label">Diagnosis: </label>
            </div>
            <div class="col">
              <textarea  class="form-control" rows="3" v-validate="'required'" id = "diagnosis" name="diagnosis" value=""  v-model="doctorsHandoverData.diagnosis"> </textarea>
              <span class="help is-danger" v-show="errors.has('diagnosis')">
                Field is required
              </span>
            </div>
          </div>
        </div>
  			<div class="col-md-4">
  				<div class="row">
  					<div class="col">
  						<label for="">IPD No.</label>
  					</div>
  					<div class="col">
  						<input type="text" name="ipd_no" class="form-control" v-model="ipd_id" v-validate="'required|numeric'">
  						<span class="help is-danger" v-show="errors.has('ipd_no')">
  							Numeric Field is required
  						</span>
  					</div>
  				</div>
  			</div>
        <div class="col-md-4">
        <div class="text-right">

        <addressograph></addressograph>

      </div></div>
      </div>
      <hr>
      <div class="row form-group">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center">Sr. No.</th>
              <th class="text-center">Particulars</th>
              <th class="text-center">
                <select class="form-control" v-validate="'required'" id = "day_night" name="day_night" value=""  v-model="doctorsHandoverData.day_night">
                  <option value="day">Day</option>
                  <option value="night">Night</option>
                </select>
                <span class="help is-danger" v-show="errors.has('day_night')">
                          Field is required
                </span>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>Patient is surgical/conservative</td>
              <td>
                <select class="form-control" v-validate="'required'" id = "surgical" name="surgical" value=""  v-model="doctorsHandoverData.surgical">
                  <option value="conservative">Conservative</option>
                  <option value="surgical">Surgical</option>
                </select>
                <span class="help is-danger" v-show="errors.has('surgical')">
                          Field is required
                        </span>
              </td>

            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>If patient is surgical then tentative date of surgery</td>
              <td><input class="form-control" type = "text" v-validate="'required'" id = "tentative_date_of_surgery" name="tentative_date_of_surgery" value=""  v-model="doctorsHandoverData.tentative_date_of_surgery"/>
              <span class="help is-danger" v-show="errors.has('tentative_date_of_surgery')">
                        Field is required
                      </span></td>

            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>Please mention date of surgery performed (If surgery performed)</td>
              <td><input class="form-control ls-datepicker" type = "text" v-validate="'required'" id = "date_of_surgery" name="date_of_surgery" value=""  v-model="doctorsHandoverData.date_of_surgery"/>
              <span class="help is-danger" v-show="errors.has('date_of_surgery')">
                        Field is required
                      </span></td>

            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>Physician's reference</td>
              <td><input class="form-control" type = "text" v-validate="'required'" id = "physician_reference" name="physician_reference" value=""  v-model="doctorsHandoverData.physician_reference"/>
              <span class="help is-danger" v-show="errors.has('physician_reference')">
                        Field is required
                      </span></td>

            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>Any other specialist's reference</td>
              <td><input class="form-control" type = "text" v-validate="'required'" id = "other_physician_reference" name="other_physician_reference" value=""  v-model="doctorsHandoverData.other_physician_reference"/>
              <span class="help is-danger" v-show="errors.has('other_physician_reference')">
                        Field is required
                      </span></td>

            </tr>
            <tr>
              <td class="text-center">6</td>
              <td>Pathological investigation to be done</td>
              <td>
                 <select class="form-control" v-validate="'required'" id = "pathological_investigation_done" name="pathological_investigation_done" value=""  v-model="doctorsHandoverData.pathological_investigation_done">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select><span class="help is-danger" v-show="errors.has('pathological_investigation_done')">
                          Field is required
                        </span>
              </td>
            </tr>
            <tr>
              <td class="text-center">7</td>
              <td>Reports of pathological investigation to be collected</td>
              <td>
                 <select class="form-control" v-validate="'required'" id = "pathological_investigation_collected" name="pathological_investigation_collected" value=""  v-model="doctorsHandoverData.pathological_investigation_collected">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
                <span class="help is-danger" v-show="errors.has('pathological_investigation_collected')">
                          Field is required
                        </span>
              </td>

            </tr>
            <tr>
              <td class="text-center">8</td>
              <td>Radiological investigation to be done</td>
              <td>
                   <select class="form-control" v-validate="'required'" id = "radiological_investigation_done" name="radiological_investigation_done" value=""  v-model="doctorsHandoverData.radiological_investigation_done">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
                <span class="help is-danger" v-show="errors.has('radiological_investigation_done')">
                          Field is required
                        </span>
              </td>

            </tr>
            <tr>
              <td class="text-center">9</td>
              <td>Reports of radiological investigation to be collected</td>
              <td>
                 <select class="form-control" v-validate="'required'" id = "radiological_investigation_collected" name="radiological_investigation_collected" value=""  v-model="doctorsHandoverData.radiological_investigation_collected">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
                <span class="help is-danger" v-show="errors.has('radiological_investigation_collected')">
                          Field is required
                        </span>
              </td>

            </tr>
            <tr>
              <td class="text-center">10</td>
              <td>Any other investigation to be done</td>
              <td>
                 <select class="form-control" v-validate="'required'" id = "other_investigation_done" name="other_investigation_done" value=""  v-model="doctorsHandoverData.other_investigation_done">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
                <span class="help is-danger" v-show="errors.has('other_investigation_done')">
                          Field is required
                        </span>
              </td>

            </tr>
            <tr>
              <td class="text-center">11</td>
              <td>Reports of said investigation awaited</td>
              <td>
                   <select class="form-control" v-validate="'required'" id = "other_investigation_collected" name="other_investigation_collected" value=""  v-model="doctorsHandoverData.other_investigation_collected">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
                <span class="help is-danger" v-show="errors.has('other_investigation_collected')">
                          Field is required
                        </span>
              </td>

            </tr>
            <tr>
              <td class="text-center">12</td>
              <td>Echo</td>
              <td>
                   <select class="form-control" v-validate="'required'" id = "echo" name="echo" value=""  v-model="doctorsHandoverData.echo">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
                <span class="help is-danger" v-show="errors.has('echo')">
                          Field is required
                        </span>
              </td>

            </tr>
            <tr>
              <td class="text-center">13</td>
              <td>Physiotherapy</td>
              <td>
                   <select class="form-control" v-validate="'required'" id = "physiotherapy" name="physiotherapy" value=""  v-model="doctorsHandoverData.physiotherapy">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
                <span class="help is-danger" v-show="errors.has('physiotherapy')">
                          Field is required
                        </span>
              </td>

            </tr>
            <tr>
              <td class="text-center">14</td>
              <td>Specific instruction/ change in treatment</td>
              <td>  <textarea  class="form-control" rows="3" v-validate="'required'" id = "specific_instruction" name="specific_instruction" value=""  v-model="doctorsHandoverData.specific_instruction"></textarea>
                <span class="help is-danger" v-show="errors.has('specific_instruction')">
                          Field is required
                        </span>
              </td>

            </tr>
            <tr>
              <td class="text-center">15</td>
              <td>Verified by physician's assistant</td>
              <td>
                   <select class="form-control" v-validate="'required'" id = "verified_by_assistant" name="verified_by_assistant" value=""  v-model="doctorsHandoverData.verified_by_assistant">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
                <span class="help is-danger" v-show="errors.has('verified_by_assistant')">
                          Field is required
                        </span>
              </td>
            </tr>
            <tr>
              <td class="text-center">16</td>
              <td>Over given by:</td>
              <td></td>
            </tr>
            <tr>
              <td class=""></td>
              <td>16.1 Name</td>
              <td><input class="form-control" type = "text" v-validate="'required'" id = "name_given" name="name_given" value=""  v-model="doctorsHandoverData.name_given"/>
              <span class="help is-danger" v-show="errors.has('name_given')">
                        Field is required
                      </span>

              </td>
            </tr>
            <tr>
              <td class=""></td>
              <td>16.2 Date</td>
              <td><input class="form-control ls-datepicker" type = "text" v-validate="'required'" id = "date_given" name="date_given" value=""  v-model="doctorsHandoverData.date_given"/>
              <span class="help is-danger" v-show="errors.has('date_given')">
                        Field is required
                      </span>

              </td>
            </tr>
            <tr>
              <td class=""></td>
              <td>16.3 Time</td>
              <td><input class="form-control ls-timepicker" type = "text" v-validate="'required'" id = "time_given" name="time_given" value=""  v-model="doctorsHandoverData.time_given"/>
              <span class="help is-danger" v-show="errors.has('time_given')">
                        Field is required
                      </span>

              </td>
            </tr>
            <tr>
              <td class="text-center">17</td>
              <td>Over taken by:</td>
              <td></td>
            </tr>
            <tr>
              <td class=""></td>
              <td>17.1 Name</td>
              <td><input class="form-control" type = "text" v-validate="'required'" id = "name_taken" name="name_taken" value=""  v-model="doctorsHandoverData.name_taken"/>
              <span class="help is-danger" v-show="errors.has('name_taken')">
                        Field is required
                      </span>

              </td>
            </tr>
            <tr>
              <td class=""></td>
              <td>17.2 Date</td>
              <td><input class="form-control ls-datepicker" type = "text" v-validate="'required'" id = "date_taken" name="date_taken" value=""  v-model="doctorsHandoverData.date_taken"/>
              <span class="help is-danger" v-show="errors.has('date_taken')">
                        Field is required
                      </span>

              </td>
            </tr>
            <tr>
              <td class=""></td>
              <td>17.3 Time</td>
              <td><input class="form-control ls-timepicker" type = "text" v-validate="'required'" id = "time_taken" name="time_taken" value=""  v-model="doctorsHandoverData.time_taken"/>
              <span class="help is-danger" v-show="errors.has('time_taken')">
                        Field is required
              </span>

              </td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="form-group text-center">
        <button class="btn btn-success" type="button" @click="saveDoctorsHandover()">Submit</button>
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
                'type': 'doctorsHandover',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'doctorsHandoverData' : {
                	'diagnosis':'',
                	'day_night': '',
                	'surgical': '',
                	'tentative_date_of_surgery': '',
                	'date_of_surgery': '',
                	'physician_reference': '',
                	'other_physician_reference': '',
                	'pathological_investigation_done': '',
                	'pathological_investigation_collected': '',
                	'radiological_investigation_done': '',
                  'radiological_investigation_collected': '',
                  'other_investigation_done': '',
                  'other_investigation_collected': '',
                  'echo': '',
                  'physiotherapy': '',
                  'specific_instruction': '',
                  'verified_by_assistant': '',
                  'name_given': '',
                  'date_given': '',
                  'name_taken': '',
                  'date_taken': '',
                  'time_taken': ''
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
                 $('.ls-datepicker').datepicker({
                 format: 'dd/mm/yyyy',
                 'autoclose': true
               })
               let vm =this;
            $('.ls-datepicker').datepicker().on('changeDate',function(){
            if(this.id == 'date_given'){
              vm.doctorsHandoverData.date_given = this.value;
            }
          })
              $('.ls-datepicker').datepicker().on('changeDate',function(){
            if(this.id == 'date_taken'){
              vm.bloodSugarMonitoringChart.date_taken = this.value;
            }
          })
          $('.ls-timepicker').timepicker().on('change',function(){
          if(this.id == 'time_taken'){
            vm.doctorsHandoverData.time_taken = this.value;
          }
        })
       },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveDoctorsHandover() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var Res = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.doctorsHandoverData};
				    	     User.saveDoctorsHandover(Res).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Doctors Handover has been saved', 'Doctors Handover', {timeOut: 5000});
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
