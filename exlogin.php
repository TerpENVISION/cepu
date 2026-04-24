<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_assoc($query);
    if($data['role']==1){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 1;
        header("location:./admin/school");
    } elseif ($data["role"]== 2){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 2;
        header("location:./admin/log");
    } else{
        header("location:./login.php?alert=wrongdata");
    }
    } else {
        header("location:./login.php?alert=wrongdata");
    }
?>
