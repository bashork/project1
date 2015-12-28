<html>
<head>
</head>
<body>
<?php 
if(isset (day) && isset(date) && isset(year)) {
	$day = htmlentities($_GET['day']);  //security stuff -- deny ability to use html in those fields
	$date =htmlentities($_GET['date']);
	$year = htmlentities($_GET['year'])
if(!empty($day) && !empty($date)) {
echo "It\'s " . $date . ' date and ' . $day . ' day' ; 
} else { echo 'Fill all fields!';}
?>


<?php 
form action = 'GETandPOST.php' method = 'GET'> //action -- we want to link back to same page;
															// method can be GET(visible in URL)
															// or POST(HTTP POST METHOD)
															//URL  will look like 
															//...   .php?day = monday&date=31&year=2001
Day: <br> <input type= 'text' name = 'day'> <br>
Date: <br> <input type= 'text' name = 'date'> <br>
Year: <br> <input type = 'text' name ='year'> <br>
<input type = 'submit' value = "Submit">
</form>

?>
</body>
</html>