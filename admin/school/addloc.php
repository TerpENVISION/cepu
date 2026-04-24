<!-- INSERT INTO `location` (`id`, `location`) VALUES ('2', 'lapangan\r\n'); -->

<?php
    session_start();

    if ($_SESSION['role'] != 1) {
        header("location:../../login.php");
    }

    $Lokasi = ucwords($_POST["name"]);
    $id = (int)$_POST["id"];

    include "../../db.php";

    $sql = "INSERT INTO location (id, location)
    VALUES ('$id', '$Lokasi')";
    
    if ($mysqli->query($sql) === true) {
        header("location:changemap.php");
    } else {
    }
    
    $mysqli->close();


    

?>