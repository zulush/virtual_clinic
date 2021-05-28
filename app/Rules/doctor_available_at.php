<?php

namespace App\Rules;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Contracts\Validation\Rule;

class doctor_available_at implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($chosen_date, $doctor_id)
    {
        $this->chosen_date = $chosen_date;
        $this->doctor_id = $doctor_id;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $number_of_appoitment = Appointment::where('time', $value)
            ->where('date', $this->chosen_date)
            ->where('doctor_id', $this->doctor_id)
            ->count();
        $consultation_time = Doctor::where('id', $this->doctor_id)
            ->select('consultation_time')
            ->get();
        $consultation_time = $consultation_time[0]->consultation_time;
        
        $availabale = ((60 - $consultation_time * $number_of_appoitment) >= $consultation_time);
        
        return $availabale;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The chosen time is taken, please chosen an other time and/or date.';
    }
}
