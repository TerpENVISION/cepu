<?php
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

header("Refresh: 120; url=./");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cepu</title>

    <!-- tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- daisy UI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    <!-- tailwind custom -->
    <style type="text/tailwindcss">
        @theme {
            --color-cepuprim: #2446CC;
            --color-cepusec: #3657db;
            --color-cepuhov: #1d39ad;
            --color-background: #d9e5ff;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col items-center justify-center bg-background p-10">
<h1 class="font-bold text-4xl">
    <?php echo ucwords("Selamat datang, " . $_SESSION['username']); ?>
</h1>
<p class="font-medium text-[20pt]">Laporan</p>

<table class="table w-[900px] overflow-scroll max-h-[60vh]">
    <!-- head -->
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Waktu</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Lokasi</th>
            <th>Ip</th>
            <th>Perangkat</th>
        </tr>
    </thead>
    <tbody>
        <!-- row 1 -->
        <?php 
        while ($row = mysqli_fetch_assoc($result)) { 
            
            $locint = $row['location'];

            $locsql = "SELECT location FROM location WHERE id = $locint";
            $resultloc = $mysqli->query($locsql);


            $char = 1;
            $char = $row['class2'];
            $subclass = chr(64 + $char);
            
            while ($rowloc = mysqli_fetch_assoc($resultloc)) { 

        ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['datetime']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['class1'] . "-" . $subclass; ?></td>
                <td><?= $row['location']. ". " .$rowloc['location']; ?></td>
                <td><?= $row['ip']; ?></td>
                <td><?= $row['browser']; ?></td>
            </tr>
        <?php } }?>
    </tbody>
</table>


<!-- daisyUI -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>

</html>