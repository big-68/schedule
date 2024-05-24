<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Schedule\StoreRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function store(Request $request)
    {
        $schedule = Schedule::create([
            'date_of_week' => $request->date_of_week,
            'class_id' => $request->class_id,
            'callingSchedule_id' => $request->callingSchedule_id,
            'subject' => $request->subject,
            'classroom_id' => $request->classroom_id,
            'user_id' => $request->user_id
        ]);
        return redirect()->back();
    }
}
