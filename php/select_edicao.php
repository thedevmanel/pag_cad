<?php

include "conexao.php";

$id = $_GET['id'];
$gatilho = true;

$query_select = "SELECT * FROM $tabela WHERE id = '$id'";
$select = mysqli_query($conn, $query_select);

if (($select) && ($select->num_rows != 0)) {
    while ($rows = mysqli_fetch_array($select)) {
        $detect_id = $rows['id'];

        if ($detect_id == $id) {
            $gatilho = false;
            $nome = $rows['nome'];
            $email = $rows['email'];
            $senha = $rows['senha'];
            $telefone = $rows['telefone'];
            $cpf = $rows['cpf'];
            $data_nascimento = $rows['data_nascimento'];
            $data_inicio = $rows['data_inicio'];
            $endereco = $rows['endereco'];
            $empresa = $rows['empresa'];
            $funcao = $rows['funcao'];
            $funcao_nivel = $rows['funcao_nivel'];
            $remuneracao = $rows['remuneracao'];
            $situacao = $rows['situação'];
            $data_termino = $rows['data_termino'];
            $nivel_atual = $rows['nivel_atual'];
            $fonte = $rows['fonte'];
        } else {
        }
    }
}

if ($gatilho == true) {
    echo "<script language='javascript' type='text/javascript'>
    alert('O login ou senha digitados está incorreto');window.location.href='http://localhost//pag_cad/login.php';
    </script>";
} else {
}

mysqli_close($conn);
