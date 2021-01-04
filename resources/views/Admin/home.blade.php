<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .container{
            position: absolute;
            width:1000px;
            height: 100%;
            left:100px;
            border:1px solid black;
        }
        .left{
          position: absolute;
          width:200px;
          height: 640px;
          top:0px;
          left:100px;
          background: rgb(59, 70, 70);
          border-top-left-radius: 10px;
      }
      .nav{
           position: absolute;
           width:805px;
           height:40px;
           left:300px;
           top:0px;
           background: rgb(255, 251, 240);
      }
    
      .center{
          position: absolute;
          width:805px;
           height:600px;
           top:40px;
           left:300px;
          background: rgb(197, 227, 240);
      }
    </style>
       <style>
        #formid{
    position: absolute;
    height:30px;
    width:300px;
    border:2px solid grey;
    border-radius: 15px;
}
#csvid{
    position: absolute;
    top:5px;
    left:5px;
    border-radius: 15px;
}
#subinput
{
    position: absolute;
    left:220px;
    top:5px;

}
        </style>
    <title>Admin Home</title>
</head>
<body>
   
   <div class="container">
       <div class="nav">
           <ul>
               <li><a href="">home</a></li>
               <li><a href="">serach</a></li>
           </ul>
       </div>
       <div class="left">
           <h3 class='lefttitle'>Targlo</h3>
        <ul>
            <li><a href="">home</a></li>
            <li><a href="">serach</a></li>
            <li><a href="">home</a></li>
            <li><a href="">serach</a></li>
            <li><a href="">home</a></li>
            <li><a href="">serach</a></li>
            <li><a href="">home</a></li>
            <li><a href="">serach</a></li>
        </ul>
       </div>
       <div class="center">

       </div>
   </div>
   
</body>
</html>