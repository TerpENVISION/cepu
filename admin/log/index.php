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

<body class="min-h-screen flex flex-col items-center justify-center bg-white p-10">
<h1 class="font-bold text-4xl">
    <?php echo ucwords("Selamat datang, " . $_SESSION['username']); ?>
</h1>
<p class="font-medium text-[20pt]">Laporan</p>
<div role="alert" class="alert alert-error">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
  </svg>
  <span>Error! Task failed successfully.</span>
</div>

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
    <tbody id="tableRes">

    </tbody>
</table>


<!-- daisyUI -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!-- data -->
<script>
let lastCount = 0;
const newReport = new Audio('../../assets/audio/notification.mp3');




function loadData() {
    fetch('ajaxdata.php')
    .then(res => res.json())
    .then(data => {
        let html = '';
        
        data.forEach(row => {
            html += `
                <tr>
                    <td>${row.data.id}</td>
                    <td>${row.data.datetime}</td>
                    <td>${row.data.name}</td>
                    <td>${row.class}</td>
                    <td>${row.location}</td>
                    <td>${row.data.ip}</td>
                    <td>${row.data.browser}</td>
                    </tr>
                    
            `;

            function notification() {
                if (confirm("TERJADI BULLYING Di ${row.location} DILAPORKAN OLEH ${row.data.name}") == true) {
                    newReport.loop = false;
                } else {
                    notification();
                }
            }
        });

        document.getElementById("tableRes").innerHTML = html;

        if (data.length > lastCount) {
            newReport.loop = false;
            newReport.play();
            notification();
        }

        lastCount = data.length;
    });
}

setInterval(loadData, 5000);

loadData();
</script>
</body>

</html>