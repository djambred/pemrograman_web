@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.tim.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tims.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.tim.fields.id') }}
                        </th>
                        <td>
                            {{ $tim->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tim.fields.name') }}
                        </th>
                        <td>
                            {{ $tim->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tim.fields.position') }}
                        </th>
                        <td>
                            {{ $tim->position }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tim.fields.description') }}
                        </th>
                        <td>
                            {!! $tim->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tim.fields.image') }}
                        </th>
                        <td>
                            @if($tim->image)
                                <a href="{{ $tim->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $tim->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tims.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection