<?php
    session_start();

    if ($_SESSION['role'] != 1) {
        header("location:../../login.php");
    }

    include "../../db.php";


    $lokasi = ucwords($_POST["name"]);
    $id = (int)$_POST["id"];



    $sql = "INSERT INTO location (id, location) VALUES ('$id', '$lokasi')";


    if (empty($lokasi)) {
        header("location:changemap.php?alert=missingvalue");
    } elseif (empty($id)) {
        header("location:changemap.php?alert=missingvalue");
    } else {
        if ($mysqli->query($sql) === true) {
            header("location:changemap.php");
        } else {
        }
    }

    
    $mysqli->close();


    

?>