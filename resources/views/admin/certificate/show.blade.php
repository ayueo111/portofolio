@extends('admin.index')

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Certificate Details</h1>
            <div class="card">
                <div class="card-header">
                    <h5>{{ $certificate->name }}</h5>
                </div>
                <div class="card-body">
                    <p><strong>Issued By:</strong> {{ $certificate->issued_by }}</p>
                    <p><strong>Issued At:</strong> {{ $certificate->issued_at }}</p>
                    <p><strong>Description:</strong> {{ $certificate->description ?: 'No description provided' }}</p>
                    @if($certificate->file)
                        <p><strong>File:</strong> <a href="{{ Storage::url($certificate->file) }}" target="_blank">Download/View File</a></p>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('certificate.index') }}" class="btn btn-secondary">Back to List</a>
                    <a href="{{ route('certificate.edit', $certificate->id) }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>