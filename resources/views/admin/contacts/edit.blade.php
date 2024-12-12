@extends('admin.index')
<div id="layoutSidenav">
    <div id="LayoutSidenav_content">
        <div class="container-fluid px-4">
            <h1>Edit Contact</h1>
            <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $contact->name) }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $contact->email) }}" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" name="phone" id="phone" class="form-control" value="{{ old('phone', $contact->phone) }}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Address</label>
                    <textarea name="alamat" id="alamat" class="form-control" required>{{ old('alamat', $contact->alamat) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>