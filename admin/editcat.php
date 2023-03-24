<?php
$id=$_POST['id'];
$cat=$_POST['cate'];
include("connect.php");
$query="update tbl_categry set category='$cat' where cat_id='$id'";
mysql_query($query);
header("location:admin.php");


?>