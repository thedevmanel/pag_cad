<?php
include_once "conexao.php";

$botao = $_POST['enviar'];

if ($botao == 'cadastrar') {

    $id = $_POST['id'];
    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = md5($senha);
    $senha = md5($senha);
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_inicio = $_POST['data_inicio'];
    $endereco = $_POST['endereco'];
    $departamento = $_POST['empresa'];
    $funcao = $_POST['funcao'];
    $funcao_nivel = $_POST['nivel_funcao'];
    $remuneracao = $_POST['remuneracao'];
    $situacao = $_POST['situacao'];
    $nivel_atual = $_POST['nivel_atual'];
    $fonte = implode(", ", $_POST['fonte']);

    if ($remuneracao == null) {
        $remuneracao = "Não definido";
    } else {
    }

    if ($nivel_atual == null) {
        $nivel_atual = "Não definido";
    }

    if ($situacao == 'inativo') {
        $data_termino = $_POST['data_termino'];
    } else {
        $data_termino = "Em Atividade...";
    }

    $insert_data = "INSERT INTO pessoas VALUES ('$id','$nome','$email','$senha','$telefone','$cpf','$data_nascimento','$data_inicio','$endereco',
        '$departamento','$funcao','$funcao_nivel','$remuneracao','$situacao','$data_termino','$nivel_atual','$fonte')";

    if (mysqli_query($conn, $insert_data)) {
    } else {
        echo "Error" . $insert_data, "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);


} else if ($botao == 'logar') {
} else if ($botao == 'editar') {
} else if ($botao == 'editado') {
} 
/*
DADOS SQL

CREATE TABLE pessoas (
id VarChar(13) PRIMARY KEY NOT Null,
nome VarChar(100) UNIQUE, 
email VarChar(150),
senha VarChar (100),
telefone Char(15),
cpf Char(14),
data_nascimento Char(10),
data_inicio Char(10),
endereco VarChar(100),
funcao VarChar(8),
funcao_nivel VarChar(30),
remuneracao VarChar(50) DEFAULT 'Não Definido',
situação VarChar(7),
data_termino VarChar(15) DEFAULT 'Em Atividade...',
nivel_atual VarChar(30) DEFAULT 'Não definido',
fonte VarChar(70)
)DEFAULT Charset = UTF8;
*/

// Todos os direitos estão reservados para Emanuel Zanoti Rabello © 2023 
