    <?php 
        include './components/nav.php';
        include "./db.php";

        
        $sql = "SELECT id, schoolname FROM data WHERE id=1";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $schoolname = $row["schoolname"];
            }
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
<body class="min-h-screen flex flex-col items-center justify-center bg-white md:bg-background">
    <?php include './components/nav.php';?>

    <!-- LOGIN -->
    <div class="w-300px min-h-50vh flex flex-col items-center justify-center bg-white rounded-sm p-10 md:shadow-[10px_7px_13px_2px_rgba(0,_0,_0,_0.1)]">
        <h1 class="text-[24pt] font-bold"><?php echo $schoolname; ?></h1>
        <h1 class="text-[20pt] font-semibold mb-3">Login</h1>
        <form action="exlogin.php" method="post" class="flex flex-col items-center gap-2 w-90 ">		
            <p>Username</p>
            <input type="text" name="username" class="input">
            <p>Password</p>
            <input type="password" name="password" class="input">
            <?php
            if (isset($_GET["alert"])) {
                $alert = htmlspecialchars($_GET['alert']);
                if($alert == 'wrongdata'){
                    echo'Username Atau Password Salah!';
                }
            }   
            ?>
            <input type="submit" name="login" value="Log In" class="btn bg-cepusec text-white border-none text-xl text-shadow-md hover:bg-cepuhov shadow-none mt-15">
        </form>
    </div>

    <!-- daisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
