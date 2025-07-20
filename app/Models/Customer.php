<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name'];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($customer) {
            // Find last record’s numeric part:
            $last = self::orderBy('id', 'desc')->first();
            $next = $last
                ? ((int) substr($last->customer_id, 5)) + 1
                : 1;

            // Format: CUST_0001
            $customer->customer_id = 'CUST_' . str_pad($next, 4, '0', STR_PAD_LEFT);
        });
    }
}
