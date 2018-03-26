<template> 
	<div class="container">
		<div>
			<p>UHID:{{patient_id}}  /IPD:{{ipd_id}}</p>
			<p>Admission dt: {{admission_dt}}</p>
			<p>Name: {{patientName}}</p>
			<p>Dr: {{patientDetails.consultant}}</p>
			<p>Gender:   {{patientDetails.gender}}/ Age: {{getAge(patientDetails.dob)}}</p>
		</div>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import moment from 'moment';

	export default {
        data() {
            return {
                'patient_id': this.$store.state.Patient.patientId,
               	// 'ipd_id': this.$store.getters.getIpdID,
               	// 'patientDetails': this.$store.state.Patient,
               	'admission_dt': moment(this.$store.state.Patient.admitDatetime, 'YYYY-MM-DD HH:mm:ss').format('DD-MM-YYYY'),
            }
        },

        computed: {
        	patientDetails() {
        		return this.$store.state.Patient.patientData;
        	},
        	patientName() {
        		return this.patientDetails.first_name+' '+this.patientDetails.last_name
        	},
            ipd_id() {
                return this.$store.state.Patient.ipdId;
            }


        },
        methods: {
        	 getAge(dateString) {
                var today = new Date();
                var birthDate = new Date(dateString);
                var age = today.getFullYear() - birthDate.getFullYear();
                var m = today.getMonth() - birthDate.getMonth();
                if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
                return age;
            },
        }
    }
</script>