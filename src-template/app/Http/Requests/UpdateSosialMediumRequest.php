<?php

namespace App\Http\Requests;

use App\Models\SosialMedium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSosialMediumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sosial_medium_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'icon' => [
                'string',
                'nullable',
            ],
            'url' => [
                'string',
                'nullable',
            ],
        ];
    }
}
