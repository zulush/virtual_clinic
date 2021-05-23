<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsListController extends Controller
{
    public function index(){
        $doctors = Doctor::join('users', 'users.id', '=', 'user_id')
                         ->select( 'doctors.id', 'users.first_name', 'users.last_name', 'users.city', 'doctors.region','doctors.consultation_cost')
                         ->get();

        return view('doctors_list', [
            'doctors' => $doctors
        ]);
    }

    public function getDoctor(){
        
    }
}
