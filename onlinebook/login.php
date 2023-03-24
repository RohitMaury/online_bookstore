<?php




?>
<html>
<head>
<title>Online Shoping Book Store</title>
<style>
*{
padding:0px;
margin:0px;
}
.outer
{
	height:670px;
	width:100%;
	
}
//.marg
{
	height:120px;
	width:100%;
	background-color:#91acd3;
}
.menu{
height:120px;
width:100%;
//position:fixed;
background-color:0,0,0,.3;
background-color:#91acd3;

}
.menuup
{
height:60px;
width:100%;
//background-color:#593a79;

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
padding:20px;
font-size:25px;
 line-height:50px;
}


.slider
{
height:550px;
width:100%;
background:url('../image/slider/slider8.jpg');
//animation:slide 20s infinite;
}
.login
{
height:300px;
width:500px;
background-color:#333;
border-radius: 30px 30px 30px 30px;
margin-top:100px;
opacity:.7;

}


.text
{
border:none;
width:250px;
background:none;
outline:none;
font-weight:bold;
margin-left:32px;
text-align:center;
margin-top:10px;
color:white;
font-size:20px;
}
hr
{
width:250px;
margin-top:0px;
margin-left:32px;

}
h1
{
color:white;
background-color:black;
border-top-right-radius:30px;
border-top-left-radius:30px;
}
#sub
{
width:200px;
height:35px;
outline:none;
border:none;
color:white;
border-radius:8px;
background-color:#f5f;
font-size:20px;
}
.logo{
height:32px;
width:32px;
//background-color:blue;
background:url('../image/logo/user.png');
margin-left:-285px;
}

.logo1{
height:32px;
width:32px;
//background-color:blue;
background:url('../image/logo/pass.png');
margin-left:-285px;
}
.footer
 {
	 height:400px;
	 width:100%;
	 border:.5px solid #232f3e;
	 background-color:#232f3e;
	 opecity:.15px;
 }
 .collom1
 {
	height:300px;
	width:250px;
	margin-top:40px;
	margin-left:60px;
	border:.1px solid #232f3e;
	float:left;
 }
 .collom1 ul
 {
	 list-style-type:none;
	 
 }
 .collom1 ul li a
 {
	 text-decoration:none;
	 color:white;
	 text-align:center; 
 }
 .collom1 ul li
 {
	margin-top:20px; 
	text-align:center; 
 }
 .fa
 {
	 height:50px;
	 width:50px;
	 float:left;
	 border:2px solid #232f3e;
    border-radius:50px;
	margin-left:8px;
 }
</style>
</head>
<body>
<div class="outer">
<!-- menu start -->
<div class="menu">
	<div class="menuup">
		<div class="logo" Style="float:left"> <img src="../image/logr/logo.jpg" style="height:60px;width:200px;"></div>
		<form ><center><a href="#"><input type="search" style="height:40px ;width:800px ;float:left; margin-left:200px;margin-top:10px;outline:none;font-size:20px; background:none;" /></a></form><div class="search" style="height:40px; width:35px;float:left;margin-top:10px;"><img src="../image/logo/search.jpg" style="height:40px;"></div></center> 
		<div class="addcart" style="float:right;"> <img src="../image/logo/addc.png"></div>
	</div>
	<div class="menudown">
		<ul><strong>
			<li><a href="../index.php"><img src="../image/logo/home.png" style="height:40px; width:40px;"></a></li>
			<li><a href="products.php">PRODUCT</a></li>
			<li><a href="registration.php">REGISTRATION</a></li>
			<li><a href="login.php">LOGIN </a></li>
			<li><a href="#">ABOUT US </a></li>
			<li><a href="#">CONTACT</a></li>
			</strong>
			
		<div class="headr" style="float:right; height:60px;width:300px;background-color:#1A446A;font-size:30px;color:white;"><strong><span style="line-height:60px;">||&nbsp &nbsp &nbsp BOOK STORE</span></strong></div>
		<ul>
		
	</div>
</div>
<div class="marg"></div>
<!-- menu End -->
<!-- login start -->
	<div class="slider">
	<center>
		<div class="login">
	<h1>Login</h1>
<br/>
<br/>

<form action="logincode.php" method="post">
<div class="logo">
<input type="email"  name="email"placeholder="Enter the email"class="text" autocomplete="off" required /><br/><hr></div> <br/>
<div class="logo1">
<input type="Password"  name="password"placeholder="Enter the password"class="text" autocomplete="off" required /><br/><hr></div><br/>
<input type="submit" value="Sign in" id="sub"/>
</form>

</div >
</center>
	</div>
	<!-- login end -->
</div>


<!-- fotter start -->
<div class="footer">
	<div class="foot" style="height:350px; width:100%;border:.1px solid #232f3e;">
		<div class="collom1"><center><strong style="color:white; font-size:25px; opacity:.5">Get to Know Us<hr style="width:225;margin-left:10px;"></strong></center>
			<ul><center>
				<li><a href="#"> > About us<hr style="opacity:.3"/> </a></li>
				<li><a href="#"> > Career <hr style=" opacity:.3"/></a></li>
				<li><a href="#"> > Press Releases <hr style=" opacity:.3"/></a></li>
				<li><a href="#"> > Gift a Smile <hr style=" opacity:.3"/></a></li></center>
				
			</ul>
		</div>
		<div class="collom1"><center><strong style="color:white; font-size:25px; opacity:.5">HELP<hr style="width:125;margin-left:10px;"></strong></center>
			<ul>
				<li><a href="#"> > Your Account <hr style="opacity:.3"/></a></li>
				<li><a href="#"> > Returns Centre<hr style="opacity:.3"/></a></li>
				<li><a href="#"> > 100% Purchase Production<hr style="opacity:.3"/></a></li>
				<li><a href="#"> > Help<hr style="opacity:.3"/></a></li>
			</ul>
		</div>
		<div class="collom1"><center><strong style="color:white; font-size:25px;opacity:.5">POLICY<hr style="width:125;margin-left:10px;"></strong></center>
			<ul>
				<li><a href="#"> > Privacy <hr style=" opacity:.3"/></a></li>
				<li><a href="#"> > Security <hr style=" opacity:.3"/></a></li>
				<li><a href="#"> > Return Policy<hr style="opacity:.3"/></a></li>
				<li><a href="#"> > Terms & Condition<hr style=" opacity:.3"/></a></li>
			</ul>
		</div>
		<div class="collom1"><center><strong style="color:white; font-size:25px;opacity:.5">CONTACT WITH US<hr style="width:250;margin-left:px;"></strong></center>
			<ul>
				<li><a href="https://www.facebook.com/login"> > Fecebook <hr style=" opacity:.3"/></a></li>
				<li><a href="https://twitter.com/login?lang=en"> > Twitter<hr style=" opacity:.3"/></a></li>
				<li><a href="https://www.instagram.com/accounts/login/?hl=en"> > Instagram<hr style=" opacity:.3"/></a></li>
				<li><a href="https://aboutme.google.com/u/0/?referer=gplus"> > Google-plus<hr style=" opacity:.3"/></a></li>
				<li></li>
			</ul>
			<div class="loo" style="height:50px;width:100%;border:.1px solid #232f3e;margin-top:50px;">
				<div class="fa"><a href="https://www.facebook.com/login"><img src="../image/logo/facebook.png" style="border-radius:60px;"></a></div>
				<div class="fa"><a href="https://twitter.com/login?lang=en"><img src="../image/logo/twitter.jpg"  style="border-radius:50px;"></a></div>
				<div class="fa"><a href="https://www.instagram.com/accounts/login/?hl=en"><img src="../image/logo/instagram.jpg"  style="border-radius:50px;"></a></div>
				<div class="fa"><a href="https://www.google.com"><img src="../image/logo/google.jpg"  style="border-radius:50px;"></a></div>
			
			</div>
		</div>
	
	
	
	</div>
	<div class="hr" style="height:1px;width:100%;"> <hr style="height:1px; width:100%;color:#3a4553; opacity:.1;"></div>
		<span style="float:left ; color:white; margin-left:50px;margin-top:20px;"> 2019 &copy Copyright <span style="color:#d78f15"> Online Book Store</span> All rights Reserved</span>
		<span style="float:right;color:white;margin-right:50px;margin-top:20px;"> Designed & Developed By <span style="color:#d78f15;">Rohit Maurya</span> </span>
</div>
<!-- fotter end -->
</body>
</html>
