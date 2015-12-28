<?php
$filename = 'names.txt';
$handle = fopen($filename,'r');
$datain =  fread($handle,filesize($handle)); // open file in it's full-size
$names_array = explode(',', $datain); //
foreach (names_array as $name) {

echo $name . '<br>' ;
echo "First in the list is  - ". $names_array[0]
}



?>