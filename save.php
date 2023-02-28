<?php
header("Access-Control-Allow-Origin: *");


if(isset($_POST)){
	$myfile = fopen('agecomparisonlogging.txt', 'a');
	
        if (false === $myfile) {
		print "FOPEN NOT WORKING<br>";
	}
	$myLine = implode(",", $_POST['dataArray']);
	$temp = str_replace("[", "", $myLine);
	$toWrite = str_replace("]", "", $temp);
	fwrite($myfile, $toWrite . PHP_EOL);
	fclose($myfile);
}
 
 

?>


