@extends('layouts.dashboard')

@section('content')
    <main>
    <div class="container-fluid">
            <h1 class="mt-4">Course Module</h1>
            <main>
                <div class="card mb-4">
                    <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>Course  Details
                    <div class="col-4">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                    </div> -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa fa-pencil mr-2" aria-hidden="true"></i>Edit Course Details
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
                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit  Course</h3></div>
                                                    <div class="card-body">
                                                        <form action="{{ route('courses.update', $course->id) }}" method="POST">
                                                            @csrf
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="course_name">Course Name</label>
                                                                        <input class="form-control py-4" id="course_name" type="text" name="course_name" value="{{ $course->course_name }}"  required/>
                                                                                @error('course_name') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="duration">Duration</label>
                                                                        <input class="form-control py-4" id="duration" type="text" name="duration" value="{{ $course->duration }}" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="start_date">Start Date</label>
                                                                        <input class="form-control py-4" id="start_date" type="date" name="start_date" value="{{ $course->start_date }}"  required/>
                                                                                @error('start_date') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="end_date">End Date</label>
                                                                        <input class="form-control py-4" id="end_date" type="date" name="end_date"  value="{{ $course->end_date }}" required />
                                                                                @error('end_date') 
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="capacity">Capacity</label>
                                                                        <input class="form-control py-4" id="capacity" type="text" name="capacity" value="{{ $course->capacity }}"  required/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="price">Price</label>
                                                                        <input class="form-control py-4" id="price" type="text" name="price" value="{{ $course->price }}"  required/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="description">Description</label>
                                                                        <textarea class="form-control py-4" id="description" name="description" rows="4"  required>{{ $course->description }}</textarea>
                                                                    </div>
                                                                 </div>
                                                                 <div class="col-12">
                                                                    <button class="btn btn-primary w-100 py-3" type="submit">Update Course</button>
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