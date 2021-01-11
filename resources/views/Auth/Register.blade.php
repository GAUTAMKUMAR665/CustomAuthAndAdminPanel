<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style href="{{asset('css/register.css')}}" rel="stylesheet"></style>
    <style>
        :root{
    --main-bg-color:#ecf0f3
}

body{
    background-color: var(--main-bg-color);
    height: 100%;
    width: 100%;
}
        .container{
    position: fixed;
    height: 550px;
    width:350px;
    left:500px;
    margin: auto;
    padding:2rem ;
    border-radius:2.5rem ;
    background-color: var(--main-bg-color);
    box-shadow: 13px 13px 20px #cbced1,
            -13px -13px 20px #ffffff;
}
.logo{
display: flex;
position: relative;
left:130px;
margin-bottom: 20px;
width: 100%;
}
.logo_circle{
display: flex;
width: 100px;
height: 100px;
background-color: #e9d985;
border-radius: 50%;
box-shadow: 0px 0px 2px #5f5f5f,
0px 0px 0px 5px #ecf0f3,
8px 8px 15px #a7aaaf,
-8px -8px 15px #ffffff
}
.logo_img{
margin: auto,

opacity:0.4,
}
.form_group{
width: 400px;
height: 600px;
margin-bottom: 32px;
}
 .form_input{
      appearance: none;
	border: none;
	 background-color: transparent;
	 font-size: 0.875rem;
	 padding: 16px;
	padding-left: 40px;
 	width: 300px;
 	border-radius: 24px;
	box-shadow:
		inset 8px 8px 8px #CBCED1,
		inset -8px -8px 8px #FFFFFF;

}
/* .form_input{
    appearance: none;
	border: none;
	background-color: transparent;
	font-size: 0.875rem;
	padding: 1rem;
	padding-left: 2.5rem;
	width: 100%;
	border-radius: 1.5rem;
	box-shadow:
		inset 8px 8px 8px #CBCED1,
		inset -8px -8px 8px #FFFFFF;
} */
.form_input:focus{
outline: none;
box-shadow:
inset 8px 8px 8px #c5c5c5,
inset -8px -8px -8px #ffffff
}
.form_input::placeholder{
    color: #d3d3d3;
	letter-spacing: 0.15em;
}
.form_input:focus::placeholder
{
    color: #CCCCCC;
}
.form_button {
position: relative;
height:50px;
width:150px;
top:40px;
left:0px;
background-color: blue;
border-radius:20px;
}
.form_button:focus{
outline:none;
}
label[for="name"]{
    position: relative;
    left:20px;
    color: #635e5e;
	letter-spacing: 0.15em;
}
label[for="email"]{
    position: relative;
    left:20px;
    color: #635e5e;
	letter-spacing: 0.15em;
}
label[for="phone"]{
    position: relative;
    left:20px;
    color: #635e5e;
	letter-spacing: 0.15em;
}
label[for="password"]{
    position: relative;
    left:20px;
    color: #635e5e;
	letter-spacing: 0.15em;
}
label[for="cofirmpassword"]{
    position: relative;
    left:20px;
    color: #635e5e;
	letter-spacing: 0.15em;
}
 label[for="verification_method"]{
    position: relative;
    height: 20px;
    width:30px;
    left:17px;
    top:5px;
    color: #635e5e;
	letter-spacing: 0.15em;

}
select{
    position: relative;
      height: 20px;
    width:100px;
    left:17px;
    top:0px;
    z-index: 100;
}




    </style>
</head>
<body>
    <div class="container">
<div class="logo">
    <div class="logo_circle">
        <div class="logo_svg"></div>
    </div>
</div>
<form  action="/api/Register" method="post">
    <div class="form_group">

        <label  for="name">Name</label>
        <div class="inputs">
            <input type="text" id="name" name="name" class="form_input" placeholder="Please Enter Your Name">
        </div>

        <label  for="email">Email</label>
        <div class="inputs">
            <input type="text" id="email" name="email" class="form_input" placeholder="Please Enter Your Email">
        </div>
        <label  for="phone">Phone</label>
        <div class="inputs">
            <input type="text" id="phone" name="phone" class="form_input" placeholder="Please Enter Your Phone">
        </div>
        <label  for="password">Password</label>
        <div class="inputs">
            <input type="text" id="password" name="password" class="form_input" placeholder="Please Enter Your Password">
        </div>
        <label  for="cofirmpassword">Confirmpassword</label>
        <div class="inputs">
            <input type="text" id="cofirmpassword" name="confirmpassword" class="form_input" placeholder="Please ReEnter Your Password">
        </div>

    <input type="submit" id="submit" class="form_button" value="submit">

@csrf
</form >
    </div>
</body>
</html>
