<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\StoreRequest;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function store(StoreRequest $request)
    {
        // dd($request->all());
        $classroom = Classroom::create($request->validated());
        return redirect()->back();
    }

    public function update(Classroom $classroom, Request $request)
    {
        $classroom->update([
            'number' => $request->number,
            'name_class' => $request->name_class,
            'floor' => $request->floor,
        ]);
        return redirect()->back();
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->back();
    }
}
