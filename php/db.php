<?php 
	$sql_conn = @mysql_connect("127.0.0.1", "root", "11111111") or exit(mysql_error()); 
	mysql_query("set names utf8");
	@mysql_select_db("crb", $sql_conn) or exit(mysql_error());

?>
