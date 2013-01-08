<?php
$skipped;
$db_server = mysql_connect ("localhost" , "root", "" );

if ( ! $db_server )
die ( "Unable to connect to database: " . mysql_error() );
else
//echo "connected"

mysql_select_db("ieep")
or die ( "Unable to select to database: " . mysql_error() );
 
?>