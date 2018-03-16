<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class IpdDetails extends Model
{
   protected $table = 'ipd_details';

    protected $fillable=[
      'patient_id',
      'admit_datetime',
      'discharge_datetime',
    ];

	public function patientDetails()
    {
        return $this->belongsTo('euro_hms\Models\PatientDetailsForm','patient_id');
    }
}
