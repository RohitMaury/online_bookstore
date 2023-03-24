<?php
session_start();
include('connect.php');
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;

$query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['admin']=$email;
	header("location:profile.php");	
}
else
{
	//echo "<script>alert('Invalide email or password')</script>";
	header("location:adminlogin.php");
	
}


?>