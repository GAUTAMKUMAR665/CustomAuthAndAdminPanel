@extends('Admin.panel')

@section('content')

<table>

    <input type="text" name="serach" placeholder="Search..."/>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Is_Verified</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $users)
        <tr>
            <td id='uid'>{{ $users->id }}</td>
            <td>{{ $users->name }}r</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->phone }}</td>
            <td>{{ $users->is_verified }}</td>
            <td><button id='edit'>EDIT</button><button id="delete">DELETE</button></td>

       </tr>
       @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Is_Verified</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>



    <section>
        <form action="Editdata" method="post">
            @foreach ( $user as $users )
            <input type="hidden" name="id" id="" value={{ $users->id }}>
            <input type="text" name="name" id="" value={{ $users->name }}>
            <input type="text" name="email" id="" value={{ $users->email }}>
            <input type="text" name="phone" id="" value={{ $users->phone }}>
            <input type="text" name="is_verified" id="" value={{ $users->is_verified }}>
            <input type="hidden" name="_token" id="" value={{Session::token()}}>
            @endforeach
            <input type="submit"  value='submit'/>
           @csrf
        </form>
    </section>
    <div id='editview'>


    </div>
    <script>

        $(document).ready(function()
        {
            $('#edit').click(function(e){
                e.preventDefault();
                var uid=$('#uid').text();
                //alert(uid);

                $.ajax({
                    'url':"{{ url('/') }}/api/Ajaxdata",
                    'type':'post',
                    'headers':{
                     'X-CSRF-TOKEN':$('meta[name="csrf_token"]').attr('content')
                    },
                    'data':{id:uid},
                    'success':function(data){
                  console.log(data);
                     $('#editview').html(data);
                    }

                });


                //alert('edit is clicked');
            });

            $('#delete').click(function(){
                alert('delete is clicked');

              deletefunction();

            })


        });
        function deletefunction()
 {
     var uid=$('#uid').text();

     $.confirm({
         title:'Confirm!',
         content:"Are you Sure Wnat To Delete",
         buttons:{
                  confirm:function(){

                     $.ajax({
                         'type':'post',
                         'url':"{{ url('/') }}/api/Deletedata",
                         'headers':{
                          'X-CSRF-TOKEN':$("meta[name='csrf_token']").attr('content')
                         },
                         'data':{id:uid},
                         'success':function(data)
                         {
                             window.location.reload();
                         }

                     })

                  },
                  cancel:function(){
                      return true
                  }
         }
     })

     alert(uid);

                $.ajax({
                    'type':'post',
                    'url':"{{ url('/') }}/api/Deletedata",
                    'headers':{
                        'X-CSRF-TOKEN':$("meta[name='csrf_token']").attr('content')
                    },
                    'data':{id:uid},
                    'success':function(data)
                    {
                        console.log(data)
                    }
                })
 }
    </script>
@endsection
