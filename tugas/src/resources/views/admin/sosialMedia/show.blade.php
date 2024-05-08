@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sosialMedium.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sosial-media.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sosialMedium.fields.id') }}
                        </th>
                        <td>
                            {{ $sosialMedium->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sosialMedium.fields.name') }}
                        </th>
                        <td>
                            {{ $sosialMedium->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sosialMedium.fields.icon') }}
                        </th>
                        <td>
                            {{ $sosialMedium->icon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sosialMedium.fields.url') }}
                        </th>
                        <td>
                            {{ $sosialMedium->url }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sosial-media.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection