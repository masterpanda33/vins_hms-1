<template>
  <div class="container">
  		<div class="page-header">
  			<div class="row">
  				<div class="col-md-6">
  				<h1>Intraoperative Event & Management</h1>
  				</div>
  				<div class="col-md-6">
  					<div class="text-right">
  						F/OPD/01
  					</div>
  				</div>
  			</div>
  		</div>

      <hr>

  		<form action="" method = "post">
        <div class="row">
          <h3>(A) Intra Operative Event & Management</h3>
        </div>
        <div class="row form-group">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Event</th>
                <th>Management</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input class="form-control" type="text" name="event_01" v-model="intraoperativeEventManagementData.event_01" v-validate="'required'" >
                  <span class="help is-danger" v-show="errors.has('event_01')">
        						Field is required
        					</span>
                </td>
                <td>
                  <input class="form-control" type="text" name="management_01" v-model="intraoperativeEventManagementData.management_01" v-validate="'required'" >
                  <span class="help is-danger" v-show="errors.has('management_01')">
        						Field is required
        					</span>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="form-control" type="text" name="event_02" v-model="intraoperativeEventManagementData.event_02"  >
                  <span class="help is-danger" v-show="errors.has('event_02')">
        						Field is required
        					</span>
                </td>
                <td>
                  <input class="form-control" type="text" name="management_02" v-model="intraoperativeEventManagementData.management_02"  >
                  <span class="help is-danger" v-show="errors.has('management_02')">
        						Field is required
        					</span>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="form-control" type="text" name="event_03" v-model="intraoperativeEventManagementData.event_03"  >
                  <span class="help is-danger" v-show="errors.has('event_03')">
        						Field is required
        					</span>
                </td>
                <td>
                  <input class="form-control" type="text" name="management_03" v-model="intraoperativeEventManagementData.management_03"  >
                  <span class="help is-danger" v-show="errors.has('management_03')">
        						Field is required
        					</span>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="form-control" type="text" name="event_04" v-model="intraoperativeEventManagementData.event_04"  >
                  <span class="help is-danger" v-show="errors.has('event_04')">
        						Field is required
        					</span>
                </td>
                <td>
                  <input class="form-control" type="text" name="management_04" v-model="intraoperativeEventManagementData.management_04"  >
                  <span class="help is-danger" v-show="errors.has('management_04')">
        						Field is required
        					</span>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="form-control" type="text" name="event_05" v-model="intraoperativeEventManagementData.event_05"  >
                  <span class="help is-danger" v-show="errors.has('event_05')">
        						Field is required
        					</span>
                </td>
                <td>
                  <input class="form-control" type="text" name="management_05" v-model="intraoperativeEventManagementData.management_05"  >
                  <span class="help is-danger" v-show="errors.has('management_05')">
        						Field is required
        					</span>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="form-control" type="text" name="event_06" v-model="intraoperativeEventManagementData.event_06"  >
                  <span class="help is-danger" v-show="errors.has('event_06')">
        						Field is required
        					</span>
                </td>
                <td>
                  <input class="form-control" type="text" name="management_06" v-model="intraoperativeEventManagementData.management_06"  >
                  <span class="help is-danger" v-show="errors.has('management_06')">
        						Field is required
        					</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row">
          <h3>(B) Remarks : </h3>
        </div>
        <div class="row form-group">
          <textarea class="form-control" name="remarks" v-model="intraoperativeEventManagementData.remarks" ></textarea>
        </div>

        <div class="row">
          <label>Ramsey Sedation scale : </label>
        </div>
        <div class="row">
          <ol>
            <li>Ramsey 1 : Anxious, Agitated, Restless</li>
            <li>Ramsey 2 : Cooperative, Oriented, Tranquil</li>
            <li>Ramsey 3 : Responsive to Commands Only.</li>
            <li>Ramsey 4 : Brisk response to light glabellar tap or loud auditory stimulus</li>
            <li>Ramsey 5 : Sluggish response to light glabellar tap or loud auditory Stimulus</li>
            <li>Ramsey 6 : No response to light glabellar tap or loud auditory stimulus</li>
          </ol>
        </div>

  			<div class="form-group text-center">
  				<button class="btn btn-success" type="button" @click="saveIntraoperativeEventManagement()">Submit</button>
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
                'intraoperativeEventManagementData' : {
                  'event_01':'',
                  'management_01':'',
                  'event_02':'',
                  'management_02':'',
                  'event_03':'',
                  'management_03':'',
                  'event_04':'',
                  'management_04':'',
                  'event_05':'',
                  'management_05':'',
                  'event_06':'',
                  'management_06':'',
                  'remarks':'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        saveIntraoperativeEventManagement() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   User.saveIntraoperativeEventManagement(this.intraoperativeEventManagementData).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Intraoperative Event Management has been saved', 'IntraoperativeEventManagement', {timeOut: 5000});
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
