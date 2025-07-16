<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
       // Fetch all Payment Methods
       $payments = Payment::all();

        // Pass data to the index view
        return view('payments.index',compact('payments'));
        
    }
    public function create()
    {
        return view('payments.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'payment_method' => 'required|unique:payments,payment_method|max:50',  // Ensure course name is unique

        ]);
         // Create the course using the validated data
         Payment::create([
            'payment_method' => $request->payment_method,
        ]);
        return redirect()->route('payments')->with('success', 'Payments created successfully.');
    }
    public function edit($id)
    {
        $payments = Payment::findOrFail($id);
        return view('payments.edit', compact('payments'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'payment_method' => 'required',
        ]);

        $Payments = Payment::findOrFail($id);
        $Payments->update($request->all());

        return redirect()->route('payments')->with('success', 'Payment Methods Updated Successfully.');
    }
    public function destroy($id)
    {
        $Payments = Payment::findOrFail($id);
        $Payments->delete();

        return redirect()->route('payments')->with('success', 'Payment Method deleted successfully.');
    }
    public function show($id)
    {
        $Payments = Payment::findOrFail($id); // Fetch the course data by ID
        return view('payments.show', compact('Payments'));
    }

}
