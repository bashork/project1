<?php 

//w writing
//r reading
//a append 

$handle = fopen('names.txt','w'); //if file does not exist it will be created
fwrite($handle,'Alex'. "\n" );  //handle --where i'm writing to. alex -- what i want to write
fwrite($handle,'Pjotr'. '\n');
fwrite($handle, 'appended','a' );
fclose($handle);//close the file


?>

<?php   //look at the form below the code


if(isset($_POST["inserted_names"])){  
$name = $_POST('inserted_names');
if(!empty($name)) {
	
	$handle = fopen('names.txt','w'); 
	fwrite($handle, $_POST['inserted_names'],); // or $handle, $name
	fclose($handle);
	echo 'Written.'
	echo 'You\'ve registered!';

	
} else { echo 'Looks like you forgot to enter your name :('}

?>

<form action="file.php" method="POST">  
Name: <br>
<input type="text" name="inserted_names">
<input type="submit" value="Register">
</form>