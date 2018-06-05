
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="YourTime">
		<link rel="icon" href="imagens/favicon.ico">

		<title>Administrativo</title>
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
				<a class="navbar-brand" href="administrativo.php">YourTime</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estabelecimentos<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="cadastrar.php">Cadastrar</a></li>
							<li><a href="consultar.php">Consultar</a></li>
						</ul>
					</li>
					<li><a href="agenda.php">Agenda</a></li>
					<li><a href="#">Emitir Relatório</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
    </nav>
	
	<div class="container theme-showcase" role="main">
		<div style="text-align: center;">
			<h1>YourTime</h1>
			<h3>Bem Vindo ao Sistema de Agendamento</h3>
		</div>
		<div class="page-header">
			<center>
			<img src="imagens/your_time.png" vspace="15px" hspace="10px" border="15px" " style="width:250; height:200px;">
			</center>
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

