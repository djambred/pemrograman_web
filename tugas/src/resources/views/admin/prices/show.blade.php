@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.price.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.prices.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.price.fields.id') }}
                        </th>
                        <td>
                            {{ $price->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.price.fields.name') }}
                        </th>
                        <td>
                            {{ $price->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.price.fields.price') }}
                        </th>
                        <td>
                            {{ $price->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.price.fields.description') }}
                        </th>
                        <td>
                            {{ $price->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.prices.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection