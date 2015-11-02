<?php

namespace eppo;

use Illuminate\Database\Eloquent\Model;

class PrescriptionItem extends Model
{
    protected $fillable = [
    'ppo_item_id',
    'ppo_section_id',
    'lucode_id',
    'medication_id',
    'medication_name',
    'medication_common_instruction',
    'dose_base',
    'dose_percentage',
    'dose_calculation_type_id',
    'dose_result',
    'dose_unit_id',
    'dose_route_id',
    'instruction',
    'is_instruction_input',
    'instruction_input',
    'start_date',
    'is_frequency_input',
    'frequency',
    'is_duration_input',
    'duration',
    'is_dose_notation',
    'is_frequency_notation',
    'is_mitte_input',
    'is_repeat_input',
    'mitte',
    'repeat',
    'mitte_unit_id',
    ];
    public function PpoItem()
    {
        return $this->belongsTo('eppo\PpoItem');
    }
    public function medication()
    {
        return $this->belongsTo('eppo\Medication');
    }
    public function lucode()
    {
        return $this->belongsTo('eppo\Lucode');
    }
}
