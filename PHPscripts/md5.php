<?php //md5 is an encryption
$string = 'password';
$string_hash = md5($string);
echo $string_hash; //you see a hash representation of string password.
						//this hash can't be decrypted. the only way is to compare initial value to hash.
						//f.e. if you have a user password in the database and user sends a form to server
						//you can compare pswd from database to hash and figure out -- match they or not.
?>


<?php
if (isset)($_POST['entered_password'] && !empty ($_POST['entered_password'])) {
$user_password = md5 ($_POST['entered_password']);
$filename = 'hash.txt';
$handle = fopen($filename, 'r');
$filepassword = fread($handle, filesize($filename);  //opening the full-size file
if($user_password == $filepassword) {			//compare entered password translated to md5 
															//with md5 hash in file hash.txt
echo 'Password ok';}
else {
echo 'Wrong password.';
}
} 
else {
	echo 'Please enter a password';
	}


 ?>


<form action = 'md5.php' method="POST">
Password: <input type="password" name="entered_password">
<br>
<input type="submit" value="Submit">




</form>