<?php

$server = 'localhost';
$username = 'root';
$password = '';

$db_name = 'logins';

$dbname = 'customers';

$conn = mysqli_connect($server, $username, $password, $db_name);

if(!$conn) {
  echo 'Failled';
}