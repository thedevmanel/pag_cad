<?php

// include "php/inserir_dados.php";

// // include "php/update_edit.php";

// include "php/select_logado.php";

include "php/verificar_id.php";


?>

<html lang="pt-br">

<head>
    <title> Pagina do Funcionario </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />
    <link rel="stylesheet" href="https://postimg.cc/gallery/0wThwTM">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" /> -->
    <link rel="shortcut icon" href="Imagens/Apenas-Logo(colorido).png" type="image/x-icon" />

</head>

<body>
    <div class="header">
        <!-- PRIMEIRA CAIXA -->
        <div class="imgtitulo">
            <img src="https://tinypic.host/images/2023/03/16/Frontall-HRbranco.png" alt="Frontall-HRbranco.png" class="titulo" />
        </div>

    </div>

    <div class="conteiner-logado">
        <div class="content-logado-1">
            
            <div class="content-logado-3">
                    <h2 class="title-content-logado">
                        <div class="title-logado"> informações do usuario </div>
                    </h2>
                    <div class="format-content-logado-3">
                    <br />
                    <div class="content-logado-2">
                        <span class="fonts-logado">
                            <?php if ($empresa == "Frontall") {
                                print '<img src="Imagens/Logo-Frontall(colorido).png" alt="Frontall" 
                        class="image-frontall-from-logado" />';
                            } else {
                                print '<img src="Imagens/balance(logo).png" alt="Frontall" 
                            class="image-balance-from-logado" />';
                            } ?>
                        </span> <br />
                        <div class="box-image-logado">
                            <img src="Imagens/galimg.png" alt="selecione uma imagem" id="format-image" />
                        </div> <br />
                        <span class="fonts-logado">
                            <span class="maiusculo">
                                <?php echo $nome; ?>
                            </span> <br />
                            <?php echo $telefone; ?>
                        </span> <br />
                        </span>
                    </div>
                    <div class="container-description-user">
                        <div class="content-description-user-1">
                            <p>
                                <span class="fonts-logado"> E-mail: </span> <br />
                                <?php echo $email; ?> <br /> <br />
                                <span class="fonts-logado"> CPF: </span><br />
                                <?php echo $cpf; ?> <br /><br />
                                <span class="fonts-logado"> Endereço: </span><br />
                                <?php print '<span class="text">' . $endereco . '</span>'; ?>
                                <br /><br />
                                <span class="fonts-logado"> Data de Nascimento: </span> <br />
                                <?php echo $data_nascimento; ?> <br /> <br />
                            </p>
                        </div>
                        <div class="content-description-user-2">
                            <p class="text">
                                <span class="fonts-logado"> Data de Inicio: </span><br />
                                <?php echo $data_inicio; ?> <br /><br />
                                <span class="fonts-logado"> Função: </span> <br />
                                <?php echo "$funcao$funcao_nivel"; ?> <br /> <br />
                                <span class="fonts-logado"> Situação: </span><br />
                                <?php echo $situacao; ?> <br /><br />
                                <?php
                                if ($situacao == "Inativo" || $situacao == "inativo") {
                                    print '<span class="fonts-logado"> Data Termino: </span><br /> ' . $data_termino . ' <br /><br />';
                                } else {
                                }
                                ?>

                            </p>
                        </div>
                        <div class="content-description-user-3">
                            <p class="text">
                                <span class="fonts-logado"> Remuneração: </span><br />
                                <?php echo "$remuneracao"; ?> <br /><br />
                                <span class="fonts-logado"> Nivel Atual: </span><br />
                                <?php echo "$nivel_atual"; ?> <br /><br />
                                <span class="fonts-logado"> Fonte: </span><br />
                                <?php echo $fonte; ?> <br /><br />

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-buttons-logado">
            <a href="login.php"> <button class='return-login'> voltar </button> </a>

            <form action="edicao.php" method="GET">
                <input type="submit" name="" class="botao-enviar-logado" value="editar">
                <input type="text" name="id" id="id" class="hidden">
            </form>

            <a> <button class='delete-user' onclick="mostrarMensagem()"> deletar </button> </a>

        </div>
        <form action="php/deletar_usuario" method="POST">
            <input type="text" name="id" id="id2" class="hidden">

            <div id="aparecer-mensagem-deletar"></div>
        </form>
    </div>

    </div>
    <div class="footer">
        <div class="footer-info">
            <img src="https://tinypic.host/images/2023/03/16/Frontall-Staffingcolorido.png" alt="Frontall-Staffingcolorido.png" class="footer-logo" />
            <span>
                <p class="subtitle-footer">Frontall Staffing Agency</p>
                <p class="info-footer">1146 East Jersey St.Elizabeth, NJ</p>
                <p class="info-footer">Phone +1 908 258 3300</p>
            </span>
        </div>

        <div class="footer-icones">
            <h2 class="fonte-rede">REDES</h2>
            <a href="https://instagram.com/frontall_usa/" target="_blank" rel="noopener noreferrer">
                <img src="https://tinypic.host/images/2023/03/16/logoinstacinza.png" alt="logoinstacinza.png" class="logo-redes" />
            </a>
            <a href="https://m.facebook.com/profile.php?id=100063876277619" target="_blank" rel="noopener noreferrer">
                <img src="https://tinypic.host/images/2023/03/16/logofacecinza.png" alt="logofacecinza.png" class="logo-redes" />
            </a>
            <a href="https://www.frontallusa.com/" target="_blank" rel="noopener noreferrer">
                <img src="https://tinypic.host/images/2023/03/16/logo_redes.png" alt="logo_redes.png" class="logo-redes" />
            </a>
        </div>
    </div>
    <script>
        document.getElementById("id").value = "<?php echo $id; ?>";
        document.getElementById("id2").value = "<?php echo $id; ?>";
    </script>
    <script src="js/scriptDeletarUsuario.js"></script>
</body>

</html>