<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CallingSchedule\StoreRequest;
use App\Models\CallingSchedule;
use Illuminate\Http\Request;

class CallingScheduleController extends Controller
{
    public function store(StoreRequest $request)
    {
        $callingSchedule = CallingSchedule::create($request->validated());
        return redirect()->back();
    }
}
