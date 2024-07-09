@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <x-sidebar />
            </div>
            <div class="col-md-10 bg-white">
                <div class="container mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <a href="{{ route('user.create') }}" class="btn btn-success">Add User</a>
                        <form action="{{ route('user.search') }}" method="POST" class="d-flex gap-2">
                            @csrf
                            <input type="text" name="name" class="form-control" placeholder="Find User by Name"
                                id="search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                    @if (session('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('msg') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <table class="table table-striped shadow-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Zone</th>
                                <th>Email</th>
                                <th>State</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->zone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->state }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-danger btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
