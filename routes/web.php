<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\JoinnowController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\auth\PasswordResetMail;
use App\Http\Controllers\CustomerRequestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutUsController;



// Route::get('/aboutus', function () {
//     return view('aboutus');
// })->name('about');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('about');
Route::get('/about-us', [AboutUsController::class, 'index']);


Route::get('/level_one', function () {
    return view('level_one');
})->name('level_one');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/join_now', function () {
    return view('join_now');
})->name('join_now');

#course management
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::post('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');
Route::delete('/courses/listing', [CourseController::class, 'courselist']);
Route::post('/join-course/{courseId}', [CourseController::class, 'joinCourse'])->name('join.course');

#enquiry management
Route::get('/join_now', [JoinnowController::class, 'index'])->name('join_now');
Route::get('/enquiry', [JoinnowController::class, 'enquiry_list'])->name('enquiry');
Route::get('/enquiry/create', [JoinnowController::class, 'create'])->name('enquiry.create');
Route::post('/enquiry/store', [JoinnowController::class, 'store'])->name('enquiry.store');
Route::get('/enquiry/{id}', [JoinnowController::class, 'show'])->name('enquiry.show');
Route::get('/enquiry/{id}/edit', [JoinnowController::class, 'edit'])->name('enquiry.edit');
Route::post('/enquiry/{id}', [JoinnowController::class, 'update'])->name('enquiry.update');
Route::delete('/enquiry/{id}', [JoinnowController::class, 'destroy'])->name('enquiry.destroy');


#user login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('save-register', [AuthController::class, 'register'])->name('save.register');
Route::get('/register', [AuthController::class, 'index'])->name('registeration');
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::POST('/do-login', [AuthController::class, 'dologin'])->name('do.login');
Route::get('/auth/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot.password');
Route::POST('/do-forgot-password', [AuthController::class, 'doForgotPassword'])->name('do.forgot.password');
Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset.password');
Route::POST('/logout}', [AuthController::class, 'logout'])->name('logout');

#user management
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

#payments
Route::get('/payments', [PaymentController::class, 'index'])->name('payments');
Route::post('/payments/store', [PaymentController::class, 'store'])->name('payments.store');
Route::get('/payments/create', [PaymentController::class, 'create'])->name('payments.create');
Route::get('/payments/{id}', [PaymentController::class, 'show'])->name('payments.show');
Route::get('/payments/{id}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
Route::post('/payments/{id}', [PaymentController::class, 'update'])->name('payments.update');
Route::delete('/payments/{id}', [PaymentController::class, 'destroy'])->name('payments.destroy');

#customer request
Route::post('/form_submit', [CustomerRequestController::class, 'store'])->name('form_submit');

Route::get('/', [IndexController::class,'index'])->name('index');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users_listing', [UserController::class, 'users_listing'])->name('users.listing');
    // Emergency contact routes
    Route::get('/users_emergency', [UserController::class, 'emergency'])->name('users_emergency');
    Route::post('/users_emergency/contact', [UserController::class, 'emergency_contact_store'])->name('users_emergency.contact');
});
#Contact us 

// Show contact form (using controller)
Route::get('/contactus', [MessageController::class, 'index'])->name('contact');
Route::post('/form-submit', [MessageController::class, 'store'])->name('form.submit');
// Route::post('/contactus/list', [MessageController::class, 'list'])->name('contactus_list');
Route::get('/contactus_list', [MessageController::class, 'list'])->name('contactus_list');
Route::get('/contactus/{id}', [MessageController::class, 'show'])->name('contactus.show');
Route::get('/contactus/{id}/edit', [MessageController::class, 'edit'])->name('contactus.edit');
Route::post('/contactus/{id}', [MessageController::class, 'update'])->name('contactus.update');
Route::delete('/contactus/{id}', [MessageController::class, 'destroy'])->name('contactus.destroy');