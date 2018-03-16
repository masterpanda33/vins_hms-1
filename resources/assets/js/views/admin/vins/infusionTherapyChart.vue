<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Infusion Therapy Chart</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/6 <br>
					REV. No. 0.0 <br>
					WEF 01-08-2014
				</div>
			</div>
		</div>
	</div>

	<form action="" method="post">
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Patient Name : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type = "text" v-validate="'required'" id = "patient_name" name="patient_name" value=""  v-model="infusionTherapyChartData.patient_name"/>
					<span class="help is-danger" v-show="errors.has('patient_name')">
										Field is required
									</span>

        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>IPD No : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type = "text" v-validate="'required'" id = "ipd_id" name="ipd_id" value=""  v-model="ipd_id"/>
					<span class="help is-danger" v-show="errors.has('ipd_id')">
										Field is required
									</span>

        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Age : </label>
          </div>
          <div class="col-md-6">
						<input class="form-control" type = "text" v-validate="'required'" id = "age" name="age" value=""  v-model="infusionTherapyChartData.age"/>
						<span class="help is-danger" v-show="errors.has('age')">
											Field is required
										</span>

          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Sex : </label>
          </div>
          <div class="col-md-6">
            <select class="form-control" v-validate="'required'" id = "sex" name="sex" value=""  v-model="infusionTherapyChartData.sex">
              <option disabled selected hidden value="">---</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
						<span class="help is-danger" v-show="errors.has('sex')">
											Field is required
										</span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Attending Consultant : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type = "text" v-validate="'required'" id = "attending_consultant" name="attending_consultant" value=""  v-model="infusionTherapyChartData.attending_consultant"/>
					<span class="help is-danger" v-show="errors.has('attending_consultant')">
										Field is required
									</span>

        </div>
      </div>
    </div>

    <div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Date</th>
            <th>Name & Strength</th>
            <th>Volume</th>
            <th>Additions to Infusion</th>
            <th>Rate of infusion</th>
            <th>Time Started</th>
            <th>Time Over</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="n in 6">
            <td><input class="form-control" type="date" :name="'date_'+n" value="" v-model="infusionTherapyChartData.infusion[n].date" /></td>
            <td><input class="form-control" type="text" :name="'name_str_'+n" value="" v-model="infusionTherapyChartData.infusion[n].name_str"/></td>
            <td><input class="form-control" type="text" :name="'volume_'+n" value="" v-model="infusionTherapyChartData.infusion[n].volume"/></td>
            <td><input class="form-control" type="text" :name="'additions_'+n" value="" v-model="infusionTherapyChartData.infusion[n].additions"/></td>
            <td><input class="form-control" type="text" :name="'rate_'+n" value="" v-model="infusionTherapyChartData.infusion[n].rate"/></td>
            <td><input class="form-control" type="time" :name="'timestart_'+n" value="" v-model="infusionTherapyChartData.infusion[n].timestart"/></td>
            <td><input class="form-control" type="time" :name="'timeend_'+n" value="" v-model="infusionTherapyChartData.infusion[n].timeend"/></td>
          </tr>

        </tbody>
      </table>
    </div>
		<div class="row form-group text-center">
			<button class="btn btn-success" type="button" @click="saveinfusionTherapyChart()">Submit</button>
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
								'type': 'infusionTherapyChart',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'infusionTherapyChartData' : {
								 'patient_name':'',
								 'age':'',
								 'sex':'',
								 'attending_consultant':'',
								 'infusion' : {
										 '1' : {
											 'date':'',
											 'name_str':'',
											 'volume':'',
											 'additions':'',
											 'rate':'',
											 'timestart':'',
											 'timeend':'',
										 },
										 '2' : {
											 'date':'',
											 'name_str':'',
											 'volume':'',
											 'additions':'',
											 'rate':'',
											 'timestart':'',
											 'timeend':'',
										 },
										 '3' : {
											 'date':'',
											 'name_str':'',
											 'volume':'',
											 'additions':'',
											 'rate':'',
											 'timestart':'',
											 'timeend':'',
										 },
										 '4' : {
											 'date':'',
											 'name_str':'',
											 'volume':'',
											 'additions':'',
											 'rate':'',
											 'timestart':'',
											 'timeend':'',
										 },
										 '5' : {
											 'date':'',
											 'name_str':'',
											 'volume':'',
											 'additions':'',
											 'rate':'',
											 'timestart':'',
											 'timeend':'',
										 },
										 '6' : {
											 'date':'',
											 'name_str':'',
											 'volume':'',
											 'additions':'',
											 'rate':'',
											 'timestart':'',
											 'timeend':'',
										 },
								 },


                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveinfusionTherapyChart() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
									 var infusionTherapyChartData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.infusionTherapyChartData};
				    	User.saveinfusionTherapyChart(infusionTherapyChartData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Infusion Therapy have been saved', 'Infusion Therapy', {timeOut: 5000});
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
