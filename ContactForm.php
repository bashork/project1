<html>
<head>
</head>
<body>
<?php
if (isset($_POST['name']) &&
  !isset($_POST['email']) && 
  isset($_POST['message'])) {
	if (!empty($_POST['name']) &&
	 !empty($_POST['email']) && 
	 !empty($_POST['message'])) {
		$ContactName = $_POST['name'];
	$ContactEmail = $_POST['email'];
	$ContactMessage = $_POST['message'];
	$to = 'pjotr.leshkin@gmail.com';
	

	}
}

?>
<form name = 'feedback' method = 'POST'>
<p>Name :</p><br>
<input type = 'text' name = 'name'><br>
<p>E-mail:</p><br>
<input type = 'text' name = 'email'><br>
<p>Message</p><br>
<textarea name = 'message' rows = '6' columns = '30'></textarea><br>

</form>


</body>