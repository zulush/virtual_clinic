<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsListController extends Controller
{
    public function index()
    {
        $doctors = Doctor::join('users', 'users.id', '=', 'user_id')
            ->select('doctors.id', 'users.first_name', 'users.last_name', 'users.city', 'doctors.region', 'doctors.consultation_cost')
            ->get();

        return view('doctors_list', [
            'doctors' => $doctors
        ]);
    }

    public function getDoctor($doctor_id)
    {
        $doctor = Doctor::join('users', 'users.id', '=', 'user_id')
        ->select('doctors.id', 'users.first_name', 'users.last_name', 'users.city', 'doctors.region', 'doctors.consultation_cost', 'doctors.consultation_time',
        'phone')
            ->where('doctors.id', '=', 1)
            ->get();
        $D = Doctor::where('doctors.id', '=', $doctor_id);
        $maxDate = $D->getModel()->getMaxDate();
        $doctor->maxDate = $maxDate;       
        
        return view('doctor_infos', [
            'doctor' => $doctor
        ]);
        
    }
}
