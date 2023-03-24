<?php
session_start();

?>
<html>
<head>
<style>
.menu
{
	height:auto%;
	width:20%;
	border:1px solid ;
	background-color:black;
	float:left;
	position:fixed;
	
}
.row
{
	height:82px;
	width:auto;
	border:.2px solid green;
	
		line-height:82px;
		text-align:center;
		font-size:20px;
		font-family:calibri;
}
.row a 
{
	text-decoration:none;
	color:#fff;
}


.profile
{
	height:600px;
	width:100%;
	border:.1px solid #fff ;
	background:url('../image/slider/slider6.jpg');
}

.showdata
{
	height:auto;
	width:auto;
	//border:3px solid black;	
}

td:nth-child(odd)
{
background-color:lightgray;	
}
*
{
	margin:0px;
	padding:0px;
	
}
</style>
</head>
<body>
<div class="menu" >
	<div class="row"><a href="profile.php"><h3> HOME</h3></a></div>
	<div class="row"><a href="admin.php"><h3>ADD CATEGORY</h3></a></div>
	<div class="row"><a href="addpro.php"><h3>ADD PRODUCTS</h3></a></div>
	<div class="row"><a href="viewpro.php"><h3>VIEW PRODUCTS</h3></a></div>
	<div class="row"><a href="viewfeed.php"><h3>VIEW FEEDBACK</h3></a></div>
	<div class="row"><a href="viewcon.php"><h3>VIEW CONTACT</h3></a></div>
	<div class="row"><a href="viewuser.php"><h3>VIEW USER</h3></a></div>
	<div class="row"><a href="adminlogout.php"><h3>LOGOUT</h3></a></div>


</div>


<div class="profile">

<center>
<div class="showdata">
<table border=3px style="border-collapse:collapse;margin-top:5%;" width=500px >

<form action="adchangecode.php" method="post">
<tr><td>
Current password</td><td>
<input type="password" name="op" style="height:40px;width:400px; outline:none;border:none; font-size:25px;" placeholder="Current pasword"/></td></tr>
<tr><td>
New pasword</td><td>
<input type="password" name="np" style="height:40px;width:400px; outline:none;border:none; font-size:25px;" placeholder="New Password"/></td></tr>
<tr><td>
Confirm New Password</td><td>
<input type="password" name="cnp" style="height:40px;width:400px; outline:none;border:none;font-size:25px;" placeholder="Confirm New Password"/></td></tr>
</table>
<input type="submit" value="Change Password" style="height:40px;width:500px; outline:none;border:2px solid; background-color:red;font-size:25px;"/>
</form>
</div>
</center>
</div>
</body>
</html>