<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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

    public function calendar()
    {
        return $this->hasOne(Calendar::class)->ofMany([
            
        ], function ($query) {
            $query->latest('created_at')->first();
        });
    }

    public function hasCalendar()
    {
        return Calendar::where('doctor_id', $this->id)->get()->count();
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
