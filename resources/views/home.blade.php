@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <div class="d-flex flex-column align-items-start">
                    <a href="{{ route('home') }}" class="nav-link my-2 py-2 active"><i class="fas fa-tachometer-alt"></i>
                        Dashboard</a>
                    <a href="{{ route('user.index') }}"  class="nav-link my-2 py-2"><i class="fas fa-users"></i> Users</a>
                    <a href="{{ route('user.analytics') }}" class="nav-link my-2 py-2"><i class="fas fa-chart-line"></i> Analytics</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary my-2 py-2" style="padding: 0 60px;"><i class="fas fa-sign-out-alt"></i>
                        Logout</button>
                </form>
            </div>
            <div class="col-md-10 bg-white">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Total Users</h5>
                                    <p class="card-text">{{ count($users) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Active Sessions</h5>
                                    <p class="card-text">567</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-warning mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">New Orders</h5>
                                    <p class="card-text">89</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Support Tickets</h5>
                                    <p class="card-text">45</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <h2>Website Users</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Zone</th>
                                <th>Email</th>
                                <th>State</th>
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
