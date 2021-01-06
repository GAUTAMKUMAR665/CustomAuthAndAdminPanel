@extends('Admin.home')

@section('content')
<section>
<table class="table table-bordered data_table">
    <thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Is_verified</th>
    <th>Action</th>
    <th>Extra</th>
</tr>
    </thead>

    <tbody>

    </tbody>
<tfoot>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Is_verified</th>
        <th>Action</th>
        <th>Extra</th>
    </tr>
</tfoot>
</table>
</section>

<script type="text/javascript">
$(function()
{
    $('.data_table').DataTable({
        processing:true,
        serverSide:true,
        paging:true,
        ajax:"{{url('/')}}/api/Usersdata",
        columns:[
            ///{data:'id'},
            {
                'data':'Id',
                'className':'U_id',
                'render':function(data,type,row)
                {
                    return row.id;
                }
            },
            {data:'name'},
            {data:'email'},
            {data:'phone'},
            {data:'is_verified'},
            {data:'action'},
            {data:'extra'},
        ]
    })
});

$(function(){
    $('.view').click(function(){
        alert('edit clicked');
    })
})
function editdata(uid)
{

    alert(uids);


}
function deletedata(uid)
{
    alert('delete clicked');

    $.confirm({
        title:"Confirm!",
        content:"Are You Sure Want To Delete?",
        buttons:{
            confirm:function(){
               $.ajax({
                   'type':'post',
                   'url':"{{url('/')}}/api/Delete",
                   'headers':{
                       'X-CSRF-TOKEN':$('meta[name="csrf_token"]').attr('content')
                   },
                   'data':{id:uid},
                   'success':function(data)
                   {
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
