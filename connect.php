<?php

$dbname = 'Wastebudd';
$dbuser = 'nipuna';  
$dbpass = 'samsungpl120'; 
$dbhost = '139.162.10.226'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$distance = $_GET["distance"];



$query = "INSERT INTO wastebudd_bin (distance) VALUES ('$distance')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";