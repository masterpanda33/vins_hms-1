<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class formsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('forms')->truncate();

        DB::table('forms')->insert([

          ['name' => 'doctorsInitialAssessment',
           'type' => 'emergency',
           'used_by' => 'ward_doctor'],

          ['name' => 'erObservation',
           'type' => 'emergency',
           'used_by' => 'ward_doctor'],

          ['name' => 'patientsDetailsForm',
           'type' => 'preAdmission',
           'used_by' => 'patient_relative'],

          ['name' => 'informationForm',
           'type' => 'preAdmission',
           'used_by' => 'patient_relative'],

          ['name' => 'patientValuablesForm',
           'type' => 'preAdmission',
           'used_by' => 'patient_relative'],

          ['name' => 'patientAdmissionSheet',
           'type' => 'preAdmission',
           'used_by' => NULL],

          ['name' => 'counsellingForm',
           'type' => '24hours',
           'used_by' => NULL],

          ['name' => 'completeNursingAssessment',
           'type' => '24hours',
           'used_by' => 'nurse'],

          ['name' => 'nutritionalAssessmentForm',
           'type' => '24hours',
           'used_by' => 'nurse'],

          ['name' => 'planOfCare',
           'type' => '24hours',
           'used_by' => 'doctor_consultant'],

          ['name' => 'historyForm',
           'type' => '24hours',
           'used_by' => 'ward_doctor'],

          ['name' => 'labSheet',
           'type' => 'operation_surgery',
           'used_by' => 'nurse'],

          ['name' => 'bloodTransfusionForm',
           'type' => 'operation_surgery',
           'used_by' => 'ward_doctor'],

          ['name' => 'cprFormat',
           'type' => 'operation_surgery',
           'used_by' => 'doctor_consultant'],

          ['name' => 'codeBlueEvaluationForm',
           'type' => 'operation_surgery',
           'used_by' => 'doctor_consultant'],

          ['name' => 'operativeDetailSheet',
           'type' => 'operation_surgery',
           'used_by' => 'doctor_consultant'],

          ['name' => 'investigationSheet',
           'type' => 'operation_surgery',
           'used_by' => ''],

          ['name' => 'briefOperativeNote',
           'type' => 'operation_surgery',
           'used_by' => 'doctor_consultant'],

          ['name' => 'surgicalSafetyChecklist',
           'type' => 'operation_surgery',
           'used_by' => 'doctor_consultant'],

          ['name' => 'preAnesthesiaForm',
           'type' => 'operation_surgery',
           'used_by' => NULL],

          ['name' => 'preOtChecklist',
           'type' => 'operation_surgery',
           'used_by' => 'doctor_consultant'],

          ['name' => 'postAnesthesiaEvaluation',
           'type' => 'operation_surgery',
           'used_by' => 'doctor_consultant'],

          ['name' => 'intraOperativeEventManagement',
           'type' => 'operation_surgery',
           'used_by' => 'doctor_consultant'],

          ['name' => 'marFlowSheet',
           'type' => 'daily_general',
           'used_by' => 'ward_doctor'],

          ['name' => 'infusionTherapyChart',
           'type' => 'daily_general',
           'used_by' => 'nurse'],

          ['name' => 'dailyDietForm',
           'type' => 'daily_general',
           'used_by' => 'nurse'],

          ['name' => 'doctorsDailyNotes',
           'type' => 'daily_general',
           'used_by' => 'ward_doctor'],

          ['name' => 'transferChecklistForNurses',
           'type' => 'daily_general',
           'used_by' => 'nurse'],

          ['name' => 'wardProcedureRecord',
           'type' => 'daily_general',
           'used_by' => 'ward_doctor'],

          ['name' => 'nursingDutyOver',
           'type' => 'daily_general',
           'used_by' => 'nurse'],

          ['name' => 'glassgowForm',
           'type' => 'daily_general',
           'used_by' => 'nurse'],

          ['name' => 'ventilatorChargeSheet',
           'type' => 'daily_general',
           'used_by' => 'nurse'],

          ['name' => 'bloodTransfusionForm',
           'type' => 'daily_general',
           'used_by' => 'ward_doctor'],

          ['name' => 'doctorsHandover',
           'type' => 'daily_general',
           'used_by' => 'ward_doctor'],

          ['name' => 'patientDietRecord',
           'type' => 'daily_general',
           'used_by' => 'dietician'],

          ['name' => 'adverseDrugReaction',
           'type' => 'daily_general',
           'used_by' => 'doctor_consultant'],

          ['name' => 'bloodSugarMonitoringChart',
           'type' => 'daily_general',
           'used_by' => 'ward_doctor'],

          ['name' => 'transfusionReaction',
           'type' => 'daily_general',
           'used_by' => 'ward_doctor'],

          ['name' => 'restraintAdministration',
           'type' => 'daily_general',
           'used_by' => 'doctor_consultant'],

          ['name' => 'monitoringForModerateSedation',
           'type' => 'daily_general',
           'used_by' => NULL],

          ['name' => 'physiotherapyAssessment',
           'type' => 'daily_general',
           'used_by' => ''],

          ['name' => 'dischargeGatepass',
           'type' => 'discharge',
           'used_by' => NULL],

          ['name' => 'dischargeSummary',
           'type' => 'discharge',
           'used_by' => ''],

          ['name' => 'provisionalDischargeSummary',
           'type' => 'discharge',
           'used_by' => NULL],

          ['name' => 'cultureBiopsyForm',
           'type' => 'other',
           'used_by' => 'doctor_consultant'],

          ['name' => 'radiologyRequisitionForm',
           'type' => 'other',
           'used_by' => 'doctor_consultant'],

          ['name' => 'peripheralLineBundleChecklist',
           'type' => 'other',
           'used_by' => NULL],

          ['name' => 'appointmentBook',
           'type' => 'other',
           'used_by' => 'doctor_consultant'],

          ['name' => 'checklist',
           'type' => 'other',
           'used_by' => NULL],

          ['name' => 'preAngiographyAngioplastyChecklist',
           'type' => 'other',
           'used_by' => NULL],

          ['name' => 'folleysCathetherChecklist',
           'type' => 'other',
           'used_by' => NULL],

          ['name' => 'centralLineAuditChecklist',
           'type' => 'other',
           'used_by' => NULL],

          ['name' => 'wapAuditChecklist',
           'type' => 'other',
           'used_by' => NULL],

          ['name' => 'nursesProgressReport',
           'type' => 'other',
           'used_by' => 'nurse'],

          ['name' => 'drugRequisition',
           'type' => 'other',
           'used_by' => NULL],

          ['name' => 'nutritionalScreeningForm',
           'type' => 'other',
           'used_by' => 'nurse'],

          ['name' => 'gatePass',
           'type' => 'other',
           'used_by' => NULL],





        ]);
    }
}
