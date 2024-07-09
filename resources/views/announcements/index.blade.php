@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <x-sidebar />
            </div>
            <div class="col-md-10 bg-white">
                <div class="container mt-4">
                    <h4>Post Announcement</h4>
                    <div class="card">
                        <div class="card-body text-start bg-white">
                            <form action="{{ route('announcement.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control mb-3 @error('title')
                                is-invalid
                                @enderror"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="image" class="form-label">Upload Banner</label>
                                <input type="file" name="image" id="image"
                                    class="form-control mb-3 
                                    @error('image')
                                        is-invalid
                                    @enderror
                                ">
                                @error('image')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10"
                                    class="form-control mb-3 @error('description')
                                    is-invalid
                                @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="btn btn-primary" type="submit">Post Announcement</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
