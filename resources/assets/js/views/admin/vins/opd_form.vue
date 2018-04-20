<template id="">
  <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col-md-6">
          <h1>OPD Form</h1>
        </div>
      </div>
    </div>

  <form action="" method="post" enctype="multipart/formdata">
    <div v-if="frmStep == 'step1'">
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6 ">
          <label for="date">Case type:</label>
        </div>
        <div class="col-md-6">
          <select  class="form-control ls-select2" type = "text" v-validate="'required'" id = "case_type" name="case_type" value="" v-model="opdData.case_type">
            <option value="new">New</option>
            <option value="old">Old</option>
          </select>
          <span class="help is-danger" v-show="errors.has('case_type')">
            Field is required
          </span>
        </div>
      </div>
       <div class="col-md-6" v-if="opdData.case_type == 'new'">
            <create-patient-detail @confirmed="deleteConfirmed()" patientType=
            'opd'></create-patient-detail>
       </div>
      <div class="col-md-6" v-if="opdData.case_type == 'old'">
      <div class="col-md-6 ">
          <label for="date">UHID No:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="uhid_no"  class="form-control"  v-validate="'required'"  v-model="opdData.uhid_no">
          <span class="help is-danger" v-show="errors.has('uhid_no')">
            Field is required
          </span>
        </div>
      </div>

    </div>


    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">Weight:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="weight" id="weight" class="form-control"  v-model="opdData.weight">

          <span class="help is-danger" v-show="errors.has('weight')">
            Field is required
          </span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-6">
          <label for="date">Height:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="height" id="height" class="form-control" placeholder="In cms"  v-model="opdData.height">

          <span class="help is-danger" v-show="errors.has('height')">
            Field is required
          </span>
        </div>
      </div>

      <div class="col-md-2">
          <div class="col-md-6">
            <label for="date">BMI:</label>
          </div>  
          <div class="col-md-6">
            <input type="text" name="bmi" id="bmi" class="form-control" readonly="" v-model="bmi">            
          </div>
        </div>
    </div>

    <hr>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">Doctor:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="vitals" id="vitals" class="form-control" readonly=""  v-model="doctor">
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">Department:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="pulse" id="pulse" class="form-control" readonly="" v-model="department">
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">Vitals:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="vitals" id="vitals" class="form-control"  v-model="opdData.vitals">

          <span class="help is-danger" v-show="errors.has('vitals')">
            Field is required
          </span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">Pulse:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="pulse" id="pulse" class="form-control"  v-model="opdData.pulse">
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">BP:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="bp" id="bp" class="form-control"  v-model="opdData.bp">

          <!-- <span class="help is-danger" v-show="errors.has('vitals')">
            Field is required
          </span> -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">Temp:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="temp" id="temp" class="form-control"  v-model="opdData.temp">

        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
          <div class="col-md-12">
            <label for="history">History type:</label>
            <button type="button" class="btn btn-submit" @click="setHistoryType('text')">Text</button>
            <button type="button" class="btn btn-warning" @click="setHistoryType('scrabble')">Scrabble</button>
            <button type="button" class="btn btn-danger" @click="setHistoryType('speech')">Speech</button>
          </div>

      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
          <div class="col-md-6">
            <label for="history">History:</label>
          </div>
          <div class="col-md-12" v-show="opdData.historyType == 'text'">
            <textarea name="history"  id="history" class="form-control"  v-model="opdData.history" cols=""></textarea> 
          </div>
          <div class="col-md-12" v-show="opdData.historyType == 'scrabble'">
            <div id="signature-pad" class="signature-pad">
              <div class="signature-pad--body">
                <canvas class="can-img" id="history_scrabble" height="200px" width="500px" ></canvas> 
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="past_history">Past History:</label>
        </div>
        <div class="col-md-6">
          <textarea name="past_history" id="past_history" class="form-control"  v-model="opdData.past_history"></textarea>   
        </div>
      </div>
    </div>

    <div class="row form-group">
        <div class="col-md-6">
            <div class="col-md-6">
                <label for="advise">Advise:</label>
            </div>
            <div class="col-md-6">
                <input  class="form-control" type="text" name="advise" id="advise" v-model="opdData.advise" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-6">
                 <label for="prescription">Prescription:</label>
            </div>
            <div class="col-md-6">
                <select class="form-control ls-select2" name="prescription" id="prescription" v-model="opdData.prescription">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6">
            <div class="col-md-6">
               <label for="referral">Referral:</label>
            </div>
            <div class="col-md-6">
              <select class="form-control ls-select2" name="referral" id="referral" v-model="opdData.referral">
                  <option value="cross">Cross</option>
                  <option value="radiology">Radiology</option>
                  <option value="aboratory">Laboratory</option>
              </select>
            </div>
        </div>
         <div class="col-md-6">
            
            <div class="col-md-6" v-if= "opdData.referral == 'cross'">
                <select class="form-control ls-select2" name="internal" id="internal" v-model="opdData.cross">
                      <option value="internal">Internal</option>
                      <option value="external">Exernal</option>
                </select>
            </div>
            <div class="col-md-6" v-if="opdData.cross == 'internal'">
                <select class="form-control ls-select2" name="internal" v-model="opdData.cross_type_int">
                        <option value="doctor1">doctor1</option>
                        <option value="doctor2">doctor2></option>
                        <option value="doctor3">doctor3></option>
                        <option value="doctor4">doctor4></option>
                        <option value="doctor5">doctor5></option>
                </select>
            </div>
            <div class="col-md-6" v-if="opdData.cross == 'external'">
                <input type="text" name="external" id="cross" class="form-control" v-model="opdData.cross_type_int">
          </div>
          <div class="col-md-6" v-if="opdData.referral == 'radiology'">
            <select class="form-control ls-select2" name="radiology" id="radiology">
                <option value="drug1">Drug1</option>
                <option value="drug2">Drug2</option>
                <option value="drug3">Drug3</option>
                <option value="drug4">Drug4</option>
                <option value="drug5">Drug5</option>
            </select>
          </div>
              <div class="col-md-6" v-if="opdData.referral == 'laboratory'">
                  <input type="text" name="laboratory" id="laboratory" v-model="opdData.laboratory" />
              </div> 
          </div>
    </div>
  </div>

  <div class="row form-group" v-if="frmStep == 'step2'">
    <div class="col-md-12" v-if="department == 'Neurology' || department == 'Neurosurgery'">
      <neuro-examination></neuro-examination>
    </div>
    <div class="col-md-12" v-if="department == 'Vascular'">
      <vascular-examination></vascular-examination>
    </div>
</div>
      <div class="row form-group">
          <div class="col-md-6">
              <button type="button" class="btn btn-primary btn-submit text-right" @click="saveInformation()">Next</button>
          </div>
      </div>
  </form>
  </div>
</template>
<script >
	import User from '../../../api/users.js';
  import createPatientDetail from './createPatientDetail.vue';
  import vascularExamination from './vascularExamination.vue';
  import neuroExamination from './neuroExamination.vue';
  import SignaturePad from 'signature_pad';

    export default {
        data() {
            return {
              'footer' : 'footer',
              'currentYear': new Date().getFullYear(),
              'type': 'opdForms',
              'doctor':this.$store.state.Users.userDetails.first_name+' '+this.$store.state.Users.userDetails.last_name,
              'department':this.$store.state.Users.userDetails.department,
              'signaturePad':{},
              'frmStep':'step1',
              'opdData': {
                'case_type': '',
                'uhid_no': 0,
                'name':'',
                'age':'',
                'gender':'',
                'weight':'',
                'height': '',
                'history':'',
                'historyType': 'scrabble',
                'past_history':'',
                'prescription':'',
                'advise':'',
                'referral':'',
                'cross':'',
                'cross_type_int':'',
                'cross_type_extt':'',
                'radiology':'',
                'laboratory':''
              }
            }
        }, 
        components: {
         createPatientDetail,
         vascularExamination,
         neuroExamination
       },
        computed: {
          bmi() {
            if(this.opdData.weight!='' && this.opdData.height!=''){
              var height_met = this.opdData.height / 100;
              return (this.opdData.weight )/(height_met * height_met)
            } else {
              return 0;
            }

          }
       },
        mounted(){

       
          $('.ls-select2').select2({
           placeholder: "Select"
          }); 

          var vm =this;
            // On mobile devices it might make more sense to listen to orientation change,
            // rather than window resize events.
            

          $('.ls-select2').on("select2:select", function (e) { 
            if(this.id == 'referral'){
              vm.opdData.referral=$(this).val();
            }
            else if(this.id== 'internal'){
              vm.opdData.cross_type_int = $(this).val();
            }
            else{
              vm.opdData.case_type = $(this).val(); 
            }
             if($(this).val() == 'old') {
             } 
             else {
                setTimeout(function(){
                $('#createPatientDetail').modal('show');  
             },500)
            }
            

          });
        setTimeout(function(){
          vm.examinationChangeImage();
 
        },2000)
        },
        methods: {
          setHistoryType(type){
            var vm =this;
            vm.opdData.historyType = type;

          },
          resizeCanvas(canvas) {
              var ratio =  Math.max(window.devicePixelRatio || 1, 1);
              canvas.width = canvas.offsetWidth * ratio;
              canvas.height = canvas.offsetHeight * ratio;
               canvas.getContext("2d").scale(ratio, ratio);
            },
         dataURLToBlob(dataURL) {
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
            },
          saveInformation() {
            var vm =this;
            //   var wrapper = document.getElementById("signature-pad");
            // var canvas = document.getElementById("history_scrabble");
            // // var signaturePad = new SignaturePad(canvas, {
            // //   backgroundColor: 'rgb(255, 255, 255)',
            // // });
            
            // window.onresize = vm.resizeCanvas(canvas);
            // vm.resizeCanvas(canvas);
            var opdData = this.opdData;
            if (vm.signaturePad.isEmpty()) {
                alert("Please provide a signature first.");
              } else {
                var dataURL = vm.signaturePad.toDataURL();
                console.log(dataURL);
                vm.download(dataURL, "signature.png");
              }
            User.saveOpdData(this.opdData).then((response) => {
                        console.log(response);
                         // this.$router.push({'name':'dashboard'});
                    })
          },
          download(dataURL, filename) {
            var vm =this;
              var blob = vm.dataURLToBlob(dataURL);
              var url = window.URL.createObjectURL(blob);

              var a = document.createElement("a");
              a.style = "display: none";
              a.href = url;
              a.download = filename;

              document.body.appendChild(a);
              a.click();

              window.URL.revokeObjectURL(url);
            },
          examinationChangeImage() {
            var vm =this;
            // savePNGButton.addEventListener("click", function (event) {
             var wrapper = document.getElementById("signature-pad");
            var canvas = document.getElementById("history_scrabble");
             vm.signaturePad = new SignaturePad(canvas, {
              backgroundColor: 'rgb(255, 255, 255)',
            });
            
            window.onresize = vm.resizeCanvas;
            vm.resizeCanvas();
            
              // if (signaturePad.isEmpty()) {
              //   alert("Please provide a signature first.");
              // } else {
              //   var dataURL = signaturePad.toDataURL();
              //   console.log(dataURL);
              //   // download(dataURL, "signature.png");
              // }
            // });
          },
        }
                      
           
    }
        
</script>
