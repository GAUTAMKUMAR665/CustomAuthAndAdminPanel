@extends('Admin.AdminPanel')

@section('content')


    <a href="/api/add/catogery"
    class="py-2 pl-5 pr-6 mr-3 flex items-center flex-shrink-0 bg-purple-600 rounded-lg text-white text-sm font-semibold hover:bg-purple-700 button"
  >
    <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 mr-2">
      <path
        fill-rule="evenodd"
        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
        clip-rule="evenodd"
      />
    </svg>
    Add new
</a>
    {{-- <a href="/api/add/catogery">ADD Report</a> --}}


<table class="table table-bordered data_table">
    <thead>
<tr>
    <th>ID</th>
    <th>Catogery Id</th>
    <th>Catogery Name</th>
    <th>Catogery Slug</th>
    <th>Added Date</th>
    <th>Modified Date</th>
    <th>Action</th>

</tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>
        <th>ID</th>
        <th>Catogery Id</th>
        <th>Catogery Name</th>
        <th>Catogery Slug</th>
        <th>Added Date</th>
        <th>Modified Date</th>
        <th>Action</th>
    </tfoot>
</table>


<script type="text/Javascript">

$(function(){
    $('.data_table').DataTable({
        processing:true,
        serverSide:true,
        paging:true,
        ajax:"{{ url('/') }}/api/view/catogery",
        columns:[
            {
               " data":"ID",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.id;
               }
            },
            {
               " data":"Catogery ID",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.catogery_id;
               }
            },
            {
               " data":"Catogery NAME",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.catogery_name;
               }
            },
            {
               " data":"Catogery Slug",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.catogery_slug;
               }
            },
            {
               " data":"Added Date",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.created_at;
               }
            },
            {
               " data":"Modified Date",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.updated_at;
               }
            },

            {
               "data":"Action",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.action;
               }
            },
        ]
    })
})

function deleteData(uid)
{
    $.confirm({
        'title':'Confirm!',
        'content':'Are you Sure Want To Delete',
        'buttons':{
            confirm:function(){
              $.ajax({
                  'type':'post',
                  'url':"{{ url('/')}}/api/delete/catogery",
                  'headers':{
                      'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                  },
                  'data':{id:uid},
                  'success':function(data){
                      window.location.reload();
                  }
              })
            },
            cancel:function(){
                return true;
            }
        }
    })
}

</script>


@endsection
