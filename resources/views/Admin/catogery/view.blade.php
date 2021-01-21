@extends('Admin.panel')

@section('content')

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
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        processing:true,
        serverSide:true,

        paging:true,
        ajax:{
           url:"{{ url('/') }}/api/view/catogery",
           data:function(d)
           {
               d.catogery_name=$('.search-form').val();

           }
        },
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

$('.search-form').on('keyup',function(){
    table.draw();

    });
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
