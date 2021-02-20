<?php

$host    = 'localhost';
$dbname  = 'wsr-m5';
$user    = 'root';
$pass    = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset;";

$pdo = new PDO($dsn, $user, $pass);

?>
