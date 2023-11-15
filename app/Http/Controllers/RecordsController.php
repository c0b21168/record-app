<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\records;
use App\Models\Menus;
use App\Http\Requests\PostRequest;

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
    public function edit(Request $request, records $records, Menus $menus)
    {
        return view('past.past_edit')->with(['menus'=>$menus->get(),
                                            'records'=>$records]);
    }
    public function update(Request $request, records $records)
    {
    $input_pos = $request['records'];
    $records->fill($input_pos)->save();
    $input = $request->input('records');
    return view('past.past')->with(["records"=>$records->get()]);
    #return redirect('past.past' . $records->id);
    }
    
}