@extends('layouts.admin')
@section('content')
@can('table_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.tables.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.table.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.table.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Table">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.table.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.table.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.table.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.table.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.table.fields.start') }}
                        </th>
                        <th>
                            {{ trans('cruds.table.fields.finish') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tables as $key => $table)
                        <tr data-entry-id="{{ $table->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $table->id ?? '' }}
                            </td>
                            <td>
                                @if($table->image)
                                    <a href="{{ $table->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $table->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $table->name ?? '' }}
                            </td>
                            <td>
                                {{ $table->description ?? '' }}
                            </td>
                            <td>
                                {{ $table->start ?? '' }}
                            </td>
                            <td>
                                {{ $table->finish ?? '' }}
                            </td>
                            <td>
                                @can('table_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.tables.show', $table->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('table_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.tables.edit', $table->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('table_delete')
                                    <form action="{{ route('admin.tables.destroy', $table->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('table_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.tables.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Table:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection