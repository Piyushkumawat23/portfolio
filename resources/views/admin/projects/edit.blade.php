@extends('admin.layouts.app')

@section('content')
<main class="app-main">
    <div class="col-md-11 mx-auto">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Edit Project</div>
            </div>
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $project->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" required>{{ $project->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="strategy">Strategy</label>
                        <input type="text" name="strategy" class="form-control" value="{{ old('strategy', $project->strategy ?? '') }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="project_type">Project Type</label>
                        <input type="text" name="project_type" class="form-control" value="{{ old('project_type', $project->project_type ?? '') }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="client">Client</label>
                        <input type="text" name="client" class="form-control" value="{{ old('client', $project->client ?? '') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Overview</label>
                        <textarea name="overview" class="form-control">{{ $project->overview }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Project Challenge</label>
                        <textarea name="project_challenge" class="form-control">{{ $project->project_challenge }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Design Research</label>
                        <textarea name="design_research" class="form-control">{{ $project->design_research }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Design Approach</label>
                        <textarea name="design_approach" class="form-control">{{ $project->design_approach }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">The Solutions</label>
                        <textarea name="the_solutions" class="form-control">{{ $project->the_solutions }}</textarea>
                    </div>
                    
                   <!-- Banner Image -->
                    <div class="mb-3">
                        <label class="form-label">Project Banner Image</label>
                        <input type="file" name="banner_image" class="form-control">
                        <div class="mt-2">
                            @foreach($project->images->where('image_type', 'banner') as $image)
                                <div class="d-inline-block position-relative">
                                    <img src="{{ asset('assets/img/portfolio/' . $image->image_url) }}" width="100" class="me-2">
                                    <button type="button" class="btn btn-outline-danger btn-sm position-absolute top-0 end-0 delete-image" 
                                        data-image-id="{{ $image->id }}"
                                        style="border-radius: 50%; width: 24px; height: 24px; font-size: 20px; display: flex; align-items: center; justify-content: center;">
                                        &times;
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Center Image -->
                    <div class="mb-3">
                        <label class="form-label">Project Center Image</label>
                        <input type="file" name="center_image" class="form-control">
                        <div class="mt-2">
                            @foreach($project->images->where('image_type', 'center') as $image)
                                <div class="d-inline-block position-relative">
                                    <img src="{{ asset('assets/img/portfolio/' . $image->image_url) }}" width="100" class="me-2">
                                    <button type="button" class="btn btn-outline-danger btn-sm position-absolute top-0 end-0 delete-image" 
                                        data-image-id="{{ $image->id }}"
                                        style="border-radius: 50%; width: 24px; height: 24px; font-size: 20px; display: flex; align-items: center; justify-content: center;">
                                        &times;
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    {{-- <div class="mb-3">
                        <label class="form-label">Project Images</label>
                        <input type="file" name="image" class="form-control">
                        <div class="mt-2">
                            @foreach($project->images as $image)
                                <div class="d-inline-block position-relative">
                                    <img src="{{ asset('assets/img/portfolio/' . $image->image_url) }}" width="100" class="me-2">
                                    <button type="button" class="btn btn-outline-danger btn-sm position-absolute top-0 end-0 delete-image" 
                                        data-image-id="{{ $image->id }}"
                                        style="border-radius: 50%; width: 24px; height: 24px; font-size: 20px; display: flex; align-items: center; justify-content: center;">
                                        &times;
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div> --}}
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-secondary float-end">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</main>

<!-- JavaScript for AJAX Image Delete -->
<script>
   document.addEventListener("DOMContentLoaded", function() {
    document.body.addEventListener('click', function(event) {
        if (event.target.classList.contains('delete-image')) {
            let imageId = event.target.getAttribute('data-image-id');
            let imageDiv = event.target.parentElement;

            if (confirm("Are you sure you want to delete this image?")) {
                fetch("{{ route('admin.projects.removeImage', '') }}/" + imageId, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        imageDiv.remove(); // Image ko DOM se hatao
                    } else {
                        alert("Failed to delete image!");
                    }
                })
                .catch(error => console.error("Error:", error));
            }
        }
    });
});
</script>

@endsection
