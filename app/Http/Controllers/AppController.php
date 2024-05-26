<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Party;

class AppController extends Controller
{
    public function index(){

        //insert method 1
        // $party = new party;
        // $party->full_name = 'Vedant';
        // $party->save();

        //insert method 2
        // $array = array("full_name"=>"gaurav","phone_no"=>"9136114184","city"=>"Mumbai");
        // Party::create($array);

        //select from db
        // $party = Party::all();
        // dd($party);
        // $party = Party::where("phone_no","9136114184")->get();
        // dd($party);

        // $party = DB::table('parties')->where('id',2)->delete();
        // echo "<pre>";
        // print_R($party);
        // $name = 'Gaurav';
        // $phone = '9136114184';
        // return "database connected";
        return view("dashboard");
    }
    public function about(){
        return view("about");
    }
}
