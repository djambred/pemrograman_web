<?php

namespace App\Http\Requests;

use App\Models\Table;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTableRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('table_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'start' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'finish' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
