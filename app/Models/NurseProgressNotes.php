<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class NurseProgressNotes extends Model
{
    protected $table = "nurse_progress_notes";

    protected $fillable = [
      'date',
      'time',
      'progress',
      'staff_name'
    ];
}
