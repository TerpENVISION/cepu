<?php
    session_start();

    if ($_SESSION['role'] != 1) {
        header("location:../../login.php");
    }

    $id = (int)$_POST["delete"];

    include "../../db.php";

    $sql = "DELETE FROM `location` WHERE `location`.`id` = $id";
    
    if ($mysqli->query($sql) === true) {
        header("location:changemap.php");
    } else {
    }
    
    $mysqli->close();


    

?>