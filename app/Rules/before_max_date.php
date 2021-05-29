<?php

namespace App\Rules;
use App\Models\Doctor;
use Illuminate\Contracts\Validation\Rule;

class before_max_date implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($doctor_id)
    {
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
        $doctors = Doctor::where('id', $this->doctor_id)->get();
        $date = $doctors[0]->getMaxDate();
        return (strtotime($value) < strtotime($date));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        $doctors = Doctor::where('id', $this->doctor_id)->get();
        $date = $doctors[0]->getMaxDate();
        return "Ce médecin n'accepte pas les rendez-vous après le ".$date. ". Veuillez choisir une date plus proche
        ";
    }
}
