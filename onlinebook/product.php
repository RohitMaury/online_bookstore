<?php 
session_start();
include("connect.php");
$query="select * from tbl_product";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['pro_id']=$pro_id;
	echo $pro_id;
	header("location:product.php");
}

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
padding:65px;
font-size:25px;
 line-height:50px;
}
.book{
	height:1640px;
	width:100%;
	//border:.1px solid green;
	
}
.row
{
	height:400px;
	width:100%;
	border:.1px solid #fff;
	margin-top:10px;
}
.collom
{
	height:400px;
	width:300px;
	border:.1px solid #f8f8f8;
	float:left;
	margin-left:30px;
	background-color:#f8f8f8;
}
.rohit
{
	height:60px;
	width:280px;
	margin-left:10px;
	border:.1px solid #f8f8f8;
	margin-top:15px;
}
.buy
{
	height:60px;
	width:137px;
	background-color:red;
	float:left;
	color:#fff;
	line-height:60px;
	font-size:30px;
	text-align:center;
}
.add
{
	height:60px;
	width:138px;
	float:left;
	background-color:green;
	color:#fff;
	line-height:60px;
	font-size:30px;
}
.line
{
	height:60px;
	width:2px;
	background-color:#fff;
	float:left;
}
</head>
</style>
<body>
<div class="menudown">
		<ul><strong>
			<li><a href="programming.php">Programming</a></li>
			<li><a href="database.php">Database</a></li>
			<li><a href="mechanical.php">Mechanical</a></li>
			<li><a href="webdesigning.php">Web Designing</a></li>
			<li><a href="electranics.php">Electronics</a></li>
			</strong>
		</ul>	
			
</div>
<div class="book">
<div class="row">
	<div class="collom"><img src="../image/books/book1.jpeg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
	<div class="collom"><img src="../image/books/book2.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
	<div class="collom"><img src="../image/books/book3.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
	<div class="collom"><img src="../image/books/book4.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:5px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
	


</div>
	<div class="row">
			<div class="collom"><img src="../image/books/book5.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
			<div class="collom"><img src="../image/books/book6.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
			<div class="collom"><img src="../image/books/book7.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
			<div class="collom"><img src="../image/books/book8.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>



</div>
	<div class="row">
		<div class="collom"><img src="../image/books/book9.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
		<div class="collom"><img src="../image/books/book10.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
		<div class="collom"><img src="../image/books/book11.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
		<div class="collom"><img src="../image/books/mbook2.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>



</div>
	<div class="row">
		<div class="collom"><img src="../image/books/book14.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
		<div class="collom"><img src="../image/books/mbook5.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
		<div class="collom"><img src="../image/books/pbook1.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>
		<div class="collom"><img src="../image/books/book13.jpg" Style="height:310px;width:280px;margin-left:10px;margin-top:10px;"><div class="rohit"><a href="#"> <div class="buy">Buy</div></a><div class="line"></div><a href="#"><div class="add">Add Card</div></a></div></div>

</div>


</div>
</body>
</html>