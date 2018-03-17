<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;

class SurgicalSafetyChecklist extends Model
{
    protected $table = "surgical_safety_checklist";

    protected $fillable = [
      'identity',
      'site',
      'proced',
      'consent',
      'site_marked',
      'anesthesia_check',
      'all_monitors_functioning',
      'allergy',
      'airway_risk',
      'risk_blood_loss',
      'team_member_intro',
      'surgeon_nurse_confirm',
      'surgeon_reviews',
      'anesthesia_reviews',
      'nursing_reviews',
      'antibiotic_given',
      'essential_imaging',
      'pressure_points_padded',
      'confirm_patient_position',
      'anesthetist_airway_lines',
      'parts_prepped',
      'cautery',
      'patient_electrode_connected',
      'instruments_checked',
      'procedure_name_recorded',
      'instrument_count',
      'specimen_labelled',
      'equipment_problems',
      'surgeon_review_key_concepts',
      'anesthetist_confirm',
      'surgeon_name',
      'anesthetist_name',
    ];
}
