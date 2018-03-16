<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Pre-Angiography Angioplasty Checklist</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/CTH/01 <br>
					REV. No. 0.0 <br>
					WEF 01-09-2014
				</div>
			</div>
		</div>
	</div>

	<form name="" method="post">
			<div class="col-md-6">
				<div class="row form-group">
					<div class="col-md-6">
						<label for="">Consultant's Name :</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="consultant_name" value="" v-model="preAngiographyAngioplastyChecklistData.consultant_name">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="">Time of Arrival on Floor:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="time_arrival" value=""  v-model="preAngiographyAngioplastyChecklistData.time_arrival">
					</div>
				</div>
			</div>

			<div class="col-md-6">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="">Time when cath Preparation is complete :</label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="time" name="time_prep_complete" value="" v-model="preAngiographyAngioplastyChecklistData.time_prep_complete">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="">Time of shifting for cath :</label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="time" name="time_shifting" value="" v-model="preAngiographyAngioplastyChecklistData.time_shifting">
						</div>
					</div>
				</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Angiography Consent</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="angiography_consent" value="" v-model="preAngiographyAngioplastyChecklistData.angiography_consent">
							<option value="NA">NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Angioplasty Consent</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="angioplasty_consent" value="" v-model="preAngiographyAngioplastyChecklistData.angioplasty_consent">
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Pacemaker Implant</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="pacemaker" value="" v-model="preAngiographyAngioplastyChecklistData.pacemaker">
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
					<div class="col-md-2">
						<label>Allergies : </label>
					</div>
					<div class="col-md-5">
						<select class="form-control" name="allergies" value="" v-model="preAngiographyAngioplastyChecklistData.allergies">
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-md-5">
						<input class="form-control" type="text" name="allergies_list" placeholder="If any" value="" v-model="preAngiographyAngioplastyChecklistData.allergies_list">
					</div>
			</div>
			<hr>
			<div class="row">
				<h3>Vital Signs : </h3>
			</div>

			<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
						<label>Pulse : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="pulse" placeholder="pulse" value="" v-model="preAngiographyAngioplastyChecklistData.pulse">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
						<label>BP : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="bp" placeholder="BP" value="" v-model="preAngiographyAngioplastyChecklistData.bp">
						</div>
					</div>
			</div>

			<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
						<label>Resp : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp" placeholder="Resp" value="" v-model="preAngiographyAngioplastyChecklistData.resp">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
						<label>Temp : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp" placeholder="Temp" value="" v-model="preAngiographyAngioplastyChecklistData.temp">
						</div>
					</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Part Preparation : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="part_prep"  value="" v-model="preAngiographyAngioplastyChecklistData.part_prep">
							<option value="Right radial and right groin">Right Radial and Right Groin</option>
							<option value="Left Brachial and left groin">Left Brachial and Left Groin</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Pre Medication : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="pre_med"  value="" v-model="preAngiographyAngioplastyChecklistData.pre_med">
							<option value="Loading Dose - Tab clopidogrel 75mg x 4 + Tab Avil x 1 stat">Loading Dose - Tab clopidogrel 75mg x 4 + Tab Avil x 1 stat</option>
							<option value="Continuing Dose - Tab clopidogrel 75mg (10D or BD)">Continuing Dose - Tab clopidogrel 75mg (10D or BD)</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Ecosprin : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="ecosprin" value="" v-model="preAngiographyAngioplastyChecklistData.ecosprin">
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Clopidogrel : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="clopidogrel" value="" v-model="preAngiographyAngioplastyChecklistData.clopidogrel">
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Blood Arranged : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="blood_arranged" placeholder="Blood Arranged(in units)" value="" v-model="preAngiographyAngioplastyChecklistData.blood_arranged">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>I/V Cannula put on : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="ivcannula_puton" placeholder="I/V Cannula" value="" v-model="preAngiographyAngioplastyChecklistData.ivcannula_puton">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Height : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="height" placeholder="Height(in cms)" value="" v-model="preAngiographyAngioplastyChecklistData.height">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Weight : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="weight" placeholder="Weight(in kgs)" value="" v-model="preAngiographyAngioplastyChecklistData.weight">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>ID Band Applied : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="id_band" value="" v-model="preAngiographyAngioplastyChecklistData.id_band">
							<option value="NA"> NA</option>
							<option value="Left">Left</option>
							<option value="Right">Right</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Jewellery Removed : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="jewellery_removed" value="" v-model="preAngiographyAngioplastyChecklistData.jewellery_removed">
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Dentures Removed : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="dentures" value="" v-model="preAngiographyAngioplastyChecklistData.dentures">
							<option value="NA"> NA</option>
							<option value="Left">Left</option>
							<option value="Right">Right</option>
						</select>
					</div>
				</div>
			</div>

			<hr>
			<div class="row">
				<h3>Investigations : </h3>
			</div>

			<table class="table table-bordered">
					<thead>
						<tr>
							<th>Investigation</th>
							<th>Result</th>
							<th>Investigation</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>CBC(Hb,TLC,DLC,TLC,PLT,RBc,PCV)</td>
							<td><input class="form-control" type="text" name="cbc" value=""  v-model="preAngiographyAngioplastyChecklistData.cbc"></td>
							<td>Blood grouping and cross matching</td>
							<td><input class="form-control" type="text" name="blood_group" value="" v-model="preAngiographyAngioplastyChecklistData.blood_group"></td>
						</tr>
						<tr>
							<td>Blood Urea</td>
							<td><input class="form-control" type="text" name="blood_urea" value="" v-model="preAngiographyAngioplastyChecklistData.blood_urea"></td>
							<td>HBsAg</td>
							<td><input class="form-control" type="text" name="hbsag" value="" v-model="preAngiographyAngioplastyChecklistData.hbsag"></td>
						</tr>
						<tr>
							<td>Serum Creatinine</td>
							<td><input class="form-control" type="text" name="serum_creatinine" value="" v-model="preAngiographyAngioplastyChecklistData.serum_creatinine"></td>
							<td>Hepatitis C</td>
							<td><input class="form-control" type="text" name="hep_c" value="" v-model="preAngiographyAngioplastyChecklistData.hep_c"></td>
						</tr>
						<tr>
							<td>Random Blood Sugar</td>
							<td><input class="form-control" type="text" name="random_blood_sugar" value=""></td>
							<td>HIV</td>
							<td><input class="form-control" type="text" name="hiv" value="" v-model="preAngiographyAngioplastyChecklistData.hiv"/></td>
						</tr>
						<tr>
							<td>PT</td>
							<td><input class="form-control" type="text" name="pt" value="" v-model="preAngiographyAngioplastyChecklistData.pt"/></td>
							<td>Chest X-Ray</td>
							<td><input class="form-control" type="text" name="chest_xray" value="" v-model="preAngiographyAngioplastyChecklistData.chest_xray" /></td>
						</tr>
						<tr>
							<td>Serum Electrolytes</td>
							<td><input class="form-control" type="text" name="serum_electrolytes" value=""></td>
							<td>ECG</td>
							<td><input class="form-control" type="text" name="ecg" value="" v-model="preAngiographyAngioplastyChecklistData.ecg" /></td>
						</tr>
						<tr>
							<td>LFT</td>
							<td><input class="form-control" type="text" name="lft" value=""  v-model="preAngiographyAngioplastyChecklistData.lft" /></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			<div class="text-center form-group">
				<button class="btn btn-success" type="submit" @click = "savePreAngiographyAngioplastyChecklist()">Submit</button>
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
                'preAngiographyAngioplastyChecklistData' : {
										'time_arrival':'',
							      'time_prep_complete':'',
							      'time_shifting':'',
							      'consultant_name':'',
							      'angiography_consent':'',
							      'angioplasty_consent':'',
							      'pacemaker':'',
							      'allergies':'',
							      'allergies_list':'',
							      'pulse':'',
							      'bp':'',
							      'resp':'',
							      'temp':'',
							      'part_prep':'',
							      'pre_med':'',
							      'ecosprin':'',
							      'clopidogrel':'',
							      'blood_arranged':'',
							      'ivcannula_puton':'',
							      'height':'',
							      'weight':'',
							      'id_band':'',
							      'jewellery_removed':'',
							      'dentures':'',
							      'cbc':'',
							      'blood_urea':'',
							      'blood_group':'',
							      'hbsag':'',
							      'serum_creatinine':'',
							      'hep_c':'',
							      'random_blood_sugar':'',
							      'hiv':'',
							      'pt':'',
							      'chest_xray':'',
							      'serum_electrolytes':'',
							      'ecg':'',
							      'lft':'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    savePreAngiographyAngioplastyChecklist() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.savePreAngiographyAngioplastyChecklist(this.preAngiographyAngioplastyChecklistData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Pre Angiography Angioplasty Checklist details have been saved', 'pre angiography angioplasty checklist detail', {timeOut: 5000});
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
