<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class PatientDetailsForm extends Model
{
    protected $table = 'patient_details';

    protected $fillable=[
      'date',
      'time',
      'first_name',
      'middle_name',
      'last_name',
      'dob',
      'gender',
      'address',
      'ph_no',
      'mob_no',
      'references',
      'consultant',
      'case_type',
    ];

      public function getIpdDetails()
      {
          return $this->hasMany('euro_hms\Models\IpdDetails');
      }
}
