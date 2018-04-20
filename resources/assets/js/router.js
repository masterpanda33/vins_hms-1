import Vue from 'vue'
import VueRouter from 'vue-router'

import AuthService from './services/auth'

/*
 |--------------------------------------------------------------------------
 | Admin Views
 |--------------------------------------------------------------------------|
 */

//Layouts
import LayoutLogin from './views/layouts/LayoutLogin.vue'
import LayoutFront from './views/layouts/LayoutFront.vue'

//Login : Auth
// import Login from './views/auth/Login.vue'
import Register from './views/auth/Register.vue'

// Error : Not Found page
import NotFoundPage from './views/errors/404.vue'

/*
 |--------------------------------------------------------------------------
 | Frontend Views
 |--------------------------------------------------------------------------|
 */

/*
 |--------------------------------------------------------------------------
 | Vins Pages
 |--------------------------------------------------------------------------|
 */


import Welcome from './views/admin/vins/Welcome.vue'
import Dashboard from './views/admin/vins/dashboard.vue'
import Home from './components/home.vue'
import patientsDetailForm from './views/admin/vins/patientsDetailForm.vue'
import adverseDrugReaction from './views/admin/vins/adversedrugreaction.vue'
import appointmentBook from './views/admin/vins/appointmentBook.vue'
import bloodSugarMonitoringChart from './views/admin/vins/bloodSugarMonitoringChart.vue'
import bloodTransfusionDetails from './views/admin/vins/bloodTransfusionForm.vue'
import briefOperativeNote from './views/admin/vins/briefOperativeNote.vue'
import nabhReport from './views/admin/vins/nabhReport.vue'
import codeBlueEvaluationForm from './views/admin/vins/codeBlueEvaluationForm.vue'
import completeNursingAssessment from './views/admin/vins/completeNursingAssessment.vue'
import counsellingForm from './views/admin/vins/counsellingForm.vue'
import cprFormat from './views/admin/vins/cprFormat.vue'
import cultureBiopsyForm from './views/admin/vins/cultureBiopsyForm.vue'
import dailyDietForm from './views/admin/vins/dailyDietForm.vue'
import dischargeGatepass from './views/admin/vins/dischargeGatepass.vue'
import dischargeSummary from './views/admin/vins/dischargeSummary.vue'
import doctorsDailyNotes from './views/admin/vins/doctorsDailyNotes.vue'
import surgicalSafetyChecklist from './views/admin/vins/surgicalSafetyChecklist.vue'
import LabSheet from './views/admin/vins/LabSheet.vue'
import NurseProgressNotes from './views/admin/vins/NurseProgressNotes.vue'
import NursingDutyOver from './views/admin/vins/NursingDutyOver.vue'
import NutritionalAssessmentForm from './views/admin/vins/NutritionalAssessmentForm.vue'
import NutritionalScreeningForm from './views/admin/vins/NutritionalScreeningForm.vue'
import OperativeDetailSheet from './views/admin/vins/OperativeDetailSheet.vue'
import PatientAdmissionSheet from './views/admin/vins/PatientAdmissionSheet.vue'
import PatientDietRecord from './views/admin/vins/PatientDietRecord.vue'
import PatientValuableForm from './views/admin/vins/PatientValuableForm.vue'
import PhysiotherapyAssessment from './views/admin/vins/PhysiotherapyAssessment.vue'
import RestraintAdministration from './views/admin/vins/RestraintAdministration.vue'
import planOfCare from './views/admin/vins/planOfCare.vue'
import preAnaesthesiaCheckupForm from './views/admin/vins/preAnaesthesiaCheckupForm.vue'
import postAnaesthesiaEvaluation from './views/admin/vins/postAnaesthesiaEvaluation.vue'
import preAngiographyAngioplastyChecklist from './views/admin/vins/preAngiographyAngioplastyChecklist.vue'
import preOTChecklist from './views/admin/vins/PreOTChecklist.vue'
import provisionalDischargeSummary from './views/admin/vins/ProvisionalDischargeSummary.vue'
import radiologyRequisition from './views/admin/vins/radiologyRequisition.vue'
import transferChecklistForNurses from './views/admin/vins/transferChecklistForNurses.vue'
import transfusionReactionForm from './views/admin/vins/transfusionReactionForm.vue'
import ventilatorChargeSheet from './views/admin/vins/ventilatorChargeSheet.vue'
import wardProcedureRecord from './views/admin/vins/wardProcedureRecord.vue'
import doctorsHandover from './views/admin/vins/doctorsHandover.vue'
import drugRequisition from './views/admin/vins/drugRequisition.vue'
import erObservation from './views/admin/vins/erObservation.vue'
import gatePass from './views/admin/vins/gatePass.vue'
import glassGow from './views/admin/vins/glassGow.vue'
import historyForm from './views/admin/vins/historyForm.vue'
import informationForm from './views/admin/vins/informationForm.vue'
import investigationSheet from './views/admin/vins/investigationSheet.vue'
import intraoperativeEventManagement from './views/admin/vins/intraoperativeEventManagement.vue'
import infusionTherapyChart from './views/admin/vins/infusionTherapyChart.vue'
// import doctorsInitialAssessment from './views/admin/vins/doctorsInitialAssessment.vue'
import centralLineBundleChecklist from './views/admin/vins/centralLineBundleChecklist.vue'
import MARFlowSheet from './views/admin/vins/MARFlowSheet.vue'
import opdForm from './views/admin/vins/opd_form.vue'

import NewUser from './views/admin/vins/newUser'

import vascularExamination from './views/admin/vins/vascularExamination.vue'
import neuroExamination from './views/admin/vins/neuroExamination.vue'

import investigations from './components/investigations.vue'

Vue.use(VueRouter)

const routes = [


    /*
     |--------------------------------------------------------------------------
     | EuroSport Route File
     |--------------------------------------------------------------------------|
     */
     /*
     |--------------------------------------------------------------------------
     | Frontend Routes
     |--------------------------------------------------------------------------|
     */

    {
        path: '/', component: LayoutFront,
        children: [
            {
                path: '/',
                component: Dashboard,
                meta: { requiresAuth: true },
                name: 'home'

            },
            {
                path: '/dashboard',
                component: Dashboard,
                meta: { requiresAuth: true },
                name: 'dashboard'
            },
            {
                path: '/opd_form',
                component: opdForm,
                name: 'opd_form'
            },
                       // {
            //     path: '/doctorsInitialAssessment',
            //     component: doctorsInitialAssessment,
            //     name: 'doctorsInitialAssessment'
            // },
            {
                path: '/patients_detail_form',
                component: patientsDetailForm,
                meta: { requiresAuth: true },
                name: 'patients_detail_form'
            },
            {
                path: '/adverseDrugReaction',
                component: adverseDrugReaction,
                meta: { requiresAuth: true },
                name: 'adverseDrugReaction'
            },
            {
                path: '/appointmentBook',
                component: appointmentBook,
                meta: { requiresAuth: true },
                name: 'appointmentBook'
            },
            {
                path: '/bloodSugarMonitoringChart',
                component: bloodSugarMonitoringChart,
                meta: { requiresAuth: true },
                name: 'bloodSugarMonitoringChart'
            },
            {
                path: '/bloodTransfusionDetails',
                component: bloodTransfusionDetails,
                meta: { requiresAuth: true },
                name: 'bloodTransfusionDetails'
            },
            {
                path: '/briefOperativeNote',
                component: briefOperativeNote,
                meta: { requiresAuth: true },
                name: 'briefOperativeNote'
            },
            {
                path: '/nabhReport',
                component: nabhReport,
                meta: { requiresAuth: true },
                name: 'nabhReport'
            },
            {
                path: '/codeBlueEvaluationForm',
                component: codeBlueEvaluationForm,
                meta: { requiresAuth: true },
                name: 'codeBlueEvaluationForm'
            },
            {
                path: '/completeNursingAssessment',
                component: completeNursingAssessment,
                meta: { requiresAuth: true },
                name: 'completeNursingAssessment'
            },
            {
                path: '/counsellingForm',
                component: counsellingForm,
                meta: { requiresAuth: true },
                name: 'counsellingForm'
            },
            {
                path: '/cprFormat',
                component: cprFormat,
                meta: { requiresAuth: true },
                name: 'cprFormat'
            },
            {
                path: '/cultureBiopsyForm',
                component: cultureBiopsyForm,
                meta: { requiresAuth: true },
                name: 'cultureBiopsyForm'
            },
            {
                path: '/dailyDietForm',
                component: dailyDietForm,
                meta: { requiresAuth: true },
                name: 'dailyDietForm'
            },
            {
                path: '/dischargeGatepass',
                component: dischargeGatepass,
                meta: { requiresAuth: true },
                name: 'dischargeGatepass'
            },
            {
                path: '/dischargeSummary',
                component: dischargeSummary,
                meta: { requiresAuth: true },
                name: 'dischargeSummary'
            },
            {
                path: '/doctorsDailyNotes',
                component: doctorsDailyNotes,
                meta: { requiresAuth: true },
                name: 'doctorsDailyNotes'
            },
            {
                path: '/surgicalSafetyChecklist',
                component: surgicalSafetyChecklist,
                meta: { requiresAuth: true },
                name: 'surgicalSafetyChecklist'
            },
            {
                path: '/LabSheet',
                component: LabSheet,
                meta: { requiresAuth: true },
                name: 'LabSheet'
            },
            {
                path: '/NurseProgressNotes',
                component: NurseProgressNotes,
                meta: { requiresAuth: true },
                name: 'NurseProgressNotes'
            },
            {
                path: '/NursingDutyOver',
                component: NursingDutyOver,
                meta: { requiresAuth: true },
                name: 'NursingDutyOver'
            },
            {
                path: '/NewUser',
                component: NewUser,
                meta: { requiresAuth: true },
                name: 'NewUser'
            },
            {
                path: '/NutritionalAssessmentForm',
                component: NutritionalAssessmentForm,
                meta: { requiresAuth: true },
                name: 'NutritionalAssessmentForm'
            },
            {
                path: '/NutritionalScreeningForm',
                component: NutritionalScreeningForm,
                meta: { requiresAuth: true },
                name: 'NutritionalScreeningForm'
            },
            {
                path: '/OperativeDetailSheet',
                component: OperativeDetailSheet,
                meta: { requiresAuth: true },
                name: 'OperativeDetailSheet'
            },
            {
                path: '/PatientAdmissionSheet',
                component: PatientAdmissionSheet,
                meta: { requiresAuth: true },
                name: 'PatientAdmissionSheet'
            },
            {
                path: '/PatientDietRecord',
                component: PatientDietRecord,
                meta: { requiresAuth: true },
                name: 'PatientDietRecord'
            },
            {
                path: '/PatientValuableForm',
                component: PatientValuableForm,
                meta: { requiresAuth: true },
                name: 'PatientValuableForm'
            },
            {
                path: '/PhysiotherapyAssessment',
                component: PhysiotherapyAssessment,
                meta: { requiresAuth: true },
                name: 'PhysiotherapyAssessment'
            },
            {
                path: '/RestraintAdministration',
                component: RestraintAdministration,
                meta: { requiresAuth: true },
                name: 'RestraintAdministration'
            },
            {
                path: '/plan_of_care',
                component: planOfCare,
                meta: { requiresAuth: true },
                name: 'plan_of_care'
            },

            {
                path: '/pre_anaesthesia_checkup_form',
                component: preAnaesthesiaCheckupForm,
                meta: { requiresAuth: true },
                name: 'pre_anaesthesia_checkup_form'
            },

            {
                path: '/post_anaesthesia_evaluation',
                component: postAnaesthesiaEvaluation,
                meta: { requiresAuth: true },
                name: 'post_anaesthesia_evaluation'
            },

            {
                path: '/pre_angiography_angioplasty_checklist',
                component: preAngiographyAngioplastyChecklist,
                meta: { requiresAuth: true },
                name: 'pre_angiography_angioplasty_checklist'
            },

            {
                path: '/pre_OT_checklist',
                component: preOTChecklist,
                meta: { requiresAuth: true },
                name: 'pre_OT_checklist'
            },

            {
                path: '/provisional_discharge_summary',
                component: provisionalDischargeSummary,
                meta: { requiresAuth: true },
                name: 'provisional_discharge_summary'
            },

            {
                path: '/radiology_requisition',
                component: radiologyRequisition,
                meta: { requiresAuth: true },
                name: 'radiology_requisition'
            },

            {
                path: '/transfer_checklist_for_nurses',
                component: transferChecklistForNurses,
                meta: { requiresAuth: true },
                name: 'transfer_checklist_for_nurses'
            },

            {
                path: '/transfusion_reaction_form',
                component: transfusionReactionForm,
                meta: { requiresAuth: true },
                name: 'transfusion_reaction_form'
            },


            {
                path: '/ventilator_charge_sheet',
                component: ventilatorChargeSheet,
                meta: { requiresAuth: true },
                name: 'ventilator_charge_sheet'
            },

            {
                path: '/ward_procedure_record',
                component: wardProcedureRecord,
                meta: { requiresAuth: true },
                name: 'ward_procedure_record'
            },
            {
                path: '/doctors_handover',
                component: doctorsHandover,
                meta: { requiresAuth: true },
                name: 'doctors_handover'
            },
            {
                path: '/drug_requisition',
                component: drugRequisition,
                meta: { requiresAuth: true },
                name: 'drug_requisition'
            },
            {
                path: '/er_observation',
                component: erObservation,
                meta: { requiresAuth: true },
                name: 'er_observation'
            },
            {
                path: '/gate_pass',
                component: gatePass,
                meta: { requiresAuth: true },
                name: 'gate_pass'
            },
            {
                path: '/glass_gow',
                component: glassGow,
                meta: { requiresAuth: true },
                name: 'glass_gow'
            },
            {
                path: '/history_form',
                component: historyForm,
                meta: { requiresAuth: true },
                name: 'history_form'
            },
            {
                path: '/information_form',
                component: informationForm,
                meta: { requiresAuth: true },
                name: 'information_form'
            },
            {
                path: '/investigation_sheet',
                component: investigationSheet,
                meta: { requiresAuth: true },
                name: 'investigation_sheet'
            },
            {
                path: '/intraoperativeEventManagement',
                component: intraoperativeEventManagement,
                meta: { requiresAuth: true },
                name: 'intraoperativeEventManagement'
            },
            {
                path: '/infusionTherapyChart',
                component: infusionTherapyChart,
                meta: { requiresAuth: true },
                name: 'infusionTherapyChart'
            },
            {
                path: '/centralLineBundleChecklist',
                component: centralLineBundleChecklist,
                meta: { requiresAuth: true },
                name: 'centralLineBundleChecklist'
            },
            {
                path: '/mar_flowsheet',
                component: MARFlowSheet,
                meta: { requiresAuth: true },
                name: 'mar_flowsheet'
            },
            {
                path: '/vascularExamination',
                component: vascularExamination,
                name: 'vascularExamination'
            },
            {
                path: '/neuroExamination',
                component: neuroExamination,
                name: 'neuroExamination'
            },
            {
                path: '/investigations',
                component: investigations,
                name: 'investigations'
            },



            // {
            //     path: '/schedule_results/:tournamentslug',
            //     component: FrontSchedule,
            //     name: 'front_schedule'
            // },

        ]
    },

   /* {
        path: '/', component: LayoutHorizontal,
        meta: { requiresAuth: true },
        children: [
            {
                path: '/',
                component: Welcome,
                name: 'welcome'
            },
        ]
    },*/

    // Admin Backend Routes For Tournaments
    {
        path: '/admin', component: LayoutLogin,
        meta: { requiresAuth: true },
        children: [
            {
                path: '/',
                component: Welcome,
                name: 'welcome'
            }
        ]
    },



     /*
     |--------------------------------------------------------------------------
     | Auth & Registration Routes
     |--------------------------------------------------------------------------|
    */

    {

        path: '/login', component: LayoutLogin,

    },

    // DEFAULT ROUTE
    {   path: '*', component : NotFoundPage }
]

const router = new VueRouter({
    routes,
    mode: 'history',
    linkActiveClass: 'active'
})

// router.beforeEach((to, from, next) => {

//     // If the next route is requires user to be Logged IN
//     if (to.matched.some(m => m.meta.requiresAuth)){

//         return AuthService.check().then(authenticated => {
//             if(!authenticated){
//                 return next({ path : '/login'})
//             }

//             return next()
//         })
//     }

//     return next()
// });

export default router
