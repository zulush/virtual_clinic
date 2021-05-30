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

    public function filter(Request $request){
        $doctors = Doctor::where('consultation_cost','like',$request->price)
                ->where('region','like',$request->region)
                ->where('specialty','like',$request->specialty)
                ->get();
            $nbr = $doctors->count();
            return View('FilterDoctor', compact('doctors' , 'nbr'));
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
