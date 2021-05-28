<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Notification;
use App\Models\Work_time;
use App\Models\Doctor;
use App\Models\Celndar;
use Illuminate\Http\Request;
use App\Rules\Unpassed;
use App\Rules\doctor_working_day;
use App\Rules\doctor_available_at;
use Carbon\Carbon;

class AppointementController extends Controller
{
    public function index(Doctor $doctor)
    {
        return view('ask_for_appointment', [
            'doctor' => $doctor
        ]);
    }

    public function store(Request $request, $doctor_id)
    {

        $this->validate($request, [
            'appointment_date' => ['required', new Unpassed(), new doctor_working_day($doctor_id)],
            'time' => ['required', new doctor_available_at($request->appointment_date, $doctor_id)],
        ]);

        $notifiction_content_doctor = auth()->user()->first_name . " " . auth()->user()->last_name . " demande un rendez-vous le " . 
         date('d-m-Y', strtotime($request->appointment_date)). " à " . $request->time . ". veuillez vérifier votre list des rendez-vous.";
        
        $notifiction_content_patient = "Votre demande de rendez vous est effectuer. veuillez attendre a ce qu'elle soit valider";

        
        Appointment::create([
            'doctor_id' => (Doctor::where('id', $doctor_id)->select("user_id")->get())[0]->user_id,
            'patient_id' => auth()->user()->id,
            'date'=> $request->appointment_date,
            'time' => $request->time,
            'reason'=> $request->reason,
            'valid' => false,
        ]);

        Notification::create([
            'user_id' => $doctor_id,
            'readed' => false,
            'content' => $notifiction_content_doctor
        ]);

        Notification::create([
            'user_id' => auth()->user()->id,
            'readed' => false,
            'content' => $notifiction_content_patient
        ]);
        
    }

    public function getWorkingTimes(Request $request)
    {
        $date = new Carbon($request->date);
        $chosen_day = strtolower($date->format('l'));

        $times = Work_time::where("calendar_id", $request->calendar_id)
            ->where("day", $chosen_day)
            ->select("start", "end")
            ->get();


        $times_array = [];
        foreach ($times as $time) {
            for ($i = $time->start; $i < $time->end; $i++) {
                array_push($times_array, $i);
            }
        }

        return response()->json($times_array);
    }

    public function get_appointements()
    {
        $appointments = auth()->user()->doctor->appointments->where("valid", 0);
        $doctors = Doctor::all();
        return view('doctor.invalid_appointments_list', compact('appointments', 'doctors'));
    }

    public function valid_appointment(Request $request)
    {
        Appointment::where('id', $request->appointment_id)->update(array('valid' => 1));
        $appointment = Appointment::where('id', $request->appointment_id)->get();

        $notifiction_content_patient = "Votre rendez-vous pour " . $appointment[0]->date . " à " . $appointment[0]->time . " est confirmé.";
        Notification::create([
            'user_id' => $request->patient_id,
            'readed' => false,
            'content' => $notifiction_content_patient
        ]);

        return redirect(route('get_appointements'));
    }

    public function valid_appointment_substitute(Request $request)
    {

        $substitute = Doctor::where('id', $request->substitute_id)->get();
        $fName = $substitute[0]->user->first_name;
        $lName = $substitute[0]->user->last_name;
        Appointment::where('id', $request->appointment_id)->update(array('valid' => 1, 'doctor_id' => $request->substitute_id));

        $appointment = Appointment::where('id', $request->appointment_id)->get();

        $notifiction_content_patient = "Votre rendez-vous pour " . $appointment[0]->date . " à " . $appointment[0]->time . " est confirmé mais avec 
        son remplaçant Dr. " .$fName. " " .$lName. ". Si cela ne te convient, veuillez annuler le rendez-vous
        et demander un autre.";
        Notification::create([
            'user_id' => $request->patient_id,
            'readed' => false,
            'content' => $notifiction_content_patient
        ]);

        return redirect(route('get_appointements'));
    }
}
