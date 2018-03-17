<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class NutritionalScreeningForm extends Model
{
  protected $table = "nutritional_screening_form";

  protected $fillable = [
    'type_of_diet',
    'date_of_screening',
    'weight_loss',
    'emaciated',
    'mental_orientation',
    'mode_of_feeding',
    'food_to_be_avoided',
    'nursing_care_plan',
    'assessment_done_by',
    'date_nursing',
    'time_nursing',
  ];
}
