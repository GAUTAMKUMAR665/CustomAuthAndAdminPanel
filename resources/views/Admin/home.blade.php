<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
 
    <title>Admin Home</title>
</head>
<body>
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
   
   <div class="container">
       
       <div class="center">
          @yield('imports')
          @yield('contents')
          @yield('edit')
       </div>

       <div id='editview'>
    
      
       </div>
      
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
</body>
</html>