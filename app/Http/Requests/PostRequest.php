<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(){
        return [
            'records.weight'=>'required|max:100|integer',
            'records.training_date'=>'required|date',
            'records.times'=>'required|integer|max:99',
            'records.menu_id'=>'required',
            #'post.training_date'=>'required|date',
            ];
    }
}
