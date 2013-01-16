<?php
include "db_connect.php";
$a=rand(1,16);
$query="SELECT * from poll where q_id=$a";
$result=mysql_query($query);
$row = mysql_fetch_row($result);
echo $row[1];
?>
