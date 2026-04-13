<?php
session_start();
if($_SESSION['role'] != 1){  
    header("location:../../login.php");
} 

echo "Selamat datang Admin Sekolah, " . $_SESSION['username'];
?>