<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h2> GLASSGOW COMA SHEET	</h2>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/HIC/09 </br>
					REV. No. 0.1 </br>
					WEF 10-10-2015
				</div>
			</div>
		</div></div>


		<form action=" " method="post">


		<div class="row form-group">
		<hr>
			<table class="table table-bordered">
			  <tr>

				<th>Time</th>

				<th>8</th>
				<th>10</th>
				<th>12</th>
				<th>2</th>
				<th>4</th>
				<th>6</th>
				<th>8</th>
				<th>10</th>
				<th>12</th>
				<th>2</th>
				<th>4</th>
				<th>6</th>
			</tr>
			<tr>

				<th >Pupil R</th>

				<td> <input type="text" name="r1c1" class="form-control"   v-model="glassGowData.r1c1"></td>
				<td> <input type="text" name="r1c2" class="form-control"   v-model="glassGowData.r1c2"></td>
				<td> <input type="text" name="r1c3" class="form-control"   v-model="glassGowData.r1c3"></td>
				<td> <input type="text" name="r1c4" class="form-control"   v-model="glassGowData.r1c4"></td>
				<td> <input type="text" name="r1c5" class="form-control"   v-model="glassGowData.r1c5"></td>
				<td> <input type="text" name="r1c6" class="form-control"   v-model="glassGowData.r1c6"></td>
				<td><input type="text" name="r1c7" class="form-control"   v-model="glassGowData.r1c7"></td>
				<td><input type="text" name="r1c8" class="form-control"   v-model="glassGowData.r1c8"></td>
				<td><input type="text" name="r1c9" class="form-control"   v-model="glassGowData.r1c9"></td>
				<td><input type="text" name="r1c10" class="form-control"   v-model="glassGowData.r1c10"></td>
				<td><input type="text" name="r1c11" class="form-control"   v-model="glassGowData.r1c11"></td>
				<td><input type="text" name="r1c12" class="form-control"   v-model="glassGowData.r1c12"></td>
			</tr>
				<tr>

				<th>Pupil L</th>

				<td> <input type="text" name="r2c1" class="form-control"   v-model="glassGowData.r2c1"></td>
				<td> <input type="text" name="r2c2" class="form-control"   v-model="glassGowData.r2c2"></td>
				<td> <input type="text" name="r2c3" class="form-control"   v-model="glassGowData.r2c3"></td>
				<td> <input type="text" name="r2c4" class="form-control"   v-model="glassGowData.r2c4"></td>
				<td> <input type="text" name="r2c5" class="form-control"   v-model="glassGowData.r2c5"></td>
				<td> <input type="text" name="r2c6" class="form-control"   v-model="glassGowData.r2c6"></td>
				<td><input type="text" name="r2c7" class="form-control"   v-model="glassGowData.r2c7"></td>
				<td><input type="text" name="r2c8" class="form-control"   v-model="glassGowData.r2c8"></td>
				<td><input type="text" name="r2c9" class="form-control"   v-model="glassGowData.r2c9"></td>
				<td><input type="text" name="r2c10" class="form-control"   v-model="glassGowData.r2c10"></td>
				<td><input type="text" name="r2c11" class="form-control"   v-model="glassGowData.r2c11"></td>
				<td><input type="text" name="r2c12" class="form-control"   v-model="glassGowData.r2c12"></td>
			</tr>
			<tr>

				<th>EYE</th>

				<td> <input type="text" name="r3c1" class="form-control"   v-model="glassGowData.r3c1"></td>
				<td> <input type="text" name="r3c2" class="form-control"   v-model="glassGowData.r3c2"></td>
				<td> <input type="text" name="r3c3" class="form-control"   v-model="glassGowData.r3c3"></td>
				<td> <input type="text" name="r3c4" class="form-control"   v-model="glassGowData.r3c4"></td>
				<td> <input type="text" name="r3c5" class="form-control"   v-model="glassGowData.r3c5"></td>
				<td> <input type="text" name="r3c6" class="form-control"   v-model="glassGowData.r3c6"></td>
				<td><input type="text" name="r3c7" class="form-control"   v-model="glassGowData.r3c7"></td>
				<td><input type="text" name="r3c8" class="form-control"   v-model="glassGowData.r3c8"></td>
				<td><input type="text" name="r3c9" class="form-control"   v-model="glassGowData.r3c9"></td>
				<td><input type="text" name="r3c10" class="form-control"   v-model="glassGowData.r3c10"></td>
				<td><input type="text" name="r3c11" class="form-control"   v-model="glassGowData.r3c11"></td>
				<td><input type="text" name="r3c12" class="form-control"   v-model="glassGowData.r3c12"></td>
			</tr>
			<tr>

				<th>VERBAL</th>

				<td> <input type="text" name="r4c1" class="form-control"   v-model="glassGowData.r4c1"></td>
				<td> <input type="text" name="r4c2" class="form-control"   v-model="glassGowData.r4c2"></td>
				<td> <input type="text" name="r4c3" class="form-control"   v-model="glassGowData.r4c3"></td>
				<td> <input type="text" name="r4c4" class="form-control"   v-model="glassGowData.r4c4"></td>
				<td> <input type="text" name="r4c5" class="form-control"   v-model="glassGowData.r4c5"></td>
				<td> <input type="text" name="r4c6" class="form-control"   v-model="glassGowData.r4c6"></td>
				<td><input type="text" name="r4c7" class="form-control"   v-model="glassGowData.r4c7"></td>
				<td><input type="text" name="r4c8" class="form-control"   v-model="glassGowData.r4c8"></td>
				<td><input type="text" name="r4c9" class="form-control"   v-model="glassGowData.r4c9"></td>
				<td><input type="text" name="r4c10" class="form-control"   v-model="glassGowData.r4c10"></td>
				<td><input type="text" name="r4c11" class="form-control"   v-model="glassGowData.r4c11"></td>
				<td><input type="text" name="r4c12" class="form-control"   v-model="glassGowData.r4c12"></td>
			</tr>
			<tr>

				<th>MOTOR</th>

				<td> <input type="text" name="r5c1" class="form-control"   v-model="glassGowData.r5c1"></td>
				<td> <input type="text" name="r5c2" class="form-control"   v-model="glassGowData.r5c2"></td>
				<td> <input type="text" name="r5c3" class="form-control"   v-model="glassGowData.r5c3"></td>
				<td> <input type="text" name="r5c4" class="form-control"   v-model="glassGowData.r5c4"></td>
				<td> <input type="text" name="r5c5" class="form-control"   v-model="glassGowData.r5c5"></td>
				<td> <input type="text" name="r5c6" class="form-control"   v-model="glassGowData.r5c6"></td>
				<td><input type="text" name="r5c7" class="form-control"   v-model="glassGowData.r5c7"></td>
				<td><input type="text" name="r5c8" class="form-control"   v-model="glassGowData.r5c8"></td>
				<td><input type="text" name="r5c9" class="form-control"   v-model="glassGowData.r5c9"></td>
				<td><input type="text" name="r5c10" class="form-control"   v-model="glassGowData.r5c10"></td>
				<td><input type="text" name="r5c11" class="form-control"   v-model="glassGowData.r5c11"></td>
				<td><input type="text" name="r5c12" class="form-control"   v-model="glassGowData.r5c12"></td>
			</tr>
			<tr>

				<th>TOTAL</th>

				<td> <input type="text" name="r6c1" class="form-control"   v-model="glassGowData.r6c1"></td>
				<td> <input type="text" name="r6c2" class="form-control"   v-model="glassGowData.r6c2"></td>
				<td> <input type="text" name="r6c3" class="form-control"   v-model="glassGowData.r6c3"></td>
				<td> <input type="text" name="r6c4" class="form-control"   v-model="glassGowData.r6c4"></td>
				<td> <input type="text" name="r6c5" class="form-control"   v-model="glassGowData.r6c5"></td>
				<td> <input type="text" name="r6c6" class="form-control"   v-model="glassGowData.r6c6"></td>
				<td><input type="text" name="r6c7" class="form-control"   v-model="glassGowData.r6c7"></td>
				<td><input type="text" name="r6c8" class="form-control"   v-model="glassGowData.r6c8"></td>
				<td><input type="text" name="r6c9" class="form-control"   v-model="glassGowData.r6c9"></td>
				<td><input type="text" name="r6c10" class="form-control"   v-model="glassGowData.r6c10"></td>
				<td><input type="text" name="r6c11" class="form-control"   v-model="glassGowData.r6c11"></td>
				<td><input type="text" name="r6c12" class="form-control"   v-model="glassGowData.r6c12"></td>
			</tr>

</table>

Date:
<input type="date" name="date1" v-model="glassGowData.date1">
<hr>
</div>
		 <div></br>
			<button class="btn btn-success " type="submit" >Submit</button>
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
                'glassGowData' : {
									'r1c1': '',
									'r1c2': '',
									'r1c3': '',
									'r1c4': '',
									'r1c5': '',
									'r1c6': '',
									'r1c7': '',
									'r1c8': '',
									'r1c9': '',
									'r1c10': '',
									'r1c11': '',
									'r1c12': '',
									'r2c1': '',
									'r2c2': '',
									'r2c3': '',
									'r2c4': '',
									'r2c5': '',
									'r2c6': '',
									'r2c7': '',
									'r2c8': '',
									'r2c9': '',
									'r2c10': '',
									'r2c11': '',
									'r2c12': '',
									'r3c1': '',
									'r3c2': '',
									'r3c3': '',
									'r3c4': '',
									'r3c5': '',
									'r3c6': '',
									'r3c7': '',
									'r3c8': '',
									'r3c9': '',
									'r3c10': '',
									'r3c11': '',
									'r3c12': '',
									'r4c1': '',
									'r4c2': '',
									'r4c3': '',
									'r4c4': '',
									'r4c5': '',
									'r4c6': '',
									'r4c7': '',
									'r4c8': '',
									'r4c9': '',
									'r4c10': '',
									'r4c11': '',
									'r4c12': '',
									'r5c1': '',
									'r5c2': '',
									'r5c3': '',
									'r5c4': '',
									'r5c5': '',
									'r5c6': '',
									'r5c7': '',
									'r5c8': '',
									'r5c9': '',
									'r5c10': '',
									'r5c11': '',
									'r5c12': '',
									'r6c1': '',
									'r6c2': '',
									'r6c3': '',
									'r6c4': '',
									'r6c5': '',
									'r6c6': '',
									'r6c7': '',
									'r6c8': '',
									'r6c9': '',
									'r6c10': '',
									'r6c11': '',
									'r6c12': '',
									'date1': '',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveglassGow() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveglassGow(this.glassGowData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Patient details have been saved', 'Glass Gow', {timeOut: 5000});
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
