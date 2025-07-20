<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $customerCount = Customer::count();
        $userCount = auth()->user() ? auth()->user()->count() : 0; // Assuming you want to count users
        // dd( $userCount);
        return view('dashboard', compact('customerCount', 'userCount'));
    }
}
