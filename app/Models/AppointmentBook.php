<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentBook extends Model
{
  protected $table = "appointment_book";

  protected $fillable = [
    'date',
    'name_of_patient',
    'contact_no',
    'appointment_time',
    'consultant_name',
  ];
}
