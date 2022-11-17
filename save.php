<?php
header("Access-Control-Allow-Origin: *");


if(isset($_POST)){
      

	$myfile = fopen('experiment.txt', 'a');
	
        if (false === $myfile) {
		print "FOPEN NOT WORKING<br>";
	}
	
	fwrite($myfile, json_encode($_POST) . PHP_EOL);
	fclose($myfile);
}
 
 

?>

