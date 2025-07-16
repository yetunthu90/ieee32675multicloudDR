<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Payment;
use App\Models\CustomerRequest;

class JoinnowController extends Controller
{
    public function enquiry_list()
    {
        // $customerRequests = CustomerRequest::with(['course', 'payment'])->get();
        $customerRequests = CustomerRequest::with(['course', 'payment'])
                            ->orderBy('created_at', 'DESC') // Order by created_at in descending order
                            ->get();
        return view('enquiry.index', compact('customerRequests'));
    }

    public function index()
    {
        $courses = Course::all();
        $payments= Payment::all();
        return view('join_now', compact('courses','payments'));
    }
    public function store(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'course_name' => 'required|unique:courses,course_name|max:255',  // Ensure course name is unique
            'duration' => 'required|integer',
            'start_date' => 'required|date|after_or_equal:today',  // Start date must be today or in the future
            'end_date' => 'required|date|after:start_date',  // End date must be after the start date
            'capacity' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string|max:1000',  // Optional: Set a max length for description

        ]);
         // Create the course using the validated data
        Course::create([
            'course_name' => $request->course_name,
            'duration' => $request->duration,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'capacity' => $request->capacity,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect()->route('courses')->with('success', 'Course created successfully.');
    }
    public function edit($id)
    {
        $courses = Course::all();
        $payments= Payment::all();
        $CustomerRequest = CustomerRequest::findOrFail($id);
        return view('enquiry.edit', compact('CustomerRequest','courses','payments'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customer_requests,email,' . $id, // Exclude current record from uniqueness check
            'phone_number' => 'required|string|max:15|unique:customer_requests,phone_number,' . $id, // Exclude current record from uniqueness check
            'course_id' => 'required|exists:courses,id', // Ensures course exists
            'start_date' => 'required|date',
            'nice_to_have' => 'required|string|max:15',
            'payment_method_id' => 'required|exists:payments,id',
            'message' => 'required|string',
        ]);

        $CustomerRequest = CustomerRequest::findOrFail($id);
        $CustomerRequest->update($request->all());

        return redirect()->route('enquiry')->with('success', 'Enquiry updated successfully.');
    }
    // public function destroy($id)
    // {
    //     $CustomerRequest = CustomerRequest::findOrFail($id);
    //     $CustomerRequest->delete();

    //     return redirect()->route('enquiry')->with('success', 'Enquiry deleted successfully.');
    // }
    public function destroy($id)
    {
        $CustomerRequest = CustomerRequest::findOrFail($id);
        $CustomerRequest->delete();
    
        return redirect()->route('enquiry')->with('success', 'Enquiry deleted successfully.');
    }
    
    public function show($id)
    {
        $CustomerRequest = CustomerRequest::findOrFail($id); // Fetch the course data by ID
        return view('enquiry.show', compact('CustomerRequest'));
    }

}
