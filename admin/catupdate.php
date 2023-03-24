<?php
include("connect.php");
$id=$_REQUEST['id'];
$query="select * from tbl_categry where cat_id='$id'";
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
table{
	margin:auto;
}
td {
	height:30px;
}
input
{
	height:30px;
	outline:none;
	font-size:18px;
}
</style>
</head>
<body>
<?php 
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	?>
	<form action="editcat.php" method="post">
	<table ><h1 style="font-size:30px;color:red;margin-left:600px;">Update Category<h1>
	<input type="hidden" name="id" value="<?php echo $row['cat_id'];?>"/>
	<tr>
	<td><strong><h1>Category:*<h1></strong></td>
	<td><input type="text" name="cate" value="<?php echo $row['category'];?>"/></td></tr>
	<tr><td> </td>
	<td><input type="submit" value="update" style="height:40px;width:150px;margin-left:30px;border-radius:10px;margin-top:10px;color:blue;" /></td>
	</tr>
	</table>
	</form>
	
<?php	
}

?>
</body>

</html>