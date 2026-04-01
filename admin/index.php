<?php
session_start();
if ($_SESSION['username'] != "") {
    header("../");
}
echo "Selamat datang Admin, " . $_SESSION['username'];
?>