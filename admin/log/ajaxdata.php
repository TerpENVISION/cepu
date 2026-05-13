<?php

    session_start();
    if ($_SESSION['role'] != 2) {
        header("location:../../login.php");
    }

    include "../../db.php";

    $sql = "SELECT id, datetime, name, class1, class2, location, ip, browser FROM log ORDER BY datetime DESC;";
    $result = $mysqli->query($sql);


    $data = [];
    $response = [];

    while ($row = $result->fetch_assoc()) {
        $data = $row;

        $locint = $row['location'];

        $locsql = "SELECT location FROM location WHERE id = $locint";
        $resultloc = $mysqli->query($locsql);


        $char = 1;
        $char = $row['class2'];
        $subclass = chr(64 + $char);

        $rowloc = $resultloc->fetch_assoc();

        $resultlocation = $row['location']. ". " .$rowloc['location'];
        $resultclass = $row['class1'] . "-" . $subclass;;

        $response[] = [
            "data" => $data,
            "location" => $resultlocation,
            "class" => $resultclass
        ];
    }

    echo json_encode($response);


?>