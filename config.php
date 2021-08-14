<?php

	$conn = mysqli_connect('sql6.freesqldatabase.com','sql6430958','19s8DbcBN8','sql6430958');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
