<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_date',
        'note',
        'status',
        'patient_id',
    ];

    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id');
    }
}
