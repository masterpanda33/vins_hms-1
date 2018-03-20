<template>
  <div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Appointment Book</h1>
				</div>
				<div class="col-md-6">
				</div>
			</div>
		</div>

    <hr>

		<form action="" method="post">
      <div class="row form-group">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <label for="">Date:</label>
            </div>
            <div class="col-md-6">
              <input type="text" v-model="appointmentBook.date" v-validate="'required'" class="form-control ls-datepicker" name="date" id="date" value="">
              <span class="help is-danger" v-show="errors.has('date')">
                Field is required
              </span>
            </div>
          </div>
        </div>
			</div>
			<div class="row form-group">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">Name of Patient</th>
							<th class="text-center">Contact No.</th>
							<th class="text-center">Appointment Time</th>
							<th class="text-center">Consultant Name</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="text" v-model="appointmentBook.name_of_patient" id="name_of_patient" name="name_of_patient" v-validate="'required'" class="form-control" value="">
                <span class="help is-danger" v-show="errors.has('name_of_patient')">
                	Field is required
              	</span>
							</td>
							<td>
								<input type="text" v-model="appointmentBook.contact_no" id="contact_no" name="contact_no" v-validate="'required'" class="form-control" value="">
                <span class="help is-danger" v-show="errors.has('contact_no')">
                	Field is required
              	</span>
							</td>
							<td>
								<input type="text" v-model="appointmentBook.appointment_time" id="appointment_time" name="appointment_time" v-validate="'required'" class="form-control ls-timepicker" value="">
                <span class="help is-danger" v-show="errors.has('appointment_time')">
                	Field is required
              	</span>
							</td>
							<td>
								<input type="text" v-model="appointmentBook.consultant_name" id="consultant_name" name="consultant_name" v-validate="'required'" class="form-control" value="">
                <span class="help is-danger" v-show="errors.has('consultant_name')">
                	Field is required
              	</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="form-group text-center">
			  <button class="btn btn-success" type="button" @click="saveAppointmentBook()">Submit</button>
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
                'appointmentBook' : {
                  'date':'',
                  'name_of_patient':'',
                  'contact_no':'',
                  'appointment_time':'',
                  'consultant_name':'',

                }
            }
        },
        mounted() {
          $('.ls-datepicker').datepicker({
          format: 'dd/mm/yyyy',
          'autoclose': true
      });
      $('.ls-timepicker').timepicker({
            format:'hh:mm',
            'autoclose': true
      });
      let vm =this;
      $('.ls-datepicker').datepicker().on('changeDate',function(){
        vm.appointmentBook.date = this.value;
      });
      $('.ls-timepicker').timepicker().on('change',function(){
        vm.appointmentBook.appointment_time = this.value;
      });
      },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveAppointmentBook() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveAppointmentBook(this.appointmentBook).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Appointment has been saved', 'Appointment Book', {timeOut: 5000});
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
