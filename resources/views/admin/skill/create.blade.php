@extends('admin.index')

<div id="layoutSidenav">
  <div id="layoutSidenav_content">
    <div class="container-fluid px-4">
    <form id="skillForm" action="{{ route('skill.store') }}" method="POST">
      @csrf
      <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" required>
      </div>
      <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
</div> 
<script>
    document.getElementById('skillForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Show confirmation alert
        const confirmed = confirm("Do you want to submit this form?");
        if (confirmed) {
            this.submit(); // Submit the form programmatically
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
        }
    });
</script>