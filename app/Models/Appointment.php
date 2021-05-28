<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'date',
        'time',
        'reason',
        'valid'
    ];


    public function getPatient(){
        $patient_array = User::where("id", $this->patient_id)->get();
        $patient = $patient_array[0];
        return $patient;
    }

}
