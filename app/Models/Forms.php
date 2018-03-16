<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $table = 'forms';

    protected $fillable=[
      'patient_id',
      'admit_datetime',
      'discharge_datetime',
    ];
}
