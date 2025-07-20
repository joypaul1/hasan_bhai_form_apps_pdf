<?php
// app/Models/Form1.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormOne  extends Model
{
    protected $table = 'form_1';

    protected $fillable = [
      'customer_id',
      'restaurantname',
      'owner_name',
      'managing_director',
      'post_address',
      'contact_person',
      'phone_number',
      'mobile_number',
      'email',
      'location_address',
      'start_date',
      'opening_hours_days',
      'vat_id',
      'iban',
      'start_fee',
      'additional_kitchen_equipment',
      'delivery_licensee',
      'delivery_platform',
      'signature_licensee',
      'signature_licensor',
    ];

    // relation to Customer
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class);
    }
}
