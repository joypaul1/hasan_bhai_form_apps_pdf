@extends('layouts.app')
@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-8">
            <div class="card card-body " style="border: 1px solid blueviolet">
                <h4 class="header-title"> <i class='ti-pencil-alt'></i> Add New Customer</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('customers.update', $customer) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    placeholder="customer name here.." name="name" value="{{ old('name', $customer->name) }}"
                                    id="example-text-input">
                            </div>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="form-label" for="basic-default-fullname">&nbsp;</label>
                                <button class="btn btn-sm btn-warning" type="submit">Update </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p>Total Customers: {{ $customers->total() }}</p>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
