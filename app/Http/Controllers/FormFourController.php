<?php

namespace App\Http\Controllers;

use App\Models\FormFour;
use App\Models\Customer;
use Illuminate\Http\Request;

class FormFourController extends Controller
{
    protected function rules(): array
    {
        return [
            'restaurant_name'           => 'nullable|string|max:255',
            'legal_restaurant_name'     => 'nullable|string|max:255',
            'trade_register_number'     => 'nullable|string|max:100',

            'ubo1_first_name'           => 'nullable|string|max:100',
            'ubo1_last_name'            => 'nullable|string|max:100',
            'ubo1_dob'                  => 'nullable|date',
            'ubo1_birthplace'           => 'nullable|string|max:255',
            'ubo1_share_percentage'     => 'nullable|numeric',
            'ubo1_address'              => 'nullable|string',

            'ubo2_first_name'           => 'nullable|string|max:100',
            'ubo2_last_name'            => 'nullable|string|max:100',
            'ubo2_dob'                  => 'nullable|date',
            'ubo2_birthplace'           => 'nullable|string|max:255',
            'ubo2_share_percentage'     => 'nullable|numeric',
            'ubo2_address'              => 'nullable|string',

            'ubo3_first_name'           => 'nullable|string|max:100',
            'ubo3_last_name'            => 'nullable|string|max:100',
            'ubo3_dob'                  => 'nullable|date',
            'ubo3_birthplace'           => 'nullable|string|max:255',
            'ubo3_share_percentage'     => 'nullable|numeric',
            'ubo3_address'              => 'nullable|string',

            'signatory_first_name'      => 'nullable|string|max:100',
            'signatory_last_name'       => 'nullable|string|max:100',
            'signatory_function'        => 'nullable|string|max:255',
            'signatory_date'            => 'nullable|date',
            'signature_file'            => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function index(Customer $customer)
    {
        $form = FormFour::firstOrNew(['customer_id' => $customer->id]);
        return view('formFour.index', compact('form', 'customer'));
    }

    public function store(Request $request, Customer $customer)
    {
        $data = $request->validate($this->rules());
        $data['customer_id'] = $customer->id;

        $this->handleUpload($request, $data);
        FormFour::create($data);

        return redirect()->route('customers.formFour.index', $customer)
                         ->with('success', 'Form Four saved.');
    }

    public function update(Request $request, Customer $customer)
    {
        $form = FormFour::where('customer_id', $customer->id)->firstOrFail();

        $data = $request->validate($this->rules());
        $this->handleUpload($request, $data);

        $form->update($data);

        return redirect()->route('customers.formFour.index', $customer)
                         ->with('success', 'Form Four updated.');
    }

    protected function handleUpload(Request $request, array &$data)
    {
        if ($file = $request->file('signature_file')) {
            $data['signature_file'] = $file->store('signatures', 'public');
        }
    }

    public function pdfFormat(Customer $customer, $type)
    {
        $form = FormFour::where('customer_id', $customer->id)->firstOrFail();
        return view("formFour.pdf" . ucfirst($type), compact('form', 'customer'));
    }
}
