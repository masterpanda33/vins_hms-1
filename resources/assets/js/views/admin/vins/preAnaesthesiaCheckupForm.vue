<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Pre Anaesthesia Checkup Form</h1>
				</div>
			</div>
		</div>

		<hr>

		<form action="" method="post">

	        <div class="row">
						<div class="col-md-6">
						</div>
						<div class="col-md-6">
							<div class="text-right">
								<addressograph></addressograph>
							</div>
						</div>
					</div>
						<div class="row form-group">
	          	<div class="col-md-4">
	            <div class="col-md-6">
	              <label for="">Weight:</label>
	            </div>
	            <div class="col-md-6">
	              <input type="text" name="weight" class="form-control" value="" v-model="preAnaesthesiaCheckupFormData.weight">
						<span class="help is-danger" v-show="errors.has('weight')">
							Field is required
						</span>
	            </div>
	          </div>
	          <div class="col-md-4">
	            <div class="col-md-6">
	              <label for="">Height:</label>
	            </div>
	            <div class="col-md-6">
	              <input type="text" name="height" class="form-control" value="" v-model="preAnaesthesiaCheckupFormData.height">
						<span class="help is-danger" v-show="errors.has('height')">
							Field is required
						</span>
	            </div>
	          </div>


						<div class="col-md-4">
	            <div class="col-md-6">
	            <label for="">Surgeon Name:</label>
	          </div>
	          <div class="col-md-6">
	            <input type="text" name="surgeon_name" class="form-control" value="" v-model="preAnaesthesiaCheckupFormData.surgeon_name"/>
						<span class="help is-danger" v-show="errors.has('surgeon_name')">
							Field is required
						</span>
	          </div>
	        </div></div>





	    <hr>

	    <div class="row form-group">
	      <h3>Diagnosis:</h3>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <label for="">Operative Procedure: </label>
	      </div>
	      <div class="col-md-6">
	        <input type="text" name="operative_procedure" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.operative_procedure">
						<span class="help is-danger" v-show="errors.has('operative_procedure')">
							Field is required
						</span>
	      </div>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <label for="">History</label>
	      </div>
	      <div class="col-md-6">
	        <input type="text" name="history" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.history">
						<span class="help is-danger" v-show="errors.has('history')">
							Field is required
						</span>
	      </div>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Surgery</label>
	        </div>
	        <div class="col-md-6">
	          <select class="form-control" name="surgery" v-model="preAnaesthesiaCheckupFormData.surgery" v-validate="'required'">
	            <option value="emergency" >Emergency</option>
	            <option value="elective">Elective</option>
	          </select>
						<span class="help is-danger" v-show="errors.has('surgery')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Systematic Examination</label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="systematic_examination" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.systematic_examination" >
						<span class="help is-danger" v-show="errors.has('systematic_examination')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <label for="">Relevant medical history and treatment: </label>
	      </div>
	      <div class="col-md-6">
	        <input type="text" name="relevant_medical_history_treatment" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.relevant_medical_history_treatment">
						<span class="help is-danger" v-show="errors.has('relevant_medical_history_treatment')">
							Field is required
						</span>
	      </div>
	    </div>

		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
	  			  	<tr>
	            		<th style="vertical-align:middle" class="text-center"></th>
	    				<th style="vertical-align:middle" class="text-center">Contents</th>
	    				<th style="vertical-align:middle" class="text-center">Response</th>
	    				<th style="vertical-align:middle" class="text-center">Duration</th>
	  			  	</tr>
	  			</thead>
	  			<tbody>
	  				<tr>
	            		<th style="vertical-align:middle" rowspan="5" class="text-center">Present Complaints</th>
	  					<th style="vertical-align:middle" class="text-center">Cough Fever</th>
	  					<td>
	  						<div class="form-group">
	                			<select class="form-control" name="cough_fever"  v-model="preAnaesthesiaCheckupFormData.cough_fever"  v-validate="'required'">
	                  				<option value="No">No</option>
	                  				<option value="Yes">Yes</option>
	                			</select>
								<span class="help is-danger" v-show="errors.has('cough_fever')">
									Field is required
								</span>
	  						</div>
	  					</td>
	  					<td>
	  						<input class="form-control" type="text" name="duration_cough_fever" value="" v-model="preAnaesthesiaCheckupFormData.duration_cough_fever">
	  					</td>
							<span class="help is-danger" v-show="errors.has('duration_cough_fever')">
							Field is required
							</span>
	  			  	</tr>
	          		<tr>
	            		<th style="vertical-align:middle" class="text-center">Chest Pain</th>
	  					<td>
	  						<div class="form-group">
	                			<select class="form-control" name="chest_pain" v-model="preAnaesthesiaCheckupFormData.chest_pain"  v-validate="'required'">
	                  				<option value="No">No</option>
	                  				<option value="Yes">Yes</option>
	                			</select>
								<span class="help is-danger" v-show="errors.has('chest_pain')">
										Field is required
								</span>
	  						</div>
	  					</td>
	  					<td>
	  						<input class="form-control" type="text" name="duration_chest_pain" value="" v-model="preAnaesthesiaCheckupFormData.duration_chest_pain">
	  					</td>
						<span class="help is-danger" v-show="errors.has('duration_chest_pain')">
							Field is required
						</span>
	          		</tr>
	          		<tr>
	            		<th style="vertical-align:middle" class="text-center">Breathlessness</th>
	  						<td>
	  							<div class="form-group">
	                				<select class="form-control" name="breathlessness" v-model="preAnaesthesiaCheckupFormData.breathlessness" v-validate="'required'">
	                  					<option value="No">No</option>
	                  					<option value="Yes">Yes</option>
	                				</select>
									<span class="help is-danger" v-show="errors.has('breathlessness')">
										Field is required
									</span>
	  							</div>
	  					</td>
	  					<td><input class="form-control" type="text" name="duration_breathlessness" value="" v-model="preAnaesthesiaCheckupFormData.duration_breathlessness"></td>
						<span class="help is-danger" v-show="errors.has('duration_breathlessness')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">Bleeding Disorder</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="bleeding_disorder" v-model="preAnaesthesiaCheckupFormData.bleeding_disorder"  v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('bleeding_disorder')">
										Field is required
									</span>
	  						</div>
	  					</td>
	  					<td><input class="form-control" type="text" name="duration_bleeding_disorder" value="" v-model="preAnaesthesiaCheckupFormData.duration_bleeding_disorder"></td>
						<span class="help is-danger" v-show="errors.has('duration_bleeding_disorder')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">Other
	              <div class="form-group">
	                <input type="text" class="form-control" name="other" value="" v-model="preAnaesthesiaCheckupFormData.other">
						<span class="help is-danger" v-show="errors.has('other')">
							Field is required
						</span>
	              </div>
	            </th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="present_complaint_other" v-model="preAnaesthesiaCheckupFormData.present_complaint_other"  v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('present_complaint_other')">
										Field is required
									</span>
	  						</div>
	  					</td>
	  					<td><input class="form-control" type="text" name="duration_other" value="" v-model="preAnaesthesiaCheckupFormData.duration_other"></td>
						<span class="help is-danger" v-show="errors.has('duration_other')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" rowspan="6" class="text-center">Family History</th>
	            <th style="vertical-align:middle" class="text-center">HT</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="family_history_ht" v-model="preAnaesthesiaCheckupFormData.family_history_ht"  v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('family_history_ht')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td></td>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">DM</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="family_history_dm" v-model="preAnaesthesiaCheckupFormData.family_history_dm" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('family_history_dm')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td></td>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">IHD</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="family_history_ihd" v-model="preAnaesthesiaCheckupFormData.family_history_ihd" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('family_history_ihd')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td></td>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">Asthma</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="family_history_asthma" v-model="preAnaesthesiaCheckupFormData.family_history_asthma" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('family_history_asthma')">
										Field is required
									</span>
	  						</div>
	  					</td>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">Allergies</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="family_history_allergies" v-model="preAnaesthesiaCheckupFormData.family_history_allergies"  v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('family_history_allergies')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td></td>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">H/o Anaesthesia</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="family_history_anaesthesia" v-model="preAnaesthesiaCheckupFormData.family_history_anaesthesia" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('family_history_anaesthesia')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td></td>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" rowspan="8" class="text-center">Past History</th>
	            <th style="vertical-align:middle" class="text-center">HT</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="past_history_ht" v-model="preAnaesthesiaCheckupFormData.past_history_ht" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('past_history_ht')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td><input class="form-control" type="text" name="duration_ht" v-model="preAnaesthesiaCheckupFormData.duration_ht"/></td>
						<span class="help is-danger" v-show="errors.has('duration_ht')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">DM</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="past_history_dm" v-model="preAnaesthesiaCheckupFormData.past_history_dm" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('past_history_dm')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td><input class="form-control" type="text" name="duration_dm" value="" v-model="preAnaesthesiaCheckupFormData.duration_dm"></td>
						<span class="help is-danger" v-show="errors.has('duration_dm')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">Asthma</th>
	  					<td>
								<div class="form-group">
	                <select class="form-control" name="past_history_asthma" v-model="preAnaesthesiaCheckupFormData.past_history_asthma" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('past_history_asthma')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td><input class="form-control" type="text" name="duration_asthma" value="" v-model="preAnaesthesiaCheckupFormData.duration_asthma" /></td>
						<span class="help is-danger" v-show="errors.has('duration_asthma')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">Allergies</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="past_history_allergies"value="" v-model="preAnaesthesiaCheckupFormData.past_history_allergies"  v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('past_history_allergies')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td><input class="form-control" type="text" name="duration_allergies" value="" v-model="preAnaesthesiaCheckupFormData.duration_allergies"/></td>
						<span class="help is-danger" v-show="errors.has('duration_allergies')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">H/o Anaesthesia</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="past_history_anaesthesia" value="" v-model="preAnaesthesiaCheckupFormData.past_history_anaesthesia" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
										<span class="help is-danger" v-show="errors.has('past_history_anaesthesia')">
											Field is required
										</span>
	                </select>
	  						</div>
	  					</td>
	            <td><input class="form-control" type="text" name="duration_anaesthesia" value="" v-model="preAnaesthesiaCheckupFormData.duration_anaesthesia"/></td>
						<span class="help is-danger" v-show="errors.has('duration_anaesthesia')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">Major Surgeries</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="past_history_major_surgeries" v-model="preAnaesthesiaCheckupFormData.past_history_major_surgeries"  v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('past_history_major_surgeries')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td><input class="form-control" type="text" name="duration_major_surgeries" value="" v-model="preAnaesthesiaCheckupFormData.duration_major_surgeries"/></td>
						<span class="help is-danger" v-show="errors.has('duration_major_surgeries')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">Jaundice</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="past_history_jaundice" v-model="preAnaesthesiaCheckupFormData.past_history_jaundice" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('past_history_jaundice')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td><input class="form-control" type="text" name="duration_major_jaundice" value=""></td>
						<span class="help is-danger" v-show="errors.has('duration_major_jaundice')">
							Field is required
						</span>
	          </tr>
	          <tr>
	            <th style="vertical-align:middle" class="text-center">Koch's</th>
	  					<td>
	  						<div class="form-group">
	                <select class="form-control" name="past_hisotry_kochs" v-model="preAnaesthesiaCheckupFormData.past_hisotry_kochs" v-validate="'required'">
	                  <option value="No">No</option>
	                  <option value="Yes">Yes</option>
	                </select>
									<span class="help is-danger" v-show="errors.has('past_hisotry_kochs')">
										Field is required
									</span>
	  						</div>
	  					</td>
	            <td><input class="form-control" type="text" name="duration_major_kochs" value="" v-model="preAnaesthesiaCheckupFormData.duration_major_kochs"/></td>
						<span class="help is-danger" v-show="errors.has('duration_major_kochs')">
							Field is required
						</span>
	          </tr>
	  			</tbody>
			  </table>
			</div>

	    <hr>

	    <div class="row form-group">
	      <h3>Treatment History</h3>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Anti HT: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="anti_ht" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.anti_ht"/>
						<span class="help is-danger" v-show="errors.has('anti_ht')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Anti DM: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="anti_dm" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.anti_dm"/>
						<span class="help is-danger" v-show="errors.has('anti_dm')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Other: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="treatment_history_other" value="" class="form-control"  v-model="preAnaesthesiaCheckupFormData.treatment_history_other"/>
						<span class="help is-danger" v-show="errors.has('treatment_history_other')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Steroids: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="steroids" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.steroids"/>
						<span class="help is-danger" v-show="errors.has('steroids')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Anti Depressant: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="anti_depressant" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.anti_depressant"/>
						<span class="help is-danger" v-show="errors.has('anti_depressant')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>

	    <hr>

	    <div class="row form-group">
	      <h3>General Examination</h3>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Built And Nourish: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="built_and_nourish" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.built_and_nourish"/>
						<span class="help is-danger" v-show="errors.has('built_and_nourish')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Pallor: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="pallor" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.pallor"/>
						<span class="help is-danger" v-show="errors.has('pallor')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Odema: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="odema" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.odema"/>
						<span class="help is-danger" v-show="errors.has('odema')">
							Field is required
						</span>

	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Icturus: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="icturus" value="" class="form-control"  v-model="preAnaesthesiaCheckupFormData.icturus"/>
						<span class="help is-danger" v-show="errors.has('icturus')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Airway : Teeth: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="airway_teeth" value="" class="form-control"  v-model="preAnaesthesiaCheckupFormData.airway_teeth"/>
						<span class="help is-danger" v-show="errors.has('airway_teeth')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Mouth Opening: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="mouth_opening" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.mouth_opening"/>
						<span class="help is-danger" v-show="errors.has('mouth_opening')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Neck Extention: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="neck_extension" value=""class="form-control" v-model="preAnaesthesiaCheckupFormData.neck_extension"/>
						<span class="help is-danger" v-show="errors.has('neck_extension')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">CM Distance: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="cm_distance" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.cm_distance"/>
						<span class="help is-danger" v-show="errors.has('cm_distance')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Temperature: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="temperature" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.temperature"/>
						<span class="help is-danger" v-show="errors.has('temperature')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Pulse: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="pulse" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.pulse"/>
						<span class="help is-danger" v-show="errors.has('pulse')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">BP: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="bp" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.bp"/>
						<span class="help is-danger" v-show="errors.has('bp')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Other Findings: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="other_findings" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.other_findings"/>
						<span class="help is-danger" v-show="errors.has('other_findings')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">SpO<sub>2</sub>: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="spo2" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.spo2"/>
						<span class="help is-danger" v-show="errors.has('spo2')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Breath Holding Time: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="breath_holding_time" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.breath_holding_time"/>
						<span class="help is-danger" v-show="errors.has('breath_holding_time')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>

	    <hr>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">RS: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="rs" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.rs"/>
						<span class="help is-danger" v-show="errors.has('rs')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">CVS: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="cvs" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.cvs"/>
						<span class="help is-danger" v-show="errors.has('cvs')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">CNS: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="cns" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.cns"/>
						<span class="help is-danger" v-show="errors.has('cns')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Abdomen: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="abdomen" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.abdomen"/>
						<span class="help is-danger" v-show="errors.has('abdomen')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>

	    <hr>

	    <div class="row form-group">
	      <h3>Investigation</h3>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Hb \ CBC: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="hb_cbc" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.hb_cbc"/>
						<span class="help is-danger" v-show="errors.has('hb_cbc')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">S.Creatine \ Urea: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="s_creatine_urea" value="" class="form-control"  v-model="preAnaesthesiaCheckupFormData.s_creatine_urea"/>
						<span class="help is-danger" v-show="errors.has('s_creatine_urea')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">RBS: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="rbs" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.rbs"/>
						<span class="help is-danger" v-show="errors.has('rbs')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">ECG: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="ecg" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.ecg"/>
						<span class="help is-danger" v-show="errors.has('ecg')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">S. Electrolyte: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="s_electrolyte" value="" class="form-control"  v-model="preAnaesthesiaCheckupFormData.s_electrolyte"/>
						<span class="help is-danger" v-show="errors.has('s_electrolyte')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">X Ray Chest: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="x_ray_chest" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.x_ray_chest"/>
						<span class="help is-danger" v-show="errors.has('x_ray_chest')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Other: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="investigation_other" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.investigation_other"/>
						<span class="help is-danger" v-show="errors.has('investigation_other')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Echo \ DSE: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="echo_dse" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.echo_dse"/>
						<span class="help is-danger" v-show="errors.has('echo_dse')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>

	    <hr>

	    <div class="row form-group">
	      <h3>Advice</h3>
	    </div>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">NBM: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="nbm" value="" class="form-control"  v-model="preAnaesthesiaCheckupFormData.nbm"/>
						<span class="help is-danger" v-show="errors.has('nbm')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Preparation of Blood: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="preparation_of_blood" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.preparation_of_blood">
						<span class="help is-danger" v-show="errors.has('preparation_of_blood')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">IV Fluids: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="iv_fluids" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.iv_fluids"/>
						<span class="help is-danger" v-show="errors.has('iv_fluids')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Other Instruction: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="other_instructions" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.other_instructions">
						<span class="help is-danger" v-show="errors.has('other_instructions')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">ASA: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="asa" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.asa">
						<span class="help is-danger" v-show="errors.has('asa')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Airway Management: </label>
	        </div>
	        <div class="col-md-6">
	          <input type="text" name="airway_management" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.airway_management">
						<span class="help is-danger" v-show="errors.has('airway_management')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-4">
	        <label for="">Drugs: </label>
	      </div>
	      <div class="col-md-8">
	        <input type="text" name="drugs" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.drugs">
						<span class="help is-danger" v-show="errors.has('drugs')">
							Field is required
						</span>
	      </div>
	    </div>
	    <div class="row form-group">
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Post Surgery Ventilation Required: </label>
	        </div>
	        <div class="col-md-6">
	          <select class="form-control" name="post_op_ventilation_required" v-model="preAnaesthesiaCheckupFormData.post_op_ventilation_required" v-validate="'required'">
	            <option value="No">No</option>
	            <option value="Yes">Yes</option>
	          </select>
						<span class="help is-danger" v-show="errors.has('post_op_ventilation_required')">
							Field is required
						</span>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="col-md-6">
	          <label for="">Type of Anaesthesia Planned: </label>
	        </div>
	        <div class="col-md-6">
	          <select class="form-control" name="type_of_anaesthesia_planned" v-model="preAnaesthesiaCheckupFormData.type_of_anaesthesia_planned" v-validate="'required'">
	            <option value="standby">Standby</option>
	            <option value="sedation">Sedation</option>
	            <option value="regional">Regional</option>
	            <option value="general">General</option>
	          </select>
						<span class="help is-danger" v-show="errors.has('type_of_anaesthesia_planned')">
							Field is required
						</span>
	        </div>
	      </div>
	    </div>

	    <hr>

	    <div class="row form-group">
	      <div class="col-md-6">
	        <label for="">Name of Doctor: </label>
	      </div>
	      <div class="col-md-6">
	        <input type="text" name="name_of_doctor" value="" class="form-control" v-model="preAnaesthesiaCheckupFormData.name_of_doctor" v-validate="'required'"/>
						<span class="help is-danger" v-show="errors.has('name_of_doctor')">
							Field is required
						</span>
	      </div>
	    </div>

			<div class="row form-group">
				<div class="col text-center">
					<button class="form-group btn btn-success" type="button" @click="savePreAnaesthesiaCheckupForm()">Submit</button>
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
                'type': 'preAnaesthesiaCheckupForm',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
								'preAnaesthesiaCheckupFormData' :{
									'weight':'',
									'height':'',
									'surgeon_name':'',
									'operative_procedure':'',
									'history':'',
									'surgery':'',
									'systematic_examination':'',
									'relevant_medical_history_treatment':'',
									'cough_fever':'',
									'duration_cough_fever':'',
									'chest_pain':'',
									'duration_chest_pain':'',
									'breathlessness':'',
									'duration_breathlessness':'',
									'bleeding_disorder':'',
									'duration_bleeding_disorder':'',
									'other':'',
									'present_complaint_other':'',
									'duration_other':'',
									'family_history_ht':'',
									'family_history_dm':'',
									'family_history_ihd':'',
									'family_history_asthma':'',
									'family_history_allergies':'',
									'family_history_anaesthesia':'',
									'past_history_ht':'',
									'duration_ht':'',
									'past_history_dm':'',
									'duration_dm':'',
									'past_history_asthma':'',
									'duration_asthma':'',
									'past_history_allergies':'',
									'duration_allergies':'',
									'past_history_anaesthesia':'',
									'duration_anaesthesia':'',
									'past_history_major_surgeries':'',
									'duration_major_surgeries':'',
									'past_history_jaundice':'',
									'duration_major_jaundice':'',
									'past_hisotry_kochs':'',
									'duration_major_kochs':'',
									'anti_ht':'',
									'anti_dm':'',
									'treatment_history_other':'',
									'steroids':'',
									'anti_depressant':'',
									'built_and_nourish':'',
									'pallor':'',
									'odema':'',
									'icturus':'',
									'airway_teeth':'',
									'mouth_opening':'',
									'neck_extension':'',
									'cm_distance':'',
									'temperature':'',
									'pulse':'',
									'bp':'',
									'other_findings':'',
									'spo2':'',
									'breath_holding_time':'',
									'rs':'',
									'cvs':'',
									'cns':'',
									'abdomen':'',
									'hb_cbc':'',
									's_creatine_urea':'',
									'rbs':'',
									'ecg':'',
									's_electrolyte':'',
									'x_ray_chest':'',
									'investigation_other':'',
									'echo_dse':'',
									'nbm':'',
									'preparation_of_blood':'',
									'iv_fluids':'',
									'other_instructions':'',
									'asa':'',
									'airway_management':'',
									'drugs':'',
									'post_op_ventilation_required':'',
									'type_of_anaesthesia_planned':'',
									'name_of_doctor':'',
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
		    savePreAnaesthesiaCheckupForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
									 var Res = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.preAnaesthesiaCheckupFormData};
				    			 User.savePreAnaesthesiaCheckupForm(Res).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Pre Anesthesia Checkup details have been saved', 'Pre Anesthesia Checkup', {timeOut: 5000});
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
