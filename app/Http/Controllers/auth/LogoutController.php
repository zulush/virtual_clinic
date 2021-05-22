<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
