<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaxRequest extends FormRequest
{
    public function rules()
    {
        return [
            'max_records.max_weight'=>'required|max:1000|integer',
            'max_records.training_date'=>'required|date',
        ];
    }
}
