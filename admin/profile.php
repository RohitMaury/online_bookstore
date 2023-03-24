<?php





?>
<html>
<head>
<title>my profile</title>
<style>
*
{
	padding:0px;
	margin:0px;
}
.outer
{
	height:670px ;
	width:auto;
	background:url('../image/aboutus/about2.jpg');
	
}
.rohit{
	height:200px;
	width:200px;
	background-color:red;
	margin-left:50px;
	margin-top:100px;
	float:left;
	border-radius:200px;
}
.rohi{
	height:250px;
	width:200px;
	//background-color:red;
	margin-right:100px;
	margin-top:100px;
	float:right;
	//border-radius:200px;
}
.log
{
	height:100px;
	width:100px;
	border-radius:100px;
	background-color:black;
	border:.5px solid black;
	margin:auto;
	color:#fff;
	line-height:100px;
	text-align:center;
	font-size:23px;
	
}
.log a
{
	text-decoration:none;
	color:#fff;
}
.change
{
	height:60px;
	width:200px;
	margin-top:10px;
	border:1px solid;
	
	text-align:center;
	line-height:60px;
	background-color:black;
	font-size:20px;
}
.change a
{
	text-decoration:none;
	color:#fff;
}
.middle
{
	height:670px;
	width:500px;
	background-color:green;
	float:left;
	margin-left:60px;
}
.line{
	height:670px;
	width:5px;
	background-color:yellow;
	margin-left:20px;
	border:.2px solid yellow;
}
.row
{
	height:50px;
	width:210px;
	border:1px  solid white;
	background-color:green;
	margin-left:5px;
	margin-top:50px;
	
	line-height:50px;
	font-size:23px;
	text-align:center;
	font-family:calibri;
	
}
.row a
{
	text-decoration:none;
	color:#fff;
	
}
.row:hover
{
	background-color:orange;
}
</style>
</head>
<body>
<div class="outer">
	<div class="rohit"></div>
	<div class="middle">
		<div class="line"><strong>
			<div class="row">
				<a href="admin.php"><h3>ADD CATEGRORY</h3></a></div>
			<div class="row" style="margin-left:260px;">	
				<a href="#"><h3>ADD PRODUCTS</h3></a></div>
			<div class="row" >	
				<a href="#"><h3>VIEW PRODUCTS</h3></a></div>
			<div class="row" style="margin-left:260px;">	
				<a href="#"><h3>VIEW FEEDBACK</h3></a></div>
			<div class="row">	
				<a href="#"><h3>VIEW CONTAT</h3></a></div>
			<div class="row" style="margin-left:260px;">
				<a href="#"><h3>VIEW USER</h3></a></div></strong>
				
			
		</div>
		</div>
	<div class="rohi">
		<div class="log"><a href="adminlogout.php">logout</a></div>
		<div class="change"><a href="adchangepass.php">CHANGE PASSWORD</a></div>
	</div>
</div>
</body>
</html>