<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Doctor's Initial Assessment</h1>
				</div>
				<div class="col-md-6">
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
				<div class="col-md-10">
					<div class="col-md-4">
						<label>History : </label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="history" value="" />

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-10">
					<div class="col-md-4">
						<label>Past History : </label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="past_history" value=""/>

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-10">
					<div class="col-md-4">
						<label>Allergic History : </label>
					</div>
					<div class="col-md-8">
						<input class="form-control" type="text" name="allergic_history" value=""/>

					</div>
				</div>
			</div>

			<div class="row">
				<h3>In case of Road Accident : </h3>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Name of Informant : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="name_informant" value=""/>

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Brought By : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="brought_by" value=""/>

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Place of Accident : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="place_of_accident" value="" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Time : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="time" name="current_time" value=""/>

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Date : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="date" name="current_date" value=""/>

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>MLC Done outside or not : </label>
					</div>
					<div class="col-md-6">
			      <select class="form-control" name="mlc" value="">
							<option value="no" >No</option>
							<option value="yes" >Yes</option>
						</select>

					</div>
				</div>
			</div>

			<hr>
			<div class="row">
				<h3>History Of : </h3>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>LOC : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="loc" value="">
							<option value="no">No</option>
							<option value="yes">Yes</option>
						</select>

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>ENT Bleeding : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="ent_bleeding" value="">
							<option value="no" >No</option>
							<option value="yes">Yes</option>
						</select>

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Seizures : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="seizures" value="">
							<option value="no" >No</option>
							<option value="yes" >Yes</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Vomiting : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="vomiting" value="">
							<option value="no">No</option>
							<option value="yes">Yes</option>
						</select>
					</div>
				</div>
			</div>
			<hr>

			<div class="row">
				<h3>Vitals : </h3>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Pulse : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="pulse" value=""/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Temprature : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="temp" value="" />
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>BP : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="bp" value=""/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>SPO2 : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="spo2" value=""/>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>RBS : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="rbs" value=""/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Pain : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="pain" value="">
							<option value="no" >No</option>
							<option value="yes" >Yes</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>GCS : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="gcs_e" value=""/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <input class="form-control" type="text" name="gcs_m" value=""/>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="gcs_v" value=""/>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Systematic Examination : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="systematic_examination" value=""/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Any other Findings or Injuries : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="any_other" value=""/>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Treated on Admission : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="treated_on_admission" value=""/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Shifted To : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="shifted_to" value=""/>
					</div>
				</div>
			</div>
			<div class="text-center form-group">
				<button class="btn btn-success" type="submit" @click="saveAssessment()">Submit</button>
			</div>

		</form>
	</div>
</template>
<script >
	import User from '../../../api/users.js'
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear()
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveAssessment() {
                let ReportData = {'tournament_id': this.tournamentId,'age_category': $('#sel_ageCategory').val(),'first_name': $('#first_name').val(),'last_name': $('#last_name').val(),'telephone': $('#telephone').val(),'email': $('#email').val(),'available': $('#available').val()}
                User.saveReferee(ReportData).then(
                (response) => {
                    this.reports = response.data.data

                },
                (error) => {
                }
                )
            },
		},
    }
</script>
