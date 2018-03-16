<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h2> GATEPASS </br></h2>
			<h3>Outgoing Materials	</h3>
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

		<div class="col-md-12 text-right">
			<textarea class="text-right" id="Addressograph" rows="3" placeholder="Addressograph Here"></textarea>
		</div>

		<div class="row form-group">

		<div class="col-md-3">

				<label for="date"> Date </label>
				<input class="form-control" id="date" rows="1"  placeholder="" name="date" >

		</div>
		<div class="col-md-3">

				<label for="no" class="control-label"> No: </label>
				<input class="form-control" type="text" id="no" name="no" value="" v-model="gatePassData.no" v-validate="'required'"/>
				<span class="help is-danger" v-show="errors.has('no')">
									Field is required
								</span>
		</div>
		<div class="col-md-3">

				<label for="from" class="control-label"> From: </label>
				<input class="form-control" type="text" id="from" name="from" value="" v-model="gatePassData.from" v-validate="'required'"/>
				<span class="help is-danger" v-show="errors.has('from')">
									Field is required
								</span>

		</div>
		<div class="col-md-3">

				<label for="attending_consultant" class="control-label"> Attending consultant: </label>
				<input class="form-control" type="text" id="attending_consultant" name="attending_consultant" value="" v-model="gatePassData.attending_consultant" v-validate="'required'"/>
				<span class="help is-danger" v-show="errors.has('attending_consultant')">
									Field is required
								</span></div>
							</div>

				<div class="row form-group">
				<hr>
				<table class="table table-bordered">
			  <tr>

				<th>Sr No.</th>

				<th>Particulars</th>
				<th>Quantity</th>

			</tr>
			<tr>

				<td><input type="text" name="r1c1" class="form-control" v-model="gatePassData.r1c1"></td>

				<td><input type="text" name="r1c2" class="form-control" v-model="gatePassData.r1c2"></td>
				<td><input type="text" name="r1c3" class="form-control" v-model="gatePassData.r1c3"></td>

			</tr>
			<tr>

				<td><input type="text" name="r2c1" class="form-control" v-model="gatePassData.r2c1"></td>

				<td><input type="text" name="r2c2" class="form-control" v-model="gatePassData.r2c2"></td>
				<td><input type="text" name="r2c3" class="form-control" v-model="gatePassData.r2c3"></td>

			</tr>
			<tr>

				<td><input type="text" name="r3c1" class="form-control" v-model="gatePassData.r3c1"></td>

				<td><input type="text" name="r3c2" class="form-control" v-model="gatePassData.r3c2"></td>
				<td><input type="text" name="r3c3" class="form-control" v-model="gatePassData.r3c3"></td>

			</tr>
			<tr>

				<td><input type="text" name="r4c1" class="form-control" v-model="gatePassData.r4c1"></td>

				<td><input type="text" name="r4c2" class="form-control" v-model="gatePassData.r4c2"></td>
				<td><input type="text" name="r4c3" class="form-control" v-model="gatePassData.r4c3"></td>

			</tr>
			<tr>

				<td><input type="text" name="r5c1" class="form-control" v-model="gatePassData.r5c1"></td>

				<td><input type="text" name="r5c2" class="form-control" v-model="gatePassData.r5c2"></td>
				<td><input type="text" name="r5c3" class="form-control" v-model="gatePassData.r5c3"></td>

			</tr>
			<tr>

				<td><input type="text" name="r6c1" class="form-control" v-model="gatePassData.r6c1"></td>

				<td><input type="text" name="r6c2" class="form-control" v-model="gatePassData.r6c2"></td>
				<td><input type="text" name="r6c3" class="form-control" v-model="gatePassData.r6c3"></td>

			</tr>
		</table>
	</div>

	<div class="row form-group">
		<hr>
		<div class="col-md-12">
			Remarks:
			<textarea  class="form-control" rows="3" v-validate="'required'" id = "remarks" name="remarks" value="" :class="{'is-danger': errors.has('remarks') }" v-model="gatePassData.remarks"> </textarea>
			<span class="help is-danger" v-show="errors.has('remarks')">
								Field is required
							</span>
		</div></div>
		<div class="row form-group"><hr>
			<div class="col-md-4">Incharge
				<input class="form-control" type = "text" v-validate="'required'" id = "incharge" name="incharge" value="" :class="{'is-danger': errors.has('incharge') }" v-model="gatePassData.incharge"/>
				<span class="help is-danger" v-show="errors.has('incharge')">
									Field is required
								</span></div>

			<div class="col-md-4">Administrator
				<input class="form-control" type = "text" v-validate="'required'" id = "administrator" name="administrator" value="" :class="{'is-danger': errors.has('administrator') }" v-model="gatePassData.administrator"/>
				<span class="help is-danger" v-show="errors.has('administrator')">
									Field is required
								</span></div>
			<div class="col-md-4">Reciever
				<input class="form-control" type = "text" v-validate="'required'" id = "reciever" name="reciever" value="" :class="{'is-danger': errors.has('reciever') }" v-model="gatePassData.reciever"/>
				<span class="help is-danger" v-show="errors.has('reciever')">
									Field is required
								</span></div>

	</div>

	<div>
		<button class="btn btn-success btn-bg" type="submit" form="gatePass" value="submit">Submit</button>
	</div></form></div></div>
</template>

<script >
	import User from '../../../api/users.js';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'gatePassData' : {
									'date':'',
									'no':'',
									'from':'',
									'to':'',
									'r1c1':'',
									'r1c2':'',
									'r1c3':'',
									'r2c1':'',
									'r2c2':'',
									'r2c3':'',
									'r3c1':'',
									'r3c2':'',
									'r3c3':'',
									'r4c1':'',
									'r4c2':'',
									'r4c3':'',
									'r5c1':'',
									'r5c2':'',
									'r5c3':'',
									'r6c1':'',
									'r6c2':'',
									'r6c3':'',
									'remarks':'',
									'incharge':'',
									'administrator':'',
									'reciever':''
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    savegatePass() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.savegatePass(this.gatePassData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Patient details have been saved', 'gate pass ', {timeOut: 5000});
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
