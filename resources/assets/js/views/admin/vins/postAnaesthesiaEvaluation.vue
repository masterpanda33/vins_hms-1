<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<h1>Post Anaesthesia Evaluation</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. F/IPD/69 <br>
						REV. No. 0.0 <br>
						WEF 04-07-2017
					</div>
				</div>
			</div>
		</div>

		<form action="" method="post" >
			<div class="row form-group">
				<div class="col-md-6">
          <h3>During Shifting from OT</h3>
				</div>
				<div class="col-md-6">
					<div class="col-md-4">
						<label class="control-label" for="addressograph">Addressograph:</label>
					</div>
					<div class="col-md-8">
            <textarea name="addressograph" rows="3" class="form-control"></textarea>
					</div>
				</div>
			</div>

    <hr>

    <div class="row form-group">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center">S.No.</th>
            <th class="text-center">Parameters</th>
            <th class="text-center">Score</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="text-center" style="vertical-align:middle">1</th>
            	<td>
              	<h4>Level of Consciousness</h4>
                <ul>
                  <li>Awake and Oriented</li>
                  <li>Arousal with Minimal stimulation</li>
                  <li>Responsive only to tactile stimulation</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="level_of_consciousness" v-model="postAnaesthesiaEvaluationData.level_of_consciousness">
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">2</th>
              <td>
                <h4>Physical Activity</h4>
                <ul>
                  <li>Able to move all extremities on command</li>
                  <li>Some weakness in movement of extremities</li>
                  <li>Unable to voluntarily move extremities</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="physical_activity" v-model="postAnaesthesiaEvaluationData.physical_activity">
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">3</th>
              <td>
                <h4>Hemodynamic Stability</h4>
                <ul>
                  <li>Blood Pressure, 15% of baseline MAP value</li>
                  <li>Blood Pressure, 15-30% of baseline MAP value</li>
                  <li>Blood Pressure, 30% below baseline MAP value</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="hemodynamic_stability" v-model="postAnaesthesiaEvaluationData.hemodynamic_stability">
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">4</th>
              <td>
                <h4>Respiratory Stability</h4>
                <ul>
                  <li>Able to breathe deeply</li>
                  <li>Tachypnoea with good cough</li>
                  <li>Dyspneic with weak cough</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="respiratory_stability" v-model="postAnaesthesiaEvaluationData.respiratory_stability">
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">5</th>
              <td>
                <h4>Oxygen Saturation Status</h4>
                <ul>
                  <li>Maintains value more than 90% on room air</li>
                  <li>Requires supplemental oxygen (nasal prong)</li>
                  <li>Saturation less than 90% with supplemental oxygen</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="oxygen_saturation_status" v-model="postAnaesthesiaEvaluationData.oxygen_saturation_status">
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">6</th>
              <td>
                <h4>Post-operative Pain Assessment</h4>
                <ul>
                  <li>None or mild discomfort</li>
                  <li>Moderate to severe pain controlled with IV analgesics</li>
                  <li>Persistent severe pain</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="post_operative_pain_assessment" v-model="postAnaesthesiaEvaluationData.post_operative_pain_assessment">
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">7</th>
              <td>
                <h4>Post-operative Emetic Symptoms</h4>
                <ul>
                  <li>None or mild nausea with no active vomiting</li>
                  <li>Transient vomiting or retching</li>
                  <li>Persistent moderate to severe nausea and vomiting</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="post_operative_emetic_symptoms" v-model="postAnaesthesiaEvaluationData.post_operative_emetic_symptoms">
                  <option value="2">2</option>
                  <option value="1">1</option>
                  <option value="0">0</option>
                </select>
              </td>
            </tr>
            <tr>
							<td></td>
              <td>Total Score</td>
              <td><input type="text" name="total_score" class="form_control" value="" onfocus="calc_total_score()" disabled v-model="postAnaesthesiaEvaluationData.total_score"/></td>
            </tr>
          </tbody>
        </table>
      </div>

			<div class="row form-group">
				<div class="col-md-6">
					<h4>If score is</h4>
          <ul>
            <li>Less than 7: Patient not to be shifted</li>
            <li>7-12: Shift with Consultant's order</li>
            <li>More than 12: Shift the patient</li>
          </ul>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-6" for="name_of_anaesthetist">Name of Anaesthetist:</label>
						</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name_of_anaesthetist" id="name_of_anaesthetist" value="" v-model="postAnaesthesiaEvaluationData.name_of_anaesthetist"/>
					</div>
				</div>
			</div>

			<div class="text-center form-group">
				<button class="btn btn-success" type="button" @click="savePostAnesthesiaEvaluation()">Submit</button>
			</div>
		</form>
	</div>
</body>
</template>

<script >
	import User from '../../../api/users.js';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
								'postAnaesthesiaEvaluationData' :{
		                'level_of_consciousness' : '',
		                'physical_activity':'',
		                'hemodynamic_stability': '',
										'respiratory_stability': '',
		              	'oxygen_saturation_status': '',
										'post_operative_pain_assessment': '',
		                'post_operative_emetic_symptoms': '',
		                'total_score': '',
		                'name_of_anaesthetist': '',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    savePostAnesthesiaEvaluation() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.savePostAnesthesiaEvaluation(this.postAnaesthesiaEvaluationData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Post Anesthesia Evaluation details have been saved', 'post anesthesia evaluation detail', {timeOut: 5000});
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
