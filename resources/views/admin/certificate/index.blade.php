@extends('admin.index')

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Certificate</h1>
            <a href="{{ route('certificate.create') }}" class="btn btn-primary mb-3">CREATE</a>

            <div class="card">
                <div class="card-body">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Issued_by</th>
                                <th scope="col">Issued_at</th>
                                <th scope="col">Description</th>
                                <th scope="col">File</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($certificates as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->issued_by }}</td>
                                    <td>{{ $row->issued_at }}</td>
                                    <td>{{ $row->desciption }}</td>
                                    <td>
                                        @if ($row->file)
                                            <a href="{{ asset('storage/' . $row->file) }}" class="btn btn-info"
                                                target="_blank">View Certificate</a>
                                        @else
                                            <span>No file Uploaded</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('certificate.edit', $row->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm"
                                            onclick="handleDelete(event, {{ $row->id }})">Delete</a>

                                        <form id="delete-form-{{ $row->id }}"
                                            action="{{ route('certificate.destroy', $row->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function handleDelete(event, id) {
        event.preventDefault();

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        @if(session('success'))
            Swal.fire({
                title: "Succes!",
                text: "{{ session('success') }}",
                icon: "success",
                timer: 2000,
                showConfirmButton: false
            });
        @endif
    });
</script>