<?php
include("connect.php");
$p=$_POST['pro'];
$a=$_POST['aname'];
//echo $a;
$b=$_POST['book'];
$bp=$_POST['bookprice'];
$q=$_POST['quantity'];
$d=$_POST['description'];
$filename=$_FILES['file']['name'];
//echo $filename;


$type=$_FILES['file']['type'];
//echo $type;
$size=$_FILES['file']['size'];
//echo $size;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$location="upload/";
$query="insert into tbl_product (bookname,author,cat_id,quantity,price,picname,description,date) values('$p','$a','$b','$q','$bp','$filename','$d',now())";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$filename);
header("location:viewpro.php");

?>