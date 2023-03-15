<?php

include "php/conexao.php";

$id = $_GET['id'];
$imagem = $_GET['flImage'];
$nome  = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$senha = md5($senha);
$senha = md5($senha);
$telefone = $_GET['phone'];

$select_query = "SELECT `email` FROM pessoas WHERE `email` = '$email'";
$select = mysqli_query($conn, $select_query);

if (($select) && ($select->num_rows != 0)) {
	while ($array = mysqli_fetch_array($select)) {
		$detect_email = $array['email'];

		if ($detect_email == $email) {
			echo "<script language='javascript' type='text/javascript'>
				alert('Esse login já existe');window.location.href='http://localhost//pag_cad/cadastro.php';</script>";
		}
	}
} else {
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html>

<head>
	<title>Pagina de Cadastro</title>

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
	<div class="conteiner-cad-2">
		<!-- CAIXA PRINCIPAL -->
		<div class="content-cad-1">
			<img src="Imagens/join.svg" class="image-cadastro" alt="">
			<div class="content-cad-2">
				<form class="forms" action="php/inserir_dados.php" method="POST" autocomplete="off">

					<br />
					<h2 class="cad">cadastro</h2>

					<input type="text" name="id" id="id" class="hidden">
					<input type="text" name="nome" id="nome" class="hidden">
					<input type="text" name="email" id="email" class="hidden">
					<input type="text" name="senha" id="senha" class="hidden">
					<input type="text" name="telefone" id="telefone" class="hidden">

					<br />

					<label for="cpf" class="tudo">
						cpf: <span class="asterisco">*</span><br />
						<br class="buraco" />
					</label>

					<input type="text" maxlength="14" autocomplete="off" id="cpf" name="cpf"
						placeholder="000.000.000-00" required class="incad" name="cpf" onkeypress="return apenasNumeros(event)" />
					<br />

					<label for="data_nascimento" class="tudo">
						data de nascimento: <span class="asterisco">*</span><br />
						<br class="buraco" /></label>
					<input type="text" name="data_nascimento" id="data_nascimento" required autocomplete="off"
						class="incad" placeholder="dd/mm/aaaa" maxlength="10" />
					<br />

					<label for="data_inicio" class="tudo">
						data de inicio: <span class="asterisco">*</span><br />
						<br class="buraco" /></label>
					<input type="text" name="data_inicio" id="data_inicio" required autocomplete="off" class="incad"
						placeholder="dd/mm/aaaa" maxlength="10" />
					<br />

					<label for="endereco" class="tudo">
						endereço: <span class="asterisco">*</span><br />
						<br class="buraco" />
					</label>
					<input id="endereco" type="text" name="endereco" placeholder="Indique seu endereço" required
						autocomplete="off" class="incad" />
					<br />

					<label for="funcao" class="tudo">
						contrato: <span class="asterisco">*</span><br />
						<br class="buraco" />
					</label>
					<div class="cradio">
						<input id="frontall" type="radio" name="empresa" value="Frontall" required />
						<label for="frontall" class="botao">
							<img src="Imagens/Logo-Frontall(colorido).png" alt="Frontall"
								class="image-choice-frontall" />
						</label>
						<input id="balance" type="radio" name="empresa" value="Balance" />
						<label for="balance" class="botao">
							<img src="Imagens/balance(logo).png" alt="Balance" class="image-choice-balance" />
						</label>

					</div>

					<div id="botoes-escolha">
						<div id="container-select-frontall">
							<input type="text" id="new-select-input-frontall" name="funcao-frontall"
								placeholder="Selecione o Cargo" onfocus="selectFrontall(0)" onblur="selectFrontall(1)" />
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
						<div id="conteiner-select-balance">
							<input type="text" id="new-select-input-balance" name="funcao-balance" placeholder="Selecione o Cargo"
								onfocus="selectBalance(0)" onblur="selectBalance(1)" />
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

					<label for="remuneracao" class="tudo">
						remuneração: <br />
						<br class="buraco" />
					</label>
					<input id="remuneracao" type="text" name="remuneracao" placeholder="Informe a remuneracao"
						autocomplete="off" class="incad" />
					<br />

					<label for="situacao" class="tudo">
						situação: <span class="asterisco">*</span><br />
						<br class="buraco" />
					</label>

					<div class="cradio">
						<input id="ativo" type="radio" name="situacao" value="ativo" required />
						<label for="ativo" class="botao"> ativo </label>
						<input id="inativo" type="radio" name="situacao" value="inativo" />
						<label for="inativo" class="botao"> inativo </label>
					</div>

					<div id="termino-container"></div>

					<label for="nivel_atual" class="tudo">
						nivel atual: <br />
						<br class="buraco" />
					</label>
					<input id="nivel_atual" type="text" name="nivel_atual" placeholder="Informe o nivel"
						autocomplete="off" class="incad" />
					<br />

					<label for="fonte" class="tudo">
						fonte: <span class="asterisco">*</span><br />
						<br />
					</label>
					<div class="cbox">
						<input id="linkedin" type="checkbox" class="cad" name="fonte[]" value="linkedin"
							required_once />
						<label for="linkedin" class="info-botao"> linkedin </label>

						<input id="indicacao" type="checkbox" class="cad" name="fonte[]" value="indicação" />
						<label for="indicacao" class="info-botao"> indicação </label>

						<input id="divulga_vagas" type="checkbox" class="cad" name="fonte[]" value="divulga vagas" />
						<label for="divulga_vagas" class="info-botao">
							divulga vagas
						</label>
						<br />

						<input id="programathor" type="checkbox" class="cad" name="fonte[]" value="programathor" />
						<label for="programathor" class="info-botao">
							programathor
						</label>

						<input id="kenzie_academy" type="checkbox" class="cad" name="fonte[]" value="kenzie academy" />
						<label for="kenzie_academy" class="info-botao">
							kenzie academy
						</label>
					</div>
					<br />

					<br /><input type="submit" name="enviar" value="cadastrar" /> <br />
					<p class="linklog">
						Se ja tem um cadastro
						<a class="log" href="login.php"> Log in </a>
					</p>
				</form>

			</div>
		</div>
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
			<h2 class="fonte-rede">REDES</h2>
			<a href="https://instagram.com/frontall_usa/" target="_blank" rel="noopener noreferrer">
				<img class="logo-redes" src="Imagens/logoinsta(cinza).png" />
			</a>
			<a href="https://m.facebook.com/profile.php?id=100063876277619" target="_blank" rel="noopener noreferrer">
				<img class="logo-redes" src="Imagens/logoface(cinza).png" />
			</a>
			<a href="https://www.frontallusa.com/" target="_blank" rel="noopener noreferrer">
				<img class="logo-redes" src="Imagens/logo_redes.png" />
			</a>
		</div>
	</div>
	<script src="js/aparecerFuncoes.js"></script>
	<script src="js/scriptMascaraCpf.js"></script>
	<script src="js/scriptAparecerTermino.js"></script>
	<script src="js/scriptCheckbox.js"></script>
	<script src="js/scriptMascaraData.js"></script>
	<script>
		document.getElementById("id").value = "<?php echo $id; ?>";
		document.getElementById("nome").value = "<?php echo $nome; ?>";
		document.getElementById("email").value = "<?php echo $email; ?>";
		document.getElementById("senha").value = "<?php echo $senha; ?>";
		document.getElementById("telefone").value = "<?php echo $telefone; ?>";
	</script>
</body>

</html> 