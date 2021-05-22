<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        return view('doctor.calendar');
    }

    public function set_wroking_days()
    {
        return view('doctor.set_wroking_days');
    }

    public function store_wroking_days(Request $request)
    {
        $data =  $request->input();
        $working_days = [];
        foreach ($data as $key => $item) {
            if($key != '_token'){
                array_push($working_days, $key);
            }
        }

        Calendar::create([
            'doctor_id' => auth()->user()->doctor->id,
            'first_name' => $request->first_name,
            'monday' => in_array('monday', $working_days),
            'tuesday' => in_array('tuesday', $working_days),
            'wednesday' => in_array('wednesday', $working_days),
            'thursday' => in_array('thursday', $working_days),
            'friday' => in_array('friday', $working_days),
            'saturday' => in_array('saturday', $working_days),
            'sunday' => in_array('sunday', $working_days),
        ]);

        dd("done");
    }
}
