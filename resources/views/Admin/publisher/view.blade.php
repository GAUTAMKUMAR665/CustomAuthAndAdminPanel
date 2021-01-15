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
