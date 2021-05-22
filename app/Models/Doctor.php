<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'specialty',
        'region',
        'phone',
        'consultation_cost',
        'consultation_time',
        'max_Appointment_time',
    ];

    public function getMaxDate(){ 
        $nomber_months = $this['max_Appointment_time'];
        $date = now()->addMonths($nomber_months)->format('d-m-Y');;
        return $date;   
    }
}
