<?php 

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
	height:1200px;
	width:100%;
	//border:.1px solid green;
	
}
.row
{
	height:400px;
	width:100%;
	border:.1px solid green;
}
.collom
{
	height:400px;
	width:300px;
	border:.1px solid red;
	float:left;
	margin-left:30px;
	background-color:#f8f8f8;
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
	<div class="collom"></div>
	<div class="collom"></div>
	<div class="collom"></div>
	<div class="collom"></div>


</div>
	<div class="row">
	<div class="collom"></div>
	<div class="collom"></div>
	<div class="collom"></div>
	<div class="collom"></div>


</div>
	<div class="row">
	<div class="collom"></div>
	<div class="collom"></div>
	<div class="collom"></div>
	<div class="collom"></div>


</div>
</div>
</body>
</html>