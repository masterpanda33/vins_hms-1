<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class BriefOperativeNote extends Model
{
    //
    protected $table = 'brief_operative_note';

    protected $fillable=[
      'briefoperativenote',
      'post_operative_clinical_status',
      'post_operative_orders',
    ];
}
