@extends('Admin.home')

@section('content')

<table class="table table-bordered data_table">
<thead>
<tr>
    <th>Report Id</th>
    <th>Title</th>
    <th>Report URL</th>
    <th>Catogery</th>
    <th>Single_User_Amount</th>
    <th>Multi_User_Amout</th>
    <th>Data_Pack_Amout</th>
    <th>Date_Published</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

</tbody>
<tfoot>
    <th>Report Id</th>
    <th>Title</th>
    <th>Report URL</th>
    <th>Catogery</th>
    <th>Single_User_Amount</th>
    <th>Multi_User_Amout</th>
    <th>Data_Pack_Amout</th>
    <th>Date_Published</th>
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
        ajax:"{{url('/')}}/api/view/report",
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
                'data':'Title',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Title;
                }
            },
            {
                'data':'Report URL',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Slug;
                }
            },
            {
                'data':'Catogery',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Meta_Title;
                }
            },
            {
                'data':'Single_User_Amount',
                'className':'col-sm-3',

                'render':function(data,type,row)
                {
                    return row.Single_User_Amount;
                }
            },
            {
                'data':'Multi_User_Amount',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Multi_User_Amount;
                }
            },
            {
                'data':'Data_Pack_Amount',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Data_Pack_Amount;
                }
            },
            {
                'data':'Date_Published',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Date_Published;
                }
            },
            {
                'data':'action',
                'className':'',
                'render':function(data,type,row)
                {
                    var buttonHtml = '<a class="btn btn-primary" href="{{ url('/') }}/api/edit/report/'+row.id+'">Edit</a>&nbsp;&nbsp;<a class="btn btn-danger" href="javascript:void(0);" onclick="deleteData('+row.id+')">Delete</a>';
                  return buttonHtml;
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
