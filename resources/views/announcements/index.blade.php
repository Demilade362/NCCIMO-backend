@extends('layouts.app')

@section('content')
    @use('Carbon\Carbon', 'Carbon')
    @use('Illuminate\Support\Str', 'Str')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <x-sidebar />
            </div>
            <div class="col-md-10 bg-white">
                <div class="container mt-4">
                    <h3 class="h3 mb-4">Announcements</h3>
                    @if (session('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('msg') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        @foreach ($announcements as $announcement)
                            <div class="col-lg-5">
                                <div class="card text-start">
                                    <div class="card-img-top">
                                        <img src="/storage/{{ $announcement->image }}" alt="image" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title h4">
                                            {{ $announcement->title }}
                                        </div>
                                        {{ Str::words($announcement->description, 20, '...') }}

                                        <form action="{{ route('announcement.destroy', $announcement->id) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger my-3">Delete Announcement</button>
                                        </form>
                                        <p class="text-dark fw-lighter float-end">Posted
                                            {{ $announcement->created_at->diffForHumans() }} </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
