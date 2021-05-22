<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorLoginController extends Controller
{
    public function index(){
        return view('auth.doctor_login');
    }

    public function login(Request $request)
    {
        dd($request);
    }
}
