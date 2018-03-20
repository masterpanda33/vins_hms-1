<template>
  <div class="container">
  	<div class="page-header">
  		<div class="row">
  			<div class="col-md-6">
  			<h1>Code Blue Evaluation Form</h1>
  			</div>
  			<div class="col-md-6">
  				<div class="text-right">
  					DOC NO. F/IPD/27 <br>
  					REV. No. 0.0 <br>
  					WEF 01-08-2013
  				</div>
  			</div>
  		</div>
  	</div>

  	<form action="" method="post">
  		<div class="row form-group">
  		  <div class="col-md-6">
  				<div class="col-md-6">
  					<label>Drill : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="drill" v-model="codeBlueEvaluationData.drill" v-validate="'required'" value="">
            <span class="help is-danger" v-show="errors.has('drill')">
              Field is required
            </span>
  				</div>
  		  </div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Actual Code Blue : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="actual_code_blue" v-model="codeBlueEvaluationData.actual_code_blue" v-validate="'required'" value="">
            <span class="help is-danger" v-show="errors.has('actual_code_blue')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<div class="row">
  			<div class="text-center">
  				Code blue / drills are designed to prepare staff in responding to medical emergencies as a part of the staff Competency Curriculum.
  			</div>
  		</div>
  		<div class="table-responsive">
  		  <table class="table table-bordered table-striped">
  		    <thead>
    			  <tr>
      				<th>Sr. No.</th>
      				<th>Contents</th>
      				<th>Response</th>
      				<th>Comments</th>
    			  </tr>
    			</thead>
    			<tbody>
    			  <tr>
    			    <td>1</td>
    					<td>Was staff able to identify cardiac arrest?</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="identify_cardiac_arrest" v-model="codeBlueEvaluationData.identify_cardiac_arrest" v-validate="'required'">
    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('identify_cardiac_arrest')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    					<td><input class="form-control" type="text" name="comments_00" v-model="codeBlueEvaluationData.comments_00" ></td>
    			  </tr>
    			  <tr>
    			    <td>2</td>
      				<td>Did CPR begin when the cardiac arrest was indentified?</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="cpr_begin" v-model="codeBlueEvaluationData.cpr_begin" v-validate="'required'" >

    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('cpr_begin')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="comments_01" v-model="codeBlueEvaluationData.comments_01" ></td>
    			  </tr>
    			  <tr>
    			    <td>3</td>
      				<td>
      					Was Code Blue properly announced?
      					<ul>
      						<li>
      							Correct location announced
      						</li>
      						<li>
      							Correct Extension dialed
      						</li>
      						<li>
      							Exchange System is OK
      						</li>
      						<li>
      							Appropriate People called
      						</li>
      					</ul>
      				</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="codeblue_announced" v-model="codeBlueEvaluationData.codeblue_announced" v-validate="'required'" >

    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('codeblue_announced')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="comments_02" v-model="codeBlueEvaluationData.comments_02" ></div></td>
    			  </tr>
    			  <tr>
    			    <td>4</td>
      				<td>Did nurse lead the resuscitation effort until the code blue team arrived?</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="nurse_lead" v-model="codeBlueEvaluationData.nurse_lead" v-validate="'required'" >
    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('nurse_lead')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="comments_03" v-model="codeBlueEvaluationData.comments_03" ></td>
    			  </tr>
    			  <tr>
    			    <td>5</td>
      				<td>Was chest compression perfomed uninterruptedly until code blue team arrived?
      				</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="chest_compression" v-model="codeBlueEvaluationData.chest_compression" v-validate="'required'" >

    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('chest_compression')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="comments_04" v-model="codeBlueEvaluationData.comments_04" ></div></td>
    			  </tr>
    			  <tr>
    			    <td>6</td>
      				<td>
      					Was an airway established and ventilation maintained until code blue team arrived?
      					<ul>
      						<li>Rebreathing mask</li>
      						<li>Ambu bag</li>
      						<li>Aspiration</li>
      						<li>Multiple attempts</li>
      						<li>Misplaced</li>
      					</ul>
      				</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="airway_established" v-model="codeBlueEvaluationData.airway_established" v-validate="'required'" >

    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('airway_established')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="comments_05" v-model="codeBlueEvaluationData.comments_05" ></div></td>
    			  </tr>
    			  <tr>
    			    <td>7</td>
      				<td>
      					Did code Blue team arrive in reasonable time?
      					<div class="">1 min - Appropriate</div>
      					<div class="">2 min - Acceptable</div>
      					<div class="">>3 min - Unacceptable</div>
      				</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="codeblue_team_arrive" v-model="codeBlueEvaluationData.codeblue_team_arrive" v-validate="'required'" >
    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('codeblue_team_arrive')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="comments_06" v-model="codeBlueEvaluationData.comments_06" ></div></td>
    			  </tr>

    			  <tr>
    			    <td>8</td>
      				<td>
      					Was Chest Compression given in the following ways?
      					<ul>
      						<li>Uninterrupted</li>
      						<li>Correct breathing and Compression ratio</li>
      						<li>Correct head position</li>
      						<li>Correct hand position</li>
      						<li>Chest compression in time</li>
      					</ul>
      				</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="chest_compression_way" v-model="codeBlueEvaluationData.chest_compression_way" v-validate="'required'" >
    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('chest_compression_way')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="comments_07" v-model="codeBlueEvaluationData.comments_07" ></div></td>
    			  </tr>
    			  <tr>
    			    <td>9</td>
      				<td>
      					Was staff able to locate / operate the following ?
      					<ul>
      						<li>ECG Machine</li>
      						<li>Oxygen Cylinder</li>
      						<li>Ambu bag</li>
      						<li>Emergency cart</li>
      						<li>Suction machine</li>
      						<li>Drugs</li>
      					</ul>
      				</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="able_to_locate" v-model="codeBlueEvaluationData.able_to_locate" v-validate="'required'" >
    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('able_to_locate')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="comments_08" v-model="codeBlueEvaluationData.comments_08" ></div></td>
    			  </tr>

    			  <tr>
    			    <td>10</td>
    				  <td>Was documentation complete?</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="documentation_complete" v-model="codeBlueEvaluationData.documentation_complete" v-validate="'required'" >

    								<option value="NA" >NA</option>
    								<option value="Yes" >Yes</option>
    								<option value="No" >No</option>
    							</select>
                  <span class="help is-danger" v-show="errors.has('documentation_complete')">
                  	Field is required
                  </span>
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="comments_09" v-model="codeBlueEvaluationData.comments_09" ></div></td>
    			  </tr>
    			</tbody>
    		</table>
    	</div>

    	<div class="row form-group text-center">
  			<input class="form-group btn btn-success" value = "Submit" type="button" @click="saveCodeBlueEvaluationForm()"/>
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
                'codeBlueEvaluationData' : {
                  'drill': '',
                  'actual_code_blue': '',
                  'identify_cardiac_arrest': '',
                  'comments_00': '',
                  'cpr_begin': '',
                  'comments_01': '',
                  'codeblue_announced': '',
                  'comments_02': '',
                  'nurse_lead': '',
                  'comments_03': '',
                  'chest_compression': '',
                  'comments_04': '',
                  'airway_established': '',
                  'comments_05': '',
                  'codeblue_team_arrive': '',
                  'comments_06': '',
                  'chest_compression_way': '',
                  'comments_07': '',
                  'able_to_locate': '',
                  'comments_08': '',
                  'documentation_complete': '',
                  'comments_09': '',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveCodeBlueEvaluationForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveCodeBlueEvaluationForm(this.codeBlueEvaluationData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Code Blue Evaluation Details Saved.', 'Code Blue', {timeOut: 5000});
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
