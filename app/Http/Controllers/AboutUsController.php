<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course; // Ensure you have the Course model

class AboutUsController extends Controller
{
    public function index()
    {
        // Fetch the latest 3 courses
        $courses = Course::latest()->take(3)->get();
        
        // Pass the courses data to the aboutus view
        return view('aboutus', compact('courses'));
    }
}
