<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;
use App\Http\Requests\MenusRequest;
class MenusController extends Controller
{
    public function menus(Menus $menus)
    {
        return view('menus/menus')->with(['menus'=>$menus->get()]);
        #where("user_id",$id = \Auth::id())->
    }
    public function store(Menus $menus)
    {
        return view('menus/menu_add')->with(['user_id'=>$id = \Auth::id()]);;
        #where("user_id",$id = \Auth::id())->
    }
    public function post(MenusRequest $request, Menus $menus)
    {
        $input = $request['menus'];
        $menus->fill($input)->save();
        return view('menus/menus')->with(['menus'=>$menus->get()]);
    }
}
