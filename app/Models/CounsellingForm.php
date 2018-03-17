<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class CounsellingForm extends Model
{
    protected $table="counselling_form";

    protected $fillable = [
      'date',
      'time',
      'counsellor',
      'relatives_name',
      'remarks',
    ];
}
