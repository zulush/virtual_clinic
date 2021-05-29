<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'temperature',
        'weight',
        'blood_pressure',
        'details'
    ];

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }
}
