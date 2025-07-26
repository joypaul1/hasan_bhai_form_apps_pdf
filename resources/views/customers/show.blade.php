{{-- resources/views/forms/index.blade.php --}}
@extends('layouts.app')
{{-- {{ route('customers.formOne.index', $customer) }} --}}
@section('content')
    @php
        $form_names = [
            'customers.formOne.index' => 'CLOUDEATERY Kooperationsvereinbarung',
            'customers.formTwo.index' => 'Lieferando CloudEatery Registration',
            'customers.formThree.index' => 'Lieferando CloudEatery Registration Form Chains',
            // 'customers.formFour.index' => 'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)',
        ];
        // Slugs you pass as the 2nd param to the route + the label suffix
        $pdf_variants = [
            'one' => '01',
            'two' => '02',
            'three' => '03',
            'four' => '04',
        ];
        $formSegments = ['One', 'Two', 'Three', 'Four']; // extend if you have more
        $pdfVariants = ['one' => '01', 'two' => '02', 'three' => '03', 'four' => '04'];
       
    @endphp

    <div class="container py-4" style="border:1px solid blueviolet;">
        <h2 class="mb-4 text-center"><i class="ti-files"></i> All Form List Here</h2>

        <div class="card card-body">
            <div class="row justify-content-left align-items-center">
                <div class="col-auto">
                    <div class="mx-2 dropdown">
                        <button class="btn btn-flat btn-outline-info dropdown-toggle" type="button" id="entryForm1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-files"></i> Entry Form
                        </button>
                        <div class="dropdown-menu" aria-labelledby="entryForm1">
                            @foreach ($form_names as $routeName => $label)
                                <a href="{{ route($routeName, ['customer' => $customer]) }}" target="_blank"
                                    class="dropdown-item">
                                    {{ $label }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @foreach ($form_names as $key => $label)
                    @php
                        // $loop->index is 0-based
                        $segment = $formSegments[$loop->index] ?? $formSegments[0];
                        $routeName = "customers.form{$segment}.pdf";
                        $btnId = 'entryForm' . $loop->iteration;
                    @endphp

                    <div class="col-auto {{ $loop->index > 1 ? 'mt-2' : '' }}">
                        <div class="mx-2 dropdown">
                            <button class="btn btn-flat btn-outline-success dropdown-toggle" type="button"
                                id="{{ $btnId }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-printer"></i> {{ $label }} Report
                            </button>

                            <div class="dropdown-menu" aria-labelledby="{{ $btnId }}">
                                @foreach ($pdf_variants as $slug => $num)
                                    <a target="_blank" href="{{ route($routeName, [$customer, $slug]) }}"
                                        class="dropdown-item">
                                        <i class="ti-printer"></i> PDF-{{ $num }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
