@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Category Detail</h2>

    <div class="card">
        <div class="card-body">
            <h5>Name: {{ $category->name }}</h5>
            <p><strong>Slug:</strong> {{ $category->slug }}</p>
            <p><strong>Description:</strong> {{ $category->description }}</p>
        </div>
    </div>

    <a href="{{ route('categories.index') }}" class="btn btn-primary mt-3">Back to Categories</a>
</div>
@endsection
