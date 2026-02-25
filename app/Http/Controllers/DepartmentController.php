<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::with('sections')->get();
        return view('pages.departments', compact('departments'));
    }
}

