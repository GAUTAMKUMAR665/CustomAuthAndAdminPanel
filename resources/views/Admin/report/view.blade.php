@extends('Admin.adminPanel')

@section('content')
<a href="/api/add/report"
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
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

</tbody>
<tfoot>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
    <th>Action</th>

</tfoot>

</table>

<script type="text/javascript">
$(function()
{

    $('.data_table').DataTable({
        processing:true,
        serverSide:true,
        paging:true,
        ajax:"{{url('/')}}/api/view/publiser",
        columns:[

            {
                'data':'Id',
                'className':'col-sm-1',
                'render':function(data,type,row)
                {
                    return row.id;
                }
            },
            {
                'data':'Name',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.name;
                }
            },
            {
                'data':'Email',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.email;
                }
            },
            {
                'data':'phone',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.phone;
                }
            },
            {
                'data':'Message',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.message;
                }
            },
            {
                'data':'action',
                'className':'',
                'render':function(data,type,row)
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
        'title':"Confirm!",
        'content':"Are You Sure Want To Delete",
        'buttons':{
            confirm:function(){
                $.ajax({
                    'type':'post',
                    'url':"{{ url('/') }}/api/delete/report",
                    'headers':{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
                    },
                    'data':{id:uid},
                    'success':function(data){
                      window.location.reload();
                    }
                })

            },
            cancel:function(){
                 return true;
            },
        }
    })
}
</script>

@endsection
