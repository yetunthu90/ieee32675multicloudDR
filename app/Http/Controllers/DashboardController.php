<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Course;
use App\Models\User;
use App\Models\CustomerRequest;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // Count total Message methods
        $totalMessage = Message::count();

        // Count total courses
        $totalCourses = Course::count();

        // Count total users
        $totalUsers = User::count();

        // Count total enquiries
        $totalEnquiries = CustomerRequest::count();

        $Customer_request = CustomerRequest::all();
        $loggedInUser = auth()->user();

        // Pass data to the dashboard view
        return view('dashboard',['user' => $user], compact('totalMessage', 'totalCourses', 'totalUsers', 'totalEnquiries' , 'Customer_request','loggedInUser'));

    }

}
