<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Work_time;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $work_times = auth()->user()->doctor->calendar->work_times;


        return view('doctor.calendar', [
            'work_times' => $work_times
        ]);
    }

    public function set_working_days()
    {
        return view('doctor.set_working_days');
    }

    public function store_working_days(Request $request)
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

    public function add_working_times()
    {
        return view('doctor.add_working_times');
    }

    public function store_wroking_times(Request $request)
    {
        
        Work_time::create([
            'calendar_id' => auth()->user()->doctor->calendar->id,
            'day' => $request->day,
            'start' => $request->start,
            'end'=> $request->end
        ]);

        // dd("done");
    }
}
