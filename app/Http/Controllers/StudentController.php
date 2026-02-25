<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['section.department', 'profile'])->get();
        return view('pages.students', compact('students'));
    }
}
