@extends('Admin.panel')

@section('content')




<section>
<table class="table table-bordered data_table">
    <thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Verification_Method</th>
    <th>Is_verified</th>
    <th>Action</th>

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
        <th>Verification_Method</th>
        <th>Is_verified</th>
        <th>Action</th>

    </tr>
</tfoot>
</table>
</section>

<script type="text/javascript">
$(function()
{
    $('.data_table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        scrollX:true,
        processing:true,
        serverSide:true,
        paging:true,
        ajax:"{{url('/')}}/api/view/user",
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
            {data:'verification_method'},
            {data:'is_verified'},
            {data:'action'},

        ],
        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    column.search($(this).val(), false, false, true).draw();
                });
            });
        }



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
    $.confirm({
        title:"Confirm!",
        content:"Are You Sure Want To Delete?",
        buttons:{
            confirm:function(){
               $.ajax({
                   'type':'post',
                   'url':"{{url('/')}}/api/delete/user",
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
