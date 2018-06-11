<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="YourTime">
		<link rel="icon" href="imagens/favicon.ico">

		<title>Cadastra Usuário</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
	</head>

	<body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="cadastrar_usuario.php">YourTime</a>
			</div>
		</div>
    </nav>
	
	<div class="container theme-showcase" role="main">
		<div class="page-header">
			<h1>Cadastrar Usuário</h1>
		</div>
		<div class="row">			
            <div class="col-md-12 col-xs-12">
             	<table class="table">
               		<label for="Nome">Nome *</label>
                	<input class="form-control" id="nome_usuario" maxlenght="255" name="nome_usuario" type="text" placeholder="Digite seu nome">
                </table>
			</div>
			<div class="col-md-12 col-xs-12">
				<table class="table">
				    <label for="Cidade">E-mail *</label>
	                <input class="form-control" id="email_usuario" maxlenght="255" name="email_usuario" type="text" placeholder="Digite seu E-mail">
                </table>
            </div>
            <div class="col-md-12 col-xs-12">
				<table class="table">
				    <label for="Telefone">Senha *</label>
	                <input class="form-control" id="senha_usuario" maxlenght="255" name="senha_usuario" type="text" placeholder="Castrar senha">
                </table>
            </div>
            <div class="col-md-12 col-xs-12">
				<table class="table">
				    <label for="Status">Escolha o perfil *</label><br>
	                <form>
						<input type="radio" name="status" value="ativado"> Administrador<br>
						<input type="radio" name="status" value="desativado"> Usuário
					</form>
                </table>
            </div>
            <div class="col-md-5 col-xs-12">
				<button type="button" class="btn btn-warning btn-md" id="salvar">Salvar</button>
				<button type="button" class="btn btn-danger btn-md" id="cancelar">Cancelar</button> 
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

