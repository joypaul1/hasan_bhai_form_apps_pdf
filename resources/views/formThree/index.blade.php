@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-10">
    <div class="card">
     <div class="card card-body" style="border:1px solid teal">
        <h4 class="mb-4 text-center">
          {{ $form->exists ? 'Edit' : 'Create' }} Form Three for <strong>{{ $customer->name }}</strong>
        </h4>

        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form
          action="{{ $form->exists
                      ? route('customers.formThree.update', $customer)
                      : route('customers.formThree.store',  $customer) }}"
          method="POST"
          enctype="multipart/form-data"
        >
          @csrf
          @if($form->exists) @method('PUT') @endif

          {{-- KETTEN NETZWERK --}}
          <h5 class="p-2 mt-4 bg-light">KETTEN NETZWERK</h5>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Brand</label>
              <input type="text" name="brand"
                     class="form-control @error('brand') is-invalid @enderror"
                     value="{{ old('brand', $form->brand) }}">
              @error('brand') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Kette</label>
              <input type="text" name="chain"
                     class="form-control @error('chain') is-invalid @enderror"
                     value="{{ old('chain', $form->chain) }}">
              @error('chain') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Rahmenvereinbarung</label>
              <input type="text" name="framework_agreement"
                     class="form-control @error('framework_agreement') is-invalid @enderror"
                     value="{{ old('framework_agreement', $form->framework_agreement) }}">
              @error('framework_agreement') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>

          {{-- GESCHÄFTSDETAILS --}}
          <h5 class="p-2 mt-4 bg-light">GESCHÄFTSDETAILS</h5>

          <div class="form-group">
            <label>Alte Kundennummer (falls zutreffend)</label>
            <input type="text" name="old_customer_number"
                   class="form-control @error('old_customer_number') is-invalid @enderror"
                   value="{{ old('old_customer_number', $form->old_customer_number) }}">
            @error('old_customer_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          <div class="form-group">
            <label>Gesetzlicher Name / Firmierung</label>
            <input type="text" name="legal_name"
                   class="form-control @error('legal_name') is-invalid @enderror"
                   value="{{ old('legal_name', $form->legal_name) }}">
            @error('legal_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Vor- und Nachname des Inhabers/Geschäftsführers</label>
              <input type="text" name="owner_name"
                     class="form-control @error('owner_name') is-invalid @enderror"
                     value="{{ old('owner_name', $form->owner_name) }}">
              @error('owner_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-6">
              <label>Telefonnummer des Unternehmens</label>
              <input type="text" name="company_phone"
                     class="form-control @error('company_phone') is-invalid @enderror"
                     value="{{ old('company_phone', $form->company_phone) }}">
              @error('company_phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Kontaktperson</label>
              <input type="text" name="contact_person"
                     class="form-control @error('contact_person') is-invalid @enderror"
                     value="{{ old('contact_person', $form->contact_person) }}">
              @error('contact_person') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Mobilnummer (Kontaktperson)</label>
              <input type="text" name="contact_mobile"
                     class="form-control @error('contact_mobile') is-invalid @enderror"
                     value="{{ old('contact_mobile', $form->contact_mobile) }}">
              @error('contact_mobile') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Straße und Hausnummer</label>
              <input type="text" name="street"
                     class="form-control @error('street') is-invalid @enderror"
                     value="{{ old('street', $form->street) }}">
              @error('street') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Postleitzahl und Ort</label>
              <input type="text" name="postal_code_city"
                     class="form-control @error('postal_code_city') is-invalid @enderror"
                     value="{{ old('postal_code_city', $form->postal_code_city) }}">
              @error('postal_code_city') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-6">
              <label>E-Mail-Adresse (für Rechnungen)</label>
              <input type="email" name="billing_email"
                     class="form-control @error('billing_email') is-invalid @enderror"
                     value="{{ old('billing_email', $form->billing_email) }}">
              @error('billing_email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>

          <div class="form-group">
            <label>E-Mail-Adresse (zur Kommunikation)</label>
            <input type="email" name="communication_email"
                   class="form-control @error('communication_email') is-invalid @enderror"
                   value="{{ old('communication_email', $form->communication_email) }}">
            @error('communication_email') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Handelsregisternummer</label>
              <input type="text" name="commercial_register_number"
                     class="form-control @error('commercial_register_number') is-invalid @enderror"
                     value="{{ old('commercial_register_number', $form->commercial_register_number) }}">
              @error('commercial_register_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Umsatzsteuer ID</label>
              <input type="text" name="vat_id"
                     class="form-control @error('vat_id') is-invalid @enderror"
                     value="{{ old('vat_id', $form->vat_id) }}">
              @error('vat_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Steuernummer</label>
              <input type="text" name="tax_number"
                     class="form-control @error('tax_number') is-invalid @enderror"
                     value="{{ old('tax_number', $form->tax_number) }}">
              @error('tax_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Hat Betriebsstätte in anderem EU-Land?</label>
              <select name="has_eu_branch"
                      class="form-control @error('has_eu_branch') is-invalid @enderror">
                <option value="">Bitte wählen</option>
                <option value="1" {{ old('has_eu_branch', $form->has_eu_branch) == 1 ? 'selected' : '' }}>Ja</option>
                <option value="0" {{ old('has_eu_branch', $form->has_eu_branch) == 0 ? 'selected' : '' }}>Nein</option>
              </select>
              @error('has_eu_branch') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-6">
              <label>Politisch exponierte Person (PEP)?</label>
              <select name="is_pep"
                      class="form-control @error('is_pep') is-invalid @enderror">
                <option value="">Bitte wählen</option>
                <option value="1" {{ old('is_pep', $form->is_pep) == 1 ? 'selected' : '' }}>Ja</option>
                <option value="0" {{ old('is_pep', $form->is_pep) == 0 ? 'selected' : '' }}>Nein</option>
              </select>
              @error('is_pep') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>

          {{-- GEBÜHREN & ZAHLUNGEN --}}
          <h5 class="p-2 mt-4 bg-light">GEBÜHREN &amp; ZAHLUNGEN</h5>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label>Provision Own-Delivery (€)</label>
              <input type="number" step="0.01" name="fee_own_delivery"
                     class="form-control @error('fee_own_delivery') is-invalid @enderror"
                     value="{{ old('fee_own_delivery', $form->fee_own_delivery) }}">
              @error('fee_own_delivery') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Provision Lieferando (€)</label>
              <input type="number" step="0.01" name="fee_platform_delivery"
                     class="form-control @error('fee_platform_delivery') is-invalid @enderror"
                     value="{{ old('fee_platform_delivery', $form->fee_platform_delivery) }}">
              @error('fee_platform_delivery') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Provision Abholung (€)</label>
              <input type="number" step="0.01" name="fee_pickup"
                     class="form-control @error('fee_pickup') is-invalid @enderror"
                     value="{{ old('fee_pickup', $form->fee_pickup) }}">
              @error('fee_pickup') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Online-Zahlungsgebühr (€)</label>
              <input type="number" step="0.01" name="fee_online_payment"
                     class="form-control @error('fee_online_payment') is-invalid @enderror"
                     value="{{ old('fee_online_payment', $form->fee_online_payment) }}">
              @error('fee_online_payment') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label>Kosten Terminal (€)</label>
              <input type="number" step="0.01" name="terminal_cost"
                     class="form-control @error('terminal_cost') is-invalid @enderror"
                     value="{{ old('terminal_cost', $form->terminal_cost) }}">
              @error('terminal_cost') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>NEU-Banner (4 Wochen €)</label>
              <input type="number" step="0.01" name="banner_fee"
                     class="form-control @error('banner_fee') is-invalid @enderror"
                     value="{{ old('banner_fee', $form->banner_fee) }}">
              @error('banner_fee') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Einrichtungsgebühr (€)</label>
              <input type="number" step="0.01" name="setup_fee"
                     class="form-control @error('setup_fee') is-invalid @enderror"
                     value="{{ old('setup_fee', $form->setup_fee) }}">
              @error('setup_fee') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Monatliche Gebühr (€)</label>
              <input type="number" step="0.01" name="monthly_fee"
                     class="form-control @error('monthly_fee') is-invalid @enderror"
                     value="{{ old('monthly_fee', $form->monthly_fee) }}">
              @error('monthly_fee') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>
          <div class="form-group">
            <label>Kosten Bestellübermittlung (€)</label>
            <input type="number" step="0.01" name="order_transmission_cost"
                   class="form-control @error('order_transmission_cost') is-invalid @enderror"
                   value="{{ old('order_transmission_cost', $form->order_transmission_cost) }}">
            @error('order_transmission_cost') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>

          {{-- Bankverbindung --}}
          <h5 class="p-2 mt-4 bg-light">Bankverbindung</h5>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Name Kontoinhaber</label>
              <input type="text" name="account_holder"
                     class="form-control @error('account_holder') is-invalid @enderror"
                     value="{{ old('account_holder', $form->account_holder) }}">
              @error('account_holder') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-6">
              <label>IBAN</label>
              <input type="text" name="iban"
                     class="form-control @error('iban') is-invalid @enderror"
                     value="{{ old('iban', $form->iban) }}">
              @error('iban') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>

          {{-- UNTERZEICHNUNG --}}
          <h5 class="p-2 mt-4 bg-light">UNTERZEICHNUNG</h5>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Vor- und Nachname</label>
              <input type="text" name="signatory_name"
                     class="form-control @error('signatory_name') is-invalid @enderror"
                     value="{{ old('signatory_name', $form->signatory_name) }}">
              @error('signatory_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Datum</label>
              <input type="date" name="signatory_date"
                     class="form-control @error('signatory_date') is-invalid @enderror"
                     value="{{ old('signatory_date', $form->signatory_date) }}">
              @error('signatory_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Unterschrift (Datei)</label>
              <input type="file" name="signature_file"
                     class="form-control-file @error('signature_file') is-invalid @enderror">
              @error('signature_file') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
              @if($form->signature_file)
                <img src="{{ asset('storage/'.$form->signature_file) }}"
                     class="mt-2 img-fluid" style="max-height:80px">
              @endif
            </div>
          </div>

          {{-- ANGABEN ZUM STANDORT --}}
          <h5 class="p-2 mt-4 bg-light">ANGABEN ZUM STANDORT</h5>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Name des Unternehmens</label>
              <input type="text" name="site_name"
                     class="form-control @error('site_name') is-invalid @enderror"
                     value="{{ old('site_name', $form->site_name) }}">
              @error('site_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-6">
              <label>Kategorie</label>
              <input type="text" name="site_category"
                     class="form-control @error('site_category') is-invalid @enderror"
                     value="{{ old('site_category', $form->site_category) }}">
              @error('site_category') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Straße und Hausnummer</label>
              <input type="text" name="site_street"
                     class="form-control @error('site_street') is-invalid @enderror"
                     value="{{ old('site_street', $form->site_street) }}">
              @error('site_street') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Postleitzahl und Ort</label>
              <input type="text" name="site_postal_code_city"
                     class="form-control @error('site_postal_code_city') is-invalid @enderror"
                     value="{{ old('site_postal_code_city', $form->site_postal_code_city) }}">
              @error('site_postal_code_city') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Telefon-Nummer</label>
              <input type="text" name="site_phone"
                     class="form-control @error('site_phone') is-invalid @enderror"
                     value="{{ old('site_phone', $form->site_phone) }}">
              @error('site_phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Kontaktperson</label>
              <input type="text" name="site_contact_person"
                     class="form-control @error('site_contact_person') is-invalid @enderror"
                     value="{{ old('site_contact_person', $form->site_contact_person) }}">
              @error('site_contact_person') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Mobilnummer (Kontaktperson)</label>
              <input type="text" name="site_contact_mobile"
                     class="form-control @error('site_contact_mobile') is-invalid @enderror"
                     value="{{ old('site_contact_mobile', $form->site_contact_mobile) }}">
              @error('site_contact_mobile') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>E-Mail-Adresse für Kunden*</label>
              <input type="email" name="site_customer_email"
                     class="form-control @error('site_customer_email') is-invalid @enderror"
                     value="{{ old('site_customer_email', $form->site_customer_email) }}">
              @error('site_customer_email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>

          {{-- ÜBERSICHT & LEISTUNGEN --}}
          <h5 class="p-2 mt-4 bg-light">ÜBERSICHT &amp; LEISTUNGEN</h5>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label>Anfangsdatum</label>
              <input type="date" name="service_start_date"
                     class="form-control @error('service_start_date') is-invalid @enderror"
                     value="{{ old('service_start_date', $form->service_start_date) }}">
              @error('service_start_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Art der Lieferung</label>
              <input type="text" name="delivery_type"
                     class="form-control @error('delivery_type') is-invalid @enderror"
                     value="{{ old('delivery_type', $form->delivery_type) }}">
              @error('delivery_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-2">
              <label>Abholung</label>
              <select name="pickup_option" class="form-control @error('pickup_option') is-invalid @enderror">
                <option value="">---</option>
                <option value="1" {{ old('pickup_option', $form->pickup_option) ? 'selected' : '' }}>Ja</option>
                <option value="0" {{ old('pickup_option', $form->pickup_option) === 0 ? 'selected' : '' }}>Nein</option>
              </select>
              @error('pickup_option') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-4">
              <label>Zufahrtsmöglichkeiten</label>
              <input type="text" name="access_info"
                     class="form-control @error('access_info') is-invalid @enderror"
                     value="{{ old('access_info', $form->access_info) }}">
              @error('access_info') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label>Barzahlung (Own Delivery)</label>
              <select name="cash_payment" class="form-control @error('cash_payment') is-invalid @enderror">
                <option value="">---</option>
                <option value="1" {{ old('cash_payment', $form->cash_payment) == 1 ? 'selected' : '' }}>Ja</option>
                <option value="0" {{ old('cash_payment', $form->cash_payment) == 0 ? 'selected' : '' }}>Nein</option>
              </select>
              @error('cash_payment') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Stempelkarten-Programm</label>
              <select name="stempelkarte_participation"
                      class="form-control @error('stempelkarte_participation') is-invalid @enderror">
                <option value="">---</option>
                <option value="1" {{ old('stempelkarte_participation', $form->stempelkarte_participation) == 1 ? 'selected' : '' }}>Ja</option>
                <option value="0" {{ old('stempelkarte_participation', $form->stempelkarte_participation) == 0 ? 'selected' : '' }}>Nein</option>
              </select>
              @error('stempelkarte_participation') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Website &amp; Domain</label>
              <input type="text" name="website_domain"
                     class="form-control @error('website_domain') is-invalid @enderror"
                     value="{{ old('website_domain', $form->website_domain) }}">
              @error('website_domain') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Verbindungsmethode</label>
              <input type="text" name="connection_method"
                     class="form-control @error('connection_method') is-invalid @enderror"
                     value="{{ old('connection_method', $form->connection_method) }}">
              @error('connection_method') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
          </div>

          {{-- IHR LIEFERGEBIET --}}
          <h5 class="p-2 mt-4 bg-light">IHR LIEFERGEBIET</h5>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label>Postleitzahl</label>
              <input type="text" name="delivery_area_postal_codes"
                     class="form-control @error('delivery_area_postal_codes') is-invalid @enderror"
                     value="{{ old('delivery_area_postal_codes', $form->delivery_area_postal_codes) }}">
              @error('delivery_area_postal_codes') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Mindestbestellwert (€)</label>
              <input type="number" step="0.01" name="min_order_value"
                     class="form-control @error('min_order_value') is-invalid @enderror"
                     value="{{ old('min_order_value', $form->min_order_value) }}">
              @error('min_order_value') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Lieferkosten (€)</label>
              <input type="number" step="0.01" name="delivery_cost"
                     class="form-control @error('delivery_cost') is-invalid @enderror"
                     value="{{ old('delivery_cost', $form->delivery_cost) }}">
              @error('delivery_cost') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-3">
              <label>Lieferkosten entfallen ab (€)</label>
              <input type="number" step="0.01" name="free_delivery_threshold"
                     class="form-control @error('free_delivery_threshold') is-invalid @enderror"
                     value="{{ old('free_delivery_threshold', $form->free_delivery_threshold) }}">
              @error('free_delivery_threshold') <div class="invalid-feedback">{{ $message }}</div> @enderror
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
