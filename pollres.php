<?php
include"db_connect.php";
$x=$_POST['p'];
$q = $_POST['q'];
if($x==0)
$query="UPDATE poll SET yes=yes+1 WHERE question = '$q'";
else
$query="UPDATE poll SET no=no+1 WHERE question = '$q'";
$result = mysql_query($query);
$query1 = "SELECT * FROM poll WHERE question = '$q'";
$result1 = mysql_query($query1);
$row = mysql_fetch_row($result1);
$yes = $row[2];
$no = $row[3];
$per_yes = ($yes/($yes + $no))*100;
$per_no = ($no/($yes + $no))*100;
$per_yes= number_format($per_yes, 2, '.', '');
$per_no= number_format($per_no, 2, '.', '');
echo"yes=$per_yes%<br>no=$per_no%";

?>