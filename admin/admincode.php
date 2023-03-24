<?php
$add=$_POST['dpt'];
//echo $add;
include("connect.php");
 $query="insert into tbl_categry(category,date) values('$add',now())";
mysql_query("$query");
//echo "completed";
header("Location:admin.php");


?>