<?php
include "conexao.php";

$botao = $_REQUEST['enviar'];

if ($botao == 'logar') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = md5($senha);
    $senha = md5($senha);

    $gatilho = true;

    $query_select = "SELECT * FROM `pessoas` WHERE `email` = '$email' AND `senha` = '$senha'";
    $select = mysqli_query($conn, $query_select);

    if (($select) && ($select->num_rows != 0)) {
        while ($rows = mysqli_fetch_array($select)) {
            $detect_email = $rows['email'];
            $detect_senha = $rows['senha'];

            if (($detect_email == $email) && ($detect_senha == $senha)) {
                $gatilho = false;
                $id = $rows['id'];
                $nome = $rows['nome'];
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
} else if ($botao == "editar") {
} else if ($botao == 'editado') {
} else if ($botao == 'cadastrar') {
} else if ($botao == 'nada'){
}

mysqli_close($conn);

$url = "http://localhost//pag_cad/logado.php?id=" . urlencode($id);

header('Location: '. $url);
