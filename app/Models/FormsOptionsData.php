<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class FormsOptionsData extends Model
{
        protected $table = 'forms_options_data';

    protected $fillable=[
    	'form_id',
      	'patient_id',
      	'ipd_no',
      	'form_key',
      	'form_value',
    ];
}
