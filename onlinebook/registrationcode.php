<?php

$name=$_POST['name'];
$fn=$_POST['fname'];
$g=$_POST['a'];
$e=$_POST['email'];
$p=$_POST['password'];
$m=$_POST['mobile'];
$add=$_POST['address'];
$c=$_POST['city'];
$pc=$_POST['pin'];
//echo $pc

include('connect.php');
  $query="insert into bookstore_table(name,fname,gender,email,password,mobile,address,city,pincode,date) values('$name','$fn','$g','$e','$p','$m','$add','$c','$pc',curdate())";
mysql_query($query);
 //echo "completed"; */
header("location:login.php");
?>