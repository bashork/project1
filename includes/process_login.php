<?php
include_once 'db_connect.php';
include_once 'functions.php';
sec_session_start(); // custom way of starting phpsession, see functions file 

if (isset(_POST['email'],$_POST['p'])) { // p stands for hashed password
	$email = $_POST['email'];
	$password = $_POST['p'];  //hashed password

if (login($email,$password,$mysqli) == true) {
	# login success
	header('Location: ../protected_page.php');

} else {
	//login failed
	header('Location: ../index.php?error=1');
}


} else {
//the correct POST variables will be not sent to this page
	echo "Invalid Request";

}

?>