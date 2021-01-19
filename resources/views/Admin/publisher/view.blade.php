@extends('Admin.adminPanel')

@section('content')
<a href="/api/add/publiser"
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
        ]
    })
})

</script>


@endsection
