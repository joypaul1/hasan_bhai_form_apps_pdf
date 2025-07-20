@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-6">
    <div class="card card-body" style="border:1px solid blueviolet">
      <h4 class="header-title">
        <i class="ti-user"></i> Add New User
      </h4>

      <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="form-group">
          <label>Name</label>
          <input type="text"
                 name="name"
                 value="{{ old('name') }}"
                 class="form-control @error('name') is-invalid @enderror">
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email"
                 name="email"
                 value="{{ old('email') }}"
                 class="form-control @error('email') is-invalid @enderror">
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password"
                 name="password"
                 class="form-control @error('password') is-invalid @enderror">
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password"
                 name="password_confirmation"
                 class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection
