<?php
$host = "localhost:3308";
$username = "root";
$password = "";
$dbname = "spksaw";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
	die("koneksi gagal :" . $conn->connect_error);
}
