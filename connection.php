<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "skripsi";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn) {
    echo "Connected";
} else {
    echo "Connection Failed";
}
