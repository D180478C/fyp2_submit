@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                
                <div class="userinfoheader">
                    <!-- {{ trans('cruds.usersInfo.title_singular') }} {{ trans('global.list') }} -->
                    User Info
                </div> 
               
                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" userinfo">
                        <style>
                            table{
                                
                                margin-left:auto;
                                margin-right:auto;
                               
                            }
                            th{
                                font-size: 12px;
                                font-weight: bold;
                            }
                            

                            
                        </style>
                            <tbody>
                                @foreach($usersInfos as $key => $usersInfo)
                                
                                <tr>
                                    <th>

                                        {{ trans('cruds.usersInfo.fields.id') }}
                                    </th>
                                    <th style="width:70px">
                                    </th>
                                    <th>
                                        {{ trans('cruds.usersInfo.fields.name') }}
                                    </th>
                                <tr>
                                    
                                    <tr>
                                    
                                        <td>
                                        
                                            {{ $usersInfo->id ?? '' }}
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            {{ $usersInfo->name ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                    <td style="height :25px;">
                                    
                                    </td>
                                    </tr>

                                <th>
                                        {{ trans('cruds.usersInfo.fields.nric_no') }}
                                </th>
                                <tr>
                                </tr>    
                                    <tr>
                                        <td>
                                        {{ $usersInfo->nric_no ?? '' }}
                                        </td>
                                    </tr>
                                <tr> 
                                </tr>
                                    <tr>
                                    <td style="height :25px;">
                                    
                                    </td>
                                    </tr>   
                                    <th>
                                        {{ trans('cruds.usersInfo.fields.birth_date') }}
                                    </th> 
                                </tr>
                                    <tr>   
                                        <td>
                                            {{ $usersInfo->birth_date ?? '' }}
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                    <td style="height :25px;">
                                    
                                    </td>
                                    </tr>
                                <tr>    
                                    <th>
                                        {{ trans('cruds.usersInfo.fields.phone_no') }}
                                    </th> 
                                </tr> 
                                <tr>      
                                    <td>
                                        {{ $usersInfo->phone_no ?? '' }}
                                    </td>
                                </tr>
                                
                                    <tr>
                                    <td style="height :25px;">
                                    
                                    </td>
                                    </tr>
                                <tr>    
                                    <th >
                                        {{ trans('cruds.usersInfo.fields.address') }}
                                    </th>
                                </tr>
                                    <tr>    
                                        <td>
                                            {{ $usersInfo->address ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                    <td style="height :25px;">
                                    
                                    </td>
                                    </tr> 
                                    <tr>
                                    <th>
                                        {{ trans('cruds.usersInfo.fields.illness_history') }}
                                    </th>
                                    <th>
                                    </th>
                                    <th>
                                        {{ trans('cruds.usersInfo.fields.vaccine_status') }}
                                    </th>
                                </tr>
                                    <tr>    
                                        <td>
                                            {{ $usersInfo->illness_history->name ?? '' }}
                                        </td>
                                        <td style="width:100px">
                                        </td>
                                        <td>
                                            {{ $usersInfo->vaccine_status->vaccine_status ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                    <td style="height :25px;">
                                    
                                    </td>
                                    </tr> 
                                    
                                <tr>    
                                    <th>
                                        {{ trans('cruds.usersInfo.fields.nationality') }}
                                    </th>
                                </tr>
                                    <tr>
                                        <td>
                                            {{ App\Models\UsersInfo::NATIONALITY_SELECT[$usersInfo->nationality] ?? '' }}
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                    <td >
                                    
                                    </td>
                                    
                                    </tr> 
                                   
                                    
                                @endforeach
                            </tbody>
                           
                        </table>
                        
                    </div>
                </div>
                <tr>
                    <td class="userinfoedit">
                                            
                        @can('users_info_edit')
                            <a class="btn btn-xs btnedit" href="{{ route('frontend.users-infos.edit', $usersInfo->id) }}">
                                {{ trans('global.edit') }}
                            </a>
                        @endcan
                    </td>
                            </tr>
            </div>
           
        </div>
        
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('users_info_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.users-infos.massDestroy') }}",
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
  let table = $('.datatable-UsersInfo:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection