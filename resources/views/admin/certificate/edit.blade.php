@extends('admin.index')

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Certificate</h1>
            <form id="certificateForm" action="{{ route('certificate.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $certificate->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="issued_by" class="form-label">Issued By</label>
                    <input type="text" class="form-control" name="issued_by" value="{{ old('issued_by', $certificate->issued_by) }}" required>
                    @error('issued_by')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="issued_at" class="form-label">Issued At</label>
                    <input type="date" class="form-control" name="issued_at" value="{{ old('issued_at', $certificate->issued_at) }}" required>
                    @error('issued_at')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">File (Image or PDF)</label>
                    <input type="file" class="form-control" name="file">
                    @if ($certificate->file)
                        <p>Current file: <a href="{{ Storage::url($certificate->file) }}" target="_blank">{{ basename($certificate->file) }}</a></p>
                    @endif
                    @error('file')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="desciption" class="form-label">Description</label>
                    <textarea class="form-control" name="desciption">{{ old('desciption', $certificate->desciption) }}</textarea>
                    @error('desciption')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('certificateForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const confirmed = confirm("Do you want to update this certificate?");
        if (confirmed) {
            this.submit();
        }
    });
</script>
