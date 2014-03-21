<?php 
$conn=mysql_connect("localhost","root","robashop") or die("localhost not connect");
//$conn=mysql_connect("localhost","root","") or die("localhost not connect");
	if(!$conn)
	{
		die('Error in Table Query'.mysql_error());
	}
	mysql_select_db("dattatreya",$conn) or die("database not connect");
	?>