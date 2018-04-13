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
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6 ">
          <label for="date">Case type:</label>
        </div>
        <div class="col-md-6">
          <select  class="form-control ls-select2" type = "text" v-validate="'required'" id = "case_type" name="case_type" value=""  v-model="opdData.case_type">
            <option value="new">New</option>
            <option value="old">Old</option>
          </select>
          <span class="help is-danger" v-show="errors.has('case_type')">
            Field is required
          </span>
        </div>
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
          <label for="date">Name:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="opd_name" id="opd_name" class="form-control"  v-model="opdData.name">

          <span class="help is-danger" v-show="errors.has('opd_name')">
            Field is required
          </span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">Age:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="age" id="age" class="form-control"  v-model="opdData.age">

          <span class="help is-danger" v-show="errors.has('age')">
            Field is required
          </span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-3 ">
          <label for="date">Gender:</label>
        </div>
        <div class="col-md-6">
          <select  class="form-control ls-select2" type = "text" v-validate="'required'" id = "gender" name="gender" value=""  v-model="opdData.gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <span class="help is-danger" v-show="errors.has('gender')">
            Field is required
          </span>
        </div>
      </div>
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
    </div>

    <div class="row form-group">
      <div class="col-md-6">
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
      <div class="col-md-6">
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

  </form>
  </div>
</template>
<script >
	// import User from '../../../api/users.js';
    export default {
        data() {
            return {
              'footer' : 'footer',
              'currentYear': new Date().getFullYear(),
              'type': 'opdForms',
              'doctor':'Rajesh Jain',
              'department':'Neurology',
              'opdData': {
                'case_type': 'new',
                'uhid_no': 0,
                'name':'',
                'age':'',
                'gender':'',
                'weight':'',
                'height': '',

              }
            }
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
          $('.ls-selecct2').select2();
          let vm =this;
          $('.ls-selecct2').on("select2:select", function (e) { 
            console.log($(this).val());
             vm.opdData.case_type = $(this).val();
             if($(this).val() == 'old') {

             }
          });
        }
    }
</script>
