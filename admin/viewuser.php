<?php
include("connect.php");
$query="select * from bookstore_table";
$res=mysql_query($query);


?>
<html>
<head>
<style>
*{
	margin:0px;padding:0px;
}
.user
{
	height:auto;
	width:100%;
	margin-left:270px;
}
table
{
	//margin:auto;
}
th
{
	height:50px;
	background-color:red;
}
td
{
	height:40px;
	background-color:yellow;
}
</style>
</head>
<body bgcolor="#8cd8d">
<?php
include("menu.php");
?>
<div class="user">
<table border="2"  cellspacing="0" style="width:80%;">
<tr>
<th>Sr.No:*</th>
<th>Name:*</th>
<th>Father's Name:*</th>
<th>Gender:*</th>
<th>Email:*</th>
<th>Mobile:*</th>
<th>Address:*</th>
<th>City:*</th>
<th>PinCode:*</th>
<th>Date:*</th>

</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))

{
?>
<tr>
<td><?php echo $a?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['pincode'];?></td>
<td><?php echo $row['date'];?></td>
</tr>
<?php
$a++;
}
?>
</div>
</body>
</html>