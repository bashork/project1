<?php
//search_text = 'a'
//LIKE $search_text% -- percentage stands for +anything else.



if (isset($_GET['search_text'])) {
	$search_text = $_GET['search_text'];
}


if (!empty($search_text)) {
if (@mysql_connect('localhost','root','password')){
		if (@mysql_select_db('search_data')) {
		
		$query = "SELECT 'name' FROM 'names' WHERE  'name' LIKE ".mysql_real_escape_string($search_text.'%'); 
		$query_run = mysql_query('search_data', $query);

		while ($query_row = mysql_fetch_assoc($query_run)) {
			echo $name = .$query_row['name'].'<br>';
						//	'<a href = "anotherpage.php?search_text= ..... >

		
		}

	}

} 

}
?>