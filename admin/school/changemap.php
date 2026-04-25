<?php
    session_start();

    if ($_SESSION['role'] != 1) {
        header("location:../../login.php");
    }

    include "../../db.php";

    // read database
    $sql = "SELECT id, location FROM location";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
    // while ($row = $result->fetch_assoc()) {
    // convert variable
    //     $id = $row["id"];
    //     $location = $row["location"];
    // }
    // echo "</table>";
} else {
    echo "0 results";
}

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
    <div class="w-120 flex flex-col items-center mt-5">
        <p class="font-medium text-[20pt]">Daftar Lokasi</p>
        <a href="./" class=" mb-7">Kembali</a> 
        <img src="../../assets/map/map.webp" alt="" style="max-height: 500px;">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Lokasi</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->

                <form method="post">
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['location']; ?></td>
                        <!-- <td><input type="checkbox" name="delete" value=<?= $row['id']; ?>></td> -->
                        <td><button type="submit" formaction="./deloc.php" name="delete" value="<?= $row['id']; ?>" style="cursor: pointer;">Hapus</button></td>
                        <td><input type="radio" name="edit" value="<?= $row['id']; ?>"></td>
                    </tr>
                    <?php } ?>

                    <tr>
                        <td></td>
                        <td>Tambah Lokasi</td>
                        <td></td>
                        <!-- <td><input type="submit" value="hapus"></td> -->
                        <td><input type="radio" name="edit" value="X"> Batal</td>
                    </tr>

                    <tr>
                        <td><input type="number" name="id" placeholder="ID" style="max-width: 40px;" max="99" min="1"></td>
                        <td><input type="text" name="name" placeholder="Nama Lokasi"></td>
                        <td><input type="submit" formaction="addloc.php" value="Tambah" style="cursor: pointer;"></td>
                        <td><input type="submit" formaction="chaloc.php" value="Ubah" style="cursor: pointer;"></td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>

        



    

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select webp to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <!-- daisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>