<html>
<head>
<title>Registreerumine</title>
</head>
<body>
   <?php
  require_once 'header2.inc.php'; //require the header
  ?>
<div class="container">

      <!-- registration form -->
      <div class="jumbotron" align = 'center'>
        <br>
        <br>
<form action = 'RegisterForm.php' method = 'POST'>
Kasutajanimi <br> <input type= 'text' name = 'Username'> <br>
Nimi <br> <input type= 'text' name = 'name'> <br>
Email <br> <input type = 'text' name ='mail'> <br>
Parool <br> <input type = 'password' name = 'password'> <br>
Korda parooli <br> <input type = 'password' name = 'PasswordConfirmation' > <br> <br>
<button type = 'button' class = 'btn btn-primary btn-lg' action = 'RegisterForm.php'>Registreeri</button>
<br>
  <?php 
  $Username = htmlentities($_GET['Username']);  
  $name =htmlentities($_GET['name']);
  $mail = htmlentities($_GET['mail']);
  $password = htmlentities($_GET['password']);
  $PasswordConfirmation = htmlentities($_GET['PasswordConfirmation']);

if(!empty($Username) && !empty($name) && !empty($mail) && !empty($password) && !empty($PasswordConfirmation)) {

  if ($password == $PasswordConfirmation) {
    echo "<p class = \"bg-success\">Registered!</p>";
  } else { echo "pswds do not match";}
} else {echo "<p class=\"bg-danger\" >Fill all fields!</p>";}
?>
</form>
 




</div>
</div>

   <footer><p align = 'center'> Powered by <span class = 'glyphicon glyphicon-headphones'></span> Pjotr Leškin</p></footer>
</body>
