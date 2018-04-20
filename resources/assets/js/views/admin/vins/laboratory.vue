<template>
	<div class="container">
		<div class="page-header">

				<div class=" row col-md-6">
				<h1>Laboratory Form</h1>
				</div>

		</div>

		<form method = "post" >
			<div class="row form-group">
				<div class="col-md-6">
					<div class = "row">
					<div class="col-md-6">
						<label class="control-label" for="label_1">Label 1 </label>
					</div>
					<div class="col-md-6">
							<select class="form-control ls-select2"  id="label_1" name="label_1"  v-model="laboratoryData.label_1">
								 <option :value="label1.text" v-for="label1 in laboratoryData.label_1_option">{{label1.text}}</option>
							</select>
					</div>
				</div>
				</div>
				<div class="col-md-6">
					<div class = "row">
					<div class="col-md-6">
						<label class="control-label" for="label_2">Label 2 </label>
					</div>
					<div class="col-md-6">
							<select class="form-control ls-select2"  id="label_2" name="label_2"  v-model="laboratoryData.label_2">
								 <option :value="label_2.text" v-for="label_2 in laboratoryData.label_2_option">{{label_2.text}}</option>
							</select>
					</div>
				</div>
				</div>
			</div>

			<div class = "row form-group">

				<div class="col-md-6">
					<div class = "row">
						<div class="col-md-6">
							<label class="control-label" for="urine">Urine </label>
						</div>
						<div class="col-md-6">
								<select class="form-control ls-select2"  id="urine" name="urine"  v-model="laboratoryData.urine">
									 <option :value="urinesample.text" v-for="urinesample in laboratoryData.urine_option">{{urinesample.text}}</option>
								</select>
						</div>
				</div>
				</div>
				<div class="col-md-6">
					<div class = "row">
						<div class="col-md-6">
							<label class="control-label" for="stone">Stone </label>
							</div>
						<div class="col-md-6">
								<select class="form-control ls-select2"  id="stone" name="stone"  v-model="laboratoryData.stone">
									 <option :value="stonesample.text" v-for="stonesample in laboratoryData.stone_option">{{stonesample.text}}</option>
								</select>
						</div>
				</div>
				</div>
			</div>

			<div class = "row form-group">
				<div class = "col-md-6">
				<div class = "row">
				<div class = "col-md-6">
					<label class = "control-label" for = "demo"> Demo </label>
				</div>
					<div class = "col-md-6">
					<select class = "form-control ls-select2" id = "demo" name = "demo" v-model = "laboratoryData.demo">
						<option value="">Select value...</option>
						<optgroup label = "Option-Group1">
							<option value = "value1">value1</option>
							<option value = "value2">value2</option>
							<option value = "value3">value3</option>
							<option value = "value4">value4</option>
						</optgroup>

						<optgroup label = "Option-Group2">
							<option value = "value1">value1</option>
							<option value = "value2">value2</option>
							<option value = "value3">value3</option>
							<option value = "value4">value4</option>
						</optgroup>

						<optgroup label = "Option-Group3">
							<option value = "value1">value1</option>
							<option value = "value2">value2</option>
							<option value = "value3">value3</option>
							<option value = "value4">value4</option>
						</optgroup>

						<optgroup label = "Option-Group4">
							<option value = "value1">value1</option>
							<option value = "value2">value2</option>
							<option value = "value3">value3</option>
							<option value = "value4">value4</option>
						</optgroup>
					</select>
				</div>
			</div>
		</div>
	</div>
		</form>

		<br><br>
		<hr>

		<h4>Investigations:</h4>
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#x_rays">X-Rays</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ct">CT</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mri">MRI</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#doppler">Doppler</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#others">Others</a></li>
		</ul><br><br>
		<div class="tab-content">
		<div id="x_rays" class="tab-pane fade in active">
		<h3 class="">X-Rays</h3>
			<p>
				<table class="table table-bordered table-striped">
					<tr>
						<td>X-Ray 1</td>
						<td>
							<input type="file" class="form-control" name="x_ray_1" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="x_ray_1_name" value="" v-model="x_ray_1_name">
						</td>
						<td>
							<button class="form-control" name="save_x_ray_1">Save x_ray_1</button>
						</td>
					</tr>
					<tr>
						<td>X-Ray 2</td>
						<td>
							<input type="file" class="form-control" name="x_ray_2" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="x_ray_2_name" value="" v-model="x_ray_2_name">
						</td>
						<td>
							<button class="form-control" name="save_x_ray_2">Save x_ray_2</button>
						</td>
					</tr>
					<tr>
						<td>X-Ray 3</td>
						<td>
							<input type="file" class="form-control" name="x_ray_3" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="x_ray_3_name" value="" v-model="x_ray_3_name">
						</td>
						<td>
							<button class="form-control" name="save_x_ray_3">Save x_ray_3</button>
						</td>
					</tr>
					<tr>
						<td>X-Ray 4</td>
						<td>
							<input type="file" class="form-control" name="x_ray_4" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="x_ray_4_name" value="" v-model="x_ray_4_name">
						</td>
						<td>
							<button class="form-control" name="save_x_ray_4">Save x_ray_4</button>
						</td>
					</tr>
					<tr>
						<td>X-Ray 5</td>
						<td>
							<input type="file" class="form-control" name="x_ray_5" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="x_ray_5_name" value="" v-model="x_ray_5_name">
						</td>
						<td>
							<button class="form-control" name="save_x_ray_5">Save x_ray_5</button>
						</td>
					</tr>
					<tr>
						<td>X-Ray 6</td>
						<td>
							<input type="file" class="form-control" name="x_ray_6" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="x_ray_6_name" value="" v-model="x_ray_6_name">
						</td>
						<td>
							<button class="form-control" name="save_x_ray_6">Save x_ray_6</button>
						</td>
					</tr>
					<tr>
						<td>X-Ray 7</td>
						<td>
							<input type="file" class="form-control" name="x_ray_7" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="x_ray_7_name" value="" v-model="x_ray_7_name">
						</td>
						<td>
							<button class="form-control" name="save_x_ray_7">Save x_ray_7</button>
						</td>
					</tr>
					<tr>
						<td>X-Ray 8</td>
						<td>
							<input type="file" class="form-control" name="x_ray_8" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="x_ray_8_name" value="" v-model="x_ray_8_name">
						</td>
						<td>
							<button class="form-control" name="save_x_ray_8">Save x_ray_8</button>
						</td>
					</tr>
				</table>
			</p>
		</div>

		<div id="ct" class="tab-pane fade">
		<h3 class="">CT</h3>
			<p>
				<table class="table table-bordered table-striped">
					<tr>
						<td>CT 1</td>
						<td>
							<input type="file" class="form-control" name="ct_1" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="ct_1_name" value="" v-model="ct_1_name">
						</td>
						<td>
							<button class="form-control" name="save_ct_1">Save ct_1</button>
						</td>
					</tr>
					<tr>
						<td>CT 2</td>
						<td>
							<input type="file" class="form-control" name="ct_2" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="ct_2_name" value="" v-model="ct_2_name">
						</td>
						<td>
							<button class="form-control" name="save_ct_2">Save ct_2</button>
						</td>
					</tr>
					<tr>
						<td>CT 3</td>
						<td>
							<input type="file" class="form-control" name="ct_3" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="ct_3_name" value="" v-model="ct_3_name">
						</td>
						<td>
							<button class="form-control" name="save_ct_3">Save ct_3</button>
						</td>
					</tr>
					<tr>
						<td>CT 4</td>
						<td>
							<input type="file" class="form-control" name="ct_4" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="ct_4_name" value="" v-model="ct_4_name">
						</td>
						<td>
							<button class="form-control" name="save_ct_4">Save ct_4</button>
						</td>
					</tr>
					<tr>
						<td>CT 5</td>
						<td>
							<input type="file" class="form-control" name="ct_5" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="ct_5_name" value="" v-model="ct_5_name">
						</td>
						<td>
							<button class="form-control" name="save_ct_5">Save ct_5</button>
						</td>
					</tr>
					<tr>
						<td>CT 6</td>
						<td>
							<input type="file" class="form-control" name="ct_6" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="ct_6_name" value="" v-model="ct_6_name">
						</td>
						<td>
							<button class="form-control" name="save_ct_6">Save ct_6</button>
						</td>
					</tr>
					<tr>
						<td>CT 7</td>
						<td>
							<input type="file" class="form-control" name="ct_7" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="ct_7_name" value="" v-model="ct_7_name">
						</td>
						<td>
							<button class="form-control" name="save_ct_7">Save ct_7</button>
						</td>
					</tr>
					<tr>
						<td>CT 8</td>
						<td>
							<input type="file" class="form-control" name="ct_8" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="ct_8_name" value="" v-model="ct_8_name">
						</td>
						<td>
							<button class="form-control" name="save_ct_8">Save ct_8</button>
						</td>
					</tr>
				</table>
			</p>
		</div>

		<div id="mri" class="tab-pane fade">
		<h3 class="">MRI</h3>
			<p>
				<table class="table table-bordered table-striped">
					<tr>
						<td>MRI 1</td>
						<td>
							<input type="file" class="form-control" name="mri_1" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="mri_1_name" value="" v-model="mri_1_name">
						</td>
						<td>
							<button class="form-control" name="save_mri_1">Save mri_1</button>
						</td>
					</tr>
					<tr>
						<td>MRI 2</td>
						<td>
							<input type="file" class="form-control" name="mri_2" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="mri_2_name" value="" v-model="mri_2_name">
						</td>
						<td>
							<button class="form-control" name="save_mri_2">Save mri_2</button>
						</td>
					</tr>
					<tr>
						<td>MRI 3</td>
						<td>
							<input type="file" class="form-control" name="mri_3" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="mri_3_name" value="" v-model="mri_3_name">
						</td>
						<td>
							<button class="form-control" name="save_mri_3">Save mri_3</button>
						</td>
					</tr>
					<tr>
						<td>MRI 4</td>
						<td>
							<input type="file" class="form-control" name="mri_4" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="mri_4_name" value="" v-model="mri_4_name">
						</td>
						<td>
							<button class="form-control" name="save_mri_4">Save mri_4</button>
						</td>
					</tr>
					<tr>
						<td>MRI 5</td>
						<td>
							<input type="file" class="form-control" name="mri_5" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="mri_5_name" value="" v-model="mri_5_name">
						</td>
						<td>
							<button class="form-control" name="save_mri_5">Save mri_5</button>
						</td>
					</tr>
					<tr>
						<td>MRI 6</td>
						<td>
							<input type="file" class="form-control" name="mri_6" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="mri_6_name" value="" v-model="mri_6_name">
						</td>
						<td>
							<button class="form-control" name="save_mri_6">Save mri_6</button>
						</td>
					</tr>
					<tr>
						<td>MRI 7</td>
						<td>
							<input type="file" class="form-control" name="mri_7" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="mri_7_name" value="" v-model="mri_7_name">
						</td>
						<td>
							<button class="form-control" name="save_mri_7">Save mri_7</button>
						</td>
					</tr>
					<tr>
						<td>MRI 8</td>
						<td>
							<input type="file" class="form-control" name="mri_8" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="mri_8_name" value="" v-model="mri_8_name">
						</td>
						<td>
							<button class="form-control" name="save_mri_8">Save mri_8</button>
						</td>
					</tr>
				</table>
			</p>
		</div>

		<div id="doppler" class="tab-pane fade">
		<h3>Doppler</h3>
			<p>
				<table class="table table-bordered table-striped">
					<tr>
						<td>Doppler 1</td>
						<td>
							<input type="file" class="form-control" name="doppler_1" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="doppler_1_name" value="" v-model="doppler_1_name">
						</td>
						<td>
							<button class="form-control" name="save_doppler_1">Save doppler_1</button>
						</td>
					</tr>
					<tr>
						<td>Doppler 2</td>
						<td>
							<input type="file" class="form-control" name="doppler_2" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="doppler_2_name" value="" v-model="doppler_2_name">
						</td>
						<td>
							<button class="form-control" name="save_doppler_2">Save doppler_2</button>
						</td>
					</tr>
					<tr>
						<td>Doppler 3</td>
						<td>
							<input type="file" class="form-control" name="doppler_3" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="doppler_3_name" value="" v-model="doppler_3_name">
						</td>
						<td>
							<button class="form-control" name="save_doppler_3">Save doppler_3</button>
						</td>
					</tr>
					<tr>
						<td>Doppler 4</td>
						<td>
							<input type="file" class="form-control" name="doppler_4" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="doppler_4_name" value="" v-model="doppler_4_name">
						</td>
						<td>
							<button class="form-control" name="save_doppler_4">Save doppler_4</button>
						</td>
					</tr>
					<tr>
						<td>Doppler 5</td>
						<td>
							<input type="file" class="form-control" name="doppler_5" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="doppler_5_name" value="" v-model="doppler_5_name">
						</td>
						<td>
							<button class="form-control" name="save_doppler_5">Save doppler_5</button>
						</td>
					</tr>
					<tr>
						<td>Doppler 6</td>
						<td>
							<input type="file" class="form-control" name="doppler_6" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="doppler_6_name" value="" v-model="doppler_6_name">
						</td>
						<td>
							<button class="form-control" name="save_doppler_6">Save doppler_6</button>
						</td>
					</tr>
					<tr>
						<td>Doppler 7</td>
						<td>
							<input type="file" class="form-control" name="doppler_7" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="doppler_7_name" value="" v-model="doppler_7_name">
						</td>
						<td>
							<button class="form-control" name="save_doppler_7">Save doppler_7</button>
						</td>
					</tr>
					<tr>
						<td>Doppler 8</td>
						<td>
							<input type="file" class="form-control" name="doppler_8" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="doppler_8_name" value="" v-model="doppler_8_name">
						</td>
						<td>
							<button class="form-control" name="save_doppler_8">Save doppler_8</button>
						</td>
					</tr>
				</table>
			</p>
		</div>

		<div id="others" class="tab-pane fade">
		<h3>Others</h3>
			<p>
				<table class="table table-bordered table-striped">
					<tr>
						<td>Others 1</td>
						<td>
							<input type="file" class="form-control" name="others_1" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="others_1_name" value="" v-model="others_1_name">
						</td>
						<td>
							<button class="form-control" name="save_others_1">Save others_1</button>
						</td>
					</tr>
					<tr>
						<td>Others 2</td>
						<td>
							<input type="file" class="form-control" name="others_2" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="others_2_name" value="" v-model="others_2_name">
						</td>
						<td>
							<button class="form-control" name="save_others_2">Save others_2</button>
						</td>
					</tr>
					<tr>
						<td>Others 3</td>
						<td>
							<input type="file" class="form-control" name="others_3" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="others_3_name" value="" v-model="others_3_name">
						</td>
						<td>
							<button class="form-control" name="save_others_3">Save others_3</button>
						</td>
					</tr>
					<tr>
						<td>Others 4</td>
						<td>
							<input type="file" class="form-control" name="others_4" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="others_4_name" value="" v-model="others_4_name">
						</td>
						<td>
							<button class="form-control" name="save_others_4">Save others_4</button>
						</td>
					</tr>
					<tr>
						<td>Others 5</td>
						<td>
							<input type="file" class="form-control" name="others_5" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="others_5_name" value="" v-model="others_5_name">
						</td>
						<td>
							<button class="form-control" name="save_others_5">Save others_5</button>
						</td>
					</tr>
					<tr>
						<td>Others 6</td>
						<td>
							<input type="file" class="form-control" name="others_6" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="others_6_name" value="" v-model="others_6_name">
						</td>
						<td>
							<button class="form-control" name="save_others_6">Save others_6</button>
						</td>
					</tr>
					<tr>
						<td>Others 7</td>
						<td>
							<input type="file" class="form-control" name="others_7" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="others_7_name" value="" v-model="others_7_name">
						</td>
						<td>
							<button class="form-control" name="save_others_7">Save others_7</button>
						</td>
					</tr>
					<tr>
						<td>Others 8</td>
						<td>
							<input type="file" class="form-control" name="others_8" accept="image/*"  >
						</td>
						<td>
							<input type="text" class="form-control" name="others_8_name" value="" v-model="others_8_name">
						</td>
						<td>
							<button class="form-control" name="save_others_8">Save others_8</button>
						</td>
					</tr>
				</table>
			</p>
		</div>
	</div>
	</div>
</template>
<script >
	import User from '../../../api/users.js';

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'deleteConfirmMsg': 'Are you sure you would like to delete this referee? All information associated with this referee will be permanently deleted.',
                'laboratoryData' : {
                	'label_1': '',
                	'label_1': [{text:'Option 1'},
                							 {text:'Option 2'},
                							 {text:'Option 3'},
                							 {text:'Option 4'},
                							 {text:'Option 5'},
                							 {text:'Option 6'},
                							 {text:'Option 7'},
                							 {text:'Option 8'},
                							 {text:'Option 9'},
                							 {text:'Option 10'},
                							 ],
                	'label_2': '',
                	'label_2_option':[{text:'Option 1'},
                							 {text:'Option 2'},
                							 {text:'Option 3'},
                							 {text:'Option 4'},
                							 {text:'Option 5'},
                							 {text:'Option 6'},
                							 {text:'Option 7'},
                							 {text:'Option 8'},
                							 {text:'Option 9'},
                							 {text:'Option 10'},
                							 ],
                	'label_1_option':  [{text:'Option 1'},
                							 {text:'Option 2'},
                							 {text:'Option 3'},
                							 {text:'Option 4'},
                							 {text:'Option 5'},
                							 {text:'Option 6'},
                							 {text:'Option 7'},
                							 {text:'Option 8'},
                							 {text:'Option 9'},
                							 {text:'Option 10'},
                							 ],
                	'urine': '',
									'urine_option': [{text:'Option 1'},
                							 {text:'Option 2'},
                							 {text:'Option 3'},
                							 {text:'Option 4'},
                							 {text:'Option 5'},
                							 {text:'Option 6'},
                							 {text:'Option 7'},
                							 {text:'Option 8'},
                							 {text:'Option 9'},
                							 {text:'Option 10'},
                							 ],
                	'stone':'',
                	'stone_option': [{text:'Option 1'},
                							 {text:'Option 2'},
                							 {text:'Option 3'},
                							 {text:'Option 4'},
                							 {text:'Option 5'},
                							 {text:'Option 6'},
                							 {text:'Option 7'},
                							 {text:'Option 8'},
                							 {text:'Option 9'},
                							 {text:'Option 10'},
                							 ],
									'demo':'',
									'option_group_1':[{text:'value 1'},
																		{text:'value 2'},
																		{text:'value 3'},
																		{text:'value 4'},
									],
									'option_group_2':[{text:'value 1'},
																		{text:'value 2'},
																		{text:'value 3'},
																		{text:'value 4'},
									],
									'option_group_3':[{text:'value 1'},
																		{text:'value 2'},
																		{text:'value 3'},
																		{text:'value 4'},
									],
									'option_group_4':[{text:'value 1'},
																		{text:'value 2'},
																		{text:'value 3'},
																		{text:'value 4'},
									],
                }
            }
        },
        mounted() {
					$('.ls-select2').select2({
						 placeholder: "Select",
				  });


					$( function() {
					  $( "#accordion" ).accordion();
					} );

     //    	 $('.ls-datepicker').datepicker({
					// format: 'dd/mm/yyyy',
					// 'autoclose': true
					// });
					// $('.ls-timepicker').timepicker({
					// format: 'hh-mm',
					// 'autoclose': true
					// });
					// let vm =this;
					// $('.ls-datepicker').datepicker().on('changeDate',function(){
					// 	if(this.id = 'date'){
					// 			vm.patientData.date = this.value;}
					// 	if(this.id = 'dob'){
					// 		vm.patientData.dob = this.value;}
					// });
					// $('.ls-timepicker').timepicker().on('change',function(){
					// 	vm.patientData.time = this.value;
					// });

        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    deleteConfirmed() {

		        // Tournament.removeReferee(this.refereeId).then(
		        //   (response) => {
		        //        toastr['success']('Referee has been removed successfully', 'Success');
		        //        $('#delete_modal').modal('hide')
		        //        $('#refreesModal').modal('hide')
		        //         this.$store.dispatch('getAllReferee',this.$store.state.Tournament.tournamentId);
		        //        // this.$root.$emit('setRefereeReset')
		        //        // this.$root.$emit('setPitchPlanTab','refereeTab')
		        //   }
		        //   )
		      },
		    saveLaboratory() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveLaboratory(this.laboratoryData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Laboratory data has been successfully saved', 'laboratory detail', {timeOut: 5000});
		                	} else if(response.data.code == 300) {
		                		toastr.error('Record not found', 'Error', {timeOut: 5000});
		                	} else{
		                	 toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
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
