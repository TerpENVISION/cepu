<?php
    session_start();

    if ($_SESSION['role'] != 1) {
        header("location:../../login.php");
    }

    $id = (int)$_POST["edit"];
    $lokasi = ucwords($_POST["name"]);
    $newid = (int)$_POST["id"];

    include "../../db.php";

    $oldsql = "SELECT id, location FROM location WHERE `location`.`id` = $id;";


    $resultold = $mysqli->query($oldsql);

    if ($resultold->num_rows > 0) {
    while ($row = $resultold->fetch_assoc()) {
        $oldid = $row["id"];
        $oldloc = $row["location"];
    }
    // echo "</table>";
    } else {
    }
    
    
    
    if (empty($newid)) {
        $newid = $oldid;
    } 
    if (empty($lokasi)) {
        $lokasi = $oldloc;
    }

    $sql = "UPDATE `location` SET `id` = '$newid', `location` = '$lokasi' WHERE `location`.`id` = $id;";
    if ($mysqli->query($sql) === true) {
        header("location:changemap.php");
    } else {
    }

    $mysqli->close();

?>