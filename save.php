<?php
header("Access-Control-Allow-Origin: *");


if(isset($_POST)){
      
	$id = $_POST['hitid'];
	$myfile = fopen(strval($id) . '.txt', 'a');
	
        if (false === $myfile) {
		print "FOPEN NOT WORKING<br>";
	}
	
	fwrite($myfile, json_encode($_POST) . PHP_EOL);
	fclose($myfile);
}
 
 

?>

