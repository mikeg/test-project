<?php
#contains connection parameters
$con = mysql_connect("localhost", "root", "B0ns3rv3r");
mysql_select_db("bondb");
function kill(){
	mysql_close($con);
}
?>
