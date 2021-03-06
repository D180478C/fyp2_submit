@extends('layouts.admin')
@section('content')
@can('users_info_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.users-infos.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.usersInfo.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.usersInfo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-UsersInfo">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.usersInfo.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.usersInfo.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.usersInfo.fields.nric_no') }}
                    </th>
                    <th>
                        {{ trans('cruds.usersInfo.fields.birth_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.usersInfo.fields.phone_no') }}
                    </th>
                    <th>
                        {{ trans('cruds.usersInfo.fields.illness_history') }}
                    </th>
                    <th>
                        {{ trans('cruds.usersInfo.fields.address') }}
                    </th>
                    <th>
                        {{ trans('cruds.usersInfo.fields.nationality') }}
                    </th>
                    <th>
                        {{ trans('cruds.usersInfo.fields.vaccine_status') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('users_info_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users-infos.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.users-infos.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'nric_no', name: 'nric_no' },
{ data: 'birth_date', name: 'birth_date' },
{ data: 'phone_no', name: 'phone_no' },
{ data: 'illness_history_name', name: 'illness_history.name' },
{ data: 'address', name: 'address' },
{ data: 'nationality', name: 'nationality' },
{ data: 'vaccine_status_vaccine_status', name: 'vaccine_status.vaccine_status' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-UsersInfo').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection