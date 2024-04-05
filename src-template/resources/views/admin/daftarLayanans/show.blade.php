@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.daftarLayanan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.daftar-layanans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.daftarLayanan.fields.id') }}
                        </th>
                        <td>
                            {{ $daftarLayanan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.daftarLayanan.fields.name') }}
                        </th>
                        <td>
                            {{ $daftarLayanan->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.daftarLayanan.fields.image') }}
                        </th>
                        <td>
                            @if($daftarLayanan->image)
                                <a href="{{ $daftarLayanan->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $daftarLayanan->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.daftarLayanan.fields.detail') }}
                        </th>
                        <td>
                            {{ $daftarLayanan->detail }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.daftar-layanans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection