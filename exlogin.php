<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    echo "username Benar";
    $_SESSION['username'] = $username;
    header("location:./admin/");
} else {
    echo "Username atau password salah";
}
?>