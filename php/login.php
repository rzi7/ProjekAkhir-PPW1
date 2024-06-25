<?php
require '/xampp/htdocs/Proyek_Akhir/php/connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    header("Location: /Proyek_Akhir/index.html");
} else {
    header("Location: /Proyek_Akhir/login.php");
}
?>