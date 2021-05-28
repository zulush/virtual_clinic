<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserLoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        

        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        $credentials = $request->only('email', 'password');
        if(!Auth::attempt($credentials, $request->remember)){
            return back()->with('status', 'Invalid login details');
        };
        
        
        return redirect()->route('home');       
    }
}
