 <template>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-aside sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar -->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <!-- <profile></profile> -->
                </div>
                <vmenu>
                    <vmenu-item link="/" icon="fa fa-certificate">
                        &nbsp; Dashboard
                    </vmenu-item>

                    <!-- <vmenu-item link="/NewUser" icon="ti-layout">
                        &nbsp; New User
                    </vmenu-item> -->
                    <vsub-menu id="category-tabs" title="Emergency Patients" icon="fa fa-certificate" >
                        <vmenu-item link="/doctorsInitialAssessment" icon="ti-layout">
                          &nbsp; Doctors Initial Assessment
                        </vmenu-item>
                        <vmenu-item link="/er_observation" icon="ti-layout">
                          &nbsp; ER Observation
                        </vmenu-item>
                    </vsub-menu>
                    <vsub-menu title="Pre Admission Forms" icon="fa fa-certificate" >
                        <vmenu-item link="/patients_detail_form" icon="ti-layout">
                          &nbsp; Patients Detail Form
                        </vmenu-item>
                        <vmenu-item link="/information_form" icon="ti-layout">
                          &nbsp; Information Form
                        </vmenu-item>
                        <vmenu-item link="/PatientValuableForm" icon="ti-layout">
                          &nbsp; Patient Valuable Form
                        </vmenu-item>
                    </vsub-menu>
                    <vsub-menu title="24 Hours Form" icon="fa fa-certificate" >
                            <vmenu-item link="/counsellingForm" icon="ti-layout">
                              &nbsp; Counselling Form
                            </vmenu-item>
                            <vmenu-item link="/completeNursingAssessment" icon="ti-layout">
                              &nbsp; Complete Nursing Assessment
                            </vmenu-item>
                            <vmenu-item link="/NutritionalAssessmentForm" icon="ti-layout">
                              &nbsp; Nutritional Assessment Form
                            </vmenu-item>
                            <vmenu-item link="/plan_of_care" icon="ti-layout">
                              &nbsp; Plan of Care
                            </vmenu-item>
                            <vmenu-item link="/history_form" icon="ti-layout">
                              &nbsp; History Form
                            </vmenu-item>
                    </vsub-menu>
                    <vsub-menu title="Operation/Surgery" icon="fa fa-certificate" >
                            <vmenu-item link="/LabSheet" icon="ti-layout">
                              &nbsp; Lab Sheet
                            </vmenu-item>
                            <vmenu-item link="/codeBlueEvaluationForm" icon="ti-layout">
                              &nbsp; Code Blue Evaluation Form
                            </vmenu-item>
                            <vmenu-item link="/OperativeDetailSheet" icon="ti-layout">
                              &nbsp; Operative Detail Sheet
                            </vmenu-item>
                            <vmenu-item link="/surgicalSafetyChecklist" icon="ti-layout">
                              &nbsp; Surgical Safety Checklist
                            </vmenu-item>
                            <vmenu-item link="/pre_anaesthesia_checkup_form" icon="ti-layout">
                              &nbsp; Pre Anaesthesia Checkup Form
                            </vmenu-item>
                            <vmenu-item link="/briefOperativeNote" icon="ti-layout">
                              &nbsp; Brief Operative Notes
                            </vmenu-item>
                    </vsub-menu>
                    <vsub-menu title="Daily Ward / General" icon="fa fa-certificate" >
                            <vmenu-item link="/bloodSugarMonitoringChart" icon="ti-layout">
                              &nbsp; Blood Sugar Monitoring Chart
                            </vmenu-item>
                            <vmenu-item link="/doctorsDailyNotes" icon="ti-layout">
                              &nbsp; Doctors Daily Notes
                            </vmenu-item>
                            <vmenu-item link="/ward_procedure_record" icon="ti-layout">
                              &nbsp; Ward Procedure Record
                            </vmenu-item>
                            <vmenu-item link="/bloodTransfusionDetails" icon="ti-layout">
                              &nbsp; Blood Transfusion Details
                            </vmenu-item>
                            <vmenu-item link="/doctors_handover" icon="ti-layout">
                              &nbsp; Doctors Handover
                            </vmenu-item>
                            <vmenu-item link="/PatientDietRecord" icon="ti-layout">
                              &nbsp; Patient Diet Record
                            </vmenu-item>
                    </vsub-menu>
                    <vsub-menu title="Discharge" icon="fa fa-certificate" >
                            <vmenu-item link="/dischargeSummary" icon="ti-layout">
                              &nbsp; Discharge Summary
                            </vmenu-item>
                            <vmenu-item link="/provisional_discharge_summary" icon="ti-layout">
                              &nbsp; Provisional Discharge Summary
                            </vmenu-item>
                    </vsub-menu>
                    <vsub-menu title="Other" icon="fa fa-certificate" >
                            <vmenu-item link="/cultureBiopsyForm" icon="ti-layout">
                              &nbsp; Culture Biopsy Form
                            </vmenu-item>
                            <vmenu-item link="/centralLineBundleChecklist" icon="ti-layout">
                              &nbsp; Central Line Bundle Checklist
                            </vmenu-item>
                            <vmenu-item link="/appointmentBook" icon="ti-layout">
                              &nbsp; Appintment Book
                            </vmenu-item>
                    </vsub-menu>


                </vmenu>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
</template>
<script>
import {
    vmenu,
    vmenuItem,
    vsubMenu
} from './menu';
// import profile from "../left-profile/user_profile.vue"
export default {
    name: "left-side",
    components: {
        vmenu,
        vsubMenu,
        vmenuItem,
        // profile
    },
    data() {
        return {
        }
    }
}
</script>




<!--
<vsub-menu title="Forms" icon="ti-check-box">
    <vmenu>
    <vsub-menu title="Features" icon="ti-receipt">
        <vmenu-item link="/form-elements" icon="ti-cup">
            Form Elements
        </vmenu-item>
        <vmenu-item link="/realtime_form" icon="ti-write">
            Realtime Form
        </vmenu-item>
        <vmenu-item link="/form-validations" icon="ti-alert">
            Form Validations
        </vmenu-item>
        <vmenu-item link="/form_layouts" icon="ti-layout-width-default">
            Form Layouts
        </vmenu-item>
        <vmenu-item link="/complex_forms" icon="ti-layout-cta-left">
            Complex Forms
        </vmenu-item>
        <vmenu-item link="/radio_check" icon="ti-check-box">
            Radio and Checkbox
        </vmenu-item>
    </vsub-menu>
    <vsub-menu title="Components" icon="ti-clipboard">
        <vmenu-item link="/form_editors" icon="ti-pencil">
            Form Editors
        </vmenu-item>
        <vmenu-item link="/form_wizards" icon="ti-settings">
            Form Wizards
        </vmenu-item>
        <vmenu-item link="/dropdowns" icon="ti-widget-alt">
            Drop Downs
        </vmenu-item>
        <vmenu-item link="/vue_multiselect" icon="ti-widget-alt">
            Vue Multiselect
        </vmenu-item>
        <vmenu-item link="/vue_slider" icon="ti-bell">
            Vue Slider
        </vmenu-item>
        <vmenu-item link="/date_pickers" icon="ti-calendar">
            Date pickers
        </vmenu-item>
        <vmenu-item link="/advanced_date_pickers" icon="ti-notepad">
            Advanced Date pickers
        </vmenu-item>
    </vsub-menu>
</vmenu>
</vsub-menu> -->
