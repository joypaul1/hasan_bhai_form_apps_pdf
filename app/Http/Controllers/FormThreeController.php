<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\FormThree;
use Illuminate\Http\Request;

class FormThreeController extends Controller
{
    protected function rules(): array
{
    return [
      'brand'                       => 'nullable|string|max:255',
      'chain'                       => 'nullable|string|max:255',
      'framework_agreement'         => 'nullable|string|max:255',

      'old_customer_number'         => 'nullable|string|max:100',
      'legal_name'                  => 'nullable|string|max:255',
      'owner_name'                  => 'nullable|string|max:255',
      'company_phone'               => 'nullable|string|max:50',
      'contact_person'              => 'nullable|string|max:255',
      'contact_mobile'              => 'nullable|string|max:50',
      'street'                      => 'nullable|string|max:255',
      'postal_code_city'            => 'nullable|string|max:100',
      'billing_email'               => 'nullable|email|max:255',
      'communication_email'         => 'nullable|email|max:255',
      'commercial_register_number'  => 'nullable|string|max:100',
      'vat_id'                      => 'nullable|string|max:50',
      'tax_number'                  => 'nullable|string|max:50',
      'has_eu_branch'               => 'nullable|boolean',
      'is_pep'                      => 'nullable|boolean',

      'fee_own_delivery'            => 'nullable|numeric',
      'fee_platform_delivery'       => 'nullable|numeric',
      'fee_pickup'                  => 'nullable|numeric',
      'fee_online_payment'          => 'nullable|numeric',
      'terminal_cost'               => 'nullable|numeric',
      'banner_fee'                  => 'nullable|numeric',
      'setup_fee'                   => 'nullable|numeric',
      'monthly_fee'                 => 'nullable|numeric',
      'order_transmission_cost'     => 'nullable|numeric',

      'account_holder'              => 'nullable|string|max:255',
      'iban'                        => 'nullable|string|max:34',

      'signatory_name'              => 'nullable|string|max:255',
      'signatory_date'              => 'nullable|date',
      'signature_file'              => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

      'site_name'                   => 'nullable|string|max:255',
      'site_category'               => 'nullable|string|max:100',
      'site_street'                 => 'nullable|string|max:255',
      'site_postal_code_city'       => 'nullable|string|max:100',
      'site_phone'                  => 'nullable|string|max:50',
      'site_contact_person'         => 'nullable|string|max:255',
      'site_contact_mobile'         => 'nullable|string|max:50',
      'site_customer_email'         => 'nullable|email|max:255',

      'service_start_date'          => 'nullable|date',
      'delivery_type'               => 'nullable|string|max:100',
      'pickup_option'               => 'nullable|boolean',
      'access_info'                 => 'nullable|string|max:255',
      'cash_payment'                => 'nullable|boolean',
      'stempelkarte_participation'  => 'nullable|boolean',
      'website_domain'              => 'nullable|string|max:255',
      'connection_method'           => 'nullable|string|max:255',

      'delivery_area_postal_codes'  => 'nullable|string|max:255',
      'min_order_value'             => 'nullable|numeric',
      'delivery_cost'               => 'nullable|numeric',
      'free_delivery_threshold'     => 'nullable|numeric',
    ];
}

    public function index(Customer $customer)
    {
        $form = FormThree::firstOrNew([
            'customer_id' => $customer->id,
        ]);

        return view('formThree.index', compact('form', 'customer'));
    }

    public function store(Request $request, Customer $customer)
    {
        $data = $request->validate($this->rules());
        $data['customer_id'] = $customer->id;
        $this->handleUpload($request, $data);

        FormThree::create($data);

        return redirect()
            ->route('customers.formThree.index', $customer)
            ->with('success', 'Form Three saved.');
    }

    public function update(Request $request, Customer $customer)
    {
        $form = FormThree::where('customer_id', $customer->id)
            ->firstOrFail();

        $data = $request->validate($this->rules());
        $this->handleUpload($request, $data);

        $form->update($data);

        return redirect()
            ->route('customers.formThree.index', $customer)
            ->with('success', 'Form Three updated.');
    }

    protected function handleUpload(Request $request, array &$data)
    {
        if ($f = $request->file('signature_file')) {
            $data['signature_file'] = $f->store('signatures', 'public');
        }
    }

    public function pdfFormat(Customer $customer, $type)
    {
        $form = FormThree::where('customer_id', $customer->id)
            ->firstOrFail();

        // choose view based on $type…
        return view("formThree.pdf{$type}", compact('form', 'customer'));
    }
}
