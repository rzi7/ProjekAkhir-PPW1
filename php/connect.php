<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itineraryplanner";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
    echo " berhasil rek <br>";
}

?>