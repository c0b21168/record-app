<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;

class MenusController extends Controller
{
    public function menus(Menus $menus)
    {

        return view('menus/menus')->with(['menus'=>$menus->get()]);
        #where("user_id",$id = \Auth::id())->
    }
}
