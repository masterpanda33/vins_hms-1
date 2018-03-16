<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>Transfusion Reaction Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/IPD/36 <br>
					REV. No. 0.1 <br>
					WEF 01-10-2014 <br>
					PAGE NO. 01 OF 02
				</div>
			</div>
		</div>
	</div>


	<form  method="post">
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Heap No:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="heap_no" id="heap_no" value="" v-model="transfusionReactionFormData.heap_no"/>
        </div>
			</div>
       <div class="col-md-6">
          <div class="col-md-6">
              <label>S No:</label>
          </div>
          <div class="col-md-6">
          	<input class="form-control" type="text"  name="s_no" id="s_no" value="" v-model="transfusionReactionFormData.s_no"/>
          </div>
				</div>
			</div>

      Transfusion must be started whithin 60 minutes of issue of blood and the blood transfusion set must have a filter incorporated.
      <hr>
      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Blood Bage NO:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text"  name="blood_bage_no" id="blood_bage_no" value="" v-model="transfusionReactionFormData.blood_bage_no"/>
          </div>
				</div>

       	<div class="col-md-6">
        	<div class="col-md-6">
          		<label> Quantity:</label>
        	</div>
        	<div class="col-md-6">
        		<input class="form-control" type="text"  name="quantity" id="quantity" value="" v-model="transfusionReactionFormData.quantity"/>
        	</div>
				</div>
			</div>

    	<div class="row form-group">
        <div class="col-md-6">
            <div class="col-md-6">
                <label>Group:</label>
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text"  name="group" id="group" value="" v-model="transfusionReactionFormData.group"/>
            </div>
				</div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Expiry Date:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="date"  name="date" id="date" value="" v-model="transfusionReactionFormData.date"/>
        </div>
			</div>
		</div>

			<div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Date Of Issue:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="date"  name="date_issue" id="date_issue" value="" v-model="transfusionReactionFormData.date_issue"/>
					</div>
				</div>
				<div class="col-md-6">
          <div class="col-md-6">
            <label>Time Of Issue:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="time"  name="time_issue" id="time_issue" value="" v-model="transfusionReactionFormData.time_issue"/>
          </div>
				</div>
			</div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Matched By:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text"  name="matched_by" id="matched_by" value="" v-model="transfusionReactionFormData.matched_by"/>
          </div>
				</div>
       <div class="col-md-6">
          <div class="col-md-6">
            <label>Compatible For Name:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text"  name="com_name" id="com_name" value="" v-model="transfusionReactionFormData.com_name"/>
          </div>
				</div>
			</div>

  	<div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Age:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="age" id="age" value="" v-model="transfusionReactionFormData.age"/>
        </div>
			</div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Sex:</label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="sex" value="">
            <option value="NA" >NA</option>
            <option value="Male" >Male</option>
            <option value="Female" >Female</option>
          </select>
        </div>
			</div>
		</div>

		<div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Ward and Bed No:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="ward_no" id="ward_no" value="" v-model="transfusionReactionFormData.ward_no"/>
        </div>
			</div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Medical Officer I/C Blood Bank:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="med_officer" id="med_officer" value="" v-model="transfusionReactionFormData.med_officer"/>
        </div>
			</div>
		</div>

  To be completed and returned to the blood bank whithin 2 hours of completion of transfusion of blood bag. <hr>

  <div class="row form-group">
  	<div class="col-md-4">
    	<div class="col-md-6">
      	<label> No:</label>
    	</div>
    	<div class="col-md-6">
      	<input class="form-control" type="text"  name="_no" id="_no" value="" v-model="transfusionReactionFormData._no"/>
    	</div>
		</div>

		<div class="col-md-4">
      <div class="col-md-6">
        <label>Name of The Patient:</label>
      </div>
      <div class="col-md-6">
        <input class="form-control" type="text"  name="name_00" id="name_00" value="" v-model="transfusionReactionFormData.name_00"/>
      </div>
		</div>

		<div class="col-md-4">
      <div class="col-md-6">
          <label>Medical Officer in Charge of the Case:</label>
      </div>
      <div class="col-md-6">
        <input class="form-control" type="text"  name="med_officer_00" id="med_officer_00" value="" v-model="transfusionReactionFormData.med_officer_00"/>
      </div>
		</div>
	 </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Time at which Transfusion Started:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="time"  name="time_00" id="time_00" value="" v-model="transfusionReactionFormData.time_00"/>
        </div>
			</div>

			<div class="col-md-6">
      	<div class="col-md-6">
        	<label>Chill Temperature:</label>
      	</div>
      	<div class="col-md-6">
        	<input class="form-control" type="text"  name="chill_temp" id="chill_temp" value="" v-model="transfusionReactionFormData.chill_temp"/>
      	</div>
			</div>
		</div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Time at which finished :</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="time"  name="finish_time" id="finish_time" value="" v-model="transfusionReactionFormData.finish_time" >
        </div>
			</div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Fall in Bp:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="bp_fall" id="bp_fall" value="" v-model="transfusionReactionFormData.bp_fall">
        </div>
			</div>
		</div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Drop Rate at which Transfusion Given:
          Reaction(if any)</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="drop_rate" id="drop_rate" value="" v-model="transfusionReactionFormData.drop_rate">
        </div>
			</div>

		 <div class="col-md-6">
        <div class="col-md-6">
          <label>Urticaria:</label>
        </div>
        <div class="col-md-6">
        	<input class="form-control" type="text"  name="urticaria" id="urticaria" value="" v-model="transfusionReactionFormData.urticaria"/>
        </div>
			</div>
		</div>

		<div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          	<label>When did you notice them:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="notice" id="notice" value="" v-model="transfusionReactionFormData.notice"/>
        </div>
			</div>
    	<div class="col-md-6">
      	<div class="col-md-6">
        	<label>Chest Pain:</label>
      	</div>
      	<div class="col-md-6">
        	<input class="form-control" type="text"  name="chest_pain" id="chest_pain" value="" v-model="transfusionReactionFormData.chest_pain">
      	</div>
			</div>
		</div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>What measures were taken:
          To Counteract them</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="measures" id="measures" value="" v-model="transfusionReactionFormData.measures">
        </div>
			</div>

			<div class="col-md-6">
        <div class="col-md-6">
          <label>Dsypnoea Shock:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="dyspnoea_shock" id="dyspnoea_shock" value="" v-model="transfusionReactionFormData.dyspnoea_shock"/>
        </div>
			</div>
		</div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Anphytaxix Oliguria/Anuria:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="anphytaxix" id="anphytaxix" value="" v-model="transfusionReactionFormData.anphytaxix"/>
        </div>
			</div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Any Other Relevant Comments:</label>
        </div>
        <div class="col-md-6">
          <textarea class="form-control" type="text"  name="rel_cmnt" id="rel_cmnt" value="" v-model="transfusionReactionFormData.rel_cmnt"></textarea>
        </div>
			</div>
		</div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Sign of the Medical Officer:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="sign_00" id="sign_00" value="" v-model="transfusionReactionFormData.sign_00"/>
        </div>
			</div>
		</div>

    <div class="row form-group">
      <input class="form-group btn btn-success" value = "Submit" type="button" @click = "saveTransfusionReactionForm()"/>
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
                'transfusionReactionFormData' : {
											'heap_no':'',
											's_no':'',
											'blood_bage_no':'',
											'quantity':'',
											'group':'',
											'date':'',
											'date_issue':'',
											'time_issue':'',
											'matched_by':'',
											'com_name':'',
											'age':'',
											'ward_no':'',
											'med_officer':'',
											'_no':'',
											'name_00':'',
											'med_officer_00':'',
											'time_00':'',
											'chill_temp':'',
											'finish_time':'',
											'bp_fall':'',
											'drop_rate':'',
											'urticaria':'',
											'notice':'',
											'chest_pain':'',
											'measures':'',
											'dyspnoea_shock':'',
											'anphytaxix':'',
											'rel_cmnt':'',
											'sign_00':'',


                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveTransfusionReactionForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveTransfusionReactionForm(this.transfusionReactionFormData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Transfusion Reaction details have been saved', 'transfusion reaction detail', {timeOut: 5000});
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
