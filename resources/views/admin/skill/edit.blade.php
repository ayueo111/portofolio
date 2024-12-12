@extends('admin.index')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
    <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Skill</h1>
            
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('skill.update', $skill->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" name="title" id="title" value="{{ $skill->title }}" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea name="description" id="description" rows="4" class="form-control">{{ $skill->description }}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Skill</button>
                        <a href="{{ route('skill.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('skillForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Use the button's ID to create a unique reference
        const buttonId = this.querySelector('button[type="submit"]').id;

        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to update this skill?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit(); // Submit the form if confirmed
            }
        });
    });
</script>