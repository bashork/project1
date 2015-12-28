<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';

require_once 'header2.inc.php'; // registration and login <div>
// require 'StartSession.php';
include_once 'includes/db_connect.php';
?>
<?php 
//include '/cookies/cookie1.php';
sec_session_start();
if(login_check(mysqli)==true){
  $logged = 'in';

} else{
  $logged = 'out';
}

?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/navbar-fixed-top.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
    <script type="text/javascript" src= '/includes/forms.js'></script>




<style type="text/css">
body { background: url(bg1.jpg) repeat !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){ // fade the content in by the load; don't forget about style =display:none
    
        $("#thumbnail1").fadeIn(1500);
        $("#thumbnail2").fadeIn(1500);
        $("#thumbnail3").fadeIn(1500);
        $('#plainer').fadeIn(1500);   
        $('#password').fadeIn(1500);
        $('#email').fadeIn(1500);
        $('#confirmpwd').fadeIn(1500);

});

</script>
<title>Konspektid</title>
</head>
<body > 

 <div class="container">
      <!-- Banner at the top of the site -->
      <div class="jumbotron"  id = 'plainer' style = "display:none">
        <h1>Liitu meiega!</h1>
                <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>

        <ol>
            <li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one uppercase letter (A..Z)</li>
                    <li>At least one lowercase letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ol>
        <form  class ='plainer' action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
            Username: <br><input type='text' 
                name='username' 
                id='username'/>

           <br>

            Email: <br>

            <input type="text"
             name="email
             " id="email" /><br>

            Password:
            <br> <input type="password"
                             name="password" 
                             id="password"/>

                             <br>
            Confirm password:
            <br> <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><p id = 'confirmpwdError' ><p>
                                     <br>

            <input  class = 'btn btn-lg btn-success'
                    type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 

        </form>
        
         
        </p>
      </div>

      <!-- news at the bottom of the site -->
<div class='news'>
<div class="row">
 <?php include 'news/thumbnail1.php'; ?>
 <?php include 'news/thumbnail2.php'; ?>
 <?php include 'news/thumbnail3.php'; ?>
</div>
</div>
<div id ='about'>Some text about site <div>
<p>Your browser and system are : </p>
<?php include_once  'UserBrowser.php'; ?>


            <!-- footer with logo -->
   <footer><p align = 'center'> Powered by <span class = 'glyphicon glyphicon-headphones'></span>Pjotr Leškin</p></footer>
</div>


</body>
</html>