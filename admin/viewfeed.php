<?php
include("connect.php");
$query="select * from tbl_feedback";
$res=mysql_query($query);




?>
<html>
<head>
<style>
*{
	margin:0px;
	padding:0px;
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
.info{
	height:auto;
	width:100%;
	border:2px solid;
	margin-left:270px;
	
	
}
th{
	background-color:red;
	height:50px
}
td{
	background-color:yellow;
	height:30px;
}

</style>
</head>
<body bgcolor="#4f4f8f">
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
<div class="info">
<table border="5px" cellspacing="0" style="text-align:center;width:80%;">
<tr>
<th>Sr.No</th>
<th>Username</th>
<th>Feedback</th>
<th>Date</th>
</tr>
<tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<td><?php echo $a ?></td>
	<td><?php  
				
				$fid= $row['feed_id'];
			
			$query="select * from bookstore_table where id='$fid'";
			$res2=mysql_query($query);
			if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
			{
				echo $row2['name'];
				
			}
			
	
	?></td>
	<td><?php echo $row ['information']?></td>
	<td><?php echo $row ['date']?></td>
	</tr>

<?php
$a++;
}

?>

</table>

</div>
</body>
</html>