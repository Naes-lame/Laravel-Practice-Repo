<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('student')->get();
        return view('pages.profiles', compact('profiles'));
    }
}
