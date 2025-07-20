@extends('layouts.app')

@section('content')
<div class="row justify-content-center align-items-center">
  <div class="col-8">
    <div class="card card-body" style="border:1px solid blueviolet">
      <h4 class="header-title">
        <i class="ti-list"></i> Users List
        <a href="{{ route('users.create') }}"
           class="float-right btn btn-sm btn-primary">
          <i class="ti-user"></i> Add New User
        </a>
      </h4>

      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="thead-light">
            <tr>
              <th width="10">ID</th>
              <th width="100">Name</th>
              <th width="150">Email</th>
              <th width="100">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $u)
              <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>
                  <a href="{{ route('users.edit', $u) }}"
                     class="btn btn-sm btn-warning">
                    <i class="ti-pencil"></i> Edit
                  </a>
                  <form action="{{ route('users.destroy', $u) }}"
                        method="POST"
                        class="d-inline"
                        onsubmit="return confirm('Delete this user?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">
                      <i class="ti-trash"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        {{ $users->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
