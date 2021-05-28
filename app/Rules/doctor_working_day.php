<?php

namespace App\Rules;
use App\Models\Calendar;
use Attribute;
use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class doctor_working_day implements Rule
{
    private $error_day;
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
        $date = new Carbon($value);
        $chosen_day = $date->format('l');
        $this->error_day = $chosen_day;
        
        $calendar = Calendar::where('doctor_id', '=', $this->doctor_id)
            ->select($chosen_day)->get();


        return $calendar[0]->getAttribute($chosen_day);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {

        return 'The doctor does not work in '. $this->error_day;
    }
}


