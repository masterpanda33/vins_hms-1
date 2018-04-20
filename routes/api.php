<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'auth'], function () {
    Route::post('login','AuthController@authenticate');
    Route::get('logout','AuthController@logout');
    Route::get('check','AuthController@check');


});
Route::get('password/reset/{token}', '\euro_hms\Api\Controllers\PasswordController@getReset');
Route::post('password/reset', '\euro_hms\Api\Controllers\PasswordController@postReset');
//Route::post('password/email', 'euro_hms\Api\Controllers\PasswordController@postEmail');
Route::get('/mlogin', '\euro_hms\Http\Controllers\Auth\ResetPasswordController@userMlogin');

$api = app('Dingo\Api\Routing\Router');


$api->version('v1',['middleware' => 'jwt.auth'], function ($api) {

     // for localization
    $locale = \Request::header('locale');

    if($locale != '') {
        App::setLocale($locale);
    }


    // TODO: Move Method from web to api for Mobile App
         $api->post('doctorsInitialAssessment/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('doctorsInitialAssessment.store');
         $api->post('patient/create', '\euro_hms\Api\Controllers\PatientsDetailFormController@store')->name('patient.create');
         $api->post('adverseDrugReaction/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('adverseDrugReaction.create');
         $api->post('appointmentBook/create', '\euro_hms\Api\Controllers\AppointmentBookController@store')->name('appointmentBook.create');
         $api->post('bloodSugarMonitoringChart/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('bloodSugarMonitoringChart.create');
         $api->post('bloodTransfusionDetails/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('bloodTransfusionDetails.create');
         $api->post('briefOperativeNote/create', '\euro_hms\Api\Controllers\BriefOperativeNoteController@store')->name('briefOperativeNote.create');
         $api->post('testFile/create', '\euro_hms\Api\Controllers\TestFileController@store')->name('testFile.create');
         $api->post('codeBlueEvaluationForm/create', '\euro_hms\Api\Controllers\CodeBlueEvaluationFormController@store')->name('codeBlueEvaluationForm.create');
         $api->post('completeNursingAssessment/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('completeNursingAssessment.create');
         $api->post('cprFormat/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('cprFormat.create');
         $api->post('cultureBiopsyForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('cultureBiopsyForm.create');
         $api->post('dailyDietForm/create', '\euro_hms\Api\Controllers\DailyDietFormController@store')->name('dailyDietForm.create');
         $api->post('dischargeGatepass/create', '\euro_hms\Api\Controllers\DischargeGatepassController@store')->name('dischargeGatepass.create');
         $api->post('dischargeSummary/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('dischargeSummary.create');
         $api->post('doctorsDailyNotes/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('doctorsDailyNotes.create');
         $api->post('surgicalSafetyChecklist/create', '\euro_hms\Api\Controllers\SurgicalSafetyChecklistController@store')->name('surgicalSafetyChecklist.create');
         $api->post('LabSheet/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('LabSheet.create');
         $api->post('NurseProgressNotes/create','\euro_hms\Api\Controllers\NurseProgressNotesController@store')->name('NurseProgressNotes.create');
         $api->post('NursingDutyOver/create','\euro_hms\Api\Controllers\NursingDutyOverController@store')->name('NursingDutyOver.create');
         $api->post('NutritionalAssessmentForm/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('NutritionalAssessmentForm.create');
         $api->post('OperativeDetailSheet/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('OperativeDetailSheet.create');
         $api->post('PatientAdmissionSheet/create','\euro_hms\Api\Controllers\PatientAdmissionSheetController@store')->name('PatientAdmissionSheet.create');
         $api->post('PatientDietRecord/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('PatientDietRecord.create');
         $api->post('PatientValuableForm/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('PatientValuableForm.create');
         $api->post('PhysiotherapyAssessment/create','\euro_hms\Api\Controllers\PhysiotherapyAssessmentController@store')->name('PhysiotherapyAssessment.create');
         $api->post('RestraintAdministration/create','\euro_hms\Api\Controllers\RestraintAdministrationController@store')->name('RestraintAdministration.create');
         $api->post('planOfCare/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('planOfCare.create');
         $api->post('preAnaesthesiaCheckupForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('preAnaesthesiaCheckupForm.create');
         $api->post('postAnaesthesiaEvaluation/create', '\euro_hms\Api\Controllers\postAnaesthesiaEvaluationController@store')->name('postAnaesthesiaEvaluation.create');
         $api->post('preAngiographyAngioplastyChecklist/create', '\euro_hms\Api\Controllers\PreAngiographyAngioplastyChecklistController@store')->name('preAngiographyAngioplastyChecklist.create');
         $api->post('preOTChecklist/create', '\euro_hms\Api\Controllers\PreOTChecklistController@store')->name('preOTChecklist.create');
         $api->post('provisionalDischargeSummary/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('provisionalDischargeSummary.create');
         $api->post('radiologyRequisition/create', '\euro_hms\Api\Controllers\RadiologyRequisitionController@store')->name('radiologyRequisition.create');
         $api->post('transferChecklistForNurses/create', '\euro_hms\Api\Controllers\TransferChecklistForNursesontroller@store')->name('transferChecklistForNurses.create');
         $api->post('transfusionReactionForm/create', '\euro_hms\Api\Controllers\TransfusionReactionFormController@store')->name('transfusionReactionForm.create');
         $api->post('ventilatorChargeSheet/create', '\euro_hms\Api\Controllers\VentilatorChargeSheetController@store')->name('ventilatorChargeSheet.create');
         $api->post('wardProcedureRecord/create', '\euro_hms\Api\Controllers\WardProcedureRecordController@store')->name('wardProcedureRecord.create');
         $api->post('doctorsHandover/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('doctorsHandover.create');
         $api->post('investigationSheet/create', '\euro_hms\Api\Controllers\InvestigationSheetController@store')->name('investigationSheet.create');
         $api->post('glassGow/create', '\euro_hms\Api\Controllers\GlassGowController@store')->name('glassGow.create');
         $api->post('infusionTherapyChart/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('infusionTherapyChart.create');
         $api->post('erObservation/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('erObservation.create');
         $api->post('gatePass/create', '\euro_hms\Api\Controllers\GatePassController@store')->name('gatePass.create');
         $api->post('historyForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('historyForm.create');
         $api->post('informationForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('informationForm.create');
         $api->post('durgRequisition/create', '\euro_hms\Api\Controllers\DurgRequisitionController@store')->name('durgRequisition.create');
         $api->post('intraoperativeEventManagement/create', '\euro_hms\Api\Controllers\IntraoperativeEventManagementController@store')->name('intraoperativeEventManagement.create');
         $api->post('counsellingForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('counsellingForm.create');
         $api->post('centralLineBundleChecklist/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('centralLineBundleChecklist.create');
        $api->post('patient/getDetails/{id}', '\euro_hms\Api\Controllers\PatientsDetailFormController@getDetails');
        $api->get('patient/getAll', '\euro_hms\Api\Controllers\PatientsDetailFormController@getAllPatientName');
        $api->post('user/create', '\euro_hms\Api\Controllers\UserController@createUser')->name('create.users'); 
        $api->post('user/getDetails', '\euro_hms\Api\Controllers\UserController@getUserDetailsByID')->name('user.getUserDetails');
        $api->post('opd/saveData', '\euro_hms\Api\Controllers\opdController@saveData'); 
        

});
