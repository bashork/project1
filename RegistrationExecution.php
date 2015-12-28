  <?php 
  $Username = htmlentities($_GET['Username']);  
  $name =htmlentities($_GET['name']);
  $mail = htmlentities($_GET['mail']);
  $password = htmlentities($_GET['password']);
  $PasswordConfirmation = htmlentities($_GET['PasswordConfirmation']);

if(!empty($Username) && !empty($name) && !empty($mail) && !empty($password) && !empty($PasswordConfirmation)) {

  if ($password == $PasswordConfirmation) {
    echo "Registered!";
  } else { echo "pswds do not match";}
} else {echo "Fill all fields";}
?>