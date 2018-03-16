<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>Pre-OT Checklist</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/OTR/01 <br>
					REV. No. 0.0 <br>
					WEF 01-08-2013
				</div>
			</div>
		</div>
	</div>


	<form action="" method="post">
	   <div class="row form-group">
      <div class="col-md-8">
        <div class="row form-group">
          <div class="col-md-6">
            <div class="col-md-6">
              <label for="">OT Planning Time:</label>
            </div>
            <div class="col-md-6">
              <input type="time" name="ot_planning_time" class="form-control" value="" v-model="preOTChecklistData.ot_planning_time">
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-6">
              <label for="">OT Procedure Time:</label>
            </div>
            <div class="col-md-6">
              <input type="time" name="ot_procedure_time" class="form-control" value="" v-model="preOTChecklistData.ot_procedure_time">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-6">
            <label for="">Date:</label>
          </div>
          <div class="col-md-6">
            <input type="date" name="date" class="form-control" value="" v-model="preOTChecklistData.date">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <textarea name="addressograph" class="form-control" rows="3" placeholder="Addressograph here"></textarea>
      </div>
    </div>

    <hr>

		<div class="row form-group">
		  <table class="table table-bordered">
		    <thead>
  			  <tr>
  				<th>Sr. No.</th>
  				<th>Contents</th>
  				<th>Response</th>
  				<th>Remarks</th>
  			  </tr>
  			</thead>
  			<tbody>
  			  <tr>
  			    <td class="text-center">1</td>
  					<td>Room No.</td>
  					<td>
  						<div class="form-group">
                <input type="text" name="room_no" value="" class="form-control" v-model="preOTChecklistData.room_no">
  						</div>
  					</td>
  					<td><input class="form-control" type="text" name="remark_00" value="" v-model="preOTChecklistData.remark_00"></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">2</td>
    				<td>Case paper completed to date?</td>
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="case_paper_completed" v-model="preOTChecklistData.case_paper_completed">
  								<option value="Yes">Yes</option>
  								<option value="No">No</option>
  							</select>
  						</div>
  					</td>
  				  <td><input class="form-control" type="text" name="remark_01" value="" v-model="preOTChecklistData.remark_01"></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">3</td>
    				<td>NBM Status Since</td>
    					<td>
    						<div class="form-group">
                  <input type="text" name="nbm_status" class="form-control" value="" v-model="preOTChecklistData.nbm_status">
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_02" value="" v-model="preOTChecklistData.remark_02"></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">4</td>
    				<td>Consent for Surgery / Anaesthesia</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="consent_for_surgery" v-model="preOTChecklistData.consent_for_surgery" >
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_03" value="" v-model="preOTChecklistData.remark_03" ></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">5</td>
    				<td>Investigations:</td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td class="text-center"></td>
            <td>
              1. Pre OT Package
              <ul>
    						<li>
    							Blood Investigations
    						</li>
    						<li>
    							HIV/ HBsAg/ HCV
    						</li>
    					</ul>
            </td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="pre_ot_package_a" v-model="preOTChecklistData.remark_03">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_pre_ot_package_a" value="" v-model="preOTChecklistData.remark_pre_ot_package_a"></td>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>
              <ul>
    						<li>
    							MRI/CT/X-Rays/Doppler/Angiography
    						</li>
    						<li>
    							ECG/X-Rays Chest PA
    						</li>
    					</ul>
            </td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="pre_ot_package_b" v-model="preOTChecklistData.pre_ot_package_b">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_pre_ot_package_b" value="" v-model="preOTChecklistData.remark_pre_ot_package_b"></td>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>2.
              <ul>
    						<li>
    							DSE
    						</li>
    					</ul>
            </td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="dse" v-model="preOTChecklistData.dse">
    								<option value="Yes">Yes</option>
    								<option value="No" >No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_dse" value="" v-model="preOTChecklistData.remark_dse"></td>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>
              <ul>
    						<li>
    							ECHO
    						</li>
    					</ul>
            </td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="echo">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_echo" value="" v-model="preOTChecklistData.remark_echo"></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">6</td>
    				<td>PAC Date</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="pac_date" >
    								<option value="Yes" >Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="remark_05" value="" v-model="preOTChecklistData.remark_05"></div></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">7</td>
    				<td>OT Dress Changed</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="ot_dress_changed" >
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="remark_06" value="" v-model="preOTChecklistData.remark_06"></div></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">8</td>
    				<td>Pre Operative Medicines</td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td class="text-center"></td>
            <td>1. Anti Diabetic</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="anti_diabetic" v-model="preOTChecklistData.anti_diabetic">
    								<option value="Yes"> Yes </option>
    								<option value="No"> No </option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_anti_diabetic" value="" v-model="preOTChecklistData.remark_anti_diabetic"></td>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>2. Anti HT</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="anti_ht" v-model="preOTChecklistData.anti_ht">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_anti_ht" value="" v-model="preOTChecklistData.remark_anti_ht"></td>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>3. Anticonvulsant</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="anticonvulsant" v-model="preOTChecklistData.anticonvulsant">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_anticonvulsant" value="" v-model="preOTChecklistData.remark_anticonvulsant"></td>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>No of Blood Product BT PCV-FFP-PRP</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="no_of_blood_product" v-model="preOTChecklistData.no_of_blood_product" >
    								<option value="Yes">Yes</option>
    								<option value="No" >No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_number_of_blood_product" value="" v-model="preOTChecklistData.remark_number_of_blood_product"></td>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>Antibiotics (1 hr. before)</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="antibiotics" v-model="preOTChecklistData.antibiotics">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_antibiotics" value="" v-model="preOTChecklistData.remark_antibiotics"></td>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>Other</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="other" v-model="preOTChecklistData.other">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_other" value="" v-model="preOTChecklistData.remark_other"></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">9</td>
    				<td>Transfusion Cross Matching Done</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="transfusion_cross_matchin" v-model="preOTChecklistData.transfusion_cross_matchin">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_08" value="" v-model="preOTChecklistData.remark_08"></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">10</td>
    				<td>Relative's presence - Ornaments (Earring/Chain/Ring/Bangle/Other) / Dentures / Implants removed and handed to relatives</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="ornaments_handed_to_relatives" v-model="preOTChecklistData.ornaments_handed_to_relatives">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_09" value="" v-model="preOTChecklistData.remark_09"> </td>
  			  </tr>

          <tr>
  			    <td class="text-center">11</td>
    				<td>I.V. Access</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="iv_access" v-model="preOTChecklistData.iv_access">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_10" value="" v-model="preOTChecklistData.remark_10"></td>
  			  </tr>

          <tr>
  			    <td class="text-center">12</td>
    				<td>Skin Preparation / Shaving</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="skin_preparation" v-model="preOTChecklistData.skin_preparation">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_11" value=""  v-model="preOTChecklistData.remark_11"></td>
  			  </tr>

          <tr>
  			    <td class="text-center"> 13 </td>
    				<td>Known Allergies</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="known_allergies" v-model="preOTChecklistData.known_allergies">
    								<option value="Yes">Yes</option>
    								<option value="No" >No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_12" value="" v-model="preOTChecklistData.remark_12"></td>
  			  </tr>

          <tr>
  			    <td class="text-center">14</td>
    				<td>Any special instructions</td>
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="special_instructions" v-model="preOTChecklistData.special_instructions">
    								<option value="Yes">Yes</option>
    								<option value="No">No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_13" value="" v-model="preOTChecklistData.remark_13"></td>
  			  </tr>
  			</tbody>
		  </table>
		</div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">Name of In-charge: </label>
      </div>
      <div class="col-md-6">
        <input type="text" name="name_of_incharge" value="" class="form-control"  v-model="preOTChecklistData.name_of_incharge">
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">Name of Staff: </label>
      </div>
    </div>

		<div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Over given by:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="over_given_by" value="" class="form-control" v-model="preOTChecklistData.over_given_by">
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Over given to:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="over_given_to" value="" class="form-control" v-model="preOTChecklistData.over_given_to">
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Ward:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="ward" value="" class="form-control" v-model="preOTChecklistData.ward">
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Name of OT Staff:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="name_ot_staff" value="" class="form-control" v-model="preOTChecklistData.name_ot_staff">
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">Ornaments / Dentures / Implants removed and handed over to:</label>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Name of Relative:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="name_of_relative" value="" class="form-control" v-model="preOTChecklistData.name_of_relative">
        </div>
      </div>
    </div>

		<div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">I.V. Access:</label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="iv_access_location" v-model="preOTChecklistData.iv_access_location">
            <option value="arm">Arm</option>
            <option value="right_arm">Right Forearm</option>
            <option value="left_arm">Left Arm</option>
            <option value="left_forearm">Left Forearm</option>
          </select>
        </div>
      </div>
    </div>

		<div class="row form-group text-center">
			<button class="form-group btn btn-success" type="submit" @click = "savePreOTChecklist()">Submit</button>
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
                'preOTChecklistData' : {
											'ot_planning_time':'',
											'ot_procedure_time':'',
											'date':'',
											'room_no':'',
											'remark_00':'',
											'case_paper_completed':'',
											'remark_01':'',
											'nbm_status':'',
											'remark_02':'',
											'consent_for_surgery':'',
											'remark_03':'',
											'pre_ot_package_a':'',
											'remark_pre_ot_package_a':'',
											'pre_ot_package_b':'',
											'remark_pre_ot_package_b':'',
											'dse':'',
											'remark_dse':'',
											'remark_echo':'',
											'remark_05':'',
											'remark_06':'',
											'anti_diabetic':'',
											'remark_anti_diabetic':'',
											'anti_ht':'',
											'remark_anti_ht':'',
											'anticonvulsant':'',
											'remark_anticonvulsant':'',
											'no_of_blood_product':'',
											'remark_number_of_blood_product':'',
											'antibiotics':'',
											'remark_antibiotics':'',
											'other':'',
											'remark_other':'',
											'transfusion_cross_matchin':'',
											'remark_08':'',
											'ornaments_handed_to_relatives':'',
											'remark_09':'',
											'iv_access':'',
											'remark_10':'',
											'skin_preparation':'',
											'remark_11':'',
											'known_allergies':'',
											'remark_12':'',
											'special_instructions':'',
											'remark_13':'',
											'name_of_incharge':'',
											'over_given_by':'',
											'over_given_to':'',
											'ward':'',
											'name_ot_staff':'',
											'name_of_relative':'',
											'iv_access_location':'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    savePreOTChecklist() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.savePreOTChecklist(this.preOTChecklistData).then(
		                (response) => {
		                	if(response.data.code == 200) {
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
