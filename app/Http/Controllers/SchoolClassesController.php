<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolClasses\StoreRequest;
use App\Models\SchoolClass;
use App\Models\User;
use Illuminate\Http\Request;

class SchoolClassesController extends Controller
{
    public function show()
    {
        return view('pages.class',[
            'title' => 'Классы',
            'classes' => SchoolClass::get(),
            'users' => User::get()
        ]);
    }

    public function store(StoreRequest $request)
    {
        $class = SchoolClass::create($request->validated());
        return redirect()->back();
    }

    public function update(SchoolClass $class, StoreRequest $request)
    {
        $class->update($request->validated());
        return redirect()->back();
    }

    public function destroy(SchoolClass $class)
    {
        $class->delete();
        return redirect()->back();
    }
}
