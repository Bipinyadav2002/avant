<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackAjaxController extends Controller
{
    // Show tracking page (GET)
    public function index(Request $request)
    {
         $shipment = null;
        return view('track.tracking', compact('shipment'));
    }
    public function track(Request $request)
    {
        $request->validate(['booking_id'=>'required|string|max:255']);

        try {
            $shipment = DB::table('shippings as s')
                ->leftJoin('customers as c1', 's.consignee', '=', 'c1.customer_id')
                ->leftJoin('customers as c2', 's.forwarder', '=', 'c2.customer_id')
                ->leftJoin('shippingitemdetails as sd', 's.shipping_id', '=', 'sd.shipping_id')
                ->select(
                    's.booking_id',
                    's.status',
                    'c1.name as consignee_name',
                    'c1.address as consignee_address',
                    'c2.name as forwarder_name',
                    'c2.address as forwarder_address',
                    'sd.container_no',
                    's.hbl_no',
                    's.hbl_date',
                    's.mbl_no',
                    's.mbl_date',
                    's.pol',
                    's.t_port',
                    's.pod',
                    's.fpd',
                    's.vessel',
                    's.etd',
                    's.eta',
                    's.cfs',
                    's.weight',
                    's.pkgs',
                    's.volume',
                    's.igm_no',
                    's.igm_date',
                    's.item_no',
                    's.remark'
                )
                ->where('s.booking_id', $request->booking_id)
                ->first();

            if (!$shipment) {
                return response()->json([
                    'status'=>'error',
                    'message'=>'No shipment found with this Booking ID.'
                ]);
            }

            return response()->json(['status'=>'success','data'=>$shipment]);

        } catch (\Exception $e) {
            \Log::error('Shipment tracking AJAX error: '.$e->getMessage());

            return response()->json([
                'status'=>'error',
                'message'=>'Server error. Please try again later.'
            ]);
        }
    }
}
