<?php 
require 'mySQL.php';


<form>
<select name = 'uh'>
<option value = 'h'>'healthy' </option>
<option value = 'u'>'unhealthy' </option>
<input type = 'submit' value = 'Submit'>
</form>
$quiery = "SELECT 'food', 'calories', FROM 'food' ORDER BY  'id' "; 
//$quiery = "SELECT 'food', 'calories', FROM 'food' ORDER BY  'id' ASC/DESC"; 
//
//

if (isset($_GET['uh'] && !empty($_GET['uh']))){
echo $uh = $_GET['uh'];
  }
$query_run = mysql_query($quiery) // run the script quiery

if (mysql_num_rows(query_run) == NULL){ // does the query have any results?
	echo "no results found";
} else {

if ($quiery_run = mysql_query($query)) {  // in case of wrong query
	echo "Query Success";
while ($query_row = mysql_fetch_assoc($query_run)) {  // fetch associative array
$food = $query_row['food'];
$calories = $query_row['calories']; // field name food and field name calories
	
	echo $food. " has  " .$calories 'calories . <br>';
}
}	else { echo "Query failed";
			echo mysql_error(); // print the error

}
}

?>