@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.footer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.footers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.footer.fields.id') }}
                        </th>
                        <td>
                            {{ $footer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.footer.fields.logo') }}
                        </th>
                        <td>
                            @if($footer->logo)
                                <a href="{{ $footer->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $footer->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.footer.fields.detail') }}
                        </th>
                        <td>
                            {{ $footer->detail }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.footer.fields.alamat') }}
                        </th>
                        <td>
                            {{ $footer->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.footer.fields.phone') }}
                        </th>
                        <td>
                            {{ $footer->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.footer.fields.faximile') }}
                        </th>
                        <td>
                            {{ $footer->faximile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.footer.fields.email') }}
                        </th>
                        <td>
                            {{ $footer->email }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.footers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection