<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8">
		<title>Chechout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">

		<linK rel="stylesheet" href="css/bootstrap-flatly.css">
		<link rel="stylesheet" href="css/checkout.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#navbar-collapse-id">
						<!--<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>-->
						<span class="glyphicon glyphicon-align-justify"></span> 
				</button>
				<a class="navbar-brand" href="index.php"><img src="img/logo-rodape.png" alt="Mirror Fashion" height="50" ></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-id">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">	<span class="glyphicon glyphicon-home"></span></a></li>
					<li><a href="sobre.php"><span class="glyphicon glyphicon-question-sign"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> </a></li>
				</ul>
			</div>
		</nav>

		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
			</div>
			<p>
				Obrigado por comprar na Mirror Fashion!
				Preencha seus dados para efetivar a compra.
			</p>			
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-lg-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h2 class="panel-title">Sua compra</h2>
						</div>
						<div class="panel-body">
							<img src="img/produtos/foto1-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-reponsive hidden-xs">
							<dl>
								<dt>Cor</dt>
								<dd><?= $_POST['cor'] ?></dd>

								<dt>Tamanho</dt>
								<dd><?= $_POST['tamanho'] ?></dd>
								
								<dt>Nome</dt>
								<dd><?= $_POST['nome'] ?></dd>
								
								<dt>Preço</dt>
								<dd id="preco">R$ <?= $_POST['preco'] ?></dd>
							</dl>
							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div>
							<div class="form-group">
								<label for="total">Total</label>
								<output for="qt preco" id="total" class="form-control">
									<?= $_POST["preco"] ?>
								</output>
							</div>
						</div>
					</div>
				</div>

				<form class="col-sm-8 col-lg-9">
					<div class="row"> 
						<fieldset class="col-md-6">
							<legend>Dados pessoais</legend>

							<div class="form-group">
								<label for="nome">Nome Completo</label>
								<input type="text" class="form-control" id="nome" name="nome" autofocus required="true">
							</div>

							<!--
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="emal" name="email" placeholder="email@exemplo.com">
							</div>
							-->

							<div class="form-group">
								<label for="email">Email</label>

								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input type="email" class="form-control" id="email" name="email">
								</div>
							</div>
							<div class="form-group">
								<label for="cpf">CPF</label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required="true" data-mask="999.999.999-99">
							</div>

							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam" checked>
									Quero receber spam da Mirror Fashion
								</label>
							</div>
						</fieldset>
						<fieldset class="col-md-6">
							<legend>Cartão de crédito</legend>
							<div class="form-group">
								<label for="numero-cartao">Número - CVV</label>
								<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
							</div>

							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label>
								<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
									<option value="master">MasterCard</option>
									<option value="visa">VISA</option>
									<option value="amex">American Express</option>
								</select>
							</div>

							<div class="form-group">
								<label for="validade-cartao">Validade</label>
								<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
							</div>
						</fieldset>
					</div>
					<button type="submit" class="btn btn-primary btn-lg pull-right">
						<span class="glyphicon glyphicon-thumbs-up"></span>
						Confirmar Pedido
					</button>
				</form>
			</div>
		</div>	
		<script src="js/jquery.js"></script>
		<script src="js/inputmask-plugin.js"></script>
		<script src="js/total.js"></script>	
		<script src="js/bootstrap.js"></script>
		<script type="text/javascript">
			document.querySelector('form input').oninvalid = function(event) {
				// cancela comportamento pardão do navegador
				event.preventDefault();

				// outra forma de desabilitar  a validação, afetando o formulário inteiro, é colocando o atributo
				//novalidate na tag <form>.

				// verifica a valdidade e mostra o alert
				if(!this.validity.valid) {
					alert("Nome obrigatório!");
				}
			};

			document.querySelector('input[type=email]').oninvalid = function() {
				// remove mensagens de erro antigas
				this.setCustomValidity("");

				//executa novamente a validação
				if(!this.validity.valid) {
					// se inválido, coloca mensagem de erro
					this.setCustomValidity("Email inválido pela madrugada.");
				}
			}
		</script>
	</body>
</html>