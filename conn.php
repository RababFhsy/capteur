<?php
	$db_username = 'sql8507184';
	$db_password = 'Qkh69VLzdk';
	$conn = new PDO( 'mysql:host=sql8.freesqldatabase.com;dbname=DB_NAME', $db_username, $db_password );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>