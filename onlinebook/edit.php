<?php
session_start();

if($_SESSION['user']=="")
{
 session_destroy();
header("Location:login.php"); 

}

include("connect.php");
$id=$_POST['id']; //echo $id;
$name=$_POST['name']; //echo $name;
$fname=$_POST['fname']; //echo $fname;
$gender=$_POST['a']; //echo $gender;

$mobile=$_POST['mobile']; //echo $mobile;
$address=$_POST['add'];  //echo $address;
$city=$_POST['city'];
$pincode=$_POST['pin'];
$query="update bookstore_table set name='$name',fname='$fname',gender='$gender',mobile='$mobile',address='$address',city='$city',pincode='$pincode' where id='$id'";
mysql_query($query);
header("Location:profile.php");




?>