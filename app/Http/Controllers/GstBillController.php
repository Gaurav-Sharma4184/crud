<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use App\Models\Gstbill;



class GstBillController extends Controller
{
    public function index(){
        $bills = GstBill::with('party')->get(); 
        return view("gst-bill.index",compact('bills'));
    }

    public function addGstBill(){
        $data['parties'] = Party::where('party_type','client')->orderBY('full_name')->get();
        return view("gst-bill.add",$data);
    }
    public function createGstBill(Request $request){

        $request->validate([
            'party_id'=>'required|exists:parties,id',
            'invoice_date'=>'required|date',
            'invoice_no'=>'required|string|max:255',
            'item_description'=>'required|max:250',
            'total_amount'=>'required|numeric',
            'cgst_rate'=>'nullable|min:0|max:100',
            'cgst_amount'=>'numeric|min:0',
            'sgst_rate'=>'nullable|min:0|max:100',
            'sgst_amount'=>'numeric|min:0',
            'igst_rate'=>'nullable|min:0|max:100',
            'igst_amount'=>'numeric|min:0',
            'tax_amount'=>'numeric|min:0',
            'net_amount'=>'required|numeric|min:0',
        ]);

        $param = $request->all();
        // return view("party.add");
        // dd($request);
        unset($param['_token']);
        GstBill::create($param);

        return redirect()->route('add-gst-bill')->withStatus('Bill created successfully!');
    }

    public function print(){
        return view("gst-bill.print");
    }
}
