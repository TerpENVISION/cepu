<?php

    $name = ucwords($_POST["name"]);
    $class = ($_POST["class"]);
    $subclass = ($_POST["subclass"]);
    $lokasi = ($_POST["location"]);
    $clientdata = $_SERVER['HTTP_USER_AGENT'];
    // $clientip = $_SERVER['REMOTE_ADDR'];
    $ipinfo = file_get_contents("https://ipinfo.io/json");
    $ipraw = json_decode($ipinfo, true);

    $clientip = $ipraw["ip"] . " " . $ipraw["city"] . " " . $ipraw["region"] . " " . $ipraw["loc"] . " " . $ipraw["org"] . " " . $ipraw["timezone"];



    // echo $name .' '. $class .' '. $subclass .' '. $lokasi .' '. $clientip['ip'] .' '. $clientdata;
    
    include "db.php";

    $sql = "INSERT INTO `log` (`id`, `datetime`, `name`, `class1`, `class2`, `location`, `ip`, `browser`) VALUES (NULL, CURRENT_TIMESTAMP, '$name', '$class', '$subclass', '$lokasi', '$clientip', '$clientdata')";
    
    if ($mysqli->query($sql) === true) {
        header("location:/");
    } else {
    }
    
    $mysqli->close();



?>