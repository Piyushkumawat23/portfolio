@extends('admin.layouts.app')

@section('content')
<main class="app-main">
    <div class="container-fluid">
        <h3>Add New Project</h3>
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</main>
@endsection
