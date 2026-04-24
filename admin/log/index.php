<?php
session_start();
if($_SESSION['role'] != 2){  
    header("location:../../login.php");
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
<body class="min-h-screen flex flex-col items-center justify-center bg-background"></body>

    <!-- daisyUI -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>