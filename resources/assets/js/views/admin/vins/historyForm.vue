<template>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>History Form</h1>
			</div>
		</div>
	</div>

	<form action="" method="post">

		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
				<div class="text-right">
					<addressograph></addressograph>
				</div>
					
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label for="chief_complaints" class="control-label" >Chief Complaints : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" id="chief_complaints" name="chief_complaints" value="" v-model="historyFormData.chief_complaints" v-validate="'required'"/>
				<span class="help is-danger" v-show="errors.has('chief_complaints')">
									Field is required
								</span>

			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label for="patient_history" class="control-label">Patient History</label>
			</div>
			<div class="col-md-6">
				<textarea  class="form-control" rows="3" v-validate="'required'" id = "patient_history" name="patient_history" value="" :class="{'is-danger': errors.has('patient_history') }" v-model="historyFormData.patient_history"> </textarea>
				<span class="help is-danger" v-show="errors.has('patient_history')">
									Field is required
								</span>

			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label for="past_history" class="control-label">Past History</label>
			</div>
			<div class="col-md-6">
				<textarea  class="form-control" rows="3" v-validate="'required'" id = "past_history" name="past_history" value="" :class="{'is-danger': errors.has('past_history') }" v-model="historyFormData.past_history"> </textarea>
				<span class="help is-danger" v-show="errors.has('past_history')">
									Field is required
								</span>



			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label for="allergic_history" class="control-label">Allergic History</label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" id="allergic_history" name="allergic_history" value="" v-model="historyFormData.allergic_history" v-validate="'required'"/>
				<span class="help is-danger" v-show="errors.has('allergic_history')">
									Field is required
								</span>



			</div>
		</div>

		<hr />

		<div class="row form-group">
			<div class="col-md-6">
				<label for="road_accident" class="control-label">In Case of Road Traffic Accident : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" id="road_accident" name="road_accident" value="" v-model="historyFormData.road_accident" v-validate="'required'"/>
				<span class="help is-danger" v-show="errors.has('road_accident')">
									Field is required
								</span>

			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label for="alleged_roadtrafficaccident" class="control-label">Alleged History of Road Traffic Accident at : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" id="alleged_roadtrafficaccident" name="alleged_roadtrafficaccident" value="" v-model="historyFormData.alleged_roadtrafficaccident" v-validate="'required'"/>
				<span class="help is-danger" v-show="errors.has('alleged_roadtrafficaccident')">
									Field is required
								</span>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-4">
				<div class="col-md-6">
					<label for="place" class="control-label">Place : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" id="place" name="place" value="" v-model="historyFormData.place" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('place')">
										Field is required
									</span>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
					<label for="at" class="control-label">Time : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control  " type="time" id="at" name="at" value="" v-model="historyFormData.at" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('at')">
										Field is required
									</span>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
					<label for="date" class="control-label">Date : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control " type="date" id="date" name="date" value="" v-model="historyFormData.date" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('date')">
						Field is required
					</span>

				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label for="ho_loc" class="control-label">H/O LOC</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" v-validate="'required'" id = "ho_loc" name="ho_loc" value="" :class="{'is-danger': errors.has('ho_loc') }" v-model="historyFormData.ho_loc">
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
					<span class="help is-danger" v-show="errors.has('ho_loc')">
										Field is required
									</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label for="ho_entbleeding" class="control-label">H/O ENT Bleeding</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" v-validate="'required'" id = "ho_entbleeding" name="ho_entbleeding" value="" :class="{'is-danger': errors.has('ho_entbleeding') }" v-model="historyFormData.ho_entbleeding">
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
					<span class="help is-danger" v-show="errors.has('ho_entbleeding')">
										Field is required
									</span>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label for="ho_seizures" class="control-label">H/O Seizures</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" v-validate="'required'" id = "ho_seizures" name="ho_seizures" value="" :class="{'is-danger': errors.has('ho_seizures') }" v-model="historyFormData.ho_seizures">
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
					<span class="help is-danger" v-show="errors.has('ho_seizures')">
										Field is required
									</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label for="ho_vomiting" class="control-label">H/O Vomiting</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" v-validate="'required'" id = "ho_vomiting" name="ho_vomiting" value="" :class="{'is-danger': errors.has('ho_vomiting') }" v-model="historyFormData.ho_vomiting" >
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
					<span class="help is-danger" v-show="errors.has('ho_vomiting')">
										Field is required
									</span>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label for="pulse" class="control-label">Pulse : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" id="pulse" name="pulse" value="" v-model="historyFormData.pulse" v-validate="'required'" >
					<span class="help is-danger" v-show="errors.has('pulse')">
										Field is required
									</span>



				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label for="bp" class="control-label">BP : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" id="bp" name="bp" value="" v-model="historyFormData.bp" v-validate="'required'">
					<span class="help is-danger" v-show="errors.has('bp')">
										Field is required
									</span>



				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label for="temp" class="control-label">Temp : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" id="temp" name="temp" value="" v-model="historyFormData.temp" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('temp')">
										Field is required
									</span>



				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label for="resp" class="control-label">RESP : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" id="resp" name="resp" value="" v-model="historyFormData.resp" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('resp')">
										Field is required
									</span>



				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label for="pain" class="control-label">Pain Assessment : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" v-validate="'required'" id = "pain" name="pain" value="" :class="{'is-danger': errors.has('pain') }" v-model="historyFormData.pain">
					<option value="0">0 - No Pain</option>
					<option value="2">2 - Pain Little Bit</option>
					<option value="4">4 - Pain Little More</option>
					<option value="6">6 - Pain Even More</option>
					<option value="8">8 - Pain Wholelot</option>
					<option value="10">10 - Pain Worst</option>
				</select>
				<span class="help is-danger" v-show="errors.has('pain')">
									Field is required
								</span>
			</div>
		</div>

    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th></th>
            <th>Biceps</th>
            <th>Triceps</th>
            <th>Supinator</th>
            <th>Knee</th>
            <th>Ankle</th>
            <th>Hoffmann</th>
            <th>FF</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Right</th>
            <td><input class="form-control" type="text" name="right_biceps" value="  " v-model="historyFormData.right_biceps" />



						</td>
            <td><input class="form-control" type="text" name="right_triceps" value="  " v-model="historyFormData.right_triceps" />



						</td>
            <td><input class="form-control" type="text" name="right_supinator" value="  " v-model="historyFormData.right_supinator" />



						</td>
            <td><input class="form-control" type="text" name="right_knee" value="  " v-model="historyFormData.right_knee" />



						</td>
            <td><input class="form-control" type="text" name="right_ankle" value="  " v-model="historyFormData.right_ankle" />



						</td>
            <td><input class="form-control" type="text" name="right_hoffmann" value="  " v-model="historyFormData.right_hoffmann" />



						</td>
            <td><input class="form-control" type="text" name="right_ff" value="  " v-model="historyFormData.right_ff" />



						</td>
          </tr>

					<tr>
            <th>left</th>
            <td><input class="form-control" type="text" name="left_biceps" value="  " v-model="historyFormData.left_biceps" />



						</td>
            <td><input class="form-control" type="text" name="left_triceps" value="  " v-model="historyFormData.left_triceps" />



						</td>
            <td><input class="form-control" type="text" name="left_supinator" value="  " v-model="historyFormData.left_supinator" />



						</td>
            <td><input class="form-control" type="text" name="left_knee" value="  " v-model="historyFormData.left_knee" />



						</td>
            <td><input class="form-control" type="text" name="left_ankle" value="  " v-model="historyFormData.left_ankle" />



						</td>
            <td><input class="form-control" type="text" name="left_hoffmann" value="  " v-model="historyFormData.left_hoffmann" />



						</td>
            <td><input class="form-control" type="text" name="left_ff" value="  " v-model="historyFormData.left_ff" />



						</td>
          </tr>

        </tbody>
      </table>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="plantars" class="control-label">Plantars : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="plantars" name="plantars" value="" v-model="historyFormData.plantars" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('plantars')">
										Field is required
									</span>




        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="romberg" class="control-label">Romberg's : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="romberg" name="romberg" value="" v-model="historyFormData.romberg" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('romberg')">
										Field is required
									</span>




        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="gait" class="control-label">Gait</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="gait" name="gait" value="" v-model="historyFormData.gait" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('gait')">
										Field is required
									</span>




        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="cerebellar" class="control-label">Cerebellar Signs : </label>
        </div>
        <div class="col-md-6">
					<select class="form-control" v-validate="'required'" id = "cerebellar" name="cerebellar" value="" :class="{'is-danger': errors.has('cerebellar') }" v-model="historyFormData.cerebellar">
						<option value="no">No</option>
            <option value="truncal">Truncal</option>
            <option value="appendicular">Appendicular</option>
            <option value="tandemwalking">Tandem Walking</option>
          </select>
					<span class="help is-danger" v-show="errors.has('cerebellar')">
										Field is required
									</span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="neck_stiffness" class="control-label">Neck Stiffness</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="neck_stiffness" name="neck_stiffness" value="" v-model="historyFormData.neck_stiffness" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('neck_stiffness')">
						Field is required
					</span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="diagnosis" class="control-label">Diagnosis</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="diagnosis" name="diagnosis" value="" v-model="historyFormData.diagnosis" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('diagnosis')">
						Field is required
					</span>
        </div>
      </div>
    </div>


		<div class="row form-group">
			<button class=" btn btn-success" type="button" @click="saveHistoryForm()">Submit</button>
		</div>

</form>
 <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal>
</div>
</template>

<script >
	import User from '../../../api/users.js';
	import addressograph from './addressograph.vue';
	import SelectPatientModal from '../../../components/SelectPatientModal.vue';

      export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
								'type': 'historyForm',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'historyFormData' : {
									'chief_complaints':'',
									'patient_history':'',
									'past_history':'',
									'allergic_history':'',
									'road_accident':'',
									'alleged_roadtrafficaccident':'',
									'place':'',
									'time':'',
									'date':'',
									'ho_loc':'',
									'ho_entbleeding':'',
									'ho_seizures':'',
									'ho_vomiting':'',
									'pulse':'',
									'bp':'',
									'temp':'',
									'resp':'',
									'pain':'',
									'right_biceps':'',
									'right_triceps':'',
									'right_supinator':'',
									'right_knee':'',
									'right_ankle':'',
									'right_hoffmann':'',
									'right_ff':'',
									'left_biceps':'',
									'left_triceps':'',
									'left_supinator':'',
									'left_knee':'',
									'left_ankle':'',
									'left_hoffmann':'',
									'left_ff':'',
									'plantars':'',
									'romberg':'',
									'gait':'',
									'cerebellar':'',
									'neck_stiffness':'',
									'diagnosis':'',
									'testcanvas':''
                }
            }
        },


				components: {
					 addressograph,
					 SelectPatientModal
			 },




        mounted() {
        	$('.ls-datepicker').datepicker({
			    format: 'dd/mm/yyyy',
			    'autoclose': true
			});

			$('.ls-timepicker').timepicker();
            let vm =this;
			$('.ls-datepicker').datepicker().on('changeDate',function(){
				vm.historyFormData.date = this.value;
			})

			$('.ls-timepicker').on('change', function(e)  {
				//vm.historyFormData.time = this.value;
			});
			 // if(this.ipd_id == 0){
	     		   $('#delete_modal').modal('show');
	    		// }
  },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveHistoryForm() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
									 var historyFormData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.historyFormData};
				    	User.saveHistoryForm(historyFormData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('History Form has been saved', 'History Form', {timeOut: 5000});
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


<!-- <script type="text/javascript">




		document.addEventListener("DOMContentLoaded", function(){

			var canvas = document.getElementById('paint1');
			var ctx = canvas.getContext('2d');

			var sketch1 = document.getElementById('sketch1');
			var sketch1_style = getComputedStyle(sketch1);
			canvas.width = 600;
			canvas.height = 475;

			var mouse = {x: 0, y: 0};

			/* Mouse Capturing Work */
			canvas.addEventListener('mousemove', function(e) {
			mouse.x = e.pageX - this.offsetLeft;
			mouse.y = e.pageY - this.offsetTop;
			}, false);

			/* Drawing on paint1 App */
			ctx.lineJoin = 'round';
			ctx.lineCap = 'round';

			ctx.strokeStyle = "red";
			function getColor(colour){ctx.strokeStyle = colour;}

			function getSize(size){ctx.lineWidth = size;}


			//ctx.strokeStyle =
			//ctx.strokeStyle = document.settings.colour[1].value;

			canvas.addEventListener('mousedown', function(e) {
				ctx.beginPath();
				ctx.moveTo(mouse.x, mouse.y);

				canvas.addEventListener('mousemove', onpaint1, false);
			}, false);

			canvas.addEventListener('mouseup', function() {
				canvas.removeEventListener('mousemove', onpaint1, false);
			}, false);

			var onpaint1 = function() {
				ctx.lineTo(mouse.x, mouse.y);
				ctx.stroke();
			};
		});
</script> -->
