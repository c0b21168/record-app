<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;
use App\Models\MaxRecords;
class postController extends Controller
{
    public function post(Menus $menus, Request $request, MaxRecords $max){
        return view('max_records/post')->with(['menus'=>$menus->get()]);
    }
    public function max_store(Request $request, MaxRecords $max)
    {
    $input = $request['max_records'];
    $max->fill($input)->save();
    return view('max_records/pos');
    }
    public function record(Menus $menus, Request $request, MaxRecords $max){
        return view('records/record_post');
    }
}
