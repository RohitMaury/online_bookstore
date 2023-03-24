<?php
$feed=$_POST['feed'];

include("connect.php");

$query="insert into tbl_feedback (information,date) values ('$feed',now())";
mysql_query($query);
header("location:feedback.php");




?>