<?php
$name=$_POST['name'];	
$email=$_POST['email'];	
$m=$_POST['mob'];	
$mass=$_POST['mass'];	
include("connect.php");
$query="insert into tbl_contact (name,email,mobile,massage,date) value('$name','$email','$m','$mass',now())";
mysql_query($query);
header("location:contact.php");


?>