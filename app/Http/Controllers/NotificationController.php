<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::where('user_id', auth()->user()->id)
            ->where('readed', false)
            ->get();

        return view('unreaded_notifications', [
            'notifications' => $notifications
        ]);
    }

    public function readed_notification(Request $request)
    {    
        Notification::where('id', $request->notification_id)->update(array('readed' => 1));
    
        return redirect(route('unreaded_notifications'));
    }
}
