<?php
$servername = 'localhost';
$username = 'ictatjcu_getitfi';
$password = '123zxc';
$database = 'ictatjcu_getitfix';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>