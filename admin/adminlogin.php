<?php



?>
<html>
<head>
<style>
.slider
{
height:550px;
width:100%;
background:url('../image/slider/slider8.jpg');
}
.login
{
height:300px;
width:500px;
background-color:#333;
border-radius: 30px 30px 30px 30px;
margin-top:100px;
opacity:.7;

}


.text
{
border:none;
width:250px;
background:none;
outline:none;
font-weight:bold;
margin-left:32px;
text-align:center;
margin-top:10px;
color:white;
font-size:20px;
}
hr
{
width:250px;
margin-top:0px;
margin-left:32px;

}
h1
{
color:white;
background-color:black;
border-top-right-radius:30px;
border-top-left-radius:30px;
}
#sub
{
width:200px;
height:35px;
outline:none;
border:none;
color:white;
border-radius:8px;
background-color:#f5f;
font-size:20px;
}
.logo{
height:32px;
width:32px;
//background-color:blue;
background:url('../image/logo/user.png');
margin-left:-285px;
}

.logo1{
height:32px;
width:32px;
//background-color:blue;
background:url('../image/logo/pass.png');
margin-left:-285px;
}


</style>
</head>
<body>
<!-- login start -->
	<div class="slider">
	<center>
		<div class="login">
	<h1>Login</h1>
<br/>
<br/>

<form action="adminlogincode.php" method="post">
<div class="logo">
<input type="email"  name="email"placeholder="Enter the email"class="text" autocomplete="off" required /><br/><hr></div> <br/>
<div class="logo1">
<input type="Password"  name="password"placeholder="Enter the password"class="text" autocomplete="off" required /><br/><hr></div><br/>
<input type="submit" value="Sign in" id="sub"/>
</form>

</div >
</center>
	</div>
	<!-- login end -->
</body>
</html>	