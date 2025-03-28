@extends('admin.layouts.app')

@section('content')
<main class="app-main">
    <div class="container-fluid">
        <h3>Edit Project</h3>
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" required>{{ $project->description }}</textarea>
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ asset('assets/img/portfolio/' . $project->image_url) }}" width="100">

            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</main>
@endsection
