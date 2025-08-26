@extends('layouts.master')

@section('css')
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

    #trackResult p {
        margin: 5px 0;
    }

    .shipment-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }

    .shipment-table th,
    .shipment-table td {
        border: 1px solid #001e6c;
        padding: 6px 8px;
        vertical-align: top;
    }

    .shipment-header {
        background-color: #ffd500;
        color: #001e6c;
        font-weight: bold;
        font-size: 16px;
    }

    .shipment-title {
        background-color: #001e6c;
        color: #fff;
        font-weight: bold;
        font-size: 18px;
        text-align: center;
    }

    .remarks-row {
        color: green;
        font-weight: bold;
    }

    .text-primary {
        color: #051076ff !important;
    }
</style>
@endsection

@section('content')
<div class="site-section">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-10 mx-auto" data-aos="fade">
                <h2 class="text-primary mb-4 text-center">
                    <img src="{{ asset('img/tracking.png') }}" style="width:40px;"> Track Shipment
                </h2>

                <!-- AJAX Form -->
                <form id="trackForm">
                    @csrf
                    <input type="text" name="booking_id" id="booking_id" class="form-control mb-3"
                        placeholder="Enter Booking ID" required>
                    <button type="submit" id="trackBtn" class="btn text-white px-4 py-2 w-100"
                        style="background-color: #fca311; font-weight: bold;">
                        TRACK NOW
                    </button>
                </form>

                <div id="loader" style="display:none;" class="mt-2 text-center">
                    <div class="spinner-border text-secondary" role="status"><span class="sr-only">Loading...</span>
                    </div>
                </div>

                <div id="trackResult" class="mt-4"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#trackForm').submit(function(e) {
            e.preventDefault();
            let bookingId = $('#booking_id').val().trim();
            if (!bookingId) return;

            $('#loader').show();
            $('#trackResult').html('<div class="text-center text-muted">Tracking shipment...</div>');
            $('#trackBtn').prop('disabled', true);

            $.ajax({
                url: "{{ route('track.ajax') }}",
                type: "POST",
                data: {
                    booking_id: bookingId,
                    _token: "{{ csrf_token() }}"
                },
                success: function(res) {
                    $('#loader').hide();
                    $('#trackBtn').prop('disabled', false);

                    if (res.status === 'success') {
                        let s = res.data;

                        function showDate(date) {
                            if (!date || date === '0000-00-00') return '';
                            let d = new Date(date);
                            let day = String(d.getDate()).padStart(2, '0');
                            let month = String(d.getMonth() + 1).padStart(2, '0');
                            let year = d.getFullYear();
                            return `${day}-${month}-${year}`;
                        }

                        let html = `
<table class="shipment-table">
    <tr>
        <td colspan="2" class="shipment-header">SHIPPING INFORMATION</td>
        <td colspan="2" class="shipment-title">AVANT</td>
    </tr>
    <tr>
        <td colspan="4" style="padding:0;">
            <table style="width:100%;border-collapse:collapse;font-size:13px;">
                <tr>
                    <td colspan="4" style="padding:4px 8px;"><strong>Booking ID :</strong> <span style="color:red">${s.booking_id}</span></td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Hbl No</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.hbl_no ?? ''}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">Date</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${showDate(s.hbl_date)}</td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Mbl No</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.mbl_no ?? ''}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">Date</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${showDate(s.mbl_date)}</td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Pol</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.pol ?? ''}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">T.Port</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.t_port ?? ''}</td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Pod</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.pod ?? ''}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">Fpd</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.fpd ?? ''}</td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Vsl</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.vessel ?? ''}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">Etd</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${showDate(s.etd)}</td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Cont No</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.container_no ?? ''}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">Eta</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${showDate(s.eta)}</td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Cfs</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.cfs ?? ''}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">Weight</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.weight ?? '0.00'}</td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Pkgs</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.pkgs ?? '0.00'}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">Volume</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.volume ?? '0.00'}</td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Igm No</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.igm_no ?? ''}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">Igm Date</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${showDate(s.igm_date)}</td>
                </tr>
                <tr>
                    <td style="border:1px dotted #001d6c;padding:4px;">Cargo Rcv Date</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.cargo_rcv_date ?? ''}</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">Item No</td>
                    <td style="border:1px dotted #001d6c;padding:4px;">${s.item_no ?? ''}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
`;

                        $('#trackResult').html(html);

                    } else {
                        $('#trackResult').html(
                            `<div class="alert alert-danger text-center">${res.message}</div>`
                        );
                    }
                },
                error: function() {
                    $('#loader').hide();
                    $('#trackBtn').prop('disabled', false);
                    $('#trackResult').html(
                        '<div class="alert alert-danger text-center">Server error. Please try again later.</div>'
                    );
                }
            });
        });
    });
</script>
@endsection