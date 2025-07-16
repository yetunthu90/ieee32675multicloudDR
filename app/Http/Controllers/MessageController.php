<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        return view('contact'); // Renders your contact form Blade view
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($request->all());
        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you shortly.');
    }
    
    public function list(Request $request)
    {
       // Fetch all courses
        $Messages = Message::all();
        // Pass data to the index view
        return view('messages.index', compact('Messages'));
        // return view('courses.index');
    }
    public function edit($id)
    {
        $Messages = Message::findOrFail($id);
        return view('messages.edit', compact('Messages'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $Messages = Message::findOrFail($id);
        $Messages->update($request->all());

        return redirect()->route('contactus_list')->with('success', 'Messages updated successfully.');
    }
    public function destroy($id)
    {
        $Messages = Message::findOrFail($id);
        $Messages->delete();

        return redirect()->route('contactus_list')->with('success', 'Messages deleted successfully.');
    }
    public function show($id)
    {
        $Messages = Message::findOrFail($id); // Fetch the course data by ID
        return view('messages.show', compact('Messages'));
    }

}
