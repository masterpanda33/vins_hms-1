<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-8">
					<h1>Lab Sheet</h1>
				</div>
				<div class="col-md-4">
					<div class="text-right">
						DOC NO. FMT/HIC/09 <br>
						REV. No. 0.1 <br>
						WEF 10-10-2015
					</div>
				</div>
			</div>
		</div>

		<form action="" method="post">

			<div class="row form-group">

						<div class="col-md-4">
								<div class="col">
								<label>Ipd No : </label>
							</div>

							<div class="col-md-6">
								<input class="form-control" type="text" name="ipd_no" v-model="ipd_id" v-validate="'required|numeric'" />
								<span class="help is-danger" v-show="errors.has('ipd_no')">
            			Numeric Field is required
          			</span>
							</div>
						</div>

						<div class="col-md-4">
							<div class="col">
								<label>Room No : </label>
							</div>
							<div class="col">
								<input class="form-control" type="text" name="room_no" v-model="LabSheet.room_no" v-validate="'required'" />
								<span class="help is-danger" v-show="errors.has('room_no')">
			            			Room number is required
			          			</span>
							</div>
						</div>
						<div class="col-md-4">
						<div class="text-right">

						<addressograph></addressograph>

					</div></div>
			</div>



			<hr />

			<div class="row">
				<table class="table table-bordered table-condensed">
					<thead>
						<tr>
							<th class="text-center">Sr No.</th>
							<th class="text-center">Investigation</th>
							<th class="text-center">Date</th>
							<th class="text-center">Name</th>
							<th class="text-center">Remark</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="n in 5">
							<td>{{n}}</td>
							<td><input class="form-control" type = "text" :name="'investigation_'+n" v-model="LabSheet.lab_investigation[n].investigation" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('investigation_'+n)">
						            Investigation is required
						          </span>
							</td>
							<td><input class="form-control ls-datepicker" type = "text" :name="'date_'+n" v-model="LabSheet.lab_investigation[n].date" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('date_'+n)">
			            Date is required
			          </span>
							</td>
							<td><input class="form-control" type = "text" :name="'name_'+n" v-model="LabSheet.lab_investigation[n].name" v-validate="'required'">
								<span class="help is-danger" v-show="errors.has('name_'+n)">
			            Name is required
			          </span>
							</td>
							<td><input class="form-control" type = "text" :name="'remark_'+n" v-model="LabSheet.lab_investigation[n].remark">
							</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-success" type="button" @click="saveLabSheet()">Submit</button>
			</div>
		</form>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import addressograph from './addressograph.vue';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'type': 'labSheet',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'LabSheet' : {
                	'room_no': '',
					'lab_investigation': {
						'1': {
							'investigation': '',
							'date': '',
							'name': '',
							'remark': '',

						},
						'2': {
							'investigation': '',
							'date': '',
							'name': '',
							'remark': '',

						},

						'3': {
							'investigation': '',
							'date': '',
							'name': '',
							'remark': '',

						},
						'4': {
							'investigation': '',
							'date': '',
							'name': '',
							'remark': '',

						},
						'5': {
							'investigation': '',
							'date': '',
							'name': '',
							'remark': '',

						},


					}

                }
            }
        },

				components: {
					 addressograph,
			 },
			 mounted() {
         $('.ls-datepicker').datepicker({
         format: 'dd/mm/yyyy',
         'autoclose': true
     })
       },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        saveLabSheet() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
	            		 var labData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.LabSheet};
                   User.saveLabSheet(labData).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Lab Sheet has been saved', 'LabSheet', {timeOut: 5000});
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
