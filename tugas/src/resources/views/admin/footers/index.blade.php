@extends('layouts.admin')
@section('content')
@can('footer_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.footers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.footer.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.footer.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Footer">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.footer.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.footer.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.footer.fields.detail') }}
                        </th>
                        <th>
                            {{ trans('cruds.footer.fields.alamat') }}
                        </th>
                        <th>
                            {{ trans('cruds.footer.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.footer.fields.faximile') }}
                        </th>
                        <th>
                            {{ trans('cruds.footer.fields.email') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($footers as $key => $footer)
                        <tr data-entry-id="{{ $footer->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $footer->id ?? '' }}
                            </td>
                            <td>
                                @if($footer->logo)
                                    <a href="{{ $footer->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $footer->logo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $footer->detail ?? '' }}
                            </td>
                            <td>
                                {{ $footer->alamat ?? '' }}
                            </td>
                            <td>
                                {{ $footer->phone ?? '' }}
                            </td>
                            <td>
                                {{ $footer->faximile ?? '' }}
                            </td>
                            <td>
                                {{ $footer->email ?? '' }}
                            </td>
                            <td>
                                @can('footer_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.footers.show', $footer->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('footer_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.footers.edit', $footer->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('footer_delete')
                                    <form action="{{ route('admin.footers.destroy', $footer->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('footer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.footers.massDestroy') }}",
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
  let table = $('.datatable-Footer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection