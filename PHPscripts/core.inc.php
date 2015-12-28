<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME']; // Filepath

function loggedin(){

if (isset( $_SESSION("user_id") {
	return true;
}
else {return false;}
}
?>