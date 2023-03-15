<?php

$server = $_ENV['SERVER'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$data_base = $_ENV['URL_BANCO'];
$query = true;

$conn = mysqli_connect($server, $username, $password, $data_base);
mysqli_set_charset($conn, "utf8mb4");

if (!$conn) {
    die("Problema no server" . mysqli_connect_error());
}

// Todos os direitos estão reservados para Emanuel Zanoti Rabello © 2023 