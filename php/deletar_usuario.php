<?php

include "conexao.php";

$id = $_POST['id'];

$delete = "DELETE FROM $tabela WHERE `id` = '$id'";

if (mysqli_query($conn, $delete)) {
} else {
    echo "Error" . $insert_data, "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('location:http://localhost//pag_cad/login.php');
