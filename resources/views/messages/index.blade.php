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
            <h1 class="mt-4">Message Module</h1>
                        @if(session('success'))
                        <div class="alert alert-success col-12">
                            {{ session('success') }}
                        </div>
                        @endif
            <main>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fa fa-envelope mr-1"></i>Message Details
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
                                        <th>subject</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Messages as $Message)
                                    <tr>
                                       <td>{{ $loop->iteration }}</td>
                                        <td>{{ $Message->name }}</td>
                                        <td>{{ $Message->email }}</td>
                                        <td>{{ $Message->subject }} days</td>
                                        <td>{{ $Message->message }}</td>
                                        <td>{{ $Message->created_at }}</td>
                                        <td>
                                           <!-- Edit Button -->
                                           <a href="{{ route('contactus.edit', $Message->id) }}" class="btn btn-sm" style="display:inline-block; padding: 0;">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <!-- Show Button -->
                                                <a href="{{ route('contactus.show', $Message->id) }}" class="btn btn-sm" style="display:inline-block; padding: 0;">
                                                    <i class="fa fa-eye"></i>
                                                </a>    
                                                <!-- Delete Button (with confirmation) -->
                                                <form action="{{ route('contactus.destroy', $Message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Message?');">
                                                    @csrf
                                                    @method('DELETE') <!-- Spoof the DELETE method -->
                                                    <button type="submit" class="btn btn-sm" style="background: none; border: none; padding: 0;">
                                                    <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
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