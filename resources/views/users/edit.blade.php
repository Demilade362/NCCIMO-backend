@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <div class="d-flex flex-column align-items-start">
                    <a href={{ route('home') }} class="nav-link my-2 py-2"><i class="fas fa-tachometer-alt"></i>
                        Dashboard</a>
                    <a href="{{ route('user.index') }}" class="nav-link my-2 py-2 active"><i class="fas fa-users"></i>
                        Users</a>
                    <a href="#" class="nav-link my-2 py-2"><i class="fas fa-chart-line"></i> Analytics</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary my-2 py-2" style="padding: 0 60px;"><i class="fas fa-sign-out-alt"></i>
                        Logout</button>
                </form>
            </div>
            <div class="col-md-10 bg-white">
                <div class="container mt-4">
                    <div class="card w-full shadow-none bg-white">
                        <div class="card-body text-start">
                            <form action="{{ route('user.update', $user->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name" value="{{ $user->name }}"
                                            class="form-control mb-3  @error('name') is-invalid @enderror">
                                        @error('name')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="name" class="form-label">Email</label>
                                        <input type="text" name="email" id="email" value="{{ $user->email }}"
                                            class="form-control mb-3" disabled>
                                        <label for="name" class="form-label">Number</label>
                                        <input type="text" name="number" id="number" value="{{ $user->number }}"
                                            class="form-control mb-3" disabled>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name" class="form-label">State</label>
                                        <input type="text" name="state" id="state" value="{{ $user->state }}"
                                            class="form-control mb-3" disabled>
                                        <label for="name" class="form-label">State Code</label>
                                        <input type="text" name="stateCode" id="stateCode" value="{{ $user->stateCode }}"
                                            class="form-control mb-3" disabled>
                                        <label for="name" class="form-label">Zone</label>
                                        <input type="text" name="zone" id="zone" value="{{ $user->zone }}"
                                            class="form-control mb-3" disabled>
                                    </div>
                                </div>
                                <label for="name" class="form-label">Sub-Zone</label>
                                <input type="text" name="subZone" id="subZone" value="{{ $user->subzone }}"
                                    class="form-control mb-3" disabled>
                                <button class="btn btn-primary col-12">Submit Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
