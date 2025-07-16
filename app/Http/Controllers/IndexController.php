<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class IndexController extends Controller
{
    public function index()
    {
        // Fetch the latest 3 courses ordered by created_at
        $courses = Course::latest()->take(3)->get();

        // Pass data to the index view
        return view('index', compact('courses'));
    }

}
