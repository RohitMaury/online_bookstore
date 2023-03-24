<?php
$pid=$_REQUEST['pid'];
include("connect.php");
$query="delete from tbl_product where pro_id='$pid'";
mysql_query($query);
header("location:viewpro.php");


?>