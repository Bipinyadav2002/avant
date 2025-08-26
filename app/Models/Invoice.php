<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';   // Table name
    protected $primaryKey = 'invoice_id';  // Primary key

    public $timestamps = false; // Disable default created_at & updated_at

    protected $fillable = [
        'customer_id',
        'customer_name',
        'customer_address',
        'gst_no',
        'shipping_id',
        'invoice_no',
        'invoice_date',
        'draft_no',
        'draft_date',
        'no_of_charges',
        'exchange_rate',
        'hbl',
        'hbl_date',
        'weight',
        'volume',
        'vsl',
        'pkgs',
        'etd',
        'pol',
        'pod',
        'container_no',
        'igm_no',
        'igm_date',
        'item_no',
        'cfs',
        'subtotal',
        'gsttotal',
        'taxable',
        'cgst',
        'sgst',
        'igst',
        'non_taxable',
        'total',
        'status',
        'created_by',
        'created_date',
        'updated_by',
        'updated_date'
    ];
}
