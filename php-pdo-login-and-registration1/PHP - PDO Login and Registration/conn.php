<?php
	$db_username = 'root';
	$db_password = 'Gladiator/89';
	$conn = new PDO( 'mysql:host=localhost;dbname=db_login', $db_username, $db_password );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>