<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTwo extends Model
{
    protected $table = 'form_two';

    protected $fillable = [
        'customer_id',
        'date',
        'company_name',
        'billing_address',
        'delivery_address',
        'bank_details',
        'vat_id_number',
        'tax_number',
        'primary_contact',
        'mobile_number',
        'email',
        'landline',
        'first_delivery_date',
        'handheld_contact',
        'email_trans_gourmet',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
