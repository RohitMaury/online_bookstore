<?php

include("connect.php");
$query="select *from tbl_product ";
$res=mysql_query($query);

?>
<html>
<head>
<style>
*{
	margin:0px;padding:0px;
}
.show
{
	height:auto;
	width:100%;
	margin-left:270px;
	border:1px solid white ;
}
th
{
	height:50px;
	background-color:red;
}
td{
	text-align:center;
	background-color:pink;
}
.table
{
	height:auto;
	width:100%;
	//margin-left:270px;
	border:1px solid white;
	//margin-top:20px;
}
</style>
</head>
<body bgcolor="4f4f4f">
<?php
include("menu.php");
?>
<div class="show">
<div class="table">
<table border="2"  cellpadding="8" cellspacing="0" style="margin-top:0px;width:80%">
<tr>
<th>Sr.No.:*</th>
<th>Book Name:*</th>
<th>Author Name:*</th>
<th>Category:*</th>
<th>Book Name:*</th>
<th>Quantity:*</th>
<th>Description:*</th>
<th>Book Pic:*</th>
<th>Date:*</th>
<th>Delete:*</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['bookname'];?></td>
<td><?php echo $row['author'];?></td>
<td><?php echo $row['cat_id'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['quantity'];?></td>
<td><?php echo $row['description'];?></td>
<td><img src="upload/<?php echo $row['picname'];?>" height="90px" width="70px"/></td>
<td> <?php echo $row['date'];?></td>
<td><a href="deleteviewpro.php?pid=<?php echo $row['pro_id'];?>"><img src="" style="">DELETE</a></td>
</tr>
<?php
$a++;
}
?>
</table>
</div>
</div>
</body>
</html>