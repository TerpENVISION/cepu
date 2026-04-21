<?php
    $name = ucwords($_POST["name"]);
    $class = (int)$_POST["class"];
    $subclass = (int)$_POST["subclass"];

    if (strlen($name) > 150) {
        header("location:index.php?alert=tooLong");
    } elseif (strlen($name) < 1) {
        header("location:index.php?alert=tooShort");
    } elseif (is_int($class) == false) {
        header("location:index.php?alert=notint");
    } elseif (is_int($subclass) == false) {
        header("location:index.php?alert=notint");
    } elseif ($class < 1) {
        header("location:index.php?alert=tooShort");
    } elseif ($subclass < 1) {
        header("location:index.php?alert=tooShort");
    } elseif ($class > 99) {
        header("location:index.php?alert=tooLong");
    } elseif ($subclass > 26) {
        header("location:index.php?alert=tooLong");
    } else {
        include "../../db.php";
    
        $sql = "UPDATE `data` SET `schoolname` = '$name', `class` = '$class', `subclass` = '$subclass' WHERE `data`.`id` = 1";
    
        if ($mysqli->query($sql) === true) {
            header("location:index.php?alert=sucess");
        } else {
            header("location:index.php?alert=error");
        }
    
        $mysqli->close();
    }



?>