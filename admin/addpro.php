<?php 
include("connect.php");
$query="select * from tbl_categry";
$res=mysql_query($query);



?>
<html>
<head>
<style>
*{
	margin:0px;padding:0px;
}
.pro{
	height:600px;
	width:500px;
	border:1px solid red;
	background-color:orange;
	margin:auto;
}
table tr
{
	//margin-top:20px;
	height:60px;
}
.input
{
	height:25px;
	width:200px;
	margin-left:60px;
	outline:none;
	
}
table
{
	font-size:20px;
	
}
</style>
</head>
<body>
<?php
include("menu.php");
?>
<div class="pro">

<form action="addcode.php" method="post" enctype="multipart/form-data" class="input">

<table >
<strong>
<tr><td>
Product Name:*</td><td><input type="text" name="pro" required="" class="input"/></td></tr>
<tr><td>Author Name:*</td><td><input type="text" name="aname" required=""class="input"/></td></tr>
<tr><td>Book Category:*</td><td>
<select class="input" name="book">
<option value="">---Select---</option>
<?php 
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<option value="<?php echo $row['cat_id'];?>"><?php echo $row['category'];?></option>

<?php
}
?>
</select></td></tr>
<tr><td>Book Price:*</td><td><input type="text" name="bookprice" required=""class="input"/></td></tr>
<tr><td>Quantity:*</td><td><input type="text" name="quantity" required=""class="input"/></td></tr>
<tr><td>Description:*</td><td><textarea name="description" required=""class="input"></textarea></td></tr>
<tr><td> Book Picture:*</td><td> <input type="file" name="file"/ required=""class="input"></td></tr></br>

</strong></table>
<input type="submit" value="Add" style="margin-left:180px; outline:none; borderline:none; background-color:#72c807;height:50px;width:200px; font-size:20px; border-radius:10px;">
</form>

</div>
</body>
</html>