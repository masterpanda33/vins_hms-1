<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class DischargeGatepass extends Model
{
    //
    protected $table = 'discharge_gatepass';

    protected $fillable=[
      'patients_name',
      'room_details',
      'dr_name',
      'address',
      'patients_file',
      'contact_name',
      'contact_no',
      'bill_no',
      'doa',
      'discharge_sheet',
      'dod',
      'remarks',
    ];
}
