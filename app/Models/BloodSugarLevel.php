<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodSugarLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'level_before',
        'interpretation_before',
        'level_after',
        'interpretation_after',
        'symptom',
        'patient_id',
    ];
    
    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id');
    }

}
