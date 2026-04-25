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
<body class="min-h-screen flex flex-col items-center justify-center bg-background">
    <?php 
        include './components/nav.php';
        include "./db.php";

        
        $sql = "SELECT id, schoolname, class, subclass, locationimg FROM data WHERE id=1";
        $loc = "SELECT id, location FROM location";
        $result = $mysqli->query($sql);
        $resultloc = $mysqli->query($loc);




        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                for ($i = 1; $i <= $row["subclass"]; $i++) {
                    $subclass = chr(64 + $i);
                }
                // echo $row["schoolname"] . "1-" . $row["class"] . " - " . "A-" . $subclass;
                // conver variable
                $schoolname = $row["schoolname"];
                $class = $row["class"];
                $subclassint = $row["subclass"];
                $locationimg = $row["locationimg"];
            }
            // echo "</table>";
        } else {
            echo "0 results";
        }

        $jummlahhkelas = $class;
        $jummlahsubkelas = $subclassint;

    ?>

    <!-- LOGIN -->
    <div class="w-300px min-h-50vh flex flex-col items-center justify-center bg-white rounded-sm p-10 shadow-[10px_7px_13px_2px_rgba(0,_0,_0,_0.1)]">
        <h1 class="text-[24pt] font-bold"><?php echo $schoolname; ?></h1>
        <h1 class="text-[20pt] font-semibold mb-3">Lapor</h1>
        <form action="report.php" method="post" name="login" class="flex flex-col items-center gap-2 w-90 ">
            <p>Nama</p>
            <input type="text" placeholder="Ketik Disini" class="input" name="name"/>
            <p>Kelas</p>
            <div class="w-full max-w-xs">
                <input type="range" min="1" max="<?php echo $jummlahhkelas; ?>" value="1" class="range" step="1" name="class"/>
                <div class="flex justify-between px-2.5 mt-2 text-xs">
                    <?php
                        for ($x = 1; $x <= $jummlahhkelas; $x++) {
                            echo '<span>' . $x . '</span>';
                            }
                            ?>
                </div>
            </div>
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
            <p>Lokasi</p>
            <div class="w-full max-w-xs">
                <img src="<?php echo $locationimg; ?>" alt="map">
                
                <?php while($row = mysqli_fetch_assoc($resultloc)) { ?>
                        <input type="radio" name="location" value="<?= $row['id']; ?>"> <?php echo $row['id'], '. ', $row['location']?>
                <?php } ?>

            </div>
            <button class="btn bg-cepusec text-white border-none text-xl text-shadow-md hover:bg-cepuhov shadow-none mt-15" type="submit">Lapor</button>
        </form>
    </div>

    <!-- daisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
