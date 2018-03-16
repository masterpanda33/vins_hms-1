<template id="">
  <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col">
          <h1>Patient Admission Sheet</h1>
        </div>
        <div class="col">
          <div class="text-right">
            DOC NO. FMT/HIC/09 </br>
            REV. No. 0.1 </br>
            WEF 10-10-2015
          </div>
        </div>
      </div>
    </div>

    <hr>

    <form action="" method="post">
      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>HUID NO : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="huid_no" v-model="PatientAdmissionSheet.huid_no" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('huid_no')">
								Field is required
							</span>
					</div>
        </div>
        <div class="col">
          <div class="col">
            <label> IPD NO : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="ipd_no" v-model="PatientAdmissionSheet.ipd_no" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('ipd_no')">
								Field is required
							</span>
					</div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>Name : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="name" v-model="PatientAdmissionSheet.name" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('name')">
								Field is required
							</span>
					</div>
        </div>
        <div class="col">
          <div class="col">
            <label>Address : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="address" v-model="PatientAdmissionSheet.address" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('address')">
								Field is required
							</span>
					</div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>City : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="city" v-model="PatientAdmissionSheet.city" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('city')">
								Field is required
							</span>
					</div>
        </div>
        <div class="col">
          <div class="col">
            <label> Admission Date : </label>
          </div>
          <div class="col">
            <input class="form-control" type="date" name="admission_date" v-model="PatientAdmissionSheet.admission_date" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('admission_date')">
								Field is required
							</span>
					</div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>Admission Time : </label>
          </div>
          <div class="col">
            <input class="form-control" type="time" name="admission_time" v-model="PatientAdmissionSheet.admission_time" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('admission_time')">
								Field is required
							</span>
					</div>
        </div>
        <div class="col">
          <div class="col">
            <label> Phone No : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="phone_no" v-model="PatientAdmissionSheet.phone_no" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('phone_no')">
								Field is required
							</span>
					</div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>Patient Type : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="patient_type" v-model="PatientAdmissionSheet.patient_type" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('patient_type')">
								Field is required
							</span>
					</div>
        </div>

        <div class="col">
          <div class="col">
            <label>Sex : </label>
          </div>
          <div class="col">
            <select class="form-control" name="sex" v-model="PatientAdmissionSheet.sex" v-validate="'required'">
              <option value="na" >NA</option>
              <option value="male" >Male</option>
              <option value="female" >Female</option>
            </select>
            <span class="help is-danger" v-show="errors.has('sex')">
              Field is required
            </span>
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>Age : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="age" v-model="PatientAdmissionSheet.age" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('age')">
								Field is required
							</span>
					</div>
        </div>
        <div class="col">
          <div class="col">
            <label> MLC : </label>
          </div>
          <div class="col">
            <select class="form-control" name="mlc" v-model="PatientAdmissionSheet.mlc" v-validate="'required'">
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
            <span class="help is-danger" v-show="errors.has('mlc')">
              Field is required
            </span>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>Consultant Name : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="consultant_name" v-model="PatientAdmissionSheet.consultant_name" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('consultant_name')">
								Field is required
							</span>
					</div>
        </div>
        <div class="col">
          <div class="col">
            <label> Referred By : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="ref_by" v-model="PatientAdmissionSheet.ref_by" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('ref_by')">
								Field is required
							</span>
					</div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>Category : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="category" v-model="PatientAdmissionSheet.category" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('category')">
								Field is required
							</span>
					</div>
        </div>
        <div class="col">
          <div class="col">
            <label> Class : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="pas_class" v-model="PatientAdmissionSheet.pas_class" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('pas_class')">
								Field is required
							</span>
					</div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>Room no /Bed no : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="room_bed_no" v-model="PatientAdmissionSheet.room_bed_no" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('room_bed_no')">
								Field is required
							</span>
					</div>
        </div>
        <div class="col">
          <div class="col">
            <label> ICD CODE : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="icd_code" v-model="PatientAdmissionSheet.icd_code" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('icd_code')">
								Field is required
							</span>
					</div>
        </div>
      </div>

      <div class="row form-group"><hr>
        <div class="col">
          <div class="col">
            <label>Provisional Diagnosis : </label>
          </div>
          <div class="col">
            <textarea class="form-control" type="text" name="provisional_diagnosis" v-model="PatientAdmissionSheet.provisional_diagnosis" v-validate="'required'" value="" /></textarea>
            <span class="help is-danger" v-show="errors.has('provisional_diagnosis')">
              Field is required
            </span>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col">
          <div class="col">
            <label>Final Diagnosis : </label>
          </div>
          <div class="col">
            <textarea class="form-control" type="text" name="final_diagnosis" v-model="PatientAdmissionSheet.final_diagnosis" v-validate="'required'" value="" /></textarea>
            <span class="help is-danger" v-show="errors.has('final_diagnosis')">
              Field is required
            </span>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <h3>Operative Details : </h3>
      </div>

      <div class="row form-group">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Sr no.</th>
              <th>Date</th>
              <th>Time</th>
              <th>Procedure</th>
              <th>Surgeon</th>
              <th>Anesthesia</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> 1.</td>
              <td>
                <input class="form-control" type="date" name="date_00" v-model="PatientAdmissionSheet.date_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('date_00')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="time" name="time_00" v-model="PatientAdmissionSheet.time_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('time_00')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="procedure_00" v-model="PatientAdmissionSheet.procedure_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('procedure_00')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="surgeon_00" v-model="PatientAdmissionSheet.surgeon_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('surgeon_00')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="anesthesia_00" v-model="PatientAdmissionSheet.anesthesia_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('anesthesia_00')">
								Field is required
							</span>
              </td>
            </tr>
            <tr>
              <td> 2.</td>
              <td>
                <input class="form-control" type="date" name="date_01" v-model="PatientAdmissionSheet.date_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('date_01')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="time" name="time_01" v-model="PatientAdmissionSheet.time_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('time_01')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="procedure_01" v-model="PatientAdmissionSheet.procedure_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('procedure_01')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="surgeon_01" v-model="PatientAdmissionSheet.surgeon_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('surgeon_01')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="anesthesia_01" v-model="PatientAdmissionSheet.anesthesia_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('anesthesia_01')">
								Field is required
							</span>
              </td>
            </tr>
            <tr>
              <td> 3.</td>
              <td>
                <input class="form-control" type="date" name="date_02" v-model="PatientAdmissionSheet.date_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('date_02')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="time" name="time_02" v-model="PatientAdmissionSheet.time_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('time_02')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="procedure_02" v-model="PatientAdmissionSheet.procedure_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('procedure_02')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="surgeon_02" v-model="PatientAdmissionSheet.surgeon_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('surgeon_02')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="anesthesia_02" v-model="PatientAdmissionSheet.anesthesia_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('anesthesia_02')">
								Field is required
							</span>
              </td>
            </tr>
            <tr>
              <td> 4.</td>
              <td>
                <input class="form-control" type="date" name="date_03" v-model="PatientAdmissionSheet.date_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('date_03')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="time" name="time_03" v-model="PatientAdmissionSheet.time_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('time_03')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="procedure_03" v-model="PatientAdmissionSheet.procedure_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('procedure_03')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="surgeon_03" v-model="PatientAdmissionSheet.surgeon_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('surgeon_03')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="anesthesia_03" v-model="PatientAdmissionSheet.anesthesia_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('anesthesia_03')">
								Field is required
							</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <hr>

      <div class="row">
        <h3>Patient Transfer Details : </h3>
      </div>

      <div class="row form-group">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Sr. no.</th>
              <th>Ward Name</th>
              <th>Transfer date</th>
              <th>Transfer time</th>
              <th>Transfer Ward</th>
              <th>Nurse's Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> 1.</td>
              <td>
                <input class="form-control" type="text" name="ward_name_00" v-model="PatientAdmissionSheet.ward_name_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('ward_name_00')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="date" name="t_date_00" v-model="PatientAdmissionSheet.t_date_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_date_00')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="time" name="t_time_00" v-model="PatientAdmissionSheet.t_time_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_time_00')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="t_ward_00" v-model="PatientAdmissionSheet.t_ward_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_ward_00')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="nurse_name_00" v-model="PatientAdmissionSheet.nurse_name_00" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('nurse_name_00')">
								Field is required
							</span>
              </td>
            </tr>

            <tr>
              <td> 2.</td>
              <td>
                <input class="form-control" type="text" name="ward_name_01" v-model="PatientAdmissionSheet.ward_name_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('ward_name_01')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="date" name="t_date_01" v-model="PatientAdmissionSheet.t_date_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_date_01')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="time" name="t_time_01" v-model="PatientAdmissionSheet.t_time_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_time_01')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="t_ward_01" v-model="PatientAdmissionSheet.t_ward_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_ward_01')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="nurse_name_01" v-model="PatientAdmissionSheet.nurse_name_01" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('nurse_name_01')">
								Field is required
							</span>
              </td>
            </tr>

            <tr>
              <td> 3.</td>
              <td>
                <input class="form-control" type="text" name="ward_name_02" v-model="PatientAdmissionSheet.ward_name_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('ward_name_02')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="date" name="t_date_02" v-model="PatientAdmissionSheet.t_date_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_date_02')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="time" name="t_time_02" v-model="PatientAdmissionSheet.t_time_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_time_02')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="t_ward_02" v-model="PatientAdmissionSheet.t_ward_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_ward_02')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="nurse_name_02" v-model="PatientAdmissionSheet.nurse_name_02" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('nurse_name_02')">
								Field is required
							</span>
              </td>
            </tr>

            <tr>
              <td> 4.</td>
              <td>
                <input class="form-control" type="text" name="ward_name_03" v-model="PatientAdmissionSheet.ward_name_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('ward_name_03')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="date" name="t_date_03" v-model="PatientAdmissionSheet.t_date_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_date_03')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="time" name="t_time_03" v-model="PatientAdmissionSheet.t_time_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_time_03')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="t_ward_03" v-model="PatientAdmissionSheet.t_ward_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('t_ward_03')">
								Field is required
							</span>
              </td>
              <td>
                <input class="form-control" type="text" name="nurse_name_03" v-model="PatientAdmissionSheet.nurse_name_03" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('nurse_name_03')">
								Field is required
							</span>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

      <div class="row form-group"><hr>
        <div class="col">
          <div class="col">
            <label>Checked By : </label>
          </div>
          <div class="col">
            <input class="form-control" type="text" name="checked_by" v-model="PatientAdmissionSheet.checked_by" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('checked_by')">
								Field is required
							</span>
					</div>
        </div>

        <div class="row form-group">
          <div class="col">
            <div class="col">
              <label>Sign : </label>
            </div>
            <div class="col">
              <input class="form-control" type="text" name="sign" v-model="PatientAdmissionSheet.sign" v-validate="'required'" value="">
							<span class="help is-danger" v-show="errors.has('sign')">
								Field is required
							</span>
					</div>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col text-center">
          <input class="btn btn-success" type="button" value="Submit" @click="savePatientAdmissionSheet()">
        </div>
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
                'PatientAdmissionSheet' : {
                  'huid_no':'',
                  'ipd_no':'',
                  'name':'',
                  'address':'',
                  'city':'',
                  'admission_date':'',
                  'admission_time':'',
                  'phone_no':'',
                  'patient_type':'',
                  'sex':'',
                  'age':'',
                  'mlc':'',
                  'consultant_name':'',
                  'ref_by':'',
                  'category':'',
                  'pas_class':'',
                  'room_bed_no':'',
                  'icd_code':'',
                  'provisional_diagnosis':'',
                  'final_diagnosis':'',
                  'date_00':'',
                  'time_00':'',
                  'procedure_00':'',
                  'surgeon_00':'',
                  'anesthesia_00':'',
                  'date_01':'',
                  'time_01':'',
                  'procedure_01':'',
                  'surgeon_01':'',
                  'anesthesia_01':'',
                  'date_02':'',
                  'time_02':'',
                  'procedure_02':'',
                  'surgeon_02':'',
                  'anesthesia_02':'',
                  'date_03':'',
                  'time_03':'',
                  'procedure_03':'',
                  'surgeon_03':'',
                  'anesthesia_03':'',
                  'ward_name_00':'',
                  't_date_00':'',
                  't_time_00':'',
                  't_ward_00':'',
                  'nurse_name_00':'',
                  'ward_name_01':'',
                  't_date_01':'',
                  't_time_01':'',
                  't_ward_01':'',
                  'nurse_name_01':'',
                  'ward_name_02':'',
                  't_date_02':'',
                  't_time_02':'',
                  't_ward_02':'',
                  'nurse_name_02':'',
                  'ward_name_03':'',
                  't_date_03':'',
                  't_time_03':'',
                  't_ward_03':'',
                  'nurse_name_03':'',
                  'checked_by':'',
                  'sign':'',
                }
            }
        },
        methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

        savePatientAdmissionSheet() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   User.savePatientAdmissionSheet(this.PatientAdmissionSheet).then(
                         (response) => {
                         	console.log(response)
                         	if(response.data.status == 200) {
                         		toastr.success('Patient Admission Sheet has been saved', 'PatientAdmissionSheet', {timeOut: 5000});
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
