<?php
    session_start();

    if ($_SESSION['role'] != 1) {
        header("location:../../login.php");
    }

    $id = (int)$_POST["edit"];
    $lokasi = ucwords($_POST["name"]);
    $newid = (int)$_POST["id"];

    include "../../db.php";
    
    $sql = "UPDATE `location` SET `id` = '$newid', `location` = '$lokasi' WHERE `location`.`id` = $id;";
    
    if ($mysqli->query($sql) === true) {
        header("location:changemap.php");
    } else {
    }
    
    $mysqli->close();


    

?>