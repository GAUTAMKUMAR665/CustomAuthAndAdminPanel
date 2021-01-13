@extends('Admin.home')

@section('content')

<div class="add">
    <a href="/api/add/publiser">ADD Publisher</a>
</div>

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
