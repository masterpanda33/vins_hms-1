<!-- Investigations:
XRAYS
CT
MRI
DOPPLER
Others -->
<template>
	<div class="container">
    <h2>Investigations:</h2>
		<hr>
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

<script>
$( function() {
  $( "#accordion" ).accordion();
} );
</script>
