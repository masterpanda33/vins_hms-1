<?php

namespace euro_hms\Api\Repositories;

use euro_hms\Models\User;
use euro_hms\Models\FormsOptionsData;
use euro_hms\Models\Forms;

use DB;
use Hash;

class FormOptionsRepository {

    private function getFormId($data) {
        $form_result = Forms::where('name',$data['type'])->first();
        if($form_result) {
            return $form_result->id;
        } else {
            return '';
        }
    }
    public function storeLabSheetData($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                if($key == 'lab_investigation') {
                    $value = json_encode($value);
                }
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }

    public function storeAdverseDrugReactionData($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                if($key == 'otherMedication') {
                    $value = json_encode($value);
                }
                if($key == 'suspectedDrug') {
                    $value = json_encode($value);
                }
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }
    public function storeBloodSugarMonitoringData($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                if($key == 'monitoring') {
                    $value = json_encode($value);
                }
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }
    public function storeDoctorsInitialAssessmentData($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }
    public function storeCultureBiopsyForm($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }

    public function storePatientValuablesForm($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";
                if($key == 'valuables') {
                    $value = json_encode($value);
                }
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }
    public function storeOperativeDetailSheet($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";

                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }
    public function storeBloodTransfusionForm($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";
                if($key == 'transfusion') {
                    $value = json_encode($value);
                }
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }
    public function storeCompleteNursingAssessment($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }
    public function storeDischargeSummary($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }

    public function storeProvisionalDischargeSummary($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }
    public function storeHistoryForm($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }

    public function storeDoctorsDailyNotes($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";
                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }

    public function storeCprFormat($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";

                if($key == 'vitals') {
                    $value = json_encode($value);
                }


                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }

    public function storeInfusionTherapyChart($data)
    {
        $formId = $this->getFormId($data);
        // dd($formId);
        $formsRec = '';
        if($formId != '') {
            foreach ($data['form_data'] as $key => $value) {
                // echo "<pre>";print_r($key);echo "</pre>";

                if($key == 'infusion') {
                    $value = json_encode($value);
                }

                $formsRec = FormsOptionsData::create([
                    'form_id' => $formId,
                    'patient_id' => $data['patient_id'],
                    'ipd_no' => $data['ipd_id'],
                    'form_key' => $key,
                    'form_value' => $value
                ]);
            }
        }
        return $formsRec;
    }

    public function storeNutritionalAssessmentFormData($data)
    {
      $formsRec = '';

      $formId = $this->getFormId($data);
      // dd($data);

      if($formId != '') {
          foreach ($data['form_data'] as $key => $value) {
              // echo "<pre>";print_r($key);echo "</pre>";
              $formsRec = FormsOptionsData::create([
                  'form_id' => $formId,
                  'patient_id' => $data['patient_id'],
                  'ipd_no' => $data['ipd_id'],
                  'form_key' => $key,
                  'form_value' => $value
              ]);
          }
      }
      return $formsRec;
    }

    public function storePreAnaesthesiaCheckupForm($data)
    {
      $formsRec = '';

      $formId = $this->getFormId($data);
      // dd($data);

      if($formId != '') {
          foreach ($data['form_data'] as $key => $value) {
              // echo "<pre>";print_r($key);echo "</pre>";
              $formsRec = FormsOptionsData::create([
                  'form_id' => $formId,
                  'patient_id' => $data['patient_id'],
                  'ipd_no' => $data['ipd_id'],
                  'form_key' => $key,
                  'form_value' => $value
              ]);
          }
      }
      return $formsRec;
    }

    public function storeCentralLineBundleChecklist($data)
    {
      $formsRec = '';

      $formId = $this->getFormId($data);
       // dd($data);
       // dd($data['form_data']);

      if($formId != '') {
          foreach ($data['form_data'] as $key => $value) {
              $formsRec = FormsOptionsData::create([
                  'form_id' => $formId,
                  'patient_id' => $data['patient_id'],
                  'ipd_no' => $data['ipd_id'],
                  'form_key' => $key,
                  'form_value' => $value
              ]);
          }
      }
      return $formsRec;
    }

    public function storeDoctorsHandover($data)
    {
      $formsRec = '';

      $formId = $this->getFormId($data);

      if($formId != '') {
          foreach ($data['form_data'] as $key => $value) {
              $formsRec = FormsOptionsData::create([
                  'form_id' => $formId,
                  'patient_id' => $data['patient_id'],
                  'ipd_no' => $data['ipd_id'],
                  'form_key' => $key,
                  'form_value' => $value
              ]);
          }
      }
      return $formsRec;
    }

    public function storeERObservationData($data)
    {
      $formsrec = '';

      $formId = $this->getFormId($data);
      // dd($data);

      if($formId != '') {
          foreach ($data['form_data'] as $key => $value) {
              // echo "<pre>";print_r($key);echo "</pre>";
              if($key == 'vitals') {
                  $value = json_encode($value);
              }
              if($key == 'iv') {
                  $value = json_encode($value);
              }
              if($key == 'medication_administration') {
                  $value = json_encode($value);
              }
              $formsRec = FormsOptionsData::create([
                  'form_id' => $formId,
                  'patient_id' => $data['patient_id'],
                  'ipd_no' => $data['ipd_id'],
                  'form_key' => $key,
                  'form_value' => $value
              ]);
          }
      }
      return $formsRec;
    }


    public function storePlanOfCareData($data)
    {

      $formsRec = '';

      $formId = $this->getFormId($data);
      // dd($formId);
      if($formId != '') {
          foreach ($data['form_data'] as $key => $value) {
              if($key == 'Plan_Of_Care') {
                  $value = json_encode($value);
              }
              // echo "<pre>";print_r($key);echo "</pre>";
              $formsRec = FormsOptionsData::create([
                  'form_id' => $formId,
                  'patient_id' => $data['patient_id'],
                  'ipd_no' => $data['ipd_id'],
                  'form_key' => $key,
                  'form_value' => $value
              ]);
          }

      }
      return $formsRec;
    }

    public function storeInformationFormData($data)
    {

      $formsRec = '';

      $formId = $this->getFormId($data);
      // dd($formId);
      if($formId != '') {
          foreach ($data['form_data'] as $key => $value) {
              // echo "<pre>";print_r($key);echo "</pre>";
              $formsRec = FormsOptionsData::create([
                  'form_id' => $formId,
                  'patient_id' => $data['patient_id'],
                  'ipd_no' => $data['ipd_id'],
                  'form_key' => $key,
                  'form_value' => $value
              ]);
          }

      }
      return $formsRec;
    }











}
