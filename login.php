<!DOCTYPE html>
<html>

<head>
	<title> Pagina de login </title>

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
	<div class="conteiner-log">
		<!-- CAIXA PRINCIPAL -->
		<div class="content-log-1">
			<img src="Imagens/login.svg" class="image-login" alt="" />
			<div class="content-log-2">
				<form class="forms" action="php/select_logado.php" method="POST" autocomplete="off">
					<br />
					<h2> login </h2> <br>
					
					<label for="email" class="tudo">
						e-mail: <span class="asterisco">*</span><br />
						<br class="buraco" /></label>
					<input type="email" name="email" id="email" placeholder="nomeexemplo@gmail.com" required autocomplete="off" class="inlogin" />
					<br />

					<label for="senha" class="tudo">
						senha: <span class="asterisco">*</span><br />
						<br class="buraco" />
					</label>
					<div class="caixa-mostrar-senha">
						<input type="password" name="senha" placeholder="Digite sua senha" id="senha"  class="inlogin" />
						<span class="mostrar-senha"> <input type="checkbox" onclick="mostrarOcultarSenha()" class="inlogin"> </span>
						<br />
					</div>

					<br /><input type="submit" class="botao-login" name="enviar" value="logar" /> <br />
					<p class="linklog">
						se não tiver um cadastro
						<a class="log" href="cadastro.php"> clique aqui </a>
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

	<script src="js/scriptMostrarOcultarSenha.js"></script>
</body>

</html>