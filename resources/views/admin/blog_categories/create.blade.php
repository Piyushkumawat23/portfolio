@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Create Category</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
