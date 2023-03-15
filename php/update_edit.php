<?php
include "conexao.php";

$validar_edit = $_REQUEST['enviar'] ;

if ($validar_edit == 'editado') {
    $id = $_POST['id'];
    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_inicio = $_POST['data_inicio'];
    $endereco = $_POST['endereco'];
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

    if ($senha == null) {
        $update = "UPDATE `pessoas` SET `nome`='$nome',`email`='$email',`telefone`='$telefone',`cpf`='$cpf',`data_nascimento`='$data_nascimento',
        `data_inicio`='$data_inicio',`endereco`='$endereco',`funcao`='$funcao',`funcao_nivel`='$funcao_nivel',`remuneracao`='$remuneracao',`situação`='$situacao',
        `data_termino`='$data_termino',`nivel_atual`='$nivel_atual',`fonte`='$fonte' WHERE `id` = '$id'";

    } else {
        $senha = md5($senha);
        $senha = md5($senha);

        $update = "UPDATE `pessoas` SET `nome`='$nome',`email`='$email',`senha`='$senha',`telefone`='$telefone',`cpf`='$cpf',`data_nascimento`='$data_nascimento',
        `data_inicio`='$data_inicio',`endereco`='$endereco',`funcao`='$funcao',`funcao_nivel`='$funcao_nivel',`remuneracao`='$remuneracao',`situação`='$situacao',
        `data_termino`='$data_termino',`nivel_atual`='$nivel_atual',`fonte`='$fonte' WHERE `id` = '$id'";
        
    }


if (mysqli_query($conn, $update)) {
} else {
    echo "Error" . $update, "<br>" . mysqli_error($conn);
}

} else if ($validar_edit == 'editar') {
} else if ($validar_edit == 'logar') {
} else if ($validar_edit == 'cadastrar') {
} else if ($botao == 'nada'){
}
