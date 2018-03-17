<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class InformationForm extends Model
{
  protected $table = "information_form";

  protected $fillable=[
    'date',
    'time',
    '_00',
    '_01',
    'major_illness',
    '_02',
    '_03',
    '_04',
    '_05',
    '_06',
    '_07',
    '_08',
    '_09',
    'operated_in_past',
    '_10',
    '_10a',
    '_10b',
    'taking_drugs_at_present',
    '_11',
    'name_of_patient',
    'name_of_relative',
  ];
}
