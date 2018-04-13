<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Laboratory Form</h1>
				</div>
			</div>
		</div>

		<form method = "post" >

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label" for="label_1">Label 1 </label>
					</div>
					<div class="col-md-6">
							<select class="form-control"  id="label_1" name="label_1"  v-model="laboratoryData.label_1">
								 <option :value="label1.text" v-for="label1 in laboratoryData.label_1_option">{{label1.text}}</option>
							</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label" for="label_2">Label 2 </label>
					</div>
					<div class="col-md-6">
							<select class="form-control"  id="label_2" name="label_2"  v-model="laboratoryData.label_2">
								 <option :value="label_2.text" v-for="label_2 in laboratoryData.label_2_option">{{label_2.text}}</option>
							</select>
					</div>
				</div>
			</div>

			<div class = "row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label" for="urine">Urine </label>
					</div>
					<div class="col-md-6">
							<select class="form-control"  id="urine" name="urine"  v-model="laboratoryData.urine">
								 <option :value="urinesample.text" v-for="urinesample in laboratoryData.urine_option">{{urinesample.text}}</option>
							</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label" for="stone">Stone </label>
					</div>
					<div class="col-md-6">
							<select class="form-control"  id="stone" name="stone"  v-model="laboratoryData.stone">
								 <option :value="stonesample.text" v-for="stonesample in laboratoryData.stone_option">{{stonesample.text}}</option>
							</select>
					</div>
				</div>
				</div>

			<div class="form-group text-center">
				<button class="btn btn-success" type="button" @click="saveLaboratory()">Submit</button>
			</div>

			<div class = " form-group col-md-6">
				<div class = "col-md-6">
					<label class = "control-label" for = "demo"> Demo </label>
				</div>
					<div class = "input-group mb-3 select2-bootstrap-append search">
					<select class = "form-control custom-select" id = "demo" name = "demo" v-model = "laboratoryData.demo">

						<!--<optgroup label = "Option-Group1">
							<option :value = "option_group_1_values" v-for = "option_group_1_values in laboratoryData.option_group_1 ">{{option_group_1_values.text}}</option>
						</optgroup>

						<optgroup label = "Option-Group2">
							<option :value = "option_group_2_values" v-for = "option_group_2_values in laboratoryData.option_group_2 ">{{option_group_2_values.text}}</option>
						</optgroup>

						<optgroup label = "Option-Group3">
						<option :value = "option_group_3_values" v-for = "option_group_3_values in laboratoryData.option_group_3 ">{{option_group_3_values.text}}</option>
						</optgroup>

						<optgroup label = "Option-Group4">
						<option :value = "option_group_4_values" v-for = "option_group_4_values in laboratoryData.option_group_4 ">{{option_group_4_values.text}}</option>
					</optgroup> -->

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
						 placeholder: "Select2",
				  });
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
<style>
    .select2-dropdown,.selectric-open{
        z-index: 9;
    }
    #set_first_option:active,#set_second_option:active,#set_third_option:active,#set_fourth_option:active,#bt_add_val:active{
        color: #fff;
    }

    @media (max-width: 1024px) {
        .boxed .box-display{
            display: none;
        }
    }
    .search .select2-container{
        width: 92% !important;
    }


    @media(max-width:1024px){
        .search .select2-container{
            width: 89% !important;
        }
    }
    @media(min-width: 375px) and (max-width: 768px){
        .search .select2-container{
            width: 88% !important;
        }
    }
    @media(max-width:320px){
        .search .select2-container{
            width: 85% !important;
        }
    }
</style>
