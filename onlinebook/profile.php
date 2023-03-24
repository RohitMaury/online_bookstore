<?php
session_start();
include("connect.php");

$email=$_SESSION['user'];
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
	border:.5px solid none ;
	background:url('../image/slider/slider6.jpg');
}
.registration
{
	height:500px;
	width:500px;
	border:.1px solid red;
	background-color:yellow;
	border-radius:30px;
	margin:auto;
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
			<li><a href="cart.php">Cart&nbsp 0<div class="zero" style="width:30px;height:30px;border-radius:30px;color:fff;background-color:none; border:1px solid black;opacity:.5;float:right;margin-right:30px;line-height:60px;margin-top:-40px;"></div></a></li>
			</strong>
			
</div>
</hr>
<div class="profile">
	<div class="registration">
		<center><span style="font-size:50px;"><strong>Your Details</strong></span></center>
			<form action="registrationcode.php" method="post">
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
			
					<b style="margin-left:50px;">Name:*
						<span  style="height:30px; width:250px;margin-left:60px; outline:none;"> <?php echo $row['name'];?></span><br/><br/>
					<span style="margin-left:50px;">Father's Name:*	</span>
						<span  style="height:30px;width:250px;margin-left: ;outline:none;"/><?php echo $row['fname'];?></span><br/><br/>
					<span style="margin-left:50px;">Gender:*</span>
						<span style="margin-left:60px ;outline:none;"><?php echo $row ['gender'];?>
						</span><br/><br/>
					<span style="margin-left:50px;">Email:*	</span>
						<span  style="height:30px;width:250px;margin-left:60px ;outline:none;"><?php echo $row['email'];?></span><br/><br/>
					<span style="margin-left:50px;">Password:*</span>	
						<span style="height:30px;width:250px;margin-left:35px ;outline:none;">************</span><br/><br/>
					<span style="margin-left:50px;">Mobile:*</span>
						<span style="height:30px;width:250px;margin-left:53px ;outline:none;"><?php echo $row['mobile'];?></span></br></br>
					<span style="margin-left:50px;">Address:*</span>
						<span style="height:30px;width:250px;margin-left:45px; outline:none;">
						<?php echo $row['address'];?>
						</span><br/><br/>
					<span style="margin-left:50px;">City:*</span>
						<span style="height:30px;width:250px;margin-left:73px; outline:none;">
							<?php echo $row['city'];?>
						</span>
						<br/><br/>
					<span style="margin-left:50px;">Pin Code:*</span></b>
						<span style="height:30px;width:250px;margin-left:40px; outline:none;"><?php echo $row['pincode'];?></span></br><br/>
				
<?php
}
?>				
			</form>
		
		</div>
		


</div>
</body>			
</html>