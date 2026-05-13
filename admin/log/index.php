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
    <a href="./logout.php">Log Out</a>

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


    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- daisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- data -->
    <script>
        let lastCount = 0;
        let firstload = 1;
        const newReport = new Audio('../../assets/audio/notification.mp3');
        newReport.loop = false;

        function bully() {
            newReport.loop = true;
            newReport.play();
            Swal.fire({
                theme: 'material-ui-light',
                title: 'TERJADI BULLYING!',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonText: 'Tanggapi'

            }).then((button) => {
                if (button.isConfirmed) {
                    Swal.fire({
                        theme: 'material-ui-light',
                        title: 'SUKSEK',
                        icon: 'success'
                    });
                    newReport.loop = false;
                    newReport.pause();           // Pauses the playback
                    newReport.currentTime = 0;
                }
            });
        }


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

                        document.getElementById("tableRes").innerHTML = html;

                        if (data.length > lastCount) {
                            if (firstload === 1) {
                                firstload = 0;
                            } else {
                                bully()
                            }

                        }
                    lastCount = data.length;

                    });

                });
        }

        setInterval(loadData, 5000);

        loadData();
    </script>
</body>

</html>