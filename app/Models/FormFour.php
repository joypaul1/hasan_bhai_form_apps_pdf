<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormFour extends Model
{
    use HasFactory;

    protected $table = 'form_fours';

    protected $fillable = [
        'customer_id',

        // Restaurant Details
        'restaurant_name',
        'legal_restaurant_name',
        'trade_register_number',

        // UBO 1
        'ubo1_first_name',
        'ubo1_last_name',
        'ubo1_dob',
        'ubo1_birthplace',
        'ubo1_share_percentage',
        'ubo1_address',

        // UBO 2
        'ubo2_first_name',
        'ubo2_last_name',
        'ubo2_dob',
        'ubo2_birthplace',
        'ubo2_share_percentage',
        'ubo2_address',

        // UBO 3
        'ubo3_first_name',
        'ubo3_last_name',
        'ubo3_dob',
        'ubo3_birthplace',
        'ubo3_share_percentage',
        'ubo3_address',

        // Signatory
        'signatory_first_name',
        'signatory_last_name',
        'signatory_function',
        'signatory_date',
        'signature_file',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
