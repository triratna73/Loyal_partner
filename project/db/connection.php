<!--connect to database-->
<?php
	$server = '127.0.0.1';
	$username = 'test';
	$password = 'test';

	$schema = 'loyalpartners';
	$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username,$password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>