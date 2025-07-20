@extends('layouts.app')

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-8">
            <div class="card card-body" style="border:1px solid teal">
                <h4 class="text-center header-title">
                    <i class="ti-pencil-alt"></i>
                    {{ $form->exists ? 'Edit' : 'Create' }} Form-02 for {{ $customer->name }}
                </h4>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form
                    action="{{ $form->exists ? route('customers.formTwo.update', $customer) : route('customers.formTwo.store', $customer) }}"
                    method="POST">
                    @csrf
                    @if ($form->exists)
                        @method('PUT')
                    @endif

                    {{-- §1 Betriebsdatenblatt Kundenanlage --}}
                    <h5 class="mt-4" style="padding: 1%;background-color:#9bf9b0 !important">Betriebsdatenblatt
                        Kundenanlage</h5>

                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
                            value="{{ old('date', $form->date) }}">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Firmierung</label>
                        <input type="text" name="company_name"
                            class="form-control @error('company_name') is-invalid @enderror" placeholder="Firma"
                            value="{{ old('company_name', $form->company_name) }}">
                        @error('company_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Rechnungsadresse</label>
                        <textarea name="billing_address" class="form-control @error('billing_address') is-invalid @enderror" rows="2">{{ old('billing_address', $form->billing_address) }}</textarea>
                        @error('billing_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Lieferadresse</label>
                        <textarea name="delivery_address" class="form-control @error('delivery_address') is-invalid @enderror" rows="2">{{ old('delivery_address', $form->delivery_address) }}</textarea>
                        @error('delivery_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>Bankverbindung (IBAN, BIC)</label>
                            <input type="text" name="bank_details"
                                class="form-control @error('bank_details') is-invalid @enderror"
                                value="{{ old('bank_details', $form->bank_details) }}">
                            @error('bank_details')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3">
                            <label>USt-ID-Nr.</label>
                            <input type="text" name="vat_id_number"
                                class="form-control @error('vat_id_number') is-invalid @enderror"
                                value="{{ old('vat_id_number', $form->vat_id_number) }}">
                            @error('vat_id_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Steuernummer</label>
                            <input type="text" name="tax_number"
                                class="form-control @error('tax_number') is-invalid @enderror"
                                value="{{ old('tax_number', $form->tax_number) }}">
                            @error('tax_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label>Hauptansprechpartner</label>
                            <input type="text" name="primary_contact"
                                class="form-control @error('primary_contact') is-invalid @enderror"
                                value="{{ old('primary_contact', $form->primary_contact) }}">
                            @error('primary_contact')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Handy-Nr.</label>
                            <input type="text" name="mobile_number"
                                class="form-control @error('mobile_number') is-invalid @enderror"
                                value="{{ old('mobile_number', $form->mobile_number) }}">
                            @error('mobile_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3">
                            <label>E-Mail</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $form->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="pl-0 form-group col-sm-4">
                        <label>Festnetz</label>
                        <input type="text" name="landline" class="form-control @error('landline') is-invalid @enderror"
                            value="{{ old('landline', $form->landline) }}">
                        @error('landline')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- §2 Nur für Trans Gourmet --}}
                    <h5 class="mt-4 text-danger">Nur für Trans Gourmet</h5>

                    <div class="form-group">
                        <label>Datum Erstanlieferung</label>
                        <input type="date" name="first_delivery_date"
                            class="form-control @error('first_delivery_date') is-invalid @enderror"
                            value="{{ old('first_delivery_date', $form->first_delivery_date) }}">
                        @error('first_delivery_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Ansprechpartner für Handheld</label>
                        <input type="text" name="handheld_contact"
                            class="form-control @error('handheld_contact') is-invalid @enderror"
                            value="{{ old('handheld_contact', $form->handheld_contact) }}">
                        @error('handheld_contact')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>E-Mail (später für Trans Gourmet)</label>
                        <input type="email" name="email_trans_gourmet"
                            class="form-control @error('email_trans_gourmet') is-invalid @enderror"
                            value="{{ old('email_trans_gourmet', $form->email_trans_gourmet) }}">
                        @error('email_trans_gourmet')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- submit --}}
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-sm btn-primary">
                            {{ $form->exists ? 'Update' : 'Save' }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
