<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class IntraoperativeEventManagement extends Model
{
    protected $table = "intraoperative_event_management";

    protected $fillable=[
      'event_01',
      'management_01',
      'event_02',
      'management_02',
      'event_03',
      'management_03',
      'event_04',
      'management_04',
      'event_05',
      'management_05',
      'event_06',
      'management_06',
      'remarks',
    ];
}
