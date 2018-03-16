<template id="">
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-8">
					<h1>MAR Flow Sheet</h1>
				</div>
				<div class="col-md-4 text-right">
					DOC NO. FMT/HIC/09 <br>
					REV. No. 0.1 <br>
					WEF 10-10-2015
				</div>
			</div>
		</div>

		<form action="" method="post">
			<div class="row">
				<div class="col-md-8">
					<div class="row form-group">
						<div class="col-md-6">
							<div class="col-md-6">
								<label>ET Tube Day : </label>
							</div>
							<div class="col-md-6">
								<input class="form-control" type="text" name="et_tube_day" v-model="MARFlowSheet.et_tube_day" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('et_tube_day')">
									Field is required
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-6">
								<label>FC Day :</label>
							</div>
							<div class="col-md-6">
								<input class="form-control" type="text" name="fc_day" v-model="MARFlowSheet.fc_day" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('fc_day')">
									Field is required
								</span>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<div class="col-md-6">
								<label>Teeth Level</label>
							</div>
							<div class="col-md-6">
								<input class="form-control" type="text" name="teeth_level" v-model="MARFlowSheet.teeth_level" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('teeth_level')">
									Field is required
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-6">
								<label>Central Line</label>
							</div>
							<div class="col-md-6">
								<input class="form-control" type="text" name="central_line" v-model="MARFlowSheet.central_line" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('central_line')">
									Field is required
								</span>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<div class="col-md-6">
								<label>Arterial Line Day : </label>
							</div>
							<div class="col-md-6">
								<input class="form-control" type="text" name="arterial_line_day" v-model="MARFlowSheet.arterial_line_day" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('arterial_line_day')">
									Field is required
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-6">
								<label>Other Invasive Line Day : </label>
							</div>
							<div class="col-md-6">
								<input class="form-control" type="text" name="other_invasive_line_day" v-model="MARFlowSheet.other_invasive_line_day" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('other_invasive_line_day')">
									Field is required
								</span>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<div class="col-md-6">
								<label>RT Day : </label>
							</div>
							<div class="col-md-6">
								<input class="form-control" type="text" name="rt_day" v-model="MARFlowSheet.rt_day" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('rt_day')">
									Field is required
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<addressograph></addressograph>

				</div>
			</div>

			<hr />

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Date : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="date" name="date" v-model="MARFlowSheet.date" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('date')">
									Field is required
								</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Previous 24Hrs Intake : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="prev_24_intake" v-model="MARFlowSheet.prev_24_intake" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('prev_24_intake')">
									Field is required
								</span>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Previous 24Hrs Output : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="prev_24_output" v-model="MARFlowSheet.prev_24_output" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('prev_24_output')">
									Field is required
								</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Balance : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="date" name="balance" v-model="MARFlowSheet.balance" v-validate="'required'" >
								<span class="help is-danger" v-show="errors.has('balance')">
									Field is required
								</span>
					</div>
				</div>
			</div>

			<!--Table-->

			<div class="row form-group">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Time</th>
							<th v-for="tm in timeArray">{{tm}}</th>

						</tr>
					</thead>

					<tbody>
						<tr v-for="(opt_data,index) in MARFlowSheet.mar_details">
							<th>{{opt_data.opt}}: </th>
							<td v-for="(ta,key) in opt_data.timeData"><input class="form-control" type="text" :name="opt_data.opt+'_'+ta.ta" v-model="MARFlowSheet.mar_details[index].timeData[key].data"   /></td>
							<!-- <td><input class="form-control" type="text" name="temp_10" /></td>
							<td><input class="form-control" type="text" name="temp_12" /></td>
							<td><input class="form-control" type="text" name="temp_14" /></td>
							<td><input class="form-control" type="text" name="temp_16" /></td>
							<td><input class="form-control" type="text" name="temp_18" /></td>
							<td><input class="form-control" type="text" name="temp_20" /></td>
							<td><input class="form-control" type="text" name="temp_22" /></td>
							<td><input class="form-control" type="text" name="temp_24" /></td>
							<td><input class="form-control" type="text" name="temp_02" /></td>
							<td><input class="form-control" type="text" name="temp_04" /></td>
							<td><input class="form-control" type="text" name="temp_06" /></td> -->
						</tr>


					</tbody>
				</table>
			</div>

			<div class="row form-group">
				<div class="col text-center">
					<button type="button" class="btn btn-success" @click="saveMARFlowSheet()">Submit</button>
				</div>
			</div>
		</form>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import addressograph from './addressograph.vue';
    import _ from 'lodash';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'timeArray': ['08-00','10-00','12-00','14-00','16-00','18-00','20-00','22-00','24-00','02-00','04-00','06-00'],
                'mar_options': ['temp','pulse','blood_pressure','resp_rate','pain','intake4_line1','intake4_line2','intake4_line3','intake4_line4','intake4_line5','hourly4','total4','oral_ng','total_oral_ng','hourly_total_intake','total_fluid_intake','output_drains','total_drains','ng_aspirate','urine_output','total_urine_output','hourly_total_output','total_fluid_output','balance','abd_girth'],
                'MARFlowSheet' : {
					'et_tube_day':'',
					'fc_day':'',
					'teeth_level':'',
					'central_line':'',
					'arterial_line_day':'',
					'other_invasive_line_day':'',
					'rt_day':'',
					'date':'',
					'prev_24_intake':'',
					'prev_24_output':'',
					'balance':'',
					'mar_details': {

					}
                }
            }
        },
        created() {

        	var vm =this;
        	var timeArray = vm.timeArray;
        	var mar_options = vm.mar_options;
        	let mar_details_data = [];
        	_.forEach(mar_options, (opt) => {
        		let timeData = [];
	        	_.forEach(timeArray, (ta) => {
	        		// let opt_ta = {'opt':opt,'ta':ta};
	        		timeData.push({'ta':ta,'data':''});
    	    	});
    	    	let marData = {'opt':opt,'timeData':timeData};
    	    	mar_details_data.push(marData);
        	});

        	vm.MARFlowSheet.mar_details = mar_details_data;
        },
         components: {
            addressograph,
        },
        mounted() {
        	// this.$store.dispatch('SetPatientData',18);
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        saveMARFlowSheet() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
	            	 	User.saveMARFlowSheet(this.MARFlowSheet).then(
                        (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('MAR Flow Sheet has been saved', 'MARFlowSheet', {timeOut: 5000});
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
