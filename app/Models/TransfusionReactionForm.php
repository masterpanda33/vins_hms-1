<?php

namespace euro_hms\models;

use Illuminate\Database\Eloquent\Model;

class TransfusionReactionForm extends Model
{
    //
        protected $table = 'transfusion_reaction_form';

        protected $fillable=[
              'heap_no',
              's_no',
              'blood_bage_no',
              'quantity',
              'group',
              'date',
              'date_issue',
              'time_issue',
              'matched_by',
              'com_name',
              'age',
              'ward_no',
              'med_officer',
              '_no',
              'name_00',
              'med_officer_00',
              'time_00',
              'chill_temp',
              'finish_time',
              'bp_fall',
              'drop_rate',
              'urticaria',
              'notice',
              'chest_pain',
              'measures',
              'dyspnoea_shock',
              'anphytaxix',
              'rel_cmnt',
              'sign_00',
        ];
}
