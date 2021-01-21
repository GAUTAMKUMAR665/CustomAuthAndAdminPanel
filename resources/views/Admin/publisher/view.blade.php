@extends('Admin.panel')

@section('content')


<table class="table table-bordered data_table">
    <thead>
<tr>
    <th>Id</th>
    <th>Publisher_Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>URL</th>
    <th>Action</th>

</tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>
        <th>Id</th>
        <th>Publisher_Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>URL</th>
        <th>Action</th>
    </tfoot>
</table>


<script type="text/Javascript">

$(function(){
    $('.data_table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        processing:true,
        serverSide:true,

        paging:true,
        ajax:"{{ url('/') }}/api/view/publiser",
        columns:[
            {
               " data":"Id",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.id;
               }
            },
            {
                "data":"Publisher_Id",
                "className":"",
                "render":function(data,type,row){
                    return row.publisher_id;
                }
            },
            {
                "data":"Name",
                "Classname":"",
                "render":function(data,type,row)
                {
                    return row.name;
                }
            },
            {
                "data":"Email",
                "Classname":"",
                "render":function(data,type,row)
                {
                    return row.email;
                }
            },
            {
                "data":"Phone",
                "Classname":"",
                "render":function(data,type,row)
                {
                    return row.phone;
                }
            },
            {
                "data":"URL",
                "Classname":"",
                "render":function(data,type,row)
                {
                    return row.url;
                }
            },

            {
               " data":"Action",
               "className":"",
               "render":function(data,type,row)
               {
                  return row.action;
               }
            },
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
})

</script>


@endsection
