@extends('layouts.dashboard')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Course Module</h1>
            <main>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa fa-plus-square mr-2" aria-hidden="true"></i>Add New Course Details
                        </div>
                        <!-- Back Button -->
                        <div>
                            <a href="{{ route('courses') }}" class="btn btn-primary">
                                <i class="fa fa-arrow-left mr-1"></i> Back
                            </a>
                        </div>
                    </div>
                     
                    
                    <div id="layoutAuthentication">
                            <div id="layoutAuthentication_content">
                                <main>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">New Course</h3></div>
                                                    <div class="card-body">
                                                        <form action="{{ route('courses.store') }}" method="POST">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="course_name">Course Name</label>
                                                                        <input class="form-control py-4" id="course_name" type="text" name="course_name" placeholder="Enter Course Name"  required/>
                                                                                @error('course_name') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="duration">Duration</label>
                                                                        <input class="form-control py-4" id="duration" type="text" name="duration" placeholder="Enter Duration In Days" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="start_date">Start Date</label>
                                                                        <input class="form-control py-4" id="start_date" type="date" name="start_date" placeholder="Select The Start Date"  required/>
                                                                                @error('start_date') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="end_date">End Date</label>
                                                                        <input class="form-control py-4" id="end_date" type="date" name="end_date" placeholder="Select The End Date" required />
                                                                                @error('end_date') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="capacity">Capacity</label>
                                                                        <input class="form-control py-4" id="capacity" type="text" name="capacity" placeholder="Enter Capacity"  required/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="price">Price</label>
                                                                        <input class="form-control py-4" id="price" type="text" name="price" placeholder="Enter Amount (Euro)"  required/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="description">Description</label>
                                                                        <textarea class="form-control py-4" id="description" name="description" rows="4" placeholder="Enter a description" required></textarea>
                                                                    </div>
                                                                 </div>
                                                                 <div class="col-12">
                                                                    <button class="btn btn-primary w-100 py-3" type="submit">Create Course</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                    </div> 
                </div>
            </main>
        </div>
    </main>
@endsection