<?php
session_start();
//echo "welcome EPPLOYEE";
$email=$_SESSION['user'];
 //echo $email;
if($_SESSION['user']=="")
{
	session_destroy();
	header("Location:login.php");
}
//echo $email=$_REQUEST['email'];
include("connect.php");
$query="select * from bookstore_table where email='$email'";
$res=mysql_query($query);



?>
<html>
<head>
<style>
*
{
	margin:0px;
	padding:0px;
	
}
.menudown
{
height:60px;
width:100%;
background-color:#1A446A;


}
.menudown ul
{

}
.menudown ul li 
{

display:inline;


}
.menudown ul li a
{
text-decoration:none;
color:white;
padding:25px;
font-size:25px;
 line-height:50px;
}
.profile
{
	height:600px;
	width:100%;
	border:.1px solid #fff ;
	background:url('../image/slider/slider6.jpg');
}
.update
{
	height:500px;
	width:500px;
	border:.1px solid green;
	background-color:green;

	margin:auto;
	border-radius:35px;
	
}





</style>
</head>

<body>

<div class="menudown">
		<ul><strong>
			<li><a href="profile.php"><img src="../image/logo/home.png" style="height:40px; width:40px;"></a></li>
			<li><a href="product.php">Products</a></li>
			<li><a href="discussion.php">Discussion Board</a></li>
			<li><a href="feedback.php">feedback</a></li>
			<li><a href="update.php">Update Profile</a></li>
			<li><a href="changepassword.php">Change Password</a></li>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="#">Cart&nbsp 0<div class="zero" style="width:30px;height:30px;border-radius:30px;color:fff;background-color:none; border:1px solid black;opacity:.5;float:right;margin-right:30px;line-height:60px;margin-top:-40px;"></div></a></li>
			</strong>
			
</div>

<div class="profile">
	<div class="update">
	<center><h1><Strong>Update Profile</strong></h1></center>
<?php
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
		
		<form action="edit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
			<span style="margin-left:50px;">Name:*</span>
						<input type="text" name="name" required="" value="<?php echo $row['name'];?>"style="height:30px; width:250px;margin-left:60px; outline:none;"/><br/><br/>
					<span style="margin-left:50px;">Father's Name:*	</span>
						<input type="text" name="fname" required="" value="<?php echo $row['fname'];?>"style="height:30px;width:250px;margin-left:5px ;outline:none;"/><br/><br/>
					<span style="margin-left:50px;">Gender:*</span>
						<input type="radio" name="a" required="" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='male'){?> checked <?php } ?>  style="margin-left:60px ;outline:none;">Male &nbsp &nbsp &nbsp &nbsp &nbsp
						<input type="radio" name="a" required="" value="<?php echo $row['gender'];?>" <?php if($row['gender']=='female'){?> checked <?php } ?> />Female</br></br>
					
					<span style="margin-left:50px;">Mobile:*</span>
						<input type="mobile" name="mobile" required=""  value="<?php echo $row['mobile'];?>"style="height:30px;width:250px;margin-left:53px ;outline:none;"/></br></br>
					<span style="margin-left:50px;">Address:*</span>
						<textarea name="address" required="" style="height:30px;width:250px;margin-left:45px; outline:none;">
						   <?php echo $row['address'];?></textarea></br></br>
					<span style="margin-left:50px;">City:*</span>
						<select name="city" required="" style="height:30px;width:250px;margin-left:73px; outline:none;">
							<option>----Select----</option>
							<option>Allahabad</option>
							<option>Varanasi</option>
							<option>Agra</option>
							<option>Delhi</option>
							<option>Patana</option>
							<option>Lucknow</option>
						</select>
						</br></br>
					<span style="margin-left:50px;">Pin Code:*</span>
						<input type="number" name="pin" value="<?php echo $row['pincode'];?>" style="height:30px;width:250px;margin-left:40px; outline:none;"/></br></br>
						<input type="submit" value="update" style="height:35px;width:200px;margin-left:200px;border-radius:25px;outline:none;border:none;background-color:#2152f5;color:fff;"/>
						
		</form>

<?php
}
?>
</div>
</div>
</body>


			
</html>