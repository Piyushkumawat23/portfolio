@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Category</h2>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="form-group mb-3">
            <label>Category Name</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $category->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
