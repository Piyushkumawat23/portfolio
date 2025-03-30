@extends('admin.layouts.app')

@section('content')
<main class="app-main">
    <div class="container-fluid">
        <h3>Add New Project</h3>
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Project Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label>Overview</label>
                <textarea name="overview" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Project Challenge</label>
                <textarea name="project_challenge" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Design Research</label>
                <textarea name="design_research" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Design Approach</label>
                <textarea name="design_approach" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>The Solutions</label>
                <textarea name="the_solutions" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Images</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</main>
@endsection
