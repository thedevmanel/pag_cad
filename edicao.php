<?php

include "php/select_edicao.php";

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
			<img class="titulo" src="Imagens/Frontall-HR(branco).png" />
		</div>
	</div>
	<div class="container-edit">
		<div class="content-edit-1">
			<img src="Imagens/Wall_Post.svg" class="image-edit" alt="Uma pessoas do gênero feminino editando suas Informações" />

			<div class="content-edit-2">
				<form action="logado.php" class="forms" method="POST">
					<br />
					<h2> EDIÇÃO </h2> <br />
					<div class="container-edit-inputs">
						<div class="content-edit-3">
							<input type="text" name="id" id="id" class="hidden">

							<label for="nome" class="title-input"> nome: <span class="asterisco"> * </span> </label>
							<br /> <input type="text" name="nome" id="nome" class="inedition" autocomplete="off" value="<?php echo "$nome"; ?>" required placeholder="Digite seu nome" />
							<br /><br />
							<label for="email" class="title-input"> email: <span class="asterisco"> * </span> </label>
							<br /> <input type="email" name="email" id="email" class="inedition-big" autocomplete="off" value="<?php echo "$email"; ?>" required placeholder="nomeexemplo@frontallusa.com" />
							<br /><br />
							<label for="senha" class="title-input"> senha: </label>
							<br /> <input type="password" name="senha" id="senha" class="inedition-password" autocomplete="off" value="" placeholder="Senha não obrigatoria" />
							<br /><br />

							<label for="telefone" class="title-input"> telefone: <span class="asterisco"> * </span>
							</label>
							<br /> <input type="text" name="telefone" id="telefone" class="inedition" autocomplete="off" value="<?php echo "$telefone"; ?>" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" required placeholder="(99) 99999-9999" maxlength="15" />
							<br /><br />
							<label for="endereco" class="title-input"> endereço: <span class="asterisco"> * </span>
							</label>
							<br /> <input type="text" name="endereco" id="endereco" class="inedition-big" autocomplete="off" value="<?php echo "$endereco"; ?>" required placeholder="Digite seu Endereço" />
							<br /><br />
							<label for="empresa" class="title-input"> contrato: <span class="asterisco">*</span>
								<br /> <br />
							</label>
							<div class="cradio-edit">
								<input id="frontall" type="radio" name="empresa" value="Frontall" required />
								<label for="frontall" class="botao">
									<img src="Imagens/Logo-Frontall(colorido).png" alt="Frontall" class="image-choice-frontall" />
								</label>
								<input id="balance" type="radio" name="empresa" value="Balance" />
								<label for="balance" class="botao">
									<img src="Imagens/balance(logo).png" alt="Balance" class="image-choice-balance" />
								</label>
							</div>
							<div class="select-edit-frontall">
								<div id="botoes-escolha">
									<div id="container-select-frontall" class="container-edicao-select-frontall">
										<input type="text" id="new-select-input-frontall" name="funcao-frontall" placeholder="Selecione o Cargo" onfocus="selectFrontall(0)" onblur="selectFrontall(1)" />
										<div id="new-select-box-frontall">
											<div class="choice" id="choose1" onmousedown="choose(1)"> CEO </div>
											<div class="choice" id="choose2" onmousedown="choose(2)"> Executive VP </div>
											<div class="choice" id="choose3" onmousedown="choose(3)"> ADM/Finance </div>
											<div class="choice" id="choose4" onmousedown="choose(4)"> Recruitment </div>
											<div class="choice" id="choose5" onmousedown="choose(5)"> People and Culture </div>
											<div class="choice" id="choose6" onmousedown="choose(6)"> Marketing </div>
											<div class="choice" id="choose7" onmousedown="choose(7)"> Sales </div>
											<div class="choice" id="choose8" onmousedown="choose(8)"> Custumer Device </div>
											<div class="choice" id="choose9" onmousedown="choose(9)"> IT </div>
										</div>
									</div>
								</div>
								<div id="botoes-funcoes">
									<div id="conteiner-select-balance" class="container-edicao-select-balance">
										<input type="text" id="new-select-input-balance" name="funcao-balance" placeholder="Selecione o Cargo" onfocus="selectBalance(0)" onblur="selectBalance(1)" />
										<div id="new-select-box-balance">
											<div class="item" id="item1" onmousedown="options(1)"> Frontend </div>
											<div class="item" id="item2" onmousedown="options(2)"> Backend </div>
											<div class="item" id="item3" onmousedown="options(3)"> BA </div>
											<div class="item" id="item4" onmousedown="options(4)"> QA </div>
											<div class="item" id="item5" onmousedown="options(5)"> UI/UX </div>
										</div>
									</div>
								</div>
								<div class="cradio" id="radio-from-funcao">
								</div>

							</div>

							<div id="botoes-funcoes-edit">
							</div>

							<br /> <label for="fonte" class="title-input"> fonte: <span class="asterisco">*</span>
								<br /> <br />
							</label>
							<div class="cbox-edit">
								<?php
								if ($fonte == 'linkedin') {
									echo '<input id="linkedin" type="checkbox" class="checkbox-edit" name="fonte[]" value="linkedin" checked />
										<label for="linkedin" class="fontes-font"> linkedin </label>';
								} else {
									echo '<input id="linkedin" type="checkbox" class="checkbox-edit" name="fonte[]" value="linkedin" />
										<label for="linkedin" class="fontes-font"> linkedin </label>';
								}

								if ($fonte == 'indicação') {
									echo '<input id="indicacao" type="checkbox" class="checkbox-edit" name="fonte[]" value="indicação" checked />
										<label for="indicacao" class="fontes-font"> indicação </label>';
								} else {
									echo '<input id="indicacao" type="checkbox" class="checkbox-edit" name="fonte[]" value="indicação" />
										<label for="indicacao" class="fontes-font"> indicação </label>';
								}

								if ($fonte == 'divulga vagas') {
									echo '<input id="divulga vagas" type="checkbox" class="checkbox-edit" name="fonte[]" value="divulga vagas" checked />
										<label for="divulga vagas" class="fontes-font"> divulga vagas <br /> </label>';
								} else {
									echo '<input id="divulga vagas" type="checkbox" class="checkbox-edit" name="fonte[]" value="divulga vagas" />
									<label for="divulga vagas" class="fontes-font"> divulga vagas <br /> </label>';
								}

								if ($fonte == 'programathor') {
									echo '<input id="programathor" type="checkbox" class="checkbox-edit" name="fonte[]" value="programathor" checked />
									<label for="programathor" class="fontes-font"> programathor </label>';
								} else {
									echo '<input id="programathor" type="checkbox" class="checkbox-edit" name="fonte[]" value="programathor" />
									<label for="programathor" class="fontes-font"> programathor </label>';
								}

								if ($fonte == 'kenzie academy') {
									echo '<input id="kenzie academy" type="checkbox" class="checkbox-edit" name="fonte[]" value="kenzie academy" checked />
									<label for="kenzie academy" class="fontes-font"> kenzie academy </label>';
								} else {
									echo '<input id="kenzie academy" type="checkbox" class="checkbox-edit" name="fonte[]" value="kenzie academy" />
									<label for="kenzie academy" class="fontes-font"> kenzie academy </label>';
								}

								?>

							</div>
							<br />
						</div>

						<div class="content-edit-4">
							<label for="cpf" class="title-input"> cpf: <span class="asterisco"> * </span> </label>
							<br />
							<input type="text" name="cpf" id="cpf" class="inedition" autocomplete="off" value="<?php echo $cpf; ?>" required placeholder="000.000.000-00" maxlength="14" />
							<br /><br />

							<label for="data_nascimento" class="title-input"> data de nascimento: <span class="asterisco"> * </span> </label> <br />
							<input type="text" name="data_nascimento" id="data_nascimento" class="inedition" autocomplete="off" value="<?php echo $data_nascimento; ?>" required placeholder="dd/mm/aaaa" maxlength="10" />
							<br /> <br />

							<label for="data_inicio" class="title-input"> data de inicio: <span class="asterisco"> *
								</span> </label>
							<br /> <input type="text" name="data_inicio" id="data_inicio" class="inedition" autocomplete="off" value="<?php echo $data_inicio; ?>" required placeholder="dd/mm/aaaa" maxlength="10" />
							<br /><br />

							<label for="situacao" class="title-input"> situação: <span class="asterisco">*</span>
							</label>
							<br /> <br />
							<div class="cradio-edit">
								<?php
								if ($situacao == 'ativo' || $situacao == 'Ativo' || $situacao == 'ATIVO') {
									echo '<input id="ativo" type="radio" name="situacao" value="ativo" required checked />
									<label for="ativo" class="botao"> ativo </label>

                                        <input id="inativo" type="radio" name="situacao" value="inativo" />
                                        <label for="inativo" class="botao"> inativo </label>';
								} else if ($situacao == 'inativo' || $situacao == 'Inativo' || $situacao == 'INATIVO') {
									echo '<input id="ativo" type="radio" name="situacao" value="ativo" required />
                                        <label for="ativo" class="botao"> ativo </label>
                                        <input id="inativo" type="radio" name="situacao" value="inativo" checked />
                                        <label for="inativo" class="botao"> inativo </label>
                                        ';
								}

								?>
							</div> <br />

							<div id="termino-container"></div>

							<label for="Remuneração" class="title-input"> Remuneração: </label>
							<br /> <input type="text" name="remuneracao" id="Remuneração" class="inedition" autocomplete="off" value="Não Definido" placeholder="Nâo Necessário" />
							<br /><br />
							<label for="nivel_atual" class="title-input"> nível atual: </label>
							<br /> <input type="text" name="nivel_atual" id="nivel_atual" class="inedition" autocomplete="off" value="Não definido" placeholder="Não Necessário" />
							<br /><br />
						</div>
					</div>
			</div>
		</div>
		<button type="submit" class="submit-edit" name="enviar" value="editado" onclick="return validarSenha()"> enviar </button>
		</form>
	</div>
	<div class="footer">
		<div class="footer-info">
			<img class="footer-logo" src="Imagens/Frontall-Staffing(colorido).png" />
			<span>
				<p class="subtitle-footer">Frontall Staffing Agency</p>
				<p class="info-footer">1146 East Jersey St.Elizabeth, NJ</p>
				<p class="info-footer">Phone +1 908 258 3300</p>
			</span>
		</div>

		<div class="footer-icones">
			<h2 class="fonte-rede"> REDES </h2>
			<a href="https://instagram.com/frontall_usa/" target="_blank" rel="noopener noreferrer">
				<img class="logo-redes" src="Imagens/logoinsta(cinza).png" />
			</a>
			<a href="https://m.facebook.com/profile.php?id=100063876277619" target="_blank" rel="noopener noreferrer">
				<img class="logo-redes" src="Imagens/logoface(cinza).png" />
			</a>
			<a href="https://www.frontallusa.com/" target="_blank" rel="noopener noreferrer">
				<img class="logo-redes" src="Imagens/logo_redes.png">
			</a>
		</div>
	</div>
	<script src="js/scriptEdicaoFoto.js"></script>
	<script src="js/scriptDataTerminoEdit.js"></script>
	<script src="js/scriptFuncoesEdit.js"></script>
	<script src="js/scriptMascaraTelefone.js"></script>
	<script src="js/scriptMascaraCpf.js"></script>
	<script src="js/aparecerFuncoes.js"></script>
	<script src="js/scriptAparecerTermino.js"></script>
	<script src="js/scriptCheckbox.js"></script>
	<script src="js/scriptMascaraData.js"></script>
	<script>
		document.getElementById("id").value = "<?php echo $id; ?>";
	</script>
</body>

</html>
<?php
// if (($funcao == 'Frontend') || ($funcao == 'frontend')) {
// 	print '<input id="frontend" type="radio" name="funcao" value="frontend" checked required/>
//         <label for="frontend" class="botao"> Frontend </label>';
// } else {
// 	print '<input id="frontend" type="radio" name="funcao" value="frontend" required/>
//         <label for="frontend" class="botao"> Frontend </label>';
// }

// if (($funcao == 'Backend') || ($funcao == 'backend')) {
// 	print '<input id="backend" type="radio" name="funcao" value="backend" checked />
//         <label for="backend" class="botao"> Backend </label>';
// } else {
// 	print '<input id="backend" type="radio" name="funcao" value="backend" />
//         <label for="backend" class="botao"> Backend </label>';
// }

// if (($funcao == 'BA') || ($funcao == 'ba') || ($funcao == 'Ba')) {
// 	print '<input id="BA" type="radio" name="funcao" value="BA" checked/>
// 	<label for="BA" class="botao"> BA </label>';
// } else {
// 	print '<input id="BA" type="radio" name="funcao" value="BA" />
// 	<label for="BA" class="botao"> BA </label>';
// }

// if (($funcao == 'QA') || ($funcao == 'qa') || ($funcao == 'Qa')) {
// 	print '<input id="QA" type="radio" name="funcao" value="QA" checked/>
// 	<label for="QA" class="botao"> QA </label>';
// } else {
// 	print '<input id="QA" type="radio" name="funcao" value="QA" />
// 	<label for="QA" class="botao"> QA </label>';
// }

// if (($funcao == 'UI/UX') || ($funcao == 'ui/ux') || ($funcao == 'Ui/Ux')) {
// 	print '<input id="ui/ux" type="radio" name="funcao" value="ui/ux" checked/>
// 	<label for="ui/ux" class="botao"> ui/ux </label>';
// } else {
// 	print '<input id="ui/ux" type="radio" name="funcao" value="ui/ux" />
// 	<label for="ui/ux" class="botao"> ui/ux </label>';
// }

?>
<?php
// if ($funcao_nivel == "JR") {
// 	echo '<select class="nivel-funcoes-edit" name="nivel_funcao">
//         <label class="nivel-funcoes-edit">
//             <option class="nivel-funcoes-edit" selected> JR </option>
//             <option class="nivel-funcoes-edit" > MID </option>
//             <option class="nivel-funcoes-edit" > SR </option>
//         </label>
//     </select>';
// } else if ($funcao_nivel == "MID") {
// 	echo '<select class="nivel-funcoes-edit" name="nivel_funcao">
//         <label class="nivel-funcoes-edit">
//             <option class="nivel-funcoes-edit" > JR </option>
//             <option class="nivel-funcoes-edit" selected> MID </option>
//             <option class="nivel-funcoes-edit" > SR </option>
//         </label>
//     </select>';
// } else if ($funcao_nivel == "SR") {
// 	echo '<select class="nivel-funcoes-edit" name="nivel_funcao">
//         <label class="nivel-funcoes-edit">
//             <option class="nivel-funcoes-edit" > JR </option>
//             <option class="nivel-funcoes-edit" > MID </option>
//             <option class="nivel-funcoes-edit" selected> SR </option>
//         </label>
//     </select>';
// }
?>