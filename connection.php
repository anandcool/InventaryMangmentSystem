<?php
$host = 'localhost';
$user = 'root';
$password='';
$dbname = 'inventory';

//Set DSN
$dsn = 'mysql:host='.$host.';dbname='.$dbname;


//Create a PDO Instance
$pdo = new PDO($dsn,$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);



?>