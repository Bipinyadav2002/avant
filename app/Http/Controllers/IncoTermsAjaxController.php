<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IncoTerms;

class IncoTermsAjaxController extends Controller
{
    public function index() {
        return view('apps.incoterms');
    }

    public function ajaxIncoTermsPost(Request $request) {

        $term_id = $request->input("id");
        if ($request->ajax()) {
            $term = IncoTerms::find($term_id);
            return response()->json($term); 
        }
    }

}
