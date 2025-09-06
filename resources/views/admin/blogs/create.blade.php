@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Create New Blog</h2>

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
    <label>Description (short summary)</label>
    <textarea name="description" class="form-control" rows="3" required></textarea>
</div>


        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" rows="6" required></textarea>
        </div>

        <div class="mb-3">
            <label>Read Time (in minutes)</label>
            <input type="number" name="read_time" class="form-control">
        </div>

        <div class="mb-3">
    <label>Featured Image</label>
    <input type="file" name="featured_image" class="form-control">
</div>

<div class="mb-3">
    <label>Gallery Images</label>
    <input type="file" name="images[]" class="form-control" multiple>
</div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save Blog</button>
    </form>
</div>
@endsection
