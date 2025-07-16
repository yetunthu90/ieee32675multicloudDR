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
            <h1 class="mt-4">Payment Module</h1>
                        @if(session('success'))
                        <div class="alert alert-success col-12">
                            {{ session('success') }}
                        </div>
                        @endif
            <main>
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-table mr-1"></i>Payment Method
                        </div>
                        <div class="col-3 text-right">
                            <a href="{{ route('payments.create') }}" class="btn btn-primary">
                                <i class="fa fa-plus mr-1" aria-hidden="true"></i>
                                <span>Payment Method</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Payment Method</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $Payments)
                                    <tr>
                                       <td>{{ $Payments->id }}</td>
                                        <td>{{ $Payments->payment_method }}</td>
                                        <td>
                                              <!-- Edit Button -->
                                                <a href="{{ route('payments.edit', $Payments->id) }}" class="btn btn-sm" style="display:inline-block; padding: 0;">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <!-- Delete Button (with confirmation) -->
                                                <form action="{{ route('payments.destroy', $Payments->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this course?');">
                                                    @csrf
                                                    @method('DELETE') <!-- Spoof the DELETE method -->
                                                    <button type="submit" class="btn btn-sm" style="background: none; border: none; padding: 0;">
                                                    <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>

                                                <!-- Show Button -->
                                                <a href="{{ route('payments.show', $Payments->id) }}" class="btn btn-sm" style="display:inline-block; padding: 0;">
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