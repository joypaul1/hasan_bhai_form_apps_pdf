{{-- resources/views/formone/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-8">
            <div class="card card-body" style="border: 1px solid blueviolet">
                <h4 class="text-center header-title">
                    <i class="ti-files"></i> All Form List Here
                </h4>

                {{-- Top row of links --}}
                <div class="mb-3 text-center">
                    <a href="{{ route('customers.formOne.index', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-primary"><i class="ti-files"></i> Form-01</a>
                    <a href="{{ route('customers.formOne.pdf', [$customer, 'one']) }}"
                        class="mr-2 btn btn-flat btn-outline-primary">
                        <i class="ti-printer"></i> PDF-01
                    </a>
                    <a href="{{ route('customers.formOne.pdf', [$customer, 'two']) }}"
                        class="mr-2 btn btn-flat btn-outline-primary"><i class="ti-printer"></i> PDF-02</a>
                    <a href="{{ route('customers.formOne.pdf', [$customer, 'three']) }}"
                        class="mr-2 btn btn-flat btn-outline-primary"><i class="ti-printer"></i> PDF-03</a>
                    <a href="{{ route('customers.formOne.pdf', [$customer, 'four']) }}"
                        class="btn btn-flat btn-outline-primary"><i class="ti-printer"></i> PDF-04</a>
                </div>
                <hr>
                {{-- Bottom row of buttons --}}
                {{-- Top row of links --}}
                <div class="mb-3 text-center">
                    <a href="{{ route('customers.formTwo.index', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-success"><i class="ti-files"></i> Form-01</a>
                    <a href="{{ route('customers.formTwo.pdf', [$customer, 'one']) }}"
                        class="mr-2 btn btn-flat btn-outline-success"><i class="ti-printer"></i> PDF-01</a>
                    <a href="{{ route('customers.formTwo.pdf', [$customer, 'two']) }}"
                        class="mr-2 btn btn-flat btn-outline-success"><i class="ti-printer"></i> PDF-02</a>
                    <a href="{{ route('customers.formTwo.pdf', [$customer, 'three']) }}"
                        class="mr-2 btn btn-flat btn-outline-success"><i class="ti-printer"></i> PDF-03</a>
                    <a href="{{ route('customers.formTwo.pdf', [$customer, 'four']) }}" class="btn btn-flat btn-outline-success"><i
                            class="ti-printer"></i> PDF-04</a>
                </div>
                <hr>
                {{-- Top row of links --}}
                <div class="mb-3 text-center">
                    <a href="{{ url('customers.formOne.index', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-warning"><i class="ti-files"></i> Form-01</a>
                    <a href="{{ url('customers.formOne.pdf', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-warning"><i class="ti-printer"></i> PDF-01</a>
                    <a href="{{ url('customers.formOne.pdfTwo', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-warning"><i class="ti-printer"></i> PDF-02</a>
                    <a href="{{ url('customers.formOne.pdfThree', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-warning"><i class="ti-printer"></i> PDF-03</a>
                    <a href="{{ url('customers.formOne.pdfFour', $customer) }}" 
                    class="btn btn-flat btn-outline-warning"><i
                            class="ti-printer"></i> PDF-04</a>
                </div>
                <hr>
                {{-- Top row of links --}}
                <div class="mb-3 text-center">
                    <a href="{{ url('customers.formOne.index', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-info"><i class="ti-files"></i> Form-01</a>
                    <a href="{{ url('customers.formOne.pdf', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-info"><i class="ti-printer"></i> PDF-01</a>
                    <a href="{{ url('customers.formOne.pdfTwo', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-info"><i class="ti-printer"></i> PDF-02</a>
                    <a href="{{ url('customers.formOne.pdfThree', $customer) }}"
                        class="mr-2 btn btn-flat btn-outline-info"><i class="ti-printer"></i> PDF-03</a>
                    <a href="{{ url('customers.formOne.pdfFour', $customer) }}" class="btn btn-flat btn-outline-info"><i
                            class="ti-printer"></i> PDF-04</a>
                </div>
                <hr>
            </div>

        </div>
    </div>
    </div>
@endsection
