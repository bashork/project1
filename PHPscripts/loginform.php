<?php
require 'mySQL.php';
require 'core.inc.php';
echo $current_file;
<form action = '' method = 'POST'>
Username: <input type = 'text' name ='username'> <br>
Password: <input type = 'password' name = 'password'> <br>
<input type = 'submit' value  = 'log in'>
</form>

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (!empty($username) && !empty($password)) {
		$query = 'SELECT \'id\' \'username\' AND \'password\' FROM \'users\' WHERE
		\'username\' = \'$username\' AND  \'password\' = \'password\''
		if ($query_run = mysql_query($query)) {
			$query_num_rows = mysql_num_rows($query);
			if ($query_num_rows == 0) {
				echo "Invalid username/password combination";
				else if ($query_num_rows ==1) {
echo "OK";
$user_id = mysql_result($query_run, 0, 'id'); # we need user id for storing it in session
$_SESSION['user_id'] = $user_id;
header('Location:index.php')
				}


				
			}
		}

	}else {
		echo "You must supply username and password";
	}
}

 ?> 