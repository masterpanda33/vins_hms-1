<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Vascular Examination</h1>
				</div>
			</div>
		</div>

		<form action="" method="post">

      <div class="row">
        <h3>Clinical Examination</h3>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Vitals : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="vitals" id="vitals" v-model="vascularExaminationData.vitals" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Temp : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="temp" id="temp" v-model="vascularExaminationData.temp" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Pulse : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="pulse" id="pulse" v-model="vascularExaminationData.pulse" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>RR : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="rr" id="rr" v-model="vascularExaminationData.rr" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>BP : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="bp" id="bp" v-model="vascularExaminationData.bp" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Ulcer : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="ulcer" id="ulcer" v-model="vascularExaminationData.ulcer" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Gangrene : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="gangrene" id="gangrene" v-model="vascularExaminationData.gangrene" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Pulsations : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="pulsations" id="pulsations" v-model="vascularExaminationData.pulsations" />
          </div>
        </div>
      </div>

      <div class="row">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <th>CAR</th>
              <th>SCA</th>
              <th>BR</th>
              <th>RAD</th>
              <th>UL</th>
              <th>FEM</th>
              <th>POP</th>
              <th>PT</th>
              <th>DP</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>R</th>
              <td><input class="form-control" type="text" name="car_r" id="car_r" v-model="vascularExaminationData.car_r" /></td>
              <td><input class="form-control" type="text" name="sca_r" id="sca_r" v-model="vascularExaminationData.sca_r" /></td>
              <td><input class="form-control" type="text" name="br_r" id="br_r" v-model="vascularExaminationData.br_r" /></td>
              <td><input class="form-control" type="text" name="rad_r" id="rad_r" v-model="vascularExaminationData.rad_r" /></td>
              <td><input class="form-control" type="text" name="ul_r" id="ul_r" v-model="vascularExaminationData.ul_r" /></td>
              <td><input class="form-control" type="text" name="fem_r" id="fem_r" v-model="vascularExaminationData.fem_r" /></td>
              <td><input class="form-control" type="text" name="pop_r" id="pop_r" v-model="vascularExaminationData.pop_r" /></td>
              <td><input class="form-control" type="text" name="pt_r" id="pt_r" v-model="vascularExaminationData.pt_r" /></td>
              <td><input class="form-control" type="text" name="dp_r" id="dp_r" v-model="vascularExaminationData.dp_r" /></td>
            </tr>
            <tr>
              <th>L</th>
              <td><input class="form-control" type="text" name="car_l" id="car_l" v-model="vascularExaminationData.car_l" /></td>
              <td><input class="form-control" type="text" name="sca_l" id="sca_l" v-model="vascularExaminationData.sca_l" /></td>
              <td><input class="form-control" type="text" name="br_l" id="br_l" v-model="vascularExaminationData.br_l" /></td>
              <td><input class="form-control" type="text" name="rad_l" id="rad_l" v-model="vascularExaminationData.rad_l" /></td>
              <td><input class="form-control" type="text" name="ul_l" id="ul_l" v-model="vascularExaminationData.ul_l" /></td>
              <td><input class="form-control" type="text" name="fem_l" id="fem_l" v-model="vascularExaminationData.fem_l" /></td>
              <td><input class="form-control" type="text" name="pop_l" id="pop_l" v-model="vascularExaminationData.pop_l" /></td>
              <td><input class="form-control" type="text" name="pt_l" id="pt_l" v-model="vascularExaminationData.pt_l" /></td>
              <td><input class="form-control" type="text" name="dp_l" id="dp_l" v-model="vascularExaminationData.dp_l" /></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Doppler ABPi : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="doppler_abpi" id="doppler_abpi" v-model="vascularExaminationData.doppler_abpi" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Varicose Vein Pattern : </label>
        </div>
      </div>

      <div class="row form-check form-inline">
        <div class="col-md-3">
          <label>
            <input class="form-check-input" type="checkbox" name="gsv" id="gsv" v-model="vascularExaminationData.gsv"/>GSV
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input class="form-check-input" type="checkbox" name="ssv" id="ssv" v-model="vascularExaminationData.ssv"/>SSV
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input class="form-check-input" type="checkbox" name="both" id="both" v-model="vascularExaminationData.both"/>BOTH
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input class="form-check-input" type="checkbox" name="ipv" id="ipv" v-model="vascularExaminationData.ipv"/>iPV
          </label>
        </div>
      </div>

      <hr />
        <div id="signature-pad" class="signature-pad">
          <div class="signature-pad--body">
            <canvas id="myCanvas" height="500" width="600" ></canvas>
             <!-- <canvas height="500" width="600" style="background: url('https://i.imgur.com/1bvTivk.png'); max-width:100%; max-height:100%;"></canvas> -->
          </div>
          <div class="signature-pad--footer">
           
            <div class="signature-pad--actions">
              <div>
                <button type="button" class="button clear btn btn-warning" data-action="clear">Clear</button>
                <button type="button" class="button save btn btn-success" data-action="save-png">Save</button>
                <input type="color" class="button" data-action="change-color">Change color
                <!-- <button type="button" class="button" data-action="undo">Undo</button> -->

              </div>
              <div>
                
               <!--  <button type="button" class="button save" data-action="save-jpg">Save as JPG</button>
                <button type="button" class="button save" data-action="save-svg">Save as SVG</button> -->
              </div>
            </div>
          </div>
        </div>

      <div class="row form-group" style="display: none;">
        <img id="scream" src="/assets/img/examin.png" alt="The Scream" width="220" height="277">

        <canvas height="500" width="600" style="background: url('https://i.imgur.com/1bvTivk.png'); max-width:100%; max-height:100%;"></canvas>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Clinical Diagnosis : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="clinical_diagnosis" id="clinical_diagnosis" v-model="vascularExaminationData.clinical_diagnosis" />
        </div>
      </div>

			<div class="text-center form-group">
				<button class="btn btn-success" type="button" @click="saveDoctorsInitialAssessment()">Submit</button>
			</div>

		</form>
		  <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal>
	</div>
</template>
<script >
	import User from '../../../api/users.js'
	import addressograph from './addressograph.vue';
	import SelectPatientModal from '../../../components/SelectPatientModal.vue';
  import SignaturePad from 'signature_pad';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
								'type': 'vascularExamination',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
								'vascularExaminationData': {
                  'vitals' : '',
                  'temp' : '',
                  'pulse' : '',
                  'rr' : '',
                  'bp' : '',
                  'ulcer' : '',
                  'gangrene' : '',
                  'pulsations' : '',
                  'car_r' : '',
                  'sca_r' : '',
                  'br_r' : '',
                  'rad_r' : '',
                  'ul_r' : '',
                  'fem_r' : '',
                  'pop_r' : '',
                  'pt_r' : '',
                  'dp_r' : '',
                  'car_l' : '',
                  'sca_l' : '',
                  'br_l' : '',
                  'rad_l' : '',
                  'ul_l' : '',
                  'fem_l' : '',
                  'pop_l' : '',
                  'pt_l' : '',
                  'dp_l' : '',
                  'doppler_abpi' : '',
                  'gsv' : '',
                  'ssv' : '',
                  'both' : '',
                  'ipv' : '',
                  'clinical_diagnosis' : '',

								}
            }
        },
				components: {
					 addressograph,
					 SelectPatientModal
			 },
			 mounted() {
        var vm =this;
        setTimeout(function(){
          vm.examinationChangeImage();
 
        },1000)
			 },
				methods: {
        examinationChangeImage() {

          var wrapper = document.getElementById("signature-pad");
          var clearButton = wrapper.querySelector("[data-action=clear]");
          var changeColorButton = wrapper.querySelector("[data-action=change-color]");
          var savePNGButton = wrapper.querySelector("[data-action=save-png]");
          var canvas = wrapper.querySelector("canvas");
          var signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)',
          });

           function resizeCanvas() {
            var ratio =  Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
             canvas.getContext("2d").scale(ratio, ratio);
            var  ctx = canvas.getContext('2d');
             ctx.drawImage($('#scream').get(0), 0, 0);
          }

          // On mobile devices it might make more sense to listen to orientation change,
          // rather than window resize events.
          window.onresize = resizeCanvas;
          resizeCanvas();

          function download(dataURL, filename) {
            var blob = dataURLToBlob(dataURL);
            var url = window.URL.createObjectURL(blob);

            var a = document.createElement("a");
            a.style = "display: none";
            a.href = url;
            a.download = filename;

            document.body.appendChild(a);
            a.click();

            window.URL.revokeObjectURL(url);
          }

          // One could simply use Canvas#toBlob method instead, but it's just to show
          // that it can be done using result of SignaturePad#toDataURL.
          function dataURLToBlob(dataURL) {
            // Code taken from https://github.com/ebidel/filer.js
            var parts = dataURL.split(';base64,');
            var contentType = parts[0].split(":")[1];
            var raw = window.atob(parts[1]);
            var rawLength = raw.length;
            var uInt8Array = new Uint8Array(rawLength);

            for (var i = 0; i < rawLength; ++i) {
              uInt8Array[i] = raw.charCodeAt(i);
            }

            return new Blob([uInt8Array], { type: contentType });
          }

          clearButton.addEventListener("click", function (event) {
            signaturePad.clear();
            resizeCanvas();
          });
          changeColorButton.addEventListener("change", function (event) {
            signaturePad.penColor = $(this).val();
          });

          savePNGButton.addEventListener("click", function (event) {
            if (signaturePad.isEmpty()) {
              alert("Please provide a signature first.");
            } else {
              var dataURL = signaturePad.toDataURL();
              download(dataURL, "signature.png");
            }
          });


        },
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveVascularExamination() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var vascularExaminationData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.vascularExaminationData};
				    	User.saveDoctorsInitialAssessment(vascularExaminationData).then(
		                (response) => {
		                	if(response.data.status == 200) {
		                		toastr.success('Vascular Examination has been saved', 'Vascular Examination', {timeOut: 5000});
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
