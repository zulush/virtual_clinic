<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserRegisterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['guest']);
    // }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
         
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);
        
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'city' => $request->city,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
            


        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        return redirect()->route('home');
    }
}
