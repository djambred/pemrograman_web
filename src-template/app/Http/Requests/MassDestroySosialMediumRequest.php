<?php

namespace App\Http\Requests;

use App\Models\SosialMedium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySosialMediumRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('sosial_medium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:sosial_media,id',
        ];
    }
}
