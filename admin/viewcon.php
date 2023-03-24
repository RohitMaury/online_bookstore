<?php
include("connect.php");

$query="select * from tbl_contact";
$res=mysql_query($query);


?>
<html>
<head>
<style>
.view
{
	height:auto;
	width:100%;
	border:1px solid #4f4f8f;
		//margin-left:270px;
	//background-color:#f2f2f2;
}
th{
	background-color:red;
	height:40px;
}
td
{
	height:30px;
	background-color:yellow;
}
</style>
</head>
<body bgcolor="#4f4f8f">
<?php
include("menu.php");
?>
<div class="view">
<table border=5 cellpadding=0 cellspacing=0 style="margin-left:270px; width:80%;">
<tr>
<th>Sr.No</th>
<th>Name:</th>
<th>Email</th>
<th>Mobile</th>
<th>Massage</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))

{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['massage'];?></td>
<td><?php echo $row['date'];?></td>

<?php 

}
?>
</tr>

</table>

</div>
</body>

</html>