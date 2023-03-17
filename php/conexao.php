<?php

include "variaveis.php";

$server = $local;
$username = $user;
$password = $real_password;
$db = $url_banco;

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Error to connect" . mysqli_connect_error($conn));
} else {
}
