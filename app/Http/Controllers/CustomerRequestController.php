<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRequest;

class CustomerRequestController extends Controller
{
    public function store(Request $request)
    {       
        // Validate the request

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customer_requests,email', // Ensures email is unique in the 'users' table
            'phone_number' => 'required|string|max:15|unique:customer_requests,phone_number', // Ensures phone number is unique in the 'users' table
            'course_id' => 'required|exists:courses,id', // Ensures course exists
            'start_date' => 'required|date',
            'nice_to_have' => 'required|string|max:15',
            'payment_method_id' => 'required|exists:payments,id',
            'message' => 'required|string',
        ]);
        // Store data in the database
        CustomerRequest::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'course_id' => $validatedData['course_id'],
            'start_date' => $validatedData['start_date'],
            'nice_to_have' => $validatedData['nice_to_have'],
            'payment_method_id' => $validatedData['payment_method_id'],
            'message' => $validatedData['message'],
        ]);

        return back()->with('success', "Form submitted successfully! {$request->name}"); 
    }

}
