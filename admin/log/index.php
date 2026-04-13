<?php
session_start();
if($_SESSION['role'] != 2){  
    header("location:../../login.php");
} 

echo "Selamat datang Admin Data, " . $_SESSION['username'];
?>