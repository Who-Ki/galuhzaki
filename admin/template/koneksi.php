<?php

$host = "localhost";

$username = "root";

$password = "";

$database = "praktek_0708"

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) 

{

die("koneksi gagal: " . $conn->connect_error)

}

?>