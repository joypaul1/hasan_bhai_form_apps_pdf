<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormThree extends Model
{
    protected $fillable = [
        'customer_id',
        'brand',
        'chain',
        'framework_agreement',
        'old_customer_number',
        'legal_name',
        'owner_name',
        'company_phone',
        'contact_person',
        'contact_mobile',
        'street',
        'postal_code_city',
        'billing_email',
        'communication_email',
        'commercial_register_number',
        'vat_id',
        'tax_number',
        'has_eu_branch',
        'is_pep',

        'fee_own_delivery',
        'fee_platform_delivery',
        'fee_pickup',
        'fee_online_payment',
        'terminal_cost',
        'banner_fee',
        'setup_fee',
        'monthly_fee',
        'order_transmission_cost',

        'account_holder',
        'iban',

        'signatory_name',
        'signatory_date',
        'signature_file',

        'site_name',
        'site_category',
        'site_street',
        'site_postal_code_city',
        'site_phone',
        'site_contact_person',
        'site_contact_mobile',
        'site_customer_email',

        'service_start_date',
        'delivery_type',
        'pickup_option',
        'access_info',
        'cash_payment',
        'stempelkarte_participation',
        'website_domain',
        'connection_method',

        'delivery_area_postal_codes',
        'min_order_value',
        'delivery_cost',
        'free_delivery_threshold',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
