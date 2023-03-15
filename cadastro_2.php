<?php

$server = "localhost";
$username = "root";
$password = "";
$data_base = "cadastro_frontall";

$conn = mysqli_connect($server, $username, $password, $data_base);

if (!$conn) {
	die("Problema no server" . mysqli_connect_error());
}

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
<style>
	#botoes-escolha {
		visibility: 1;
		transition: opacity 0.5s ease-out;
	}

	#botoes-escolha.hide {
		visibility: 0;
		transition: opacity 0.5s ease-out;
	}
</style>

<body onload="">
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
				<form class="forms" action="logado.php" method="POST" autocomplete="off">

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
						placeholder="000.000.000-00" required class="incad" name="cpf" />
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
						funcao: <span class="asterisco">*</span><br />
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

					<div id="botoes-escolha"></div>
					<div id="botoes-funcoes">
						<div id="conteiner-select">
							<input type="text" id="new-select-input" name="nivel_funcao" placeholder="Selecione nivel"
								onfocus="selectTab(0)" onblur="selectTab(1)" />
							<div id="new-select-box">
								<div class="item" id="item1" onmousedown="options(1)"> JR </div>
								<div class="item" id="item2" onmousedown="options(2)"> MID </div>
								<div class="item" id="item3" onmousedown="options(3)"> SR </div>
							</div>
						</div>
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
		function selectTab(p) {
			let box = document.getElementById('new-select-box')
			var parametros = ['block', 'none']
			box.style.display = parametros[p]

			const divSelect = document.getElementById("conteiner-select")
			var comprimento = ['110px', '50px']
			divSelect.style.height = comprimento[p]

		}

		function options(c) {
			var info = document.getElementById('item' + c).innerHTML
			document.getElementById('new-select-input').value = info
		}
	</script>
	<script>
		document.getElementById("id").value = "<?php echo $id; ?>";
		document.getElementById("nome").value = "<?php echo $nome; ?>";
		document.getElementById("email").value = "<?php echo $email; ?>";
		document.getElementById("senha").value = "<?php echo $senha; ?>";
		document.getElementById("telefone").value = "<?php echo $telefone; ?>";
	</script>
	<!--Todos os direitos estão reservados para Emanuel Zanoti Rabello © 2023  -->
</body>

</html>