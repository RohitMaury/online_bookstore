<?php

?>
<html>
<head>
<style>
*
{
	margin:0px;
	padding:0px;
}
.outer{
	height:auto;
	width:auto;
	position:fixed;
}
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
</body>
</html>