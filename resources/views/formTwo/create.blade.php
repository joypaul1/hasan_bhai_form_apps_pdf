@extends('layouts.app')
@section('content')
    <div class="row">


        <div class="pt-4">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Create Customers</h2>
                <a href="{{ route('customers.index') }}" class="btn btn-primary"> Customer List</a>
            </div>

            <form action="{{ route('customers.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back</a>
            </form>

        </div>

    </div>
@endsection
