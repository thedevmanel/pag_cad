<?php $id = uniqid(); ?>

<!-- Versão 1.2 -->

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
	<div class="header"> <!-- PRIMEIRA CAIXA -->
		<div> <!-- IMAGEM DA CABEÇA -->
			<img class="titulo" src="Imagens/Frontall-HR(branco).png" />
		</div>
	</div>
	<div class="conteiner-cad-1"> 
		<!-- CAIXA PRINCIPAL -->
		<div class="content-cad-1"> 
			<img src="Imagens/join.svg" class="image-cadastro" alt="" />
			<div class="content-cad-2"> 
				<form class="forms" action="cadastro_2.php" method="GET" autocomplete="off">
					<br />
					<h2 class="cad">cadastro</h2>
					<br />
					<div class="imagem">
						<img src="Imagens/galimg.png" alt="selecione uma imagem" id="imgPhoto" />
					</div>
					<input type="file" name="flImage" id="flImage" accept="image/*" />

					<input type="text" name="id" id="id" class="hidden">
					<br />

					<label for="nome" class="tudo">
						nome: <span class="asterisco">*</span><br />
						<br class="buraco" />
					</label>
					<input id="nome" type="text" name="nome" placeholder="Digite seu nome" required autocomplete="off" class="incad" />
					<br />

					<label for="email" class="tudo">
						e-mail: <span class="asterisco">*</span><br />
						<br class="buraco" /></label>
					<input type="email" name="email" id="email" placeholder="nomeexemplo@frontallusa.com" required autocomplete="off" class="incad" />
					<br />

					<label for="senha" class="tudo">
						senha: <span class="asterisco">*</span><br />
						<br class="buraco" />
					</label>
					<div class="caixa-mostrar-senha">
						<input type="password" name="senha" placeholder="Digite sua senha" id="senha" required class="incad" />
						<span class="mostrar-senha">
							<input type="checkbox" onclick="mostrarOcultarSenha()" class="cad-view-password" />
						</span>
						<br />
					</div>

					<label for="confirmar senha" class="tudo">
						confirmar senha: <span class="asterisco">*</span><br />
						<br class="buraco" />
					</label>
					<div class="caixa-mostrar-confirmar">
						<input type="password" name="confirmar-senha" placeholder="Digite sua senha" id="confirmar-senha" required class="incad" />
						<span class="mostrar-senha">
							<input type="checkbox" onclick="mostrarOcultarConfirmarSenha()" class="cad-view-password" />
						</span>
						<br />
					</div>

					<label for="telefone" class="tudo">
						telefone: <span class="asterisco">*</span><br />
						<br class="buraco" />
					</label>
					<input type="text" id="phone" name="phone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" class="incad" autocomplete="off" placeholder="(99) 99999-9999" required maxlength="15" />

					<br /><input type="submit" name="enviar" value="continuar" onclick="return validarSenha()" />
					<br />
					<p class="linklog">
						Se ja tem um cadastro<a class="log" href="login.php"> efetuar login </a>
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

	<script src="js/scriptMascaraTelefone.js"></script>
	<script src="js/script.js"></script>
	<script src="js/scriptSenhasIdenticas.js"></script>
	<script>
		document.getElementById("id").value = "<?php echo $id; ?>";
	</script>
</body>

</html>