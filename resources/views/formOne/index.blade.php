{{-- resources/views/formone/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-8">
            <div class="card card-body" style="border: 1px solid blueviolet">
                <h4 class="text-center header-title">
                    <i class="ti-pencil-alt"></i>
                    {{ $form->exists ? 'Edit' : 'Create' }} Form for {{ $customer->name }}
                </h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form
                    action="{{ $form->exists ? route('customers.formOne.update', $customer) : route('customers.formOne.store', $customer) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($form->exists)
                        @method('PUT')
                    @endif

                    {{-- Kooperationspartner --}}
                    <h5 class="mt-4" style="padding: 1%;background-color:#9bf9b0 !important">Kooperationspartner</h5>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>Restaurantname</label>
                            <input type="text" name="restaurantname"
                                class="form-control @error('restaurantname') is-invalid @enderror"
                                placeholder="Restaurantname" value="{{ old('restaurantname', $form->restaurantname) }}">
                            @error('restaurantname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Inhaber / Name der Firma</label>
                            <input type="text" name="owner_name"
                                class="form-control @error('owner_name') is-invalid @enderror"
                                placeholder="Inhaber bzw. Name der Firma"
                                value="{{ old('owner_name', $form->owner_name) }}">
                            @error('owner_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bei Firma: Name des Geschäftsführers</label>
                        <input type="text" name="managing_director"
                            class="form-control @error('managing_director') is-invalid @enderror"
                            placeholder="Name des Geschäftsführers"
                            value="{{ old('managing_director', $form->managing_director) }}">
                        @error('managing_director')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Postanschrift</label>
                        <textarea name="post_address" class="form-control @error('post_address') is-invalid @enderror" rows="2"
                            placeholder="Postanschrift">{{ old('post_address', $form->post_address) }}</textarea>
                        @error('post_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Kontaktdaten --}}
                    <h5 class="mt-4" style="padding: 1%;background-color:#9bf9b0 !important">Kontaktdaten</h5>
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label>Ansprechpartner</label>
                            <input type="text" name="contact_person"
                                class="form-control @error('contact_person') is-invalid @enderror"
                                placeholder="Ansprechpartner" value="{{ old('contact_person', $form->contact_person) }}">
                            @error('contact_person')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Telefonnummer</label>
                            <input type="text" name="phone_number"
                                class="form-control @error('phone_number') is-invalid @enderror" placeholder="Telefonnummer"
                                value="{{ old('phone_number', $form->phone_number) }}">
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Handynummer</label>
                            <input type="text" name="mobile_number"
                                class="form-control @error('mobile_number') is-invalid @enderror" placeholder="Handynummer"
                                value="{{ old('mobile_number', $form->mobile_number) }}">
                            @error('mobile_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3">
                            <label>E-Mail</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="E-Mail" value="{{ old('email', $form->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Standortdaten --}}
                    <h5 class="mt-4" style="padding: 1%;background-color:#9bf9b0 !important">Standortdaten</h5>
                    <div class="form-group">
                        <label>Anschrift des Standorts (soweit abweichend)</label>
                        <textarea name="location_address" class="form-control @error('location_address') is-invalid @enderror" rows="2"
                            placeholder="Standortadresse">{{ old('location_address', $form->location_address) }}</textarea>
                        @error('location_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>Starttag</label>
                            <input type="date" name="start_date"
                                class="form-control @error('start_date') is-invalid @enderror"
                                value="{{ old('start_date', $form->start_date) }}">
                            @error('start_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-8">
                            <label>Öffnungszeiten und-tage</label>
                            <input type="text" name="opening_hours_days"
                                class="form-control @error('opening_hours_days') is-invalid @enderror"
                                placeholder="z. B. Mo–Fr 10–18 Uhr"
                                value="{{ old('opening_hours_days', $form->opening_hours_days) }}">
                            @error('opening_hours_days')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Sonstige Daten --}}
                    <h5 class="mt-4" style="padding: 1%;background-color:#9bf9b0 !important">Sonstige Daten</h5>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>Umsatzsteuer-ID</label>
                            <input type="text" name="vat_id" class="form-control @error('vat_id') is-invalid @enderror"
                                placeholder="Umsatzsteuer-ID" value="{{ old('vat_id', $form->vat_id) }}">
                            @error('vat_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label>IBAN</label>
                            <input type="text" name="iban"
                                class="form-control @error('iban') is-invalid @enderror" placeholder="IBAN"
                                value="{{ old('iban', $form->iban) }}">
                            @error('iban')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Startgebühr --}}
                    <h5 class="mt-4" style="padding: 1%;background-color:#9bf9b0 !important">Startgebühr</h5>
                    <div class="pl-0 form-group col-sm-4">
                        <label>Euro</label>
                        <input type="number" step="0.01" name="start_fee"
                            class="form-control @error('start_fee') is-invalid @enderror"
                            value="{{ old('start_fee', $form->start_fee ?? '0.00') }}">
                        @error('start_fee')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Zusätzliche Küchenausstattung --}}
                    <h5 class="mt-4" style="padding: 1%;background-color:#9bf9b0 !important">Benötigte zusätzliche Küchenausstattung</h5>
                    <div class="form-group">
                        <textarea name="additional_kitchen_equipment"
                            class="form-control @error('additional_kitchen_equipment') is-invalid @enderror" rows="3"
                            placeholder="z. B. zusätzliche Pfannen / Öfen">{{ old('additional_kitchen_equipment', $form->additional_kitchen_equipment) }}</textarea>
                        @error('additional_kitchen_equipment')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Auslieferung --}}
                    <h5 class="mt-4" style="padding: 1%;background-color:#9bf9b0 !important">Auslieferung</h5>
                    <div class="form-check">
                        <input type="checkbox" name="delivery_licensee" value="1" class="form-check-input"
                            id="delivery_licensee"
                            {{ old('delivery_licensee', $form->delivery_licensee) ? 'checked' : '' }}>
                        <label class="form-check-label" for="delivery_licensee">
                            Eigene Fahrer: Zustellung durch den Lizenznehmer
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="delivery_platform" value="1" class="form-check-input"
                            id="delivery_platform"
                            {{ old('delivery_platform', $form->delivery_platform) ? 'checked' : '' }}>
                        <label class="form-check-label" for="delivery_platform">
                            Plattform: Zustellung durch den Lieferdienst
                        </label>
                    </div>

                    {{-- Unterschriften --}}
                    <h5 class="mt-4" style="padding: 1%;background-color:#9bf9b0 !important">Unterschriften</h5>
                    <div class="form-group">
                        <label>Lizenznehmer</label>
                        <input type="file" name="signature_licensee"
                            class="form-control-file @error('signature_licensee') is-invalid @enderror">
                        @error('signature_licensee')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        @if ($form->signature_licensee)
                            <img src="{{ asset('storage/' . $form->signature_licensee) }}" class="mt-2 img-fluid"
                                style="max-height:100px" alt="Lizenznehmer Signature">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Lizenzgeber</label>
                        <input type="file" name="signature_licensor"
                            class="form-control-file @error('signature_licensor') is-invalid @enderror">
                        @error('signature_licensor')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        @if ($form->signature_licensor)
                            <img src="{{ asset('storage/' . $form->signature_licensor) }}" class="mt-2 img-fluid"
                                style="max-height:100px" alt="Lizenzgeber Signature">
                        @endif
                    </div>

                    {{-- Submit --}}
                    <div class="row justify-content-center">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-sm btn-primary">
                                {{ $form->exists ? 'Update' : 'Save' }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
