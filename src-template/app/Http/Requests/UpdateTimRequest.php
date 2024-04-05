<?php

namespace App\Http\Requests;

use App\Models\Tim;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTimRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tim_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'position' => [
                'string',
                'required',
            ],
        ];
    }
}
