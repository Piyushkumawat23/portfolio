@extends('admin.layouts.app')

@section('content')

<form id="fileUploadForm" action="{{ route('admin.uploadFile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="file">Upload File</label>
        <input type="file" class="form-control-file" id="file" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

<div id="uploadStatus"></div>

<script>
    document.getElementById('fileUploadForm').addEventListener('submit', function(event) {
        event.preventDefault();

        let formData = new FormData(this);
        let statusDiv = document.getElementById('uploadStatus');

        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                statusDiv.innerHTML = `<p class="text-success">${data.message}</p><a href="${data.url}" target="_blank">View File</a>`;
            } else {
                statusDiv.innerHTML = `<p class="text-danger">Error: ${data.message}</p>`;
            }
        })
        .catch(error => {
            statusDiv.innerHTML = `<p class="text-danger">An error occurred during upload.</p>`;
        });
    });
</script>
@endsection
