<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller{

public function createForm()
{
    return view('students.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'age' => 'required|integer|min:18|max:60',
    ]);

    return redirect('/students')->with('success', 'Student registered successfully.');
}
}