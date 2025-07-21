{{-- resources/views/forms/index.blade.php --}}
@extends('layouts.app')

@section('content')
    @php
        $forms = [
            'formOne' => [
                'label' => 'CLOUDEATERY Kooperationsvereinbarung',
                'color' => 'primary',
                'routePrefix' => 'formOne',
                'pdfs' => [
                    'one' => 'CLOUDEATERY_Kooperationsvereinbarung_Vorlage-PDF',
                    'two' => 'Betriebsdatenblatt_Kundenanlage_Vorlage Blanco-PDF',
                    'three' => 'Lieferando CloudEatery Registration Form Chains-PDF',
                    'four' => 'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)-PDF',
                ],
            ],
            'formTwo' => [
                'label' => 'Lieferando CloudEatery Registration',
                'color' => 'success',
                'routePrefix' => 'formTwo',
                'pdfs' => [
                    'one' => 'CLOUDEATERY_Kooperationsvereinbarung_Vorlage-PDF',
                    'two' => 'Betriebsdatenblatt_Kundenanlage_Vorlage Blanco-PDF',
                    'three' => 'Lieferando CloudEatery Registration Form Chains-PDF',
                    'four' => 'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)-PDF',
                ],
            ],
            'formThree' => [
                'label' => 'Form Three (Chains)',
                'color' => 'warning',
                'routePrefix' => 'formThree',
                'pdfs' => [
                    'one' => 'CLOUDEATERY_Kooperationsvereinbarung_Vorlage-PDF',
                    'two' => 'Betriebsdatenblatt_Kundenanlage_Vorlage Blanco-PDF',
                    'three' => 'Lieferando CloudEatery Registration Form Chains-PDF',
                    'four' => 'Lieferando_UBO Blanco Vordruck1 (Nur bei GmbH & Co.)-PDF',
                ],
            ],
        ];
    @endphp

    <div class="container py-4" style="border:1px solid blueviolet;">
        <h2 class="mb-4 text-center"><i class="ti-files"></i> All Form List Here</h2>

        <div class="row justify-content-center">
            @foreach ($forms as $cfg)
                {{-- capture the name prefix once --}}
                @php
                    $base = "customers.{$cfg['routePrefix']}";
                @endphp

                <div class="mb-4 col-12 col-md-6 col-lg-3">
                    <div class="card h-100 border-{{ $cfg['color'] }}">
                        <div class="card-header bg-{{ $cfg['color'] }} text-white">
                            <i class="ti-files"></i> {{ $cfg['label'] }}
                        </div>
                        <div class="card-body d-flex flex-column">
                            {{-- 1) “Open Form” --}}
                            <a target="_blank" href="{{ route($base . '.index', $customer) }}"
                                class="btn btn-outline-{{ $cfg['color'] }} btn-block mb-3"
                                style="white-space:normal!important;
                                      overflow-wrap:anywhere;
                                      word-break:break-word;">
                                <i class="mr-1 ti-files"></i>
                                {{ $cfg['label'] }}‑Form
                            </a>

                            {{-- 2) The PDFs --}}
                            @foreach ($cfg['pdfs'] as $key => $pdfLabel)
                                <a target="_blank" href="{{ route($base . '.pdf', [$customer, $key]) }}"
                                    class="btn btn-outline-{{ $cfg['color'] }} btn-block mb-1"
                                    style="white-space:normal!important;
                                          overflow-wrap:anywhere;
                                          word-break:break-word;">
                                    <i class="mr-1 ti-printer"></i>
                                    {{ $pdfLabel }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
