@extends("layouts.master")

@section("css")
<style>
    .site-navbar .site-navigation .site-menu>li>a {
        padding: 10px 0;
        color: #f89d13;
        text-decoration: none !important;
        font-weight: 400;
    }

    .site-navbar .site-navigation .site-menu>li>a:hover {
        color: #1f3a6d;
    }

    /* Card Style */
    .invoice-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        padding: 20px;
    }

    .invoice-title {
        font-size: 22px;
        font-weight: 600;
        color: #001e6c;
        margin-bottom: 15px;
        border-left: 5px solid #f89d13;
        padding-left: 10px;
    }

    /* Table Styling */
    .table thead th {
        background: #001e6c;
        color: #fff;
        font-size: 13px;
        text-align: center;
        white-space: nowrap;
        position: sticky;
        top: 0;
        z-index: 2;
    }

    .table td {
        font-size: 13px;
        vertical-align: middle;
        white-space: nowrap;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f7ff;
    }

    .status-badge {
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 500;
    }
    .status-paid {
        background: #d4edda;
        color: #155724;
    }
    .status-pending {
        background: #fff3cd;
        color: #856404;
    }
    .status-cancelled {
        background: #f8d7da;
        color: #721c24;
    }
</style>
@endsection

@section("content")
<div class="site-section">
    <div class="container mt-5 pt-5">
        <div class="invoice-card">
            <h3 class="invoice-title text-center" style="color: #f89d13">📑 My Invoices</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Invoice No</th>
                            <th>Invoice Date</th>
                            <th>Draft No</th>
                            <th>Draft Date</th>
                            <th>Customer</th>
                            <th>GST No</th>
                            <th>Weight</th>
                            <th>Volume</th>
                            <th>POL</th>
                            <th>POD</th>
                            <th>Subtotal</th>
                            <th>GST Total</th>
                            <th>Total</th>
                            <!-- <th>Status</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($invoices as $inv)
                            <tr>
                                <td>{{ $inv->invoice_no }}</td>
                                <td>{{ $inv->invoice_date }}</td>
                                <td>{{ $inv->draft_no }}</td>
                                <td>{{ $inv->draft_date }}</td>
                                <td>{{ $inv->customer_name }}</td>
                                <td>{{ $inv->gst_no }}</td>
                                <td>{{ $inv->weight }}</td>
                                <td>{{ $inv->volume }}</td>
                                <td>{{ $inv->pol }}</td>
                                <td>{{ $inv->pod }}</td>
                                <td>{{ number_format($inv->subtotal,2) }}</td>
                                <td>{{ number_format($inv->gsttotal,2) }}</td>
                                <td><strong>{{ number_format($inv->total,2) }}</strong></td>
                                <!-- <td>
                                    @if($inv->status == 'Paid')
                                        <span class="status-badge status-paid">Paid</span>
                                    @elseif($inv->status == 'Pending')
                                        <span class="status-badge status-pending">Pending</span>
                                    @else
                                        <span class="status-badge status-cancelled">{{ $inv->status }}</span>
                                    @endif
                                </td> -->
                            </tr>
                        @empty
                            <tr>
                                <td colspan="14" class="text-center">No invoices found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
