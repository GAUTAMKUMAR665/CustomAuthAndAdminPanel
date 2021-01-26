<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/change.css')}}">
</head>
<body>
    <div id="container">

        <div id="header">
          <center><h1>Change Password</h1></center>
        </div>
        <div id="form">
          <input type="password" placeholder="New Password" id="passOne"/>
          <input type="password" placeholder="Confirm Password" id="passTwo"/>
        </div>
        <div id="footer" class="incorrect">
          <center>
                <input type="submit" id="submit" value="submit" />
        </div>
          </center>
        </div>
      </div>
<script>
    $(document).ready(function(){
  var passOne = $("#passOne").val();
  var passTwo = $("#passTwo").val();

  $("#footerText").html("Fields don't match");

  var checkAndChange = function()
  {
    if(passOne.length < 1){
      if($("#footer").hasClass("correct")){
        $("#footer").removeClass("correct").addClass("incorrect");
        $("#footerText").html("They don't match");
      }else{
        $("#footerText").html("They don't match");
      }
    }
    else if($("#footer").hasClass("incorrect"))
    {
      if(passOne == passTwo){
        $("#footer").removeClass("incorrect").addClass("correct");
        $("#footerText").html("Continue");
      }
    }
    else
    {
      if(passOne != passTwo){
        $("#footer").removeClass("correct").addClass("incorrect");
        $("#footerText").html("They don't match");
      }
    }
  }



  $("input").keyup(function(){
    var newPassOne = $("#passOne").val();
    var newPassTwo = $("#passTwo").val();

    passOne = newPassOne;
    passTwo = newPassTwo;

    checkAndChange();
  });
});
</script>
</body>
</html>
