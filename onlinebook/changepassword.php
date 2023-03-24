
<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:../index.php");
}

?>
<html>
<head>
<style>
*
{
	margin:0px;padding:0px;
}
.menudown
{
height:60px;
width:100%;
background-color:#1A446A;


}
.menudown ul
{

}
.menudown ul li 
{

display:inline;


}
.menudown ul li a
{
text-decoration:none;
color:white;
padding:25px;
font-size:25px;
 line-height:50px;
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
<div class="menudown">
		<ul><strong>
			<li><a href="profile.php"><img src="../image/logo/home.png" style="height:40px; width:40px;"></a></li>
			<li><a href="product.php">Products</a></li>
			<li><a href="discussion.php">Discussion Board</a></li>
			<li><a href="feedback.php">feedback</a></li>
			<li><a href="update.php">Update Profile</a></li>
			<li><a href="changepassword.php">Change Password</a></li>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="#">Cart&nbsp 0<div class="zero" style="width:30px;height:30px;border-radius:30px;color:fff;background-color:none; border:1px solid black;opacity:.5;float:right;margin-right:30px;line-height:60px;margin-top:-40px;"></div></a></li>
			</strong>
			
</div>
</hr>


<div class="profile">

<center>
<div class="showdata">
<table border=3px style="border-collapse:collapse;margin-top:5%;" width=500px >

<form action="changecode.php" method="post">
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