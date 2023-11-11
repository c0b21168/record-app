<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Past;
use App\Models\records;
use App\Models\Menus;

class pastController extends Controller
{
    public function past(Request $request, Past $past, records $records)
    {
        $input = $request->input('records');
        return view("past.past")->with(["records"=>$records->get()]);
    }
    public function pastRecords(records $records,Request $request, Past $past)
    {
        $rec = $request['post'];
        
        $record = records::with("Menu")->where("training_date",$rec)->get();
        #$record = records::get();
        $record2=records::first()->Menu->name;
        #menu_idからwhereで無理やりとってくる
        #dd($record);
        return view("past.past_record",compact('record'));
        
    }
}