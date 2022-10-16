<?php
$hostname = 'localhost'; //127.0.0.1
$username = 'root';
$psswd = '';
$dbname = 'loginuser';

$conn = mysqli_connect($hostname, $username, $psswd, $dbname) or die('Connection Failed.');
?>