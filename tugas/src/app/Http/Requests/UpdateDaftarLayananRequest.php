<?php

namespace App\Http\Requests;

use App\Models\DaftarLayanan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDaftarLayananRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('daftar_layanan_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'detail' => [
                'string',
                'nullable',
            ],
        ];
    }
}
