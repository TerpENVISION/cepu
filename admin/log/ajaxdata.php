<?php
include "db.php";

$sql = "SELECT * FROM laporan ORDER BY id DESC";
$result = $mysqli->query($sql);

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

    session_start();
    if ($_SESSION['role'] != 2) {
        header("location:../../login.php");
    }

    include "../../db.php";

    $sql = "SELECT id, datetime, name, class1, class2, location, ip, browser FROM log";

    $result = $mysqli->query($sql);

    

    if ($result->num_rows > 0) {
} else {
    echo "0 results";
}
?>