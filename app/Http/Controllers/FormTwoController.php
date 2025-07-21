<?php

namespace App\Http\Controllers;

use App\Models\FormTwo;
use App\Models\Customer;
use Illuminate\Http\Request;

class FormTwoController extends Controller
{
    protected function rules(): array
    {
        return [
            'date'                 => 'required|date',
            'company_name'         => 'required|string|max:255',
            'billing_address'      => 'required|string',
            'delivery_address'     => 'required|string',
            'bank_details'         => 'required|string|max:255',
            'vat_id_number'        => 'required|string|max:100',
            'tax_number'           => 'required|string|max:100',
            'primary_contact'      => 'required|string|max:255',
            'mobile_number'        => 'required|string|max:50',
            'email'                => 'required|email|max:255',
            'landline'             => 'required|string|max:50',
            'first_delivery_date'  => 'nullable|date',
            'handheld_contact'     => 'nullable|string|max:255',
            'email_trans_gourmet'  => 'nullable|email|max:255',
        ];
    }

    public function index(Customer $customer)
    {
        // load existing or blank form for this customer
        $form = FormTwo::firstOrNew(['customer_id' => $customer->id]);
        return view('formTwo.index', compact('form', 'customer'));
    }

    public function store(Request $request, Customer $customer)
    {
        $data = $request->validate($this->rules());
        $data['customer_id'] = $customer->id;
        FormTwo::create($data);

        return redirect()
            ->route('customers.formTwo.index', $customer)
            ->with('success', 'Form-02 saved.');
    }

    public function update(Request $request, Customer $customer)
    {
        $form = FormTwo::where('customer_id', $customer->id)->firstOrFail();
        $data = $request->validate($this->rules());
        $form->update($data);

        return redirect()
            ->route('customers.formTwo.index', $customer)
            ->with('success', 'Form-02 updated.');
    }
    function pdfFormat(Customer $customer, $type)
    {
        $form = FormTwo::where('customer_id', $customer->id)->firstOrFail();
        // dd( $form );
        if ($type == 'one') {

            // Generate PDF logic here, e.g., using a package like dompdf or snappy
            // For example:
            // $pdf = PDF::loadView('formTwo.pdf', compact('form', 'customer'));
            // return $pdf->download('form_one.pdf');

            return view('formTwo.pdfOne', compact('form', 'customer'));
        }else if ($type == 'two') {
            // Handle the second type of PDF generation
            // $pdf = PDF::loadView('formTwo.pdfTwo', compact('form', 'customer'));
            // return $pdf->download('form_two.pdf');

            return view('formTwo.pdfTwo', compact('form', 'customer'));
        }else if ($type == 'three') {
            // Handle the third type of PDF generation
            // $pdf = PDF::loadView('formTwo.pdfThree', compact('form', 'customer'));
            // return $pdf->download('form_three.pdf');

            return view('formTwo.pdfThree', compact('form', 'customer'));
        }else if ($type == 'four') {
            // Handle the fourth type of PDF generation
            // $pdf = PDF::loadView('formTwo.pdfFour', compact('form', 'customer'));
            // return $pdf->download('form_four.pdf');

            return view('formTwo.pdfFour', compact('form', 'customer'));
        }
    }
}
