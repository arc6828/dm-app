<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'sex',
        'date_of_birth',
        'dm_type',
        'drug_allergy',
        'drug',
        'user_id',
    ];
}
