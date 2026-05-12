<?php
    require __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $Host = $_ENV['DB_HOST'];
    $Name = $_ENV['DB'];
    $Username = $_ENV['DB_USER'];
    $Password = $_ENV['DB_PASS'];

    $mysqli = mysqli_connect($Host, $Username, $Password, $Name); 
?>