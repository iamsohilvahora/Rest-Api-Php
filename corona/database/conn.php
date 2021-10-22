<?php
	$conn = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conn, 'coronalive') or die ("no database"); 
	if(!$conn){
		echo "Connetion error: " . mysqli_connect_error() . PHP_EOL;
    	exit;
	}

?>