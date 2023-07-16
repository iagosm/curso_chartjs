<?php
$dbname = 'dash1';
$user = 'root';
$server = 'localhost';
$dbpass = '';

$conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $dbpass);