<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::with('department')->get();
        return view('pages.sections', compact('sections'));
    }
}

