<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Radiology Requisition Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/RL/01 <br>
					REV. No. 0.0 <br>
					WEF 15-04-2017
				</div>
			</div>
		</div>
	</div>

<form action="" method="post">
	<div class="row form-group">
		<div class="col-md-3">
			<label>Provisional Diagnosis : </label>
		</div>
		<div class="col-md-9">
			<input class="form-control" type="text" name="provisional_diagnosis" id="provisional_diagnosis" placeholder="Provisional Diagnosis" value="" v-model="radiologyRequisitionData.provisional_diagnosis"/>
		</div>
	</div>

	<div class="row form-group">
		<h3>Computed Tomography (CT) Scan</h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="brain_plain" id="brain_plain" value="yes" v-model="radiologyRequisitionData.brain_plain"/><label for="brain_plain">CT Brain Plain</label>
			</div>
			<div class="col-md-6">
				<input  type="checkbox" name="ct_pmns" id="ct_pmns" value="yes" v-model="radiologyRequisitionData.ct_pmns"/><label for="ct_pmns"> CT PNS</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="brain_plain_contrast" id="brain_plain_contrast" value="yes" v-model="radiologyRequisitionData.brain_plain_contrast"/><label for="brain_plain_contrast"> CT Brain Plain with Contrast</label>
			</div>
			<div class="col-md-6">
				<input  type="checkbox" name="ct_head_face" id="ct_head_face" value="yes" v-model="radiologyRequisitionData.ct_head_face"/><label for="ct_head_face"> CT Head with Face</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="ct_face_plain" id="ct_face_plain" value="yes" v-model="radiologyRequisitionData.ct_face_plain"/><label for="ct_face_plain">CT Face Plain</label>
			</div>
			<div class="col-md-6">
				<input  type="checkbox" name="ct_3d" id="ct_3d" value="yes" v-model="radiologyRequisitionData.ct_3d"/><label for="ct_3d"> 3D CT</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="ct_cv_junction_flex" value="yes" v-model="radiologyRequisitionData.ct_cv_junction_flex"> <label for="ct_cv_junction_flex"> CT C.V. Junction Flex</label>
			</div>
			<div class="col-md-6">
				<input  type="checkbox" name="ct_cv_junction_ext" id="ct_cv_junction_ext" value="yes" v-model="radiologyRequisitionData.ct_cv_junction_ext"/> <label for="ct_cv_junction_ext"> CT C.V. Junction Ext.</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="ct_chest_plain" id="ct_chest_plain" value="yes" v-model="radiologyRequisitionData.ct_chest_plain"/> <label for="ct_chest_plain">CT Chest Plain</label>
			</div>
			<div class="col-md-6">
				<input  type="checkbox" name="ct_dorsal_spine" id="ct_dorsal_spine" value="yes" v-model="radiologyRequisitionData.ct_dorsal_spine"/> <label for="ct_dorsal_spine"> CT Dorsal Spine</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="ct_cervical_spine" id="ct_cervical_spine" value="yes" v-model="radiologyRequisitionData.ct_cervical_spine"/> <label for="ct_cervical_spine"> CT Cervical Spine</label>
			</div>
			<div class="col-md-6">
				<input  type="checkbox" name="ct_abdomen_plain" id="ct_abdomen_plain" value="yes" v-model="radiologyRequisitionData.ct_abdomen_plain"/> <label for="ct_abdomen_plain"> CT Abdomen Plain</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="ct_lumbar_spine" id="ct_lumbar_spine" value="yes" v-model="radiologyRequisitionData.ct_lumbar_spine"/> <label for="ct_lumbar_spine">  CT Lumbar Spine</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="other" id="other" value="yes" v-model="radiologyRequisitionData.other"/><label for="other">Other</label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="anyother" id="anyother" value="" v-model="radiologyRequisitionData.anyother"/>
			</div>
		</div>
	</div>

	<hr />

	<div class="row">
		<h3>X Ray</h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="xray_fixed" id="xray_fixed" v-model="radiologyRequisitionData.xray_fixed"/><label for="xray_fixed">Fixed</label>
			</div>
			<div class="col-md-6">
				<input  type="checkbox" name="xray_portable" id="xray_portable" v-model="radiologyRequisitionData.xray_portable"/><label for="xray_portable">Portable</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input  type="checkbox" name="other_xray" id="other_xray" value="yes" v-model="radiologyRequisitionData.other_xray"/><label for="other_xray">Other</label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="xray_other" id="xray_other" value="" v-model="radiologyRequisitionData.xray_other"/>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Date : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="date" name="date" v-model="radiologyRequisitionData.date"/>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Time : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="time" name="time" v-model="radiologyRequisitionData.time"/>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<button class="btn btn-success form-control" type="submit" @click = "saveRadiologyRequisition()">Submti</button>
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
                'radiologyRequisitionData' : {
										'provisional_diagnosis' :'',
						        'brain_plain' :'',
						        'ct_pmns' :'',
						        'brain_plain_contrast' :'',
						        'ct_head_face' :'',
						        'ct_face_plain' :'',
						        'ct_3d' :'',
						        'ct_cv_junction_flex' :'',
						        'ct_cv_junction_ext' :'',
						        'ct_chest_plain' :'',
						        'ct_dorsal_spine' :'',
						        'ct_cervical_spine' :'',
						        'ct_abdomen_plain' :'',
						        'ct_lumbar_spine' :'',
						        'other' :'',
						        'anyother' :'',
						        'xray_fixed' :'',
						        'xray_portable' :'',
						        'other_xray' :'',
						        'xray_other' :'',
						        'date' :'',
						        'time' :'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveRadiologyRequisition() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveRadiologyRequisition(this.radiologyRequisitionData).then(
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
