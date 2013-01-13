<?php
$skipped;
$db_server = mysql_connect ("mysql16.000webhost.com" ,"a2649868_ieep", "ieep1234" );

if ( ! $db_server )
die ( "Unable to connect to database: " . mysql_error() );
else
//echo "connected"

mysql_select_db("a2649868_ieep") or die("Unable to connect to database".mysql_error() );
?>