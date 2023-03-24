<?php

include("connect.php");
$query="select * from tbl_categry";
$res=mysql_query($query);

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

.add{
	height:300px;
	width:100%;
	border:1px solid green;
	background-color:green;
	float:right;
	
	

}
.show{
	height:auto;
	width:auto;
	//background-color:orange;
	margin:auto;
	
}
.show a
{
text-decoration:none;	
}
th
{
	height:50px;
	width:100px;
	background-color:red;
	
}
td
{
	height:30px;
	width:60px;
}
</style>
</head>

<body>
<class="outer">

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
		<div class="add">
				
					<h1 style="color:white;text-align:center;margin-top:20px;">ADD CATEGORY </h1></br></br></br>
					
					<center>
					
					<form action="admincode.php" method="post">
							
					<span style="color:white;font-size:20px;">	Category:*</span>	<input type="text" name="dpt" required  style="height:40px;width:200px; outline:none; border-radius:8px; font-size:20px;"/>
							</br>
							<input type="submit" value="Add" style="height:40px;width:180px; outline:none;borderline:none; border-radius:15px; margin-left:90px;background-color:#72c807;font-size:20px;s"/>
					</form></center>
		</div>	
<hr style="color:red ;size:10px;">		
	<div class="show"><center>
	<table border="2px" cellspacing="0" style="padding:20px;background-color:orange;text-align:center;">
	<tr>
		<th>Sr.No.</th>
		<th>Category</th>
		<th>Date</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php
$a=1;
	while($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
?>
	<tr>
		<td><?php echo $a?></td>
		<td><?php echo $row['category'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><a href="catupdate.php?id=<?php echo $row['cat_id'];?> ">UPDATE</a></td>
		<td><a href="catdelete.php?id=<?php echo $row['cat_id'];?>"> DELETE</a></td>
		
	</tr>
	
	<?php
$a++;	
	}
	
	?>
	</table></center>



</div>	
				
</div>
</body>