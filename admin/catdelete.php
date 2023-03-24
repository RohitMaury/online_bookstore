<?php
$id=$_REQUEST['id'];
echo $id;
include("connect.php");
$query="delete from tbl_categry where cat_id='$id' ";
mysql_query($query);



?>