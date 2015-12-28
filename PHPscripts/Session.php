<?php 			//sessions are stored at the server agains cookies
					//sessions are much more safer and quicker

session_start(); //start the session
$_SESSION['username'] = 'Pjotr';  	// this should be accessible to any page of website even
													//if we hadn't declared it
													//$_SESSION['key'] = 'value'
			


?>



Other file:
<?php 
session_start();
if(isset($_SESSION['username'])) {
	echo 'Welcome!' . $_SESSION['username'];
	} 
	else {
		 echo 'Please log in!';
	 }
echo $_SESSION['session_name'];
?>

Logout-file(f.e.):

<?php 
session_start();
session_unset($_SESSION['username']);
if($age>=21) {
session_start();
$_SESSION['age'];
$_SESSION['username'];

}

session_destroy(); //unset all the sessions

?>