@extends('Admin.adminPanel')

@section('content')

<table class="table table-bordered data_table">
    <thead>
<tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
</tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>

    </tfoot>
</table>


<script type="text/Javascript">

$(function(){
    $('.data_table').DataTable({
        processing:true,
        serverSide:true,
        paging:true,
        ajax:"{{ url('/') }}/api/",
        columns:[
            {
               " data":"",
               "className":"",
               "render":function(data,type,row)
               {
                   return row.abc;
               }
            },

            {
               " data":"Action",
               "className":"",
               "render":function(data,type,row)
               {
                   $EDbutton='<a class="btn btn-primary" href="{{ url('/') }}/api/edit/blog/"'+row.id+'"></a>$nbsb;$nbsb;<a class="btn btn-primary" href="javascript:void(0)" onclick=deleteData('+row.id')></a>';
                   return $EDbutton;
               }
            },
        ]
    })
})

</script>


@endsection
