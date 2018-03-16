<template>
  <div class="container">
  	<div class="page-header">
  		<div class="row">
  			<div class="col-md-6">
  			<h1>Discharge Gatepass</h1>
  			</div>
  			<div class="col-md-6">
  				<div class="text-right">
  					DOC NO. F/IPD/62 <br>
  					REV. No. 0.0 <br>
  					WEF 25-02-2017
  				</div>
  			</div>
  		</div>
  	</div>

  	<form action="" method="post">
  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Patient's Name : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="patients_name" v-model="dischargeGatepassData.patients_name" v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('patients_name')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Room Detail : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control"type = "text" name="room_details" v-model="dischargeGatepassData.room_details"  v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('room_details')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Dr. Name : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="dr_name" v-model="dischargeGatepassData.dr_name" v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('dr_name')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Address : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="address" v-model="dischargeGatepassData.address"v-validate="'required'" />
            <span class="help is-danger" v-show="errors.has('address')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Patient's File : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="patients_file" v-model="dischargeGatepassData.patients_file" v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('patients_file')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Contact Name : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="contact_name" v-model="dischargeGatepassData.contact_name" v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('contact_name')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Contact NO : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="contact_no" v-model="dischargeGatepassData.contact_no" v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('contact_no')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Bill NO : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="bill_no" v-model="dischargeGatepassData.bill_no" v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('bill_no')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label> D.O.A : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="doa" v-model="dischargeGatepassData.doa" v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('doa')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Discharge Sheet : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="discharge_sheet" v-model="dischargeGatepassData.discharge_sheet" v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('discharge_sheet')">
              Field is required
            </span>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>D.O.D : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="dod" v-model="dischargeGatepassData.dod" v-validate="'required'"/>
            <span class="help is-danger" v-show="errors.has('dod')">
              Field is required
            </span>
  				</div>
  			</div>
  		</div>

  		<div class="row form-group">
  			<div class="col-md-6">
  				<div class="col-md-6">
  					<label>Remarks : </label>
  				</div>
  				<div class="col-md-6">
  					<input class="form-control" type="text" name="remarks" v-model="dischargeGatepassData.remarks" />
  				</div>
  			</div>
  		</div>

  		<div class="row">
  			<input class="btn btn-success" type="button" value = "Submit" @click="saveDischargeGatepass()"/>
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
                'dischargeGatepassData' : {
                  'patients_name': '',
                  'room_details': '',
                  'dr_name': '',
                  'address': '',
                  'patients_file': '',
                  'contact_name': '',
                  'contact_no': '',
                  'bill_no': '',
                  'doa': '',
                  'discharge_sheet': '',
                  'dod': '',
                  'remarks': '',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveDischargeGatepass() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveDischargeGatepass(this.dischargeGatepassData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Discharge Gatepass details have been saved', 'Discharge Gatepass', {timeOut: 5000});
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
