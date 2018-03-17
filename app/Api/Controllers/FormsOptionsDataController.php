<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\FormsOptionsData;
use euro_hms\Models\Forms;
use euro_hms\Api\Repositories\FormOptionsRepository;

use DB;
use Carbon\Carbon;

class FormsOptionsDataController extends Controller
{

    public function __construct(FormOptionsRepository $formOptionRepo)
    {
        $this->formOptionRepo = $formOptionRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // echo "<pre>";print_r($request->all());echo "</pre>";
        // dd($request->all());
        $data = $request->all()['resData'];
        $resultData = '';
        // dd($data);
        if($data['type'] == 'labSheet'){
            $resultData = $this->formOptionRepo->storeLabSheetData($data);
        }

        if($data['type'] == 'adverseDrugReaction'){
            $resultData = $this->formOptionRepo->storeAdverseDrugReactionData($data);
        }

        if($data['type'] == 'bloodSugarMonitoringChart'){
            $resultData = $this->formOptionRepo->storeBloodSugarMonitoringData($data);
        }

        if($data['type'] == 'doctorsInitialAssessment'){
            $resultData = $this->formOptionRepo->storeDoctorsInitialAssessmentData($data);
        }

        if($data['type'] == 'cultureBiopsyForm'){
            $resultData = $this->formOptionRepo->storeCultureBiopsyForm($data);
        }

        if($data['type'] == 'patientValuablesForm'){
            $resultData = $this->formOptionRepo->storePatientValuablesForm($data);
        }

        if($data['type'] == 'operativeDetailSheet'){
            $resultData = $this->formOptionRepo->storeOperativeDetailSheet($data);
        }

        if($data['type'] == 'bloodTransfusionForm'){
            $resultData = $this->formOptionRepo->storeBloodTransfusionForm($data);
        }

        if($data['type'] == 'completeNursingAssessment'){
            $resultData = $this->formOptionRepo->storeCompleteNursingAssessment($data);
        }

        if($data['type'] == 'dischargeSummary'){
            $resultData = $this->formOptionRepo->storeDischargeSummary($data);
        }

        if($data['type'] == 'provisionalDischargeSummary'){
            $resultData = $this->formOptionRepo->storeProvisionalDischargeSummary($data);
        }

        if($data['type'] == 'historyForm'){
            $resultData = $this->formOptionRepo->storeHistoryForm($data);
        }

        if($data['type'] == 'doctorsDailyNotes'){
            $resultData = $this->formOptionRepo->storeDoctorsDailyNotes($data);
        }

        if($data['type'] == 'cprFormat'){
            $resultData = $this->formOptionRepo->storeCprFormat($data);
        }

        if($data['type'] == 'infusionTherapyChart'){
            $resultData = $this->formOptionRepo->storeInfusionTherapyChart($data);
        }

        if($data['type'] == 'nutritionalAssessmentForm'){
          $resultData = $this->formOptionRepo->storeNutritionalAssessmentFormData($data);
        }

        if($data['type'] == 'erObservation'){
          $resultData = $this->formOptionRepo->storeERObservationData($data);
        }

        if($data['type'] == 'centralLineBundleChecklist'){
          $resultData = $this->formOptionRepo->storeCentralLineBundleChecklist($data);
        }

        if($data['type'] == 'doctorsHandover'){
          $resultData = $this->formOptionRepo->storeDoctorsHandover($data);
        }

        if($data['type'] == 'preAnaesthesiaCheckupForm'){
          $resultData = $this->formOptionRepo->storePreAnaesthesiaCheckupForm($data);
        }

        if($data['type'] == 'counsellingForm'){
          $resultData = $this->formOptionRepo->storeCounsellingFormData($data);
        }

        if($data['type'] == 'planOfCare'){
          $resultData = $this->formOptionRepo->storePlanOfCareData($data);
        }

        if($data['type'] == 'informationForm'){
          $resultData = $this->formOptionRepo->storeInformationFormData($data);

        }

        if($data['type'] == 'patientDietRecord'){
          $resultData = $this->formOptionRepo->storePatientDietRecordData($data);

        }


        return ['status' => '200','data'=>$resultData, 'message' => 'Record Sucessfully created'];
        return $resultData;
        // return view('\index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
