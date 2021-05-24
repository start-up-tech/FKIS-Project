<?php

$user = 'root';
$pass = '';
$db = 'fkisdb';


$db = new mysqli('localhost', $user, $pass,$db) or die("Connection failed");

echo"Connection successful";

?>