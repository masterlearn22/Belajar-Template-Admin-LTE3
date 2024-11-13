@extends('main')

@section('content')
<link rel="stylesheet" href="/plugins/master-css/style.css">
<h1>Edit User</h1>
<form method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $user->fullname }}" required>
    </div>
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
    </div>
    <div class="form-group">
        <label for="password">Password (leave blank to keep current password):</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>
    <div class="form-group">
    <select class="form-select" id="role" name="role">
        <option value="mahasiswa" {{ $user->role == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
        <option value="dosen" {{ $user->role == 'dosen' ? 'selected' : '' }}>Dosen</option>
        <option value="guest" {{ $user->role == 'guest' ? 'selected' : '' }}>Guest</option>
    </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
 @endsection