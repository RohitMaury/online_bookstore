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
	padding:0px;
	margin:0px;
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
.feed
{
	height:400px;
	width:700px;
	margin:auto;
	background-color:yellow;
	border-radius:25px;
}
</style>
</head>
<body bgcolor="redlighten-3">
<div class="menudown">
		<ul><strong>
			<li><a href="profile.php"><img src="../image/logo/home.png" style="height:40px; width:40px;"></a></li>
			<li><a href="product.php">Products</a></li>
			<li><a href="discussion.php">Discussion Board</a></li>
			<li><a href="feedback.php">feedback</a></li>
			<li><a href="update.php">Update Profile</a></li>
			<li><a href="changepassword.php">Change Password</a></li>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="#">Cart&nbsp <div class="zero" style="width:30px;height:30px;border-radius:30px;color:fff;background-color:none; border:1px solid black;opacity:.5;float:right;margin-right:30px;line-height:60px;margin-top:-40px;"></div></a></li>
			</strong>
			
</div>
<div class="feed">
	<form action="feedcode.php" method="post">
			<h1 style="font-size:30px;color:Red;text-align:center;">Add Feedback</h1>
		<hr style="size:10px;background-color:green;"/>
		<textarea value="" name="feed" style="height:200px;width:500px;margin-left:100px;outline:none;"></textarea></br></br>
		<input type="submit" value="Submit" style="height:40px;width:200px;color:white;background-color:green;outline:none;border:none;margin-left:250px;border-radius:30px;"/>
	</form>

</div>
</body>
</html>