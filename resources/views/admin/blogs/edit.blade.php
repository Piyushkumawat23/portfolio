@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Blog</h2>

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $blog->title }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $blog->category_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
    <label>Description (short summary)</label>
    <textarea name="description" class="form-control" rows="3" required>{{ $blog->description }}</textarea>
</div>


        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" rows="6" required>{{ $blog->content }}</textarea>
        </div>

        <div class="mb-3">
            <label>Read Time (in minutes)</label>
            <input type="number" name="read_time" value="{{ $blog->read_time }}" class="form-control">
        </div>

       <div class="mb-3">
    <label>Featured Image</label><br>
    @if($blog->featured_image)
        <img src="{{ asset('uploads/blogs/'.$blog->featured_image) }}" width="150" class="mb-2">
    @endif
    <input type="file" name="featured_image" class="form-control">
</div>

<div class="mb-3">
    <label>Gallery Images (Add more)</label><br>
    @foreach($blog->images as $img)
        <img src="{{ asset('uploads/blogs/'.$img->image_url) }}" width="100" class="m-1">
    @endforeach
    <input type="file" name="images[]" class="form-control mt-2" multiple>
</div>


        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ $blog->status == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Update Blog</button>
    </form>
</div>
@endsection
