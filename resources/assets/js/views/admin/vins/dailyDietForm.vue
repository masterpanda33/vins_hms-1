<template>
  <div class="container">
  	<div class="page-header">
  		<div class="row">
  			<div class="col-md-6">
  				<h1>Daily Diet Form</h1>
  			</div>
  			<div class="col-md-6">
  				<div class="text-right">
  					DOC NO. F/DS/08 <br>
  					REV. No. 0.2 <br>
  					WEF 26-04-2017
  				</div>
  			</div>
  		</div>
  	</div>

  	<form action="" method = "post">

    	<div class="row form-group">
    		<div class="col-md-6">
    			<div class="col-md-6">
    				<label>Floor Name : </label>
    			</div>
    			<div class="col-md-6">
    				<input type="text" class="form-control" name="floor_name" v-validate="'required'" v-model="dailyDietData.floor_name" id="floor_name" value="" />
            <span class="help is-danger" v-show="errors.has('floor_name')">
              Field is required
            </span>
    			</div>
    		</div>
    	</div>

    	<div class="row form-group">
    		<div class="col-md-6">
    			<div class="col-md-6">
    				<label>Cross Verified By:</label>
    			</div>
    			<div class="col-md-6">
    				<input type="text" class="form-control" name="cross_verified_by" v-validate="'required'" v-model="dailyDietData.cross_verified_by" id="cross_verified_by" value="" />
            <span class="help is-danger" v-show="errors.has('cross_verified_by')">
              Field is required
            </span>
    			</div>
    		</div>
    	</div>

    	<div class="row form-group">
    		<div class="col-md-6">
    			<div class="col-md-6">
    				<label>Date:</label>
    			</div>
    			<div class="col-md-6">
    				<input type="date" class="form-control" name="date" v-validate="'required'" v-model="dailyDietData.date" id="date" value="">
            <span class="help is-danger" v-show="errors.has('date')">
              Field is required
            </span>
    			</div>
    		</div>
    	</div>

    	<div class="row form-group">
    		<div class="col-md-6">
    			<div class="col-md-6">
    				<label>Patient Name : </label>
    			</div>
    			<div class="col-md-6">
    				<input class="form-control" type="text" name="patient_name" v-validate="'required'" v-model="dailyDietData.patient_name" value="" />
            <span class="help is-danger" v-show="errors.has('patient_name')">
              Field is required
            </span>
    			</div>
    		</div>
    	</div>

    	<div class="row form-group">
    		<div class="col-md-6">
    			<div class="col-md-6">
    				<label>Room No : </label>
    			</div>
    			<div class="col-md-6">
    				<input class="form-control" type="text" name="room_no" v-validate="'required'" v-model="dailyDietData.room_no" value=""/>
            <span class="help is-danger" v-show="errors.has('room_no')">
              Field is required
            </span>
    			</div>
    		</div>
    	</div>

    	<div class="row form-group">
    		<div class="col-md-6">
    			<div class="col-md-6">
    				<label>Diet Suggested By (Consultant/RMO) : </label>
    			</div>
    			<div class="col-md-6">
    				<input class="form-control" type="text" name="diet_suggested_by" v-validate="'required'" v-model="dailyDietData.diet_suggested_by" value=""/>
            <span class="help is-danger" v-show="errors.has('diet_suggested_by')">
              Field is required
            </span>
    			</div>
    		</div>
    	</div>

    	<div class="row form-group">
    		<table class="table table-bordered" style="table-layout:fixed;">
    			<thead>
    				<tr>
    					<th class="text-center" colspan="11">RTF / Liquid</th>
    				</tr>
    				<tr>
    					<th>S-1 (6 AM)	</th>
    					<th>S-2 (8 AM)	</th>
    					<th>S-3 (10 AM)	</th>
    					<th>S-4 (12 PM)	</th>
    					<th>S-5 (2 PM)	</th>
    					<th>S-6 (4 PM)	</th>
    					<th>S-7 (6 PM)	</th>
    					<th>S-8 (8 PM)	</th>
    					<th>S-9 (10 PM)	</th>
    					<th>S-10 (12 AM)</th>
    					<th></th>
    				</tr>
    				<tr>
    					<th>M.Tea (6.30 AM)</th>
    					<th>M.B/F (9 AM)</th>
    					<th>Soup (11.30 AM)</th>
    					<th>Lunch (12.30 PM)</th>
    					<th></th>
    					<th>E.Snacks (3.30 PM)</th>
    					<th>Juice (5 PM)</th>
    					<th>Dinner (7.30 PM)</th>
    					<th>Milk (9.30 PM)</th>
    					<th />
    					<th>Remarks</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					<td><input class="form-check-input" type="checkbox" name="m_tea" v-model="dailyDietData.m_tea" value="yes" /></td>
    					<td><input class="form-check-input" type="checkbox" name="m_breakfast" v-model="dailyDietData.m_breakfast" value="yes"/></td>
    					<td><input class="form-check-input" type="checkbox" name="soup" v-model="dailyDietData.soup" value="yes"/></td>
    					<td><input class="form-check-input" type="checkbox" name="lunch" v-model="dailyDietData.lunch" value="yes" /></td>
    					<td></td>
    					<td><input class="form-check-input" type="checkbox" name="e_snacks" v-model="dailyDietData.e_snacks" value="yes"/></td>
    					<td><input class="form-check-input" type="checkbox" name="juice" v-model="dailyDietData.juice" value="yes"/></td>
    					<td><input class="form-check-input" type="checkbox" name="dinner" v-model="dailyDietData.dinner" value="yes"/></td>
    					<td><input class="form-check-input" type="checkbox" name="milk" v-model="dailyDietData.milk" value="yes"/></td>
    					<td></td>
    					<td><input class="form-control" type="text" name="remarks" v-model="dailyDietData.remarks" value=""/></td>
    				</tr>
    			</tbody>
    		</table>
    	</div>
    	<div class="row form-group">
    		<button class="btn btn-success" type="button" @click="saveDailyDietForm()">Submit</button>
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
                'dailyDietData' : {
                  'floor_name': '',
                  'cross_verified_by': '',
                  'date': '',
                  'patient_name': '',
                  'room_no': '',
                  'diet_suggested_by': '',
                  'm_tea': '',
                  'm_breakfast': '',
                  'soup': '',
                  'lunch': '',
                  'e_snacks': '',
                  'juice': '',
                  'dinner': '',
                  'milk': '',
                  'remarks': '',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveDailyDietForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveDailyDietForm(this.dailyDietData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Daily Diet details have been saved', 'Daily Diet Form', {timeOut: 5000});
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
