<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>Neuro Examination Form</h1>
			</div>
		</div>
	</div>

  <form action>

    <div class="row">
      <div class="col-md-6">
        <canvas height="500" width="600" style="background: url('https://i.imgur.com/1bvTivk.png'); max-width:100%; max-height:100%;"></canvas>
      </div>
      <div class="col-md-6">
        <canvas height="500" width="600" style="background: url('https://i.imgur.com/1bvTivk.png'); max-width:100%; max-height:100%;"></canvas>
      </div>
    </div>

    <hr />

    <div class="row">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th></th>
              <th>Biceps</th>
              <th>Triceps</th>
              <th>Supinator</th>
              <th>Knee</th>
              <th>Ankle</th>
              <th>Hoffmann</th>
              <th>FF</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Right</th>
              <td><input class="form-control" type="text" name="right_biceps" value="  " v-model="neuroExaminationData.right_biceps" />
  						</td>
              <td><input class="form-control" type="text" name="right_triceps" value="  " v-model="neuroExaminationData.right_triceps" />
  						</td>
              <td><input class="form-control" type="text" name="right_supinator" value="  " v-model="neuroExaminationData.right_supinator" />
  						</td>
              <td><input class="form-control" type="text" name="right_knee" value="  " v-model="neuroExaminationData.right_knee" />
  						</td>
              <td><input class="form-control" type="text" name="right_ankle" value="  " v-model="neuroExaminationData.right_ankle" />
  						</td>
              <td><input class="form-control" type="text" name="right_hoffmann" value="  " v-model="neuroExaminationData.right_hoffmann" />
  						</td>
              <td><input class="form-control" type="text" name="right_ff" value="  " v-model="neuroExaminationData.right_ff" />
  						</td>
            </tr>

  					<tr>
              <th>left</th>
              <td><input class="form-control" type="text" name="left_biceps" value="  " v-model="neuroExaminationData.left_biceps" />
  						</td>
              <td><input class="form-control" type="text" name="left_triceps" value="  " v-model="neuroExaminationData.left_triceps" />
  						</td>
              <td><input class="form-control" type="text" name="left_supinator" value="  " v-model="neuroExaminationData.left_supinator" />
  						</td>
              <td><input class="form-control" type="text" name="left_knee" value="  " v-model="neuroExaminationData.left_knee" />
  						</td>
              <td><input class="form-control" type="text" name="left_ankle" value="  " v-model="neuroExaminationData.left_ankle" />
  						</td>
              <td><input class="form-control" type="text" name="left_hoffmann" value="  " v-model="neuroExaminationData.left_hoffmann" />
  						</td>
              <td><input class="form-control" type="text" name="left_ff" value="  " v-model="neuroExaminationData.left_ff" />
  						</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="plantars" class="control-label">Plantars : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="plantars" name="plantars" value="" v-model="neuroExaminationData.plantars" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('plantars')">
						Field is required
					</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="romberg" class="control-label">Romberg's : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="romberg" name="romberg" value="" v-model="neuroExaminationData.romberg" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('romberg')">
						Field is required
					</span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="gait" class="control-label">Gait</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="gait" name="gait" value="" v-model="neuroExaminationData.gait" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('gait')">
						Field is required
					</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="cerebellar" class="control-label">Cerebellar Signs : </label>
        </div>
        <div class="col-md-6">
					<select class="form-control" v-validate="'required'" id = "cerebellar" name="cerebellar" value="" :class="{'is-danger': errors.has('cerebellar') }" v-model="neuroExaminationData.cerebellar">
						<option value="no">No</option>
            <option value="truncal">Truncal</option>
            <option value="appendicular">Appendicular</option>
            <option value="tandemwalking">Tandem Walking</option>
          </select>
					<span class="help is-danger" v-show="errors.has('cerebellar')">
						Field is required
					</span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="neck_stiffness" class="control-label">Neck Stiffness</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="neck_stiffness" name="neck_stiffness" value="" v-model="neuroExaminationData.neck_stiffness" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('neck_stiffness')">
						Field is required
					</span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="diagnosis" class="control-label">Diagnosis</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="diagnosis" name="diagnosis" value="" v-model="neuroExaminationData.diagnosis" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('diagnosis')">
						Field is required
					</span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <button class=" btn btn-success" type="button" @click="saveNeuroExamination()">Submit</button>
    </div>
  </form>

  <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal>
</div>



</template>
<script >
	import User from '../../../api/users.js'
	import addressograph from './addressograph.vue';
	import SelectPatientModal from '../../../components/SelectPatientModal.vue';

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
								'type': 'neuroExamination',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
								'neuroExaminationData': {
                  'right_biceps' : '',
                  'right_triceps' : '',
                  'right_supinator' : '',
                  'right_knee' : '',
                  'right_ankle' : '',
                  'right_hoffmann' : '',
                  'right_ff' : '',
                  'left_biceps' : '',
                  'left_triceps' : '',
                  'left_supinator' : '',
                  'left_knee' : '',
                  'left_ankle' : '',
                  'left_hoffmann' : '',
                  'left_ff' : '',
                  'plantars' : '',
                  'romberg' : '',
                  'gait' : '',
                  'cerebellar' : '',
                  'neck_stiffness' : '',
                  'diagnosis' : '',


								}
            }
        },
				components: {
					 addressograph,
					 SelectPatientModal
			 },
			 mounted() {
			 },
				methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveNeuroExamination() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var neuroExaminationData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.neuroExaminationData};
				    	User.saveNeuroExamination(neuroExaminationData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Neuro Examination has been saved', 'Neuro Examination', {timeOut: 5000});
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
