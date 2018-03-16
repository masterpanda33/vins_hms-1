<template id="">
  <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col">
          <h1>Physiotherapy Assessment</h1>
        </div>
        <div class="col">
          <div class="text-right">
            DOC NO. F/PHY/02 <br>
            REV. No. 0.1 <br>
            WEF 27-02-2015
          </div>
        </div>
      </div>
    </div>

    <hr>

    <form action="" method="post">
      <div class="row form-group">
        <div class="col">
        </div>
        <div class="col">
          <textarea name="addressograph" v-model="PhysiotherapyAssessment.addressograph" v-validate="'required'" rows="3" class="form-control" placeholder="Addressograph Here"></textarea>
          <span class="help is-danger" v-show="errors.has('addressograph')">
            Field is required
          </span>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <label for="">Chief Complaints:</label>
        </div>
        <div class="col">
          <textarea name="chief_complaints" v-model="PhysiotherapyAssessment.chief_complaints" v-validate="'required'" class="form-control" rows="4"></textarea>
          <span class="help is-danger" v-show="errors.has('chief_complaints')">
            Field is required
          </span>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <label for="">History:</label>
        </div>
        <div class="col">
          <textarea name="history" v-model="PhysiotherapyAssessment.history" v-validate="'required'" class="form-control" rows="4"></textarea>
          <span class="help is-danger" v-show="errors.has('history')">
            Field is required
          </span>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <label for="">Surgical History:</label>
        </div>
        <div class="col">
          <textarea name="surgical_history" v-model="PhysiotherapyAssessment.surgical_history" v-validate="'required'" class="form-control" rows="4"></textarea>
          <span class="help is-danger" v-show="errors.has('surgical_history')">
            Field is required
          </span>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Observation:</h3>
      </div>
      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="gait">Gait :</label>
        </div>
        <div class="col">
          <input type="text" name="gait" v-model="PhysiotherapyAssessment.gait" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('gait')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="posture">Posture :</label>
        </div>
        <div class="col">
          <input type="text" name="posture" v-model="PhysiotherapyAssessment.posture" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('posture')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="attitude_of_limbs">Attitude of limbs :</label>
        </div>
        <div class="col">
          <input type="text" name="attitude_of_limbs" v-model="PhysiotherapyAssessment.attitude_of_limbs" v-validate="'required'"  rows="4" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('attitude_of_limbs')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="external_aids">External aids :</label>
        </div>
        <div class="col">
          <input type="text" name="external_aids" v-model="PhysiotherapyAssessment.external_aids" v-validate="'required'"  rows="2" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('external_aids')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="observation_others">Others :</label>
        </div>
        <div class="col">
          <input type="text" name="observation_others" v-model="PhysiotherapyAssessment.observation_others" rows="2" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('observation_others')">
							Field is required
						</span>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Palpation:</h3>
      </div>
      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="tenderness">Tenderness :</label>
        </div>
        <div class="col">
          <input type="text" name="tenderness" v-model="PhysiotherapyAssessment.tenderness" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('tenderness')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="muscle_spasm">Muscle Spasm :</label>
        </div>
        <div class="col">
          <input type="text" name="muscle_spasm" v-model="PhysiotherapyAssessment.muscle_spasm" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('muscle_spasm')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="palpation_others">Others :</label>
        </div>
        <div class="col">
          <input type="text" name="palpation_others" v-model="PhysiotherapyAssessment.palpation_others" rows="4" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('palpation_others')">
							Field is required
						</span>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Examination:</h3>
      </div>
      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="higher_mental_function">Higher Mental Function :</label>
        </div>
        <div class="col">
          <input type="text" name="higher_mental_function" v-model="PhysiotherapyAssessment.higher_mental_function" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('higher_mental_function')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="consciousness">Consciousness :</label>
        </div>
        <div class="col">
          <input type="text" name="consciousness" v-model="PhysiotherapyAssessment.consciousness" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('consciousness')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="memory">Memory :</label>
        </div>
        <div class="col">
          <input type="text" name="memory" v-model="PhysiotherapyAssessment.memory" v-validate="'required'"  rows="4" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('memory')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="communication">Communication :</label>
        </div>
        <div class="col">
          <input type="text" name="communication" v-model="PhysiotherapyAssessment.communication" v-validate="'required'"  rows="4" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('communication')">
							Field is required
						</span>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Pain:</h3>
      </div>
      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="higher_mental_function">Pain :</label>
        </div>
        <div class="col">
          <select class="form-control" name="pain" v-model="PhysiotherapyAssessment.pain" v-validate="'required'">
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>
            <option value="7" >7</option>
            <option value="8" >8</option>
            <option value="9" >9</option>
            <option value="10" >10</option>
          </select>
          <span class="help is-danger" v-show="errors.has('pain')">
            Field is required
          </span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="pain_others">Others :</label>
        </div>
        <div class="col">
          <input type="text" name="pain_others" v-model="PhysiotherapyAssessment.pain_others" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('pain_others')">
							Field is required
						</span>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Sensory Assessment:</h3>
      </div>
      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="sensory_superficial">Superficial :</label>
        </div>
        <div class="col">
          <input type="text" name="sensory_superficial" v-model="PhysiotherapyAssessment.sensory_superficial" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('sensory_superficial')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="deep">Deep :</label>
        </div>
        <div class="col">
          <input type="text" name="deep" v-model="PhysiotherapyAssessment.deep" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('deep')">
							Field is required
						</span>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Motor Assessment:</h3>
      </div>
      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="tone">Tone :</label>
        </div>
        <div class="col">
          <input type="text" name="tone" v-model="PhysiotherapyAssessment.tone" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('tone')">
							Field is required
						</span>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Muscle Power:</h3>
      </div>
      <div class="row form-group">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <th class="text-center">Rt</th>
              <th class="text-center">Lt</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="text-center">Upper Limb</th>
              <td>
                <input type="text" class="form-control" name="rt_upperlimb" v-model="PhysiotherapyAssessment.rt_upperlimb" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('rt_upperlimb')">
							Field is required
						</span>
              </td>
              <td>
                <input type="text" class="form-control" name="lt_upperlimb" v-model="PhysiotherapyAssessment.lt_upperlimb" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('lt_upperlimb')">
							Field is required
						</span>
              </td>
            </tr>
            <tr>
              <th class="text-center">Lower Limb</th>
              <td>
                <input type="text" class="form-control" name="rt_lowerlimb" v-model="PhysiotherapyAssessment.rt_lowerlimb" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('rt_lowerlimb')">
							Field is required
						</span>
              </td>
              <td>
                <input type="text" class="form-control" name="lt_lowerlimb" v-model="PhysiotherapyAssessment.lt_lowerlimb" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('lt_lowerlimb')">
							Field is required
						</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row form-group">
        <div class="col">
          <div class="row">
            <div class="col">
              <label class="control-label" for="range_of_motion">Range of Motion :</label>
            </div>
            <div class="col">
              <input type="text" name="range_of_motion" v-model="PhysiotherapyAssessment.range_of_motion" v-validate="'required'"   class="form-control" value="">
              <span class="help is-danger" v-show="errors.has('range_of_motion')">
                Field is required
              </span>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="row">
            <div class="col">
              <label class="control-label" for="muscle_power_others">Others :</label>
            </div>
            <div class="col">
              <input type="text" name="muscle_power_others" v-model="PhysiotherapyAssessment.muscle_power_others" class="form-control" value="">
              <span class="help is-danger" v-show="errors.has('muscle_power_others')">
                Field is required
              </span>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Reflexes:</h3>
      </div>
      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="reflexes_superficial">Superficial :</label>
        </div>
        <div class="col">
          <input type="text" name="reflexes_superficial" v-model="PhysiotherapyAssessment.reflexes_superficial" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('reflexes_superficial')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="abdominal">Abdominal :</label>
        </div>
        <div class="col">
          <input type="text" name="abdominal" v-model="PhysiotherapyAssessment.abdominal" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('abdominal')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="plantar">Plantar :</label>
        </div>
        <div class="col">
          <input type="text" name="plantar" v-model="PhysiotherapyAssessment.plantar" v-validate="'required'"   class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('plantar')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label class="control-label" for="reflexes_superficial">Deep :</label>
        </div>
        <div class="col">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">Jerk</th>
                <th class="text-center">Biceps</th>
                <th class="text-center">Triceps</th>
                <th class="text-center">Brachioradialis</th>
                <th class="text-center">Knee</th>
                <th class="text-center">Ankle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="text-center">Right</th>
                <td>
                  <input type="text" class="form-control" name="right_biceps" v-model="PhysiotherapyAssessment.right_biceps" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('right_biceps')">
							Field is required
						</span>
                </td>
                <td>
                  <input type="text" class="form-control" name="right_triceps" v-model="PhysiotherapyAssessment.right_triceps" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('right_triceps')">
							Field is required
						</span>
                </td>
                <td>
                  <input type="text" class="form-control" name="right_brachioradialis" v-model="PhysiotherapyAssessment.right_brachioradialis" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('right_brachioradialis')">
							Field is required
						</span>
                </td>
                <td>
                  <input type="text" class="form-control" name="right_knee" v-model="PhysiotherapyAssessment.right_knee" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('right_knee')">
							Field is required
						</span>
                </td>
                <td>
                  <input type="text" class="form-control" name="right_ankle" v-model="PhysiotherapyAssessment.right_ankle" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('right_ankle')">
							Field is required
						</span>
                </td>
              </tr>
              <tr>
                <th class="text-center">Left</th>
                <td>
                  <input type="text" class="form-control" name="left_biceps" v-model="PhysiotherapyAssessment.left_biceps" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('left_biceps')">
							Field is required
						</span>
                </td>
                <td>
                  <input type="text" class="form-control" name="left_triceps" v-model="PhysiotherapyAssessment.left_triceps" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('left_triceps')">
							Field is required
						</span>
                </td>
                <td>
                  <input type="text" class="form-control" name="left_brachioradialis" v-model="PhysiotherapyAssessment.left_brachioradialis" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('left_brachioradialis')">
							Field is required
						</span>
                </td>
                <td>
                  <input type="text" class="form-control" name="left_knee" v-model="PhysiotherapyAssessment.left_knee" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('left_knee')">
							Field is required
						</span>
                </td>
                <td>
                  <input type="text" class="form-control" name="left_ankle" v-model="PhysiotherapyAssessment.left_ankle" v-validate="'required'" value="">
						<span class="help is-danger" v-show="errors.has('left_ankle')">
							Field is required
						</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="balance_coordination">Balance/Coordination :</label>
        </div>
        <div class="col">
          <input type="text" name="balance_coordination" v-model="PhysiotherapyAssessment.balance_coordination" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('balance_coordination')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="bladder_bowel">Bladder and Bowel :</label>
        </div>
        <div class="col">
          <input type="text" name="bladder_bowel" v-model="PhysiotherapyAssessment.bladder_bowel" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('bladder_bowel')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="diagnosis">Diagnosis :</label>
        </div>
        <div class="col">
          <input type="text" name="diagnosis" v-model="PhysiotherapyAssessment.diagnosis" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('diagnosis')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="treatment_plan">Treatment Plan :</label>
        </div>
        <div class="col">
          <input type="text" name="treatment_plan" v-model="PhysiotherapyAssessment.treatment_plan" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('treatment_plan')">
							Field is required
						</span>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <div class="col">
          <label class="control-label" for="name_of_physiotherapist">Name of Physiotherapist :</label>
        </div>
        <div class="col">
          <input type="text" name="name_of_physiotherapist" v-model="PhysiotherapyAssessment.name_of_physiotherapist" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('name_of_physiotherapist')">
							Field is required
						</span>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label class="control-label" for="date">Date :</label>
          </div>
          <div class="col">
            <input type="text" name="date" v-model="PhysiotherapyAssessment.date" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('date')">
							Field is required
						</span>
          </div>
        </div>
        <div class="col">
          <div class="col">
            <label class="control-label" for="time">Time :</label>
          </div>
          <div class="col">
            <input type="text" name="time" v-model="PhysiotherapyAssessment.time" v-validate="'required'" class="form-control" value="">
						<span class="help is-danger" v-show="errors.has('time')">
							Field is required
						</span>
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col text-center">
          <input class="btn btn-success" type="button" value="Submit" @click="savePhysiotherapyAssessment()"></button>
        </div>
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
                'PhysiotherapyAssessment' : {
                  'addressograph':'',
                  'chief_complaints':'',
                  'history':'',
                  'surgical_history':'',
                  'gait':'',
                  'posture':'',
                  'attitude_of_limbs':'',
                  'external_aids':'',
                  'observation_others':'',
                  'tenderness':'',
                  'muscle_spasm':'',
                  'palpation_others':'',
                  'higher_mental_function':'',
                  'consciousness':'',
                  'memory':'',
                  'communication':'',
                  'pain':'',
                  'pain_others':'',
                  'sensory_superficial':'',
                  'deep':'',
                  'tone':'',
                  'rt_upperlimb':'',
                  'lt_upperlimb':'',
                  'rt_lowerlimb':'',
                  'lt_lowerlimb':'',
                  'range_of_motion':'',
                  'muscle_power_others':'',
                  'reflexes_superficial':'',
                  'abdominal':'',
                  'plantar':'',
                  'right_biceps':'',
                  'right_triceps':'',
                  'right_brachioradialis':'',
                  'right_knee':'',
                  'right_ankle':'',
                  'left_biceps':'',
                  'left_triceps':'',
                  'left_brachioradialis':'',
                  'left_knee':'',
                  'left_ankle':'',
                  'balance_coordination':'',
                  'bladder_bowel':'',
                  'diagnosis':'',
                  'treatment_plan':'',
                  'name_of_physiotherapist':'',
                  'date':'',
                  'time':'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        savePhysiotherapyAssessment() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   User.savePhysiotherapyAssessment(this.PhysiotherapyAssessment).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Physiotherapy Assessment has been saved', 'PhysiotherapyAssessment', {timeOut: 5000});
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
