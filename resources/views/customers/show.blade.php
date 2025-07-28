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
        // Slugs you pass as the 2nd param to the route + the label suffix
        // $pdf_variants = [
        //     'one' => 'CLOUDEATERY Kooperationsvereinbarung',
        //     'two' => 'Lieferando CloudEatery Registration',
        //     'three' => 'Lieferando CloudEatery Registration Form Chains',
        //     'four' => 'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)',
        // ];
        $reports = [
            'CLOUDEATERY Kooperationsvereinbarung' => [
                'Report-01' => ['file' => 'customers.formOne.pdf', 'param' => 'one'],
                'Report-02' => ['file' => 'customers.formTwo.pdf', 'param' => 'one'],
                'Report-03' => ['file' => 'customers.formThree.pdf', 'param' => 'one'],
                'Report-04' => ['file' => 'customers.formFour.pdf', 'param' => 'one'],
            ],
            'Lieferando CloudEatery Registration' => [
                'Report-01' => ['file' => 'customers.formOne.pdf', 'param' => 'two'],
                'Report-02' => ['file' => 'customers.formTwo.pdf', 'param' => 'two'],
                'Report-03' => ['file' => 'customers.formThree.pdf', 'param' => 'two'],
                'Report-04' => ['file' => 'customers.formFour.pdf', 'param' => 'two'],
            ],
            'Lieferando CloudEatery Registration Form Chains' => [
                'Report-01' => ['file' => 'customers.formOne.pdf', 'param' => 'one'],
                'Report-02' => ['file' => 'customers.formTwo.pdf', 'param' => 'two'],
                'Report-03' => ['file' => 'customers.formThree.pdf', 'param' => 'three'],
                'Report-04' => ['file' => 'customers.formFour.pdf', 'param' => 'four'],
            ],
            'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)' => [
                // 'Report-01' => ['file' => 'customers.formOne.pdf', 'param' => 'one'],
                // 'Report-02' => ['file' => 'customers.formTwo.pdf', 'param' => 'two'],
                // 'Report-03' => ['file' => 'customers.formThree.pdf', 'param' => 'three'],
                'Report-04' => ['file' => 'customers.formFour.pdf', 'param' => 'four'],
            ],
        ];
        $reports = [
            'Report-01' => [
                'CLOUDEATERY Kooperationsvereinbarung' => ['file' => 'customers.formOne.pdf', 'param' => 'one'],
                'Lieferando CloudEatery Registration' => ['file' => 'customers.formTwo.pdf', 'param' => 'one'],
                'Lieferando CloudEatery Registration Form Chains' => [
                    'file' => 'customers.formThree.pdf',
                    'param' => 'one',
                ],
                'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)' => [
                    'file' => 'customers.formFour.pdf',
                    'param' => 'one',
                ],
            ],
            'Report-02' => [
                'CLOUDEATERY Kooperationsvereinbarung' => ['file' => 'customers.formTwo.pdf', 'param' => 'two'],
                'Lieferando CloudEatery Registration' => ['file' => 'customers.formTwo.pdf', 'param' => 'two'],
                'Lieferando CloudEatery Registration Form Chains' => [
                    'file' => 'customers.formTwo.pdf',
                    'param' => 'two',
                ],
                'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)' => [
                    'file' => 'customers.formTwo.pdf',
                    'param' => 'two',
                ],
            ],
            'Report-03' => [
                'CLOUDEATERY Kooperationsvereinbarung' => ['file' => 'customers.formThree.pdf', 'param' => 'one'],
                'Lieferando CloudEatery Registration' => ['file' => 'customers.formThree.pdf', 'param' => 'two'],
                'Lieferando CloudEatery Registration Form Chains' => ['file' => 'customers.formThree.pdf', 'param' => 'three'],
                'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)' => ['file' => 'customers.formThree.pdf', 'param' => 'four'],
            ],
            'Report-04' => [
                // 'Report-01' => ['file' => 'customers.formFour.pdf', 'param' => 'one'],
                // 'Report-02' => ['file' => 'customers.formFour.pdf', 'param' => 'two'],
                // 'Report-03' => ['file' => 'customers.formFour.pdf', 'param' => 'three'],
                'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)' => ['file' => 'customers.formFour.pdf', 'param' => 'four'],
            ],
        ];

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
                @foreach ($reports as $groupLabel => $items)
                    <div class="col-auto">
                        <div class="mx-2 dropdown">
                            <button class="btn btn-flat btn-outline-success dropdown-toggle" type="button"
                                id="entryForm-{{ Str::slug($groupLabel) }}" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ti-files"></i> {{ $groupLabel }}
                            </button>

                            <div class="dropdown-menu" aria-labelledby="entryForm-{{ Str::slug($groupLabel) }}">
                                @foreach ($items as $reportCode => $item)
                                    <a href="{{ route($item['file'], [$customer, $item['param']]) }}" target="_blank"
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
