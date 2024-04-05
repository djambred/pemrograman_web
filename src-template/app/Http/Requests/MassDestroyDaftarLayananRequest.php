<?php

namespace App\Http\Requests;

use App\Models\DaftarLayanan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDaftarLayananRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('daftar_layanan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:daftar_layanans,id',
        ];
    }
}
