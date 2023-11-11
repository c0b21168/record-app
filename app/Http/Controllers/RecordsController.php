<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\records;
use App\Models\Menus;

class RecordsController extends Controller
{
    public function records(Menus $menus){
        return view('records/records')->with(['menus'=>$menus->get()]);
    }
    public function store(Request $request, records $records)
    {
    $input = $request['records'];
    $records->fill($input)->save();
    return redirect('/posts/' . $records->id);
    }

}