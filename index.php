<?php
    require __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
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
        }
    </style>
</head>
<body>
    <?php include './components/nav.php';?>

    <!-- LOGIN -->
    <div class="w-screen min-h-screen flex items-center justify-center">
        <form action="login.php" method="post" name="login" class="flex flex-col items-center gap-2 w-90 ">
            <p>Nama</p>
            <input type="text" placeholder="Type here" class="input" />
            <p>Kelas</p>
            <div class="w-full max-w-xs">
                <input type="range" min="0" max="100" value="1" class="range" step="12.5" />
                <div class="flex justify-between px-2.5 mt-2 text-xs">
                    <span>A</span>
                    <span>B</span>
                    <span>C</span>
                    <span>D</span>
                    <span>E</span>
                    <span>F</span>
                    <span>G</span>
                    <span>H</span>
                    <span>I</span>
                </div>
            </div>
            <button class="btn bg-cepusec text-white border-none text-xl text-shadow-md hover:bg-cepuhov shadow-none mt-10" onclick="">Lapor</button>
        </form>
    </div>

    <!-- daisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
