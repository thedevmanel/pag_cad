<?php

use LDAP\Result;

include_once "conexao.php";

$result_user = "SELECT * FROM usuarios ORDER BY id DESC";

$answer_user = mysqli_query ($conn, $result_user);

if (($answer_user ) && ($answer_user -> num_rows !=0)) {
    while ($row_user =  mysqli_fetch_assoc($answer_user)) {
        echo $row_user['nome'] . "<br>" . $row_user['email'] . "<br><br>";
    }
}else {
    echo "Nenhume Usuário encontrado";
}   

?>