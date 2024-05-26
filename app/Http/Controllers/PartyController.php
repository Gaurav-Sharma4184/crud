<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Party;


class PartyController extends Controller
{
    public function index(){
        //get data 
        // $parties = Party::all();
        $parties = Party::select('id','party_type','full_name','phone_no','address','account_holder_name','bank_name','account_no','branch_address','ifsc_code','created_at')->get();
        // echo "<pre>";
        // print_R($party);
        return view("party.index",compact('parties'));
    }
    public function addParty(){
        return view("party.add");
    }

    public function createParty(Request $request){

        $request->validate([
            'party_type'=>'required',
            'full_name'=>'required|string|min:10|max:30',
            'phone_no'=>'required|numeric|min:10',
            'address'=>'required|max:255',
            'account_holder_name'=>'required|string|min:10|max:30',
            'account_no'=>'required|max:30',
            'bank_name'=>'required|string|min:10|max:30',
            'ifsc_code'=>'required|max:30',
            'branch_address'=>'required|max:255',
        ]);

        $param = $request->all();
        // return view("party.add");
        // dd($request);
        unset($param['_token']);
        Party::create($param);

        return redirect()->route('add-party')->withStatus('Party created successfully!');

    }
    public function editParty($id){
        // echo $id;
        $data['party']= Party::find($id);
        return view("party.edit",$data);
    }

    public function updateParty($id, Request $request){

        $request->validate([
            'party_type'=>'required',
            'full_name'=>'required|string|min:10|max:30',
            'phone_no'=>'required',
            'address'=>'required|max:255',
            'account_holder_name'=>'required|string|min:10|max:30',
            'account_no'=>'required',
            'bank_name'=>'required|string|min:10|max:30',
            'ifsc_code'=>'required|max:30',
            'branch_address'=>'required|max:255',
        ]);

        $param = $request->all();
        unset($param['_token']);
        unset($param['_method']);
        Party::where('id', $id)->update($param);
        return redirect()->route("manage-parties")->withStatus('Party Updated Successfully');
    }
    public function deleteParty(Party $party)
    {
        $party->delete();
        return redirect()->route("manage-parties")->withStatus('Party Deleted Successfully');
    }
}

