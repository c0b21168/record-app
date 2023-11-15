<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaxRecords;
use App\Models\Menus;;
class MaxRecordsController extends Controller
{
    public function max_records(Menus $menus)
    {
        return view('max_records.max_records')->with(['menus'=>$menus->get()]);
    }
     public function store(Request $request, MaxRecords $max)
    {
    $input = $request['max_records'];
    $max->fill($input)->save();
    return view('max_records/pos');
    }
    public function show(Request $request, MaxRecords $max){
        $menuName = $request->records;
        $log_list = MaxRecords::where("training_date","like",date("Y") . "%")->where("menu_id",$menuName)->get();
        $weight = $log_list->pluck("max_weight");
        $date = $log_list->pluck("training_date");
        return view("max_records.graph")->with([
		"log_list"=>$weight,
		"date_list"=>$date]);
    }
    
    
}
