@extends('layouts.dashboard')

@section('content')
    <main>
    <style>
        .btn-sm {
            width: auto;
            height: auto;
            padding: 8px;
            border: none;
            background: none;
            cursor: pointer;
        }

        .btn-sm i {
            font-size: 18px;
        }

        .btn-sm:hover {
            color: #06BBCC; /* Change this to any color you like for hover effect */
        }

        form, a {
            display: inline-block;
            margin-right: 10px; /* Space between buttons */
        }
    </style>
    <div class="container-fluid">
            <h1 class="mt-4">Enquiry Module</h1>
                        @if(session('success'))
                        <div class="alert alert-success col-12">
                            {{ session('success') }}
                        </div>
                        @endif
            <main>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fa fa-question-circle mr-2"></i>Enquiry Details
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Course</th>
                                        <th>Start Date</th>
                                        <th>Payment Method</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($customerRequests as $customer_request)
                                    <tr>
                                       <td>{{ $loop->iteration }}</td>
                                        <td>{{ $customer_request->name}}</td>
                                        <td>{{ $customer_request->email}}</td>
                                        <td>{{ $customer_request->phone_number}}</td>
                                        <td>{{ $customer_request->course->course_name ?? 'N/A' }}</td>
                                        <td>{{ $customer_request->start_date}}</td>
                                        <td>{{ $customer_request->payment->payment_method ?? 'N/A' }}</td>
                                        <td>
                                              <!-- Edit Button -->
                                                <a href="{{ route('enquiry.edit', $customer_request->id) }}" class="btn btn-sm" style="display:inline-block; padding: 0;">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <!-- Delete Button (with confirmation) -->
                                                <form action="{{ route('enquiry.destroy', $customer_request->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this course?');">
                                                    @csrf
                                                    @method('DELETE') <!-- Method spoofing for DELETE -->
                                                    <button type="submit" class="btn btn-sm" style="background: none; border: none; padding: 0;">
                                                    <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>

                                                <!-- Show Button -->
                                                <a href="{{ route('enquiry.show', $customer_request->id) }}" class="btn btn-sm" style="display:inline-block; padding: 0;">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </main>
@endsection
