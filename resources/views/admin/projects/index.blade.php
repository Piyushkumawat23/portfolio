@extends('admin.layouts.app')

@section('content')
             
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <h3 class="mb-3">Projects</h3>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add Project</a>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $key => $project)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>
                                        @foreach($project->images->where('image_type', 'banner') as $image)
                                            <img src="{{ asset('public/assets/img/portfolio/' . $image->image_url) }}" width="100">
                                        @endforeach
                                    </td>
                                    
                                    <td>
                                        <!-- Edit Icon -->
                                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border: none; background: none; color: red; cursor: pointer;">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                        <!-- Publish / Unpublish -->
                                        <a href="{{ route('admin.projects.toggleStatus', $project->id) }}" class="ms-2">
                                            @if($project->status)
                                                <span class="badge bg-success">Published</span>
                                            @else
                                                <span class="badge bg-secondary">Unpublished</span>
                                            @endif
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            {{ $projects->links('vendor.pagination.bootstrap-4') }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
