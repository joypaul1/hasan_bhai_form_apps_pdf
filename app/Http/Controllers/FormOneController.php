<?php

namespace App\Http\Controllers;

use App\Models\FormOne;
use App\Models\Customer;
use Illuminate\Http\Request;

class FormOneController extends Controller
{
    protected function rules(): array
    {
        return [
            // we no longer need customer_id in the rules,
            // since it comes from the route and we bind it
            'restaurantname'               => 'required|string|max:255',
            'owner_name'                   => 'required|string|max:255',
            'managing_director'            => 'required|string|max:255',
            'post_address'                 => 'required|string',
            'contact_person'               => 'required|string|max:255',
            'phone_number'                 => 'required|string|max:50',
            'mobile_number'                => 'nullable|string|max:50',
            'email'                        => 'required|email|max:255',
            'location_address'             => 'nullable|string',
            'start_date'                   => 'nullable|date',
            'opening_hours_days'           => 'nullable|string|max:255',
            'vat_id'                       => 'nullable|string|max:100',
            'iban'                         => 'nullable|string|max:100',
            'start_fee'                    => 'required|numeric',
            'additional_kitchen_equipment' => 'nullable|string',
            'delivery_licensee'            => 'boolean',
            'delivery_platform'            => 'boolean',
            'signature_licensee'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'signature_licensor'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function index(Customer $customer)
    {
        // either grab existing or a fresh one tied to this customer
        $form = FormOne::firstOrNew([
            'customer_id' => $customer->id
        ]);

        return view('formOne.index', compact('form', 'customer'));
    }

    public function store(Request $request, Customer $customer)
    {
        $data = $request->validate($this->rules());
        $data['customer_id'] = $customer->id;
        $this->handleUploads($request, $data);

        FormOne::create($data);

        return redirect()
            ->route('customers.formOne.index', $customer)
            ->with('success', 'Form saved.');
    }

    public function update(Request $request, Customer $customer)
    {
        $form = FormOne::where('customer_id', $customer->id)
            ->firstOrFail();

        $data = $request->validate($this->rules());
        $this->handleUploads($request, $data);

        $form->update($data);

        return redirect()
            ->route('customers.formOne.index', $customer)
            ->with('success', 'Form updated.');
    }

    protected function handleUploads(Request $request, array &$data)
    {
        if ($f = $request->file('signature_licensee')) {
            $data['signature_licensee'] = $f->store('signatures', 'public');
        }
        if ($f = $request->file('signature_licensor')) {
            $data['signature_licensor'] = $f->store('signatures', 'public');
        }
    }

    function pdfFormat(Customer $customer, $type)
    {
        $form = FormOne::where('customer_id', $customer->id)->firstOrFail();
        if ($type == 'one') {

            // Generate PDF logic here, e.g., using a package like dompdf or snappy
            // For example:
            // $pdf = PDF::loadView('formOne.pdf', compact('form', 'customer'));
            // return $pdf->download('form_one.pdf');

            return view('formOne.pdfOne', compact('form', 'customer'));
        }else if ($type == 'two') {
            // Handle the second type of PDF generation
            // $pdf = PDF::loadView('formOne.pdfTwo', compact('form', 'customer'));
            // return $pdf->download('form_two.pdf');

            return view('formOne.pdfTwo', compact('form', 'customer'));
        }else if ($type == 'three') {
            // Handle the third type of PDF generation
            // $pdf = PDF::loadView('formOne.pdfThree', compact('form', 'customer'));
            // return $pdf->download('form_three.pdf');

            return view('formOne.pdfThree', compact('form', 'customer'));
        }else if ($type == 'four') {
            // Handle the fourth type of PDF generation
            // $pdf = PDF::loadView('formOne.pdfFour', compact('form', 'customer'));
            // return $pdf->download('form_four.pdf');

            return view('formOne.pdfFour', compact('form', 'customer'));
        }
    }
}
