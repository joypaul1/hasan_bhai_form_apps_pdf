@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body" style="border:1px solid teal">
                    <h4 class="mb-4 text-center">
                        {{ $form->exists ? 'Edit' : 'Create' }} Form Four for <strong>{{ $customer->name }}</strong>
                    </h4>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form
                        action="{{ $form->exists ? route('customers.formFour.update', $customer) : route('customers.formFour.store', $customer) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($form->exists)
                            @method('PUT')
                        @endif

                        {{-- Restaurant Details --}}
                        <h5 class="p-2 mt-4 bg-light">RESTAURANT DETAILS</h5>
                        <div class="form-group">
                            <label>Name des Restaurants</label>
                            <input type="text" name="restaurant_name" class="form-control"
                                value="{{ old('restaurant_name', $form->restaurant_name) }}">
                        </div>
                        <div class="form-group">
                            <label>Gesetzlicher Name</label>
                            <input type="text" name="legal_restaurant_name" class="form-control"
                                value="{{ old('legal_restaurant_name', $form->legal_restaurant_name) }}">
                        </div>
                        <div class="form-group">
                            <label>Handelsregisternummer</label>
                            <input type="text" name="trade_register_number" class="form-control"
                                value="{{ old('trade_register_number', $form->trade_register_number) }}">
                        </div>

                        {{-- UBO Sections --}}
                        @for ($i = 1; $i <= 3; $i++)
                            <h5 class="p-2 mt-4 bg-light">{{ $i }}. UBO DETAILS</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Vorname</label>
                                    <input type="text" name="ubo{{ $i }}_first_name" class="form-control"
                                        value="{{ old("ubo{$i}_first_name", $form->{'ubo' . $i . '_first_name'}) }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nachname</label>
                                    <input type="text" name="ubo{{ $i }}_last_name" class="form-control"
                                        value="{{ old("ubo{$i}_last_name", $form->{'ubo' . $i . '_last_name'}) }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Geburtsdatum</label>
                                    <input type="date" name="ubo{{ $i }}_dob" class="form-control"
                                        value="{{ old("ubo{$i}_dob", $form->{'ubo' . $i . '_dob'}) }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Geburtsort und -land</label>
                                    <input type="text" name="ubo{{ $i }}_birthplace" class="form-control"
                                        value="{{ old("ubo{$i}_birthplace", $form->{'ubo' . $i . '_birthplace'}) }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>% der Anteile</label>
                                    <input type="number" step="0.01" name="ubo{{ $i }}_share_percentage"
                                        class="form-control"
                                        value="{{ old("ubo{$i}_share_percentage", $form->{'ubo' . $i . '_share_percentage'}) }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Wohnadresse</label>
                                <textarea name="ubo{{ $i }}_address" class="form-control" rows="2">{{ old("ubo{$i}_address", $form->{'ubo' . $i . '_address'}) }}</textarea>
                            </div>
                        @endfor

                        {{-- Last Section --}}
                        <h5 class="p-2 mt-4 bg-light">UNTERZEICHNUNG</h5>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Vorname</label>
                                <input type="text" name="signatory_first_name" class="form-control"
                                    value="{{ old('signatory_first_name', $form->signatory_first_name) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Nachname</label>
                                <input type="text" name="signatory_last_name" class="form-control"
                                    value="{{ old('signatory_last_name', $form->signatory_last_name) }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Funktion</label>
                                <input type="text" name="signatory_function" class="form-control"
                                    value="{{ old('signatory_function', $form->signatory_function) }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Datum</label>
                                <input type="date" name="signatory_date" class="form-control"
                                    value="{{ old('signatory_date', $form->signatory_date) }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Unterschrift (Datei)</label>
                                <input type="file" name="signature_file" class="form-control-file">
                                @if ($form->signature_file)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $form->signature_file) }}" alt="Signature"
                                            style="max-height: 80px;">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ $form->exists ? 'Update' : 'Save' }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
