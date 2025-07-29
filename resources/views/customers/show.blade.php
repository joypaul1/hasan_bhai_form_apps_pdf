{{-- resources/views/forms/index.blade.php --}}
@extends('layouts.app')
{{-- {{ route('customers.formOne.index', $customer) }} --}}
@section('content')
    @php
        $form_names = [
            'customers.formOne.index' => 'CLOUDEATERY Kooperationsvereinbarung',
            'customers.formTwo.index' => 'Lieferando CloudEatery Registration',
            'customers.formThree.index' => 'Lieferando CloudEatery Registration Form Chains',
            'customers.formFour.index' => 'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)',
        ];
        $report_names = [
            'customers.formOne.pdf' =>[
                'name' => 'CLOUDEATERY Kooperationsvereinbarung',
                'param' => 'one',
            ],
            'customers.formTwo.pdf' => [
                'name' => 'Lieferando CloudEatery Registration',
                'param' => 'two',
            ],
            'customers.formThree.pdf' => [
                'name' => 'Lieferando CloudEatery Registration Form Chains',
                'param' => 'three',
            ],
            'customers.formFour.pdf' => [
                'name' => 'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)',
                'param' => 'four',
            ],
        ];

        //     'Report-01' => [
        //         'CLOUDEATERY Kooperationsvereinbarung' => ['file' => 'customers.formOne.pdf', 'param' => 'one'],
        //         'Lieferando CloudEatery Registration' => ['file' => 'customers.formTwo.pdf', 'param' => 'one'],
        //         'Lieferando CloudEatery Registration Form Chains' => [
        //             'file' => 'customers.formThree.pdf',
        //             'param' => 'one',
        //         ],
        //         'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)' => [
        //             'file' => 'customers.formFour.pdf',
        //             'param' => 'one',
        //         ],
        //     ],
        //     'Report-02' => [
        //         'CLOUDEATERY Kooperationsvereinbarung' => ['file' => 'customers.formTwo.pdf', 'param' => 'two'],
        //         'Lieferando CloudEatery Registration' => ['file' => 'customers.formTwo.pdf', 'param' => 'two'],
        //         'Lieferando CloudEatery Registration Form Chains' => [
        //             'file' => 'customers.formTwo.pdf',
        //             'param' => 'two',
        //         ],
        //         'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)' => [
        //             'file' => 'customers.formTwo.pdf',
        //             'param' => 'two',
        //         ],
        //     ],
        //     'Report-03' => [
        //         'CLOUDEATERY Kooperationsvereinbarung' => ['file' => 'customers.formThree.pdf', 'param' => 'one'],
        //         'Lieferando CloudEatery Registration' => ['file' => 'customers.formThree.pdf', 'param' => 'two'],
        //         'Lieferando CloudEatery Registration Form Chains' => ['file' => 'customers.formThree.pdf', 'param' => 'three'],
        //         'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)' => ['file' => 'customers.formThree.pdf', 'param' => 'four'],
        //     ],
        //     'Report-04' => [
        //         // 'Report-01' => ['file' => 'customers.formFour.pdf', 'param' => 'one'],
        //         // 'Report-02' => ['file' => 'customers.formFour.pdf', 'param' => 'two'],
        //         // 'Report-03' => ['file' => 'customers.formFour.pdf', 'param' => 'three'],
        //         'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)' => ['file' => 'customers.formFour.pdf', 'param' => 'four'],
        //     ],
        // ];

    @endphp

    <div class="container py-4" style="border:1px solid blueviolet;">
        <h2 class="mb-4 text-center"><i class="ti-files"></i> All Form List Here</h2>
        <hr>

        <div class="card card-body">
            <div class="row justify-content-center align-items-center">
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

                    <div class="col-auto">
                        <div class="mx-2 dropdown">
                            <button class="btn btn-flat btn-outline-success dropdown-toggle" type="button"
                                id="entryForm-" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti-files"></i> Reports
                            </button>

                            <div class="dropdown-menu" aria-labelledby="entryForm-">
                                @foreach ($report_names as $routeName => $report)
                                    <a href="{{ route($routeName, [$customer, $report['param']]) }}" target="_blank"
                                        class="dropdown-item">
                                        {{ $report['name'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </div>
@endsection
