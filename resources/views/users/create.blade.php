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
                            <form action="{{ route('user.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                            class="form-control mb-3  @error('name') is-invalid @enderror" >
                                        @error('name')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                                            class="form-control mb-3 @error('email') is-invalid @enderror">
                                        @error('email')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="number" class="form-label">Number</label>
                                        <input type="text" name="number" id="number" value="{{ old('number') }}"
                                            class="form-control mb-3 @error('number') is-invalid @enderror">
                                        @error('number')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" name="state" id="state" value="{{ old('state') }}"
                                            class="form-control mb-3 @error('state') is-invalid @enderror">
                                        @error('state')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="stateCode" class="form-label">State Code</label>
                                        <input type="text" name="stateCode" id="stateCode"
                                            value="{{ old('stateCode') }}" class="form-control mb-3 @error('stateCode') is-invalid @enderror">
                                        @error('stateCode')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="name" class="form-label">Zone</label>
                                        <input type="text" name="zone" id="zone" value=""
                                            class="form-control mb-3">
                                    </div>
                                </div>
                                <label for="name" class="form-label">Sub-Zone</label>
                                <input type="text" name="subZone" id="subZone" value=""
                                    class="form-control mb-3">
                                <button class="btn btn-primary col-12">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
