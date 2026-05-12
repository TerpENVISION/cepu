<?php
    session_start();

    if ($_SESSION['role'] != 1) {
        header("location:../../login.php");
    }

    $lokasi = ucwords($_POST["name"]);
    $id = (int)$_POST["id"];

    include "../../db.php";

    $sql = "INSERT INTO location (id, location)
    VALUES ('$id', '$lokasi')";
    
    if ($mysqli->query($sql) === true) {
        header("location:changemap.php");
    } else {
    }
    
    $mysqli->close();


    

?>