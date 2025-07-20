@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-6">
    <div class="card card-body" style="border:1px solid blueviolet">
      <h4 class="header-title">
        <i class="ti-pencil-alt"></i> Edit User
      </h4>

      <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label>Name</label>
          <input type="text"
                 name="name"
                 value="{{ old('name', $user->name) }}"
                 class="form-control @error('name') is-invalid @enderror">
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email"
                 name="email"
                 value="{{ old('email', $user->email) }}"
                 class="form-control @error('email') is-invalid @enderror">
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <hr>

        <div class="form-group">
          <label>New Password <small>(leave blank to keep current)</small></label>
          <input type="password"
                 name="password"
                 class="form-control @error('password') is-invalid @enderror">
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label>Confirm New Password</label>
          <input type="password"
                 name="password_confirmation"
                 class="form-control">
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection
