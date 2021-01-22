@extends('Admin.panel')

@section('content')
<form action="/api/postcsv" method="post" enctype="multipart/form-data" id="formid" style="position: fixed;left:920px;top:1px;">
    <input type="file" name="csvfile" id="csvid" style="position:fixed;left:610px;">
    <button
    class="py-2 pl-5 pr-6 mr-3 flex items-center flex-shrink-0 bg-purple-600 rounded-lg text-white text-sm font-semibold hover:bg-purple-700 button"
  >
    <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 mr-2">
      <path
        fill-rule="evenodd"
        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
        clip-rule="evenodd"
      />
    </svg>
    Upload
    </button>

   @csrf
</form>



<table class="table table-bordered data_table" >
<thead>
<tr>
    <th>Id</th>
    <th>C_Id</th>
    <th>P_Id</th>
    <th>Report_Type</th>
    <th>Key_Player</th>
    <th>S_U_Amount</th>
    <th>M_U_Amount</th>
    <th>E_Amount</th>
    <th>M_Title</th>
    <th>M_Description</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

</tbody>
<tfoot>
    <th>Id</th>
    <th>C_Id</th>
    <th>P_Id</th>
    <th>Report_Type</th>
    <th>Key_Player</th>
    <th>S_U_Amount</th>
    <th>M_U_Amount</th>
    <th>E_Amount</th>
    <th>M_Title</th>
    <th>M_Description</th>
    <th>Action</th>

</tfoot>

</table>

<script type="text/javascript">
$(function()
{

    $('.data_table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        processing:true,
        serverSide:true,
        scrollX:true,
        scrollY:true,
        paging:true,
        searching:true,
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
                'data':'Catogery_Id',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Category_Id;
                }
            },
            {
                'data':'Publisher_Id',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Publisher_Id;
                }
            },
            {
                'data':'Report_Type',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Report_Type;
                }
            },
            {
                'data':'key_player',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.key_player;
                }
            },
            {
                'data':'Single_User_Amount',
                'className':'',
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
                'data':'Enterprise_Amount',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Enterprise_Amount;
                }
            },
            {
                'data':'Meta_Title',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Meta_Title;
                }
            },
            {
                'data':'Meta_Description',
                'className':'',
                'render':function(data,type,row)
                {
                    return row.Meta_Description;
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
