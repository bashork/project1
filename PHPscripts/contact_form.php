<html>
<head></head>
	<body>

<p>hi </p>
<?php 
if(!empty($_POST["contact_form_name"]) && !empty 
($_POST["contact_form_mail"]) && !empty ($_POST["contact_form_message"])) {
$contact_name = $_POST['contact_form_name'];
$contact_mail = $_POST['contact_form_mail'];
$contact_msg = $_POST['contact_form_message'];
$to = 'pjotr.leshkin@gmail.com';
$subject = 'Contact form submitted';
$body = $contact_name . '/n' . $contact_msg;
$headers = 'From: ' .$contact_mail;

//afterward goes code which e-mails
// if(mail ($to, $subject, $body, $headers)) {
//echo 'Thanks for submitting contact form! We appreciate your will to help';
//} else {echo 'sorry an error occured please try again later.'}
}
} else{ echo 'All fiels are required';}
?>

<form action="contact_form.php" method="POST">
	Name:<br> <input type="text" name="contact_form_name"><br>
	Your's Email adress : <br> <input type="text" name="contact_form_mail"> <br>
	Message: <br> 
	<textarea name="contact_form_message" rows="6" cols="30"> </textarea> <br>
	<input type="submit" value="Send message">


</form>

</body>
</html>