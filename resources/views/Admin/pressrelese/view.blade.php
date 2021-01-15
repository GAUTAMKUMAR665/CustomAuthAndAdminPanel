@extends('Admin.adminPanel')

@section('content')
<a href="/api/add/pressrelease"
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



<table class="table table-bordered data_table">
    <thead>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Added Date</th>
    <th>Modified Date</th>
    <th>Action</th>

</tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>
        <th>ID</th>
        <th>Title</th>
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
        ajax:"{{ url('/') }}/api/view/pressrelease",
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
               " data":"Title",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.Meta_Title;
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
                   /* $EDbutton='<a class="btn btn-primary edit" href="{{ url('/') }}/api/edit/catogery/'+row.id+'">Edit</a> <a class="btn btn-danger" href="javascript:void(0)" onclick=deleteData('+row.id+')>Delete</a>';
                   //var buttonHtml = '<a class="btn btn-primary" href="{{ url('/') }}/api/edit/report/'+row.id+'">Edit</a>$nbsp;$nbsp;<a class="btn btn-danger" href="javascript:void(0);" onclick="deleteData('+row.id+')">Delete</a>';
                   return $EDbutton; */
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
                  'url':"{{ url('/')}}/api/delete/pressrelease",
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
