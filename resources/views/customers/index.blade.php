@extends('layouts.app')
@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-8">
            <div class="card card-body " style="border: 1px solid blueviolet">
                <h4 class="header-title"> <i class='ti-pencil-alt'></i> Add New Customer</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="customer name here.." name="name"
                                    value="{{ old('name') }}" id="example-text-input">
                            </div>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="form-label" for="basic-default-fullname">&nbsp;</label>
                                <button class="btn btn-sm btn-primary" type="submit">Submit </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card card-body mt-4" style="border: 1px solid blueviolet">
                <div class="">
                    <h4 class="header-title"><i class="ti-list"></i> Customers List</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Code/ID</th>
                                    <th>Name</th>
                                    <th>Form Data</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $c)
                                    <tr>
                                        <td width="10">{{ $c->id }}</td>
                                        <td width="30">{{ $c->customer_id }}</td>
                                        <td width="40">{{ $c->name }}</td>
                                        <td width="5">
                                            <a href="{{ route('customers.show', $c) }}"
                                                class="btn btn-sm
                                                btn-info"> <i class="ti-files"></i> View</a>
                                        </td>
                                        <td width="10">
                                            <a href="{{ route('customers.edit', $c) }}"
                                                class="btn btn-sm
                                                btn-warning"> <i class="ti-pencil"></i> Edit</a>
                                            <form action="{{ route('customers.destroy', $c) }}" method="POST"
                                                class="d-inline">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Delete?')"> <i class="ti-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $customers->links() }}


                    </div>
                </div>

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
