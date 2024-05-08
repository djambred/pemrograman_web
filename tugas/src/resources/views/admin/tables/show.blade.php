@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.table.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tables.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.table.fields.id') }}
                        </th>
                        <td>
                            {{ $table->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.table.fields.image') }}
                        </th>
                        <td>
                            @if($table->image)
                                <a href="{{ $table->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $table->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.table.fields.name') }}
                        </th>
                        <td>
                            {{ $table->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.table.fields.description') }}
                        </th>
                        <td>
                            {{ $table->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.table.fields.start') }}
                        </th>
                        <td>
                            {{ $table->start }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.table.fields.finish') }}
                        </th>
                        <td>
                            {{ $table->finish }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tables.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection