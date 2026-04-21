<?php
session_start();
include "../../db.php";

if ($_SESSION['role'] != 1) {
    header("location:../../login.php");
}

// echo ucwords("Selamat Datang Admin Sekolah, " . $_SESSION['username']);
// echo "<br>";



$sql = "SELECT id, schoolname, class, subclass FROM data WHERE id=1";
$result = $mysqli->query($sql);



if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        for ($i = 1; $i <= $row["subclass"]; $i++) {
            $subclass = chr(64 + $i);
        }
        // echo $row["schoolname"] . "1-" . $row["class"] . " - " . "A-" . $subclass;
        // conver variable
        $schoolname = $row["schoolname"];
        $class = $row["class"];
    }
    // echo "</table>";
} else {
    echo "0 results";
}


$jummlahsubkelas = 26;
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

<body class="min-h-screen flex flex-col items-center justify-center bg-white"></body>
<h1 class="font-bold text-4xl">
    <?php echo ucwords("Selamat datang, " . $_SESSION['username']); ?>
</h1>
<div class="flex flex-row items-start">

    <!-- data -->
    <div class="w-120 flex flex-col items-center mt-5">
        <p class="font-medium text-[20pt]">Data Sebelumnya</p>
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>Nama Sekolah</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr>
                    <th><?php echo $schoolname; ?></th>
                    <td><?php echo "1-" . $class . " A-" . $subclass; ?></td>
                </tr>
            </tbody>
        </table>
        <p>MAP</p>
        <img src="../../assets/map/placeholder.webp" alt="">
    </div>

    <form action="change.php" method="post" class="w-170 flex flex-col items-center justify-center mt-5">
        <p class="font-medium text-[20pt]">Ubah Dengan</p>
        Nama Sekolah <input type="text" name="name" class="input w-full max-w-xs"><br>
        Kelas 1- <input type="number" name="class" min="1" max="99" class="input w-full max-w-xs"><br>

        <p>Kelas A-</p>
        <div class="w-full max-w-xs">
            <input type="range" min="1" max="<?php echo $jummlahsubkelas; ?>" value="1" class="range" step="1" name="subclass"/>
            <div class="flex justify-between px-2.5 mt-2 text-xs">
                <?php
                for ($i = 1; $i <= $jummlahsubkelas; $i++) {
                    $huruf = chr(64 + $i);
                    echo '<span>' . $huruf . '</span>';
                }
                ?>
            </div>
        </div>
            <?php
                if (isset($_GET["alert"])) {
                    $alert = htmlspecialchars($_GET['alert']);
                    if($alert == 'tooLong'){
                        echo'Data Terlalu Panjang!';
                    }   
                    if($alert == 'tooShort'){
                        echo'Data Terlalu Pendek!';
                    }                  
                    if($alert == 'notint'){
                        echo'Tipe Data Kelas\SubKelas Bukan Integer!';
                    }
                }   
            ?>
            <a href="./gantimap.php" class=" mt-15">Ubah Map</a>
            <input class="btn bg-cepusec text-white border-none text-xl text-shadow-md hover:bg-cepuhov shadow-none mt-1" type="submit">

    </form>



    <!-- end spacer -->
</div>
<!-- daisyUI -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>

</html>