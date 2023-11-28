<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaxRecords;
use App\Models\Menus;;
use App\Http\Requests\MaxRequest;
class MaxRecordsController extends Controller
{
    public function max_records(Menus $menus)
    {
        return view('max_records.max_records')->with(['menus'=>$menus->get(),
                                                    'user_id'=>$id = \Auth::id()]);
    }
     public function store(MaxRequest $request, MaxRecords $max)
    {
    $input = $request['max_records'];
    $max->fill($input)->save();
    return view('max_records/pos');
    }
    public function show(Request $request, MaxRecords $max, Menus $menus){
        $menuName = $request->records;
        $log_list = MaxRecords::where("training_date","like",date("Y") . "%")->where("menu_id",$menuName)
                                ->where('user_id',$id = \Auth::id())->get();
        $weight = $log_list->pluck("max_weight");
        $date = $log_list->pluck("training_date");
        $id=array_shift($menuName);
        $name=$menus->where("id",$id)->pluck("name")->first();
        #$str=implode("", $name);
        #dd($name);
        return view("max_records.graph")->with([
		"log_list"=>$weight,
		"date_list"=>$date,
		"name"=>$name]);
    }
    
    
}
