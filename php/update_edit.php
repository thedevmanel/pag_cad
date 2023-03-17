<?php
include "conexao.php";

$id = $_POST['id'];
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$data_inicio = $_POST['data_inicio'];
$endereco = $_POST['endereco'];
$empresa = $_POST['empresa'];
if ($empresa == 'Frontall') {
    $funcao = $_POST['funcao-frontall'];
} else {
    $funcao = $_POST['funcao-balance'];
}
if ($empresa == "Frontall") {
    $funcao_nivel = "";
} else {
    $funcao_nivel = "(" . $_POST['nivel_funcao'] . ")";
}

$remuneracao = $_POST['remuneracao'];
$situacao = $_POST['situacao'];
$nivel_atual = $_POST['nivel_atual'];
$fonte = implode(", ", $_POST['fonte']);

if ($remuneracao == null) {
    $remuneracao = "Não definido";
} else {
}

if ($empresa == "Frontall") {
    $funcao_nivel = "";
} else {
    $funcao_nivel = "(" . $funcao_nivel . ")";
}

if ($nivel_atual == null) {
    $nivel_atual = "Não definido";
}

if ($situacao == 'inativo') {
    $data_termino = $_POST['data_termino'];
} else {
    $data_termino = "Em Atividade...";
}

if ($senha == null) {
    $update = "UPDATE $tabela SET `nome`='$nome',`email`='$email',`telefone`='$telefone',`cpf`='$cpf',`data_nascimento`='$data_nascimento',
        `data_inicio`='$data_inicio',`endereco`='$endereco',`empresa`='$empresa',`funcao`='$funcao',`funcao_nivel`='$funcao_nivel',`remuneracao`='$remuneracao',`situação`='$situacao',
        `data_termino`='$data_termino',`nivel_atual`='$nivel_atual',`fonte`='$fonte' WHERE `id` = '$id'";
} else {
    $senha = md5($senha);
    $senha = md5($senha);

    $update = "UPDATE $tabela SET `nome`='$nome',`email`='$email',`senha`='$senha',`telefone`='$telefone',`cpf`='$cpf',`data_nascimento`='$data_nascimento',
        `data_inicio`='$data_inicio',`endereco`='$endereco',`empresa`='$empresa',`funcao`='$funcao',`funcao_nivel`='$funcao_nivel',`remuneracao`='$remuneracao',`situação`='$situacao',
        `data_termino`='$data_termino',`nivel_atual`='$nivel_atual',`fonte`='$fonte' WHERE `id` = '$id'";
}


if (mysqli_query($conn, $update)) {
} else {
    echo "Error" . $update, "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo "essa é a senha " . $senha;

$url = "http://localhost//pag_cad/logado.php?id=" . urlencode($id);

header('Location: ' . $url);
