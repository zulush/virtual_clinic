<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Medicament;
use App\Models\Notification;
use App\Models\Appointment;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function add_consultation(Request $request){
        $consultation_id = Consultation::create([
            'appointment_id' => $request->appointment_id,
            'temperature' => $request->temperature,
            'weight' => $request->weight,
            'blood_pressure' => $request->blood_pressure,
            'details' => $request->details
        ])->id;

        $patient_id = Appointment::where('id', $request->appointment_id)->select('patient_id')->get()[0]->patient_id;

        $notifiction_content_patient = "Votre consultation est préte. Veuillez la consulter.";
        Notification::create([
            'user_id' => $patient_id,
            'readed' => false,
            'content' => $notifiction_content_patient
        ]);

        return view('doctor.add_medicament', ['consultation_id' => $consultation_id]);
    }

    
    public function add_medicament(Request $request){
        Medicament::create([
            'consultation_id' => $request->consultation_id,
            'name' => $request->name,
            'usage_details' => $request->usage_details
        ]);

        return view('doctor.add_medicament', ['consultation_id' => $request->consultation_id]);
    }

}
