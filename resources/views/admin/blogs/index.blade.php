@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>All Blogs</h2>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">+ Add New Blog</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Description</th>
                <th>Date</th>
                <th>Read Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->category->name ?? 'Uncategorized' }}</td>
                    <td>{{ $blog->author->user_name ?? 'Admin' }}</td>
                    <td>{{ Str::limit($blog->description, 50) }}</td>
                    <td>{{ $blog->created_at->format('d M Y') }}</td>
                    <td>{{ $blog->read_time }} min</td>
                    <td>
    <span class="badge bg-{{ $blog->status == 'published' ? 'success' : 'secondary' }}">
        {{ ucfirst($blog->status) }}
    </span>
</td>
                    <td>
                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this blog?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
