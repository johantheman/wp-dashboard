<?php
require 'metric.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dstv_welcome_reporting";
$port = "3306";
$socket = '/tmp/mysqld.sock'; // or: /tmp/mysqld.sock

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}