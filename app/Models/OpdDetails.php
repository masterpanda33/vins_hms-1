<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class OpdDetails extends Model
{
    protected $table = 'opd_details';

    protected $fillable=[
      'patient_id',
      'uhid_no',
      'admit_datetime',
      'discharge_datetime',
    ];

	public function patientDetails()
    {
        return $this->belongsTo('euro_hms\Models\PatientDetailsForm','patient_id');
    }
}
