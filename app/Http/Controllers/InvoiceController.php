<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function invoices()
    {
        // ✅ Get logged-in customer id
        $customerId = Auth::user()->customer_id ?? Auth::id();

        // ✅ Fetch invoices for this customer
        $invoices = Invoice::where('customer_id', $customerId)
            ->orderBy('invoice_date', 'desc')
            ->get();

        // ✅ Pass invoices to view
        return view('account.invoices', compact('invoices'));
    }
}
