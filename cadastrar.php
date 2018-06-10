
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
		<div class="page-header">
			<h1>Cadastrar Negócio</h1>
		</div>
		<div class="row">			
            <div class="col-md-12 col-xs-12">
             	<table class="table">
               		<label for="Nome">Nome *</label>
                	<input class="form-control" id="nome" maxlenght="255" name="nome" type="text" placeholder="Digite o nome do Estabelecimento">
                </table>
			</div>
			<div class="col-md-6 col-xs-12">
				<table class="table">
				    <label for="Cidade">Estado *</label>
	                <input class="form-control" id="estado" maxlenght="255" name="estado" type="text" placeholder="Digite o estado onde esta localizado o seu estabelecimento">
                </table>
            </div>
            <div class="col-md-6 col-xs-12">
				<table class="table">
				    <label for="Cidade">Cidade *</label>
	                <input class="form-control" id="cidade" maxlenght="255" name="cidade" type="text" placeholder="Digite a cidade onde esta localizado o seu estabelecimento">
                </table>
            </div>
            <div class="col-md-10 col-xs-12">
				<table class="table">
				    <label for="Rua">Rua *</label>
	                <input class="form-control" id="Rua" maxlenght="255" name="rua" type="text" placeholder="Digite a rua onde esta localizado o seu estabelecimento">
                </table>
            </div>
   			<div class="col-md-2 col-xs-12">
				<table class="table">
				    <label for="Endereço">Número *</label>
	                <input class="form-control" id="numero" maxlenght="255" name="numero" type="number" placeholder="Nº do estabelecimento">
                </table>
            </div>
            <div class="col-md-12 col-xs-12">
				<table class="table">
				    <label for="Telefone">Telefone *</label>
	                <input class="form-control" id="telefone" maxlenght="255" name=telefone" type="number" placeholder="Digite o telefone do Negócio">
                </table>
            </div>
            <div class="col-md-12 col-xs-12">
				<table class="table">
				    <label for="Status">Status *</label><br>
	                <form>
						<input type="radio" name="status" value="ativado"> O negócio está ativo<br>
						<input type="radio" name="status" value="desativado"> O negócio está desativado
					</form>
                </table>
            </div>
            <div class="col-md-12 col-xs-12">
				<table class="table">
				    <label for="Dia">Dia de funcionamento *</label><br>
					<div class="col-md-12 col-xs-12">
	                	<form>
							<input type="checkbox" name="dia" value="Segunda-feira"> Segunda-feira <br>
							<input type="checkbox" name="dia" value="Terça-feira"> Terça-feira <br>
							<input type="checkbox" name="dia" value="Quarta-feira"> Quarta-feira <br>
							<input type="checkbox" name="dia" value="Quinta-feira"> Quinta-feira <br>
							<input type="checkbox" name="dia" value="Sexta-feira"> Sexta-feira <br>
							<input type="checkbox" name="dia" value="Sábado"> Sábado <br>
							<input type="checkbox" name="dia" value="Domingo"> Domingo <br>
						</form>
					</div>
                </table>
            </div>
            <div class="col-md-12 col-xs-12">
				<table class="table">
				    <label for="Horário">Horário de funcionamento *</label><br>
				    <div class="col-md-2 col-xs-12">
	                	<form>
							<input type="checkbox" name="horario" value="00:00"> 00:00 <br>
							<input type="checkbox" name="horario" value="01:00"> 01:00 <br>
							<input type="checkbox" name="horario" value="02:00"> 02:00 <br>
							<input type="checkbox" name="horario" value="03:00"> 03:00 <br>
							<input type="checkbox" name="horario" value="04:00"> 04:00 <br>
						</form>
					</div>
				 	<div class="col-md-2 col-xs-12">
	                	<form>
							<input type="checkbox" name="horario" value="05:00"> 05:00 <br>
							<input type="checkbox" name="horario" value="06:00"> 06:00 <br>
							<input type="checkbox" name="horario" value="07:00"> 07:00 <br>
							<input type="checkbox" name="horario" value="08:00"> 08:00 <br>
							<input type="checkbox" name="horario" value="09:00"> 09:00 <br>
						</form>
					</div>
				    <div class="col-md-2 col-xs-12">
	                	<form>
							<input type="checkbox" name="horario" value="10:00"> 10:00 <br>
							<input type="checkbox" name="horario" value="11:00"> 11:00 <br>
							<input type="checkbox" name="horario" value="12:00"> 12:00 <br>
							<input type="checkbox" name="horario" value="13:00"> 13:00 <br>
							<input type="checkbox" name="horario" value="14:00"> 14:00 <br>
						</form>
					</div>
				 	<div class="col-md-2 col-xs-12">
	                	<form>
							<input type="checkbox" name="horario" value="15:00"> 15:00 <br>
							<input type="checkbox" name="horario" value="16:00"> 16:00 <br>
							<input type="checkbox" name="horario" value="17:00"> 17:00 <br>
							<input type="checkbox" name="horario" value="18:00"> 18:00 <br>
							<input type="checkbox" name="horario" value="19:00"> 19:00 <br>
						</form>
					</div>
				 	<div class="col-md-2 col-xs-12">
	                	<form>
							<input type="checkbox" name="horario" value="20:00"> 20:00 <br>
							<input type="checkbox" name="horario" value="21:00"> 21:00 <br>
							<input type="checkbox" name="horario" value="22:00"> 22:00 <br>
							<input type="checkbox" name="horario" value="23:00"> 23:00 <br>
						</form>
					</div>
				</table>
            </div>
            <div class="col-md-12 col-xs-12">
				<table class="table">
				    <label for="Imagem">Selecione uma imagem *</label> 
				    <label for="Definição"><small><i>(Melhor resolução: 800px X 400px)</i></small></label>
				    <input class="form-control" id="imagem" name="imagem" type="file">
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

