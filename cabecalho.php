<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?php print $cabecalho_title; ?></title>
		<?php print @$cabecalho_css; ?>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
	</head>
	<body>
		<header class="container">
			<h1>		
				<a href="index.php">
					<img src="img/logo.png" alt="Mirror Fashion">	
				</a>
			</h1>

			<p class="sacola">
				Nenhum item na sacola de compras
			</p>

			<nav class="menu-opcoes">
				<ul>
					<li><a href="#">Sua Conta</a></li>
					<li><a href="#">Lista de Desejos</a></li>
					<li><a href="#">Cartão Fidelidade</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="#">Ajuda</a></li>
				</ul>
			</nav>
		</header>