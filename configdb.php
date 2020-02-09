<?php
/* work with localhost */
$databaseHost = 'localhost';
$databaseName = 'IngenieriaSoftwareDB';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect(
	$databaseHost, 
	$databaseUsername, 
	$databasePassword, 
	$databaseName
	); 
 
?>