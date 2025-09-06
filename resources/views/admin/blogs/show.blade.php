@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>{{ $blog->title }}</h2>
    <p><strong>Category:</strong> {{ $blog->category->name ?? 'Uncategorized' }}</p>
    <p><strong>Author:</strong> {{ $blog->author->user_name ?? 'Admin' }}</p>
    <p><strong>Date:</strong> {{ $blog->created_at->format('d M Y') }}</p>
    <p><strong>Read Time:</strong> {{ $blog->read_time }} min</p>

    @if($blog->image)
        <img src="{{ asset('uploads/blogs/'.$blog->image) }}" width="500" class="mb-3">
    @endif

    <div class="content">
        {!! nl2br(e($blog->content)) !!}
    </div>

    <hr>
    <h4>Comments ({{ $blog->comments->count() }})</h4>
    @foreach($blog->comments as $comment)
        <div class="border p-2 mb-2">
            <strong>{{ $comment->user->user_name ?? 'Guest' }}:</strong>
            <p>{{ $comment->comment }}</p>
            <small>{{ $comment->created_at->diffForHumans() }}</small>
        </div>
    @endforeach
</div>
@endsection
