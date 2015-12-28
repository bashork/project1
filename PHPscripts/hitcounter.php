<!--
1. create a table, f.e. with name count ; with 1 field
2. create a table , name hits_ip. Length 15 characters
3.

 -->



<?php
require 'mySQL.php'; //connect with DB
$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_exists($ip){
global $user_ip;
echo "$user_ip";

$query = "SELECT 'ip' FROM 'hits_ip' WHERE 'ip' = '$user_ip'";
$query_run = mysql_query($query);

if (mysql_num_rows($query_run ==1)) {
	return true }

	elseif (mysql_num_rows($query_run == 0) {
	return false;
}
} 


function ip_addr($ip){  #add ip adress of user into table hits_ip

$query = 'INSERT INTO "hits_ip" VALUES ("$ip") ';
}

function update_count(){
$query = 'SELECT count FROM  \'hits_count\'';

if ($query_run = mysql_query($query)){ 
$count = mysql_result($query_run, 0, 'count') ; # 0 row in fieldname count
$echo "$count";
$count_inc = $count++;

$query_update = 'UPDATE \'hits_count\' SET \'count\' = \'$count_inc\''
if ($query_update_run = mysql_query($query_update)){
	echo "OK.";
}

} 
if (!ip_exists($user_ip)) {
	# code...
	update_count();
	ip_addr($ip);

} 
}



?>