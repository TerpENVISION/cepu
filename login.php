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
	<form action="exlogin.php" method="post" class="flex flex-col items-center gap-2 w-90 ">		
        <p>Username</p>
		<input type="text" name="username" class="input">
        <p>Password</p>
		<input type="password" name="password" class="input">
		<input type="submit" name="login" value="Log In" class="btn bg-cepusec text-white border-none text-xl text-shadow-md hover:bg-cepuhov shadow-none mt-10">
	</form>
    </div>

    <!-- daisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
