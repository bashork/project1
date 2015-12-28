
<?php

$match = 'pass123';

if (isset( $_POST['password'])){
$password =  $_POST('password');
if(!empty ($password)){
if ($password==$match){
echo 'This is correct'
}
}
}
 ?>

<?php

<form action = 'index.php' method = "POST">
Password <br>
<input type = "password" name = "password">
<input type = "submit" value = "Submit">

?>

