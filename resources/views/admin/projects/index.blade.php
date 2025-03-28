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
                                <th>Title</th>
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
                                    <td> @foreach($project->images as $image)
                                        <img src="{{ asset($image->image_url) }}" width="100">

                                    @endforeach</td>
                                    <td>
                                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $projects->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
