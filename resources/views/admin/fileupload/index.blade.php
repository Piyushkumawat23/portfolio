@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Uploaded Files</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">
            <i class="fas fa-plus mr-1"></i> Upload New File
        </button>
    </div>

    <div class="row">
        @forelse($files as $file)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($file['is_image'])
                        <img src="{{ $file['url'] }}" class="card-img-top img-fluid" alt="{{ $file['name'] }}" style="height: 150px; object-fit: cover;">
                    @else
                        <div class="d-flex align-items-center justify-content-center bg-light" style="height: 150px;">
                            <i class="fas fa-file-alt fa-3x text-muted"></i>
                        </div>
                    @endif
                    <div class="card-body">
                        <h6 class="card-title text-truncate font-weight-bold" title="{{ $file['name'] }}">{{ $file['name'] }}</h6>
                        <ul class="list-unstyled mb-0 small text-muted">
                            <li><strong>Type:</strong> {{ strtoupper($file['type']) }}</li>
                            <li><strong>Size:</strong> {{ $file['size'] }}</li>
                            <li><strong>Uploaded On:</strong> {{ $file['last_modified'] }}</li>
                        </ul>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ $file['url'] }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <form action="{{ route('admin.uploads.destroy') }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="path" value="{{ $file['path'] }}">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this file?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center my-5">
                <h3>No files uploaded yet.</h3>
                <p class="text-muted">Click the "Upload New File" button to get started.</p>
            </div>
        @endforelse
    </div>

    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="fileUploadForm" action="{{ route('admin.uploadFile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="file">Drag & drop your files</label>
                            <div id="drop-zone" class="text-center p-5 border rounded" style="border-style: dashed; border-color: #d1d1d1; cursor: pointer;">
                                <p>Drop files here, paste or <a href="#" onclick="document.getElementById('file-input').click(); return false;">Browse</a></p>
                                <input type="file" id="file-input" name="file" class="d-none" required>
                            </div>
                            <small class="form-text text-muted mt-2">Max file size: 20 MB. Supported formats: JPG, JPEG, PNG, WEBP, PDF.</small>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Upload</button>
                    </form>
                    <div id="uploadStatus" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    const dropZone = document.getElementById('drop-zone');
    const fileInput = document.getElementById('file-input');
    const statusDiv = document.getElementById('uploadStatus');

    // Prevent default drag behaviors
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Highlight drop zone when a file is dragged over it
    ['dragenter', 'dragover'].forEach(eventName => {
        dropZone.addEventListener(eventName, () => dropZone.classList.add('bg-light'), false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, () => dropZone.classList.remove('bg-light'), false);
    });

    // Handle file drop
    dropZone.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        
        fileInput.files = files;
        statusDiv.innerHTML = `<p class="text-success">File selected: ${files[0].name}</p>`;
    }

    // Handle form submission (your existing code)
    document.getElementById('fileUploadForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);
        
        // Remove previous status
        statusDiv.innerHTML = '';

        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errorData => Promise.reject(errorData));
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                statusDiv.innerHTML = `<p class="text-success">${data.message}</p>
                                      <a href="${data.url}" target="_blank" class="btn btn-sm btn-success mt-2">View Uploaded File</a>`;
                setTimeout(() => location.reload(), 2000); 
            }
        })
        .catch(errorData => {
            let errorMessage = "An unknown error occurred.";
            if (errorData && errorData.message) {
                errorMessage = errorData.message;
            } else if (errorData && errorData.errors) {
                errorMessage = Object.values(errorData.errors).flat().join('<br>');
            }
            statusDiv.innerHTML = `<p class="text-danger">Error: ${errorMessage}</p>`;
        });
    });
</script>
@endsection