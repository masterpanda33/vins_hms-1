<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class CodeBlueEvaluationForm extends Model
{
    //
    protected $table = 'codeblue_evaluation_form';

    protected $fillable=[
                'drill',
                'actual_code_blue',
                'identify_cardiac_arrest',
                'comments_00',
                'cpr_begin',
                'comments_01',
                'codeblue_announced',
                'comments_02',
                'nurse_lead',
                'comments_03',
                'chest_compression',
                'comments_04',
                'airway_established',
                'comments_05',
                'codeblue_team_arrive',
                'comments_06',
                'chest_compression_way',
                'comments_07',
                'able_to_locate',
                'comments_08',
                'documentation_complete',
                'comments_09',
          ];
}
