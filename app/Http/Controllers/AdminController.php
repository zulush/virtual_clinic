<?php

namespace App\Http\Controllers;
use \stdClass;
use App\Models\Appointment;
use App\Models\Medicament;
use App\Models\Consultation;
use App\Models\Notification;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
        if (auth()->user()) {
            if (auth::user()->isAdmin()){
                $statistics = new stdClass();

                $statistics->appointments = Appointment::all()->count();
                $statistics->valid_appointments = Appointment::where('valid', 1)->count();
                $statistics->invalid_appointments = $statistics->appointments - $statistics->valid_appointments;
                $statistics->users = User::all()->count();
                $statistics->doctors = Doctor::all()->count();
                $statistics->admis = Admin::all()->count();
                $statistics->patients = $statistics->users - ($statistics->doctors + $statistics->admis);
                $statistics->consultations = Consultation::all()->count();
                $statistics->medicaments = Medicament::all()->count();
                $statistics->notifications = Notification::all()->count();
                $statistics->readed_notifications = Notification::where('readed', 1)->count();
                $statistics->unreaded_notifications = $statistics->notifications - $statistics->readed_notifications;

                
                return view("admin.espace_admin",[
                    'statistics' => $statistics
                ]);
            } else {
                abort(404);
            }            
        } else {
            abort(404);
        }
    }

    public function add_doctor(){
        if (auth()->user()) {
            if (auth::user()->isAdmin()){
                return view("admin.doctor_form");
            } else {
                abort(404);
            }            
        } else {
            abort(404);
        }
    }

    public function store_doctor(Request $request){
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        $user_id = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'city' => $request->city,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->id;
 
        Doctor::create([
            'specialty' => $request->specialty,
            'region' => $request->region,
            'phone' => $request->phone,
            'consultation_cost' => $request->consultation_cost,
            'consultation_time' => $request->consultation_time,
            'max_Appointment_time' => $request->max_Appointment_time,
            'user_id' => $user_id,
        ]);

        return redirect( route('admin') );

    }
}
