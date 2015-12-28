<?php 
$conn_error = 'could not connect'
$mysql_host = 'localhost';
$mysql_user = 'root'; #username
$mysql_pass = '';	#password
$database_name = 'a_database';


//in case of error we do not want to show error ; + echo could not connect

if (!@mysql_connect('$mysql_host','$mysql_user','$mysql_pass' || 
	!@mysql_select_db($database_name) {
die('$conn_error');
}


echo 'Connected!';


?>