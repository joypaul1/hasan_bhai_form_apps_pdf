{{-- resources/views/forms/index.blade.php --}}
@extends('layouts.app')
{{-- {{ route('customers.formOne.index', $customer) }} --}}
@section('content')
    @php
        $form_names = [
            'customers.formOne.index' => 'Report-01',
            'customers.formTwo.index' => 'Report-02',
            'customers.formThree.index' => 'Report-03',
            'customers.formFour.index' => 'Report-04'
            // 'customers.formFour.index' => 'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)',
        ];
        // Slugs you pass as the 2nd param to the route + the label suffix
        $pdf_variants = [
            'one' => 'CLOUDEATERY Kooperationsvereinbarung',
            'two' => 'Lieferando CloudEatery Registration',
            'three' => 'Lieferando CloudEatery Registration Form Chains',
            'four' => 'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)',
        ];
        $reports = [
            'CLOUDEATERY Kooperationsvereinbarung' => [
                'report-01' => ['file' => 'customers.formOne.pdf', 'param' => 'one'],
                'report-02' => ['file' => 'customers.formOne.pdf', 'param' => 'two'],
                'report-03' => ['file' => 'customers.formOne.pdf', 'param' => 'three'],
                'report-04' => ['file' => 'customers.formOne.pdf', 'param' => 'four'],
            ],
            'Lieferando CloudEatery Registration' => [
                'report-01' => ['file' => 'customers.formTwo.pdf', 'param' => 'one'],
                'report-02' => ['file' => 'customers.formTwo.pdf', 'param' => 'two'],
                'report-03' => ['file' => 'customers.formTwo.pdf', 'param' => 'three'],
                'report-04' => ['file' => 'customers.formTwo.pdf', 'param' => 'four'],
            ],
            'Lieferando CloudEatery Registration Form Chains' => [
                'report-01' => ['file' => 'customers.formThree.pdf', 'param' => 'one'],
                'report-02' => ['file' => 'customers.formThree.pdf', 'param' => 'two'],
                'report-03' => ['file' => 'customers.formThree.pdf', 'param' => 'three'],
                'report-04' => ['file' => 'customers.formThree.pdf', 'param' => 'four'],
            ],
        ];

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
                @foreach ($reports as $groupLabel => $items)
                    <div class="col-auto">
                        <div class="mx-2 dropdown">
                            <button class="btn btn-flat btn-outline-info dropdown-toggle" type="button"
                                id="entryForm-{{ Str::slug($groupLabel) }}" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti-files"></i> {{ $groupLabel }}
                            </button>

                            <div class="dropdown-menu" aria-labelledby="entryForm-{{ Str::slug($groupLabel) }}">
                                @foreach ($items as $reportCode => $item)
                                    <a href="{{ route( $item['file'], [$customer, $item['param']]) }}" target="_blank"
                                        class="dropdown-item">
                                        {{ $reportCode }}
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
